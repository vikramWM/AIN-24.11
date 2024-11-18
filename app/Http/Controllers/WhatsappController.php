<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Log;
use Exception;

class WhatsappController extends Controller
{
    public function whatsapp()
    {
        $response = $this->getWhatsappTemplates(); 
        $templates = $response['data'];
        return view('whatsapp.whatsapp', ['templates' => $templates]);
    }

    public function uploagImages(Request $request)
    {
        try {
            if (!$request->hasFile('image')) {
                return response()->json(['error' => 'No image file provided'], 400);
            }
        
            $file = $request->file('image');
            if (!$file->isValid()) {
                return response()->json(['error' => 'Invalid file upload'], 400);
            }
            $jwtToken = $this->loginWhatsapp();
            if (!$jwtToken) {
                return response()->json(['error' => 'Unable to authenticate with WhatsApp API'], 401);
            }
            $response = Http::withHeaders([
                'Authorization' => $jwtToken, 
                'Accept' => 'application/json',
            ])->attach(
                'file',                            
                $file->getPathname(),            
                $file->getClientOriginalName()      
            )->post('https://apis.rmlconnect.net/wba/media/v1/get-media-id'); 
        
            if ($response->successful()) {
                $jsonResponse = $response->json();
                return response()->json([
                    'message' => 'File uploaded successfully',
                    'data' => $jsonResponse
                ], 200);
            } else {
                \Log::error('File upload failed', [
                    'status' => $response->status(),
                    'response' => $response->body(),
                ]);
                return response()->json([
                    'error' => 'File upload failed',
                    'details' => $response->json() 
                ], $response->status());
            }
        } catch (\Exception $e) {
            \Log::error('Exception occurred during file upload', ['exception' => $e]);
            return response()->json(['error' => 'An unexpected error occurred'], 500);
        }
        
    }

    private function loginWhatsapp()
    {
        try {
            $response = Http::post('https://apis.rmlconnect.net/auth/v1/login/', [
                'username' => env('WHATSAPP_API_USERNAME', 'Warrgyiz'),
                'password' => env('WHATSAPP_API_PASSWORD', 'Warrg@rm99'),
            ]);

            if ($response->successful()) {
                $res = $response->json();
                return $res['JWTAUTH'] ?? null;
            }
            \Log::error('WhatsApp API login failed', [
                'status' => $response->status(),
                'response' => $response->body(),
            ]);

            return null;
        } catch (\Exception $e) {
            \Log::error('WhatsApp API login exception', ['exception' => $e]);
            return null;
        }
    }

    private function getWhatsappTemplates() 
    {
        try {
            $jwtToken = $this->loginWhatsapp();

            if (!$jwtToken) {
                \Log::error("Failed to retrieve JWT token.");
                return null;
            }
            $response = Http::withHeaders([
                'Accept' => 'application/json',
                'Authorization' =>  $jwtToken,
            ])->get('https://apis.rmlconnect.net/wba/templates');

            if ($response->successful()) {
                return $response->json();
            }

            \Log::error("Failed to fetch templates: " . $response->body());
            return null;

        } catch (\Exception $e) {
            \Log::error("Exception while fetching templates: " . $e->getMessage());
            return null;
        }
    }

 
    
    public function sendMessage(Request $request)
{
    // Gather inputs directly from the request
        $phone = '+919610092299';
        $templateName = 'api_testing';
        $langCode = 'en'; // Default to 'en_GB' if not provided
        $mediaId = '561226669625820';
        $fileName = 'pngaaa.com-687302.png';

    // Prepare API URL and JWT token
    $apiUrl = 'https://apis.rmlconnect.net/wba/v1/messages';
    $jwtToken = $this->loginWhatsapp(); // Function to retrieve JWT token

    // Build the complete payload
    $payload = [
        "phone" => $phone,
        "media" => [
            "type" => "media_template",
            "template_name" => $templateName,
            "lang_code" => $langCode,
            "header" => [
                [
                    "image" => [
                        "id" => $mediaId,
                        "file_name" => $fileName
                    ]
                ]
            ],
            "body" => [
                [
                    "text" => 'anjali'
                ]
            ]
        ]
    ];

    try {
        // Send the HTTP POST request
        $client = new \GuzzleHttp\Client();
        $response = $client->post($apiUrl, [
            'headers' => [
                'Authorization' => $jwtToken,
                'Content-Type'  => 'application/json',
            ],
            'json' => $payload
        ]);

        // Return the success response
        return response()->json(json_decode($response->getBody()->getContents()), 200);
    } catch (\GuzzleHttp\Exception\ClientException $e) {
        // Handle ClientException errors
        return response()->json([
            'error' => 'Failed to send message',
            'details' => json_decode($e->getResponse()->getBody()->getContents(), true),
            'status_code' => $e->getResponse()->getStatusCode(),
        ], 401);
    } catch (\Exception $e) {
        // Handle general errors
        return response()->json([
            'error' => 'Failed to send message',
            'details' => $e->getMessage(),
        ], 500);
    }
}

    
}

    





