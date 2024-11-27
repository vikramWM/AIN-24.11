<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Sample;
use App\Models\Blog;
use App\Models\Add;
use Illuminate\Support\Facades\Storage;
use App\Models\Order;
use App\Models\User;
use App\Models\FeedbackOrder;
use Carbon\Carbon;

use Illuminate\Support\Str;

class HomeController extends Controller
{
      public function dashboard(Request $request)
    {
        // chart-2 
        $selectedDate = $request->input('selectedDate', null);
    
        // If no date is selected, use current month and year
        if (!$selectedDate) {
            $selectedDate = date('Y-m'); // Default to current year and month
        }
        
        // Extract selected month and year from the selected date
        $currentMonth = date('m', strtotime($selectedDate));
        $currentYear = date('Y', strtotime($selectedDate));
        // $currentMonth = date('m');
        // $currentYear = date('Y');
        
        $totalOrderCount = Order::whereMonth('order_date', $currentMonth)
            ->whereYear('order_date', $currentYear)
            ->whereNotNull('admin_id')
            ->where('admin_id', '!=', 0)
            ->get()
            ->groupBy('wid');
        $totalOrderChartCount = Order::whereMonth('order_date', $currentMonth)
            ->whereYear('order_date', $currentYear)
            ->whereNotNull('admin_id')
            ->where('admin_id', '!=', 0)
            ->count();
        
        
        $userByWid = [];
        $othersOrder = 0; // Initialize a variable to keep track of orders where user name is null or empty
        
        foreach ($totalOrderCount as $wid => $orders) {
            // Get the user associated with this 'wid'
            $user = User::where('id', $wid)->first();
        
            // Check if user name is not empty or null
            if (!empty($user->name)) {
                // Store user details along with the orders
                $userByWid[] = [
                    'user' => $user->name,
                    'orders' => $orders->count(),
                ];
            } else {
                // Increment othersOrder count if user name is null or empty
                $othersOrder += $orders->count();
            }
        }
        
        // Include 'Others' order count if there are any orders with null or empty user names
        if ($othersOrder > 0) {
            $userByWid[] = [
                'user' => 'Not Assign',
                'orders' => $othersOrder,
            ];
        }
        
        // Include total orders count
        $userByWid[] = [
            'user' => 'Total Orders',
            'orders' => $totalOrderChartCount,
        ];
        // echo '<pre>'; print_r($userByWid); exit;              
        // chart-2 
        // chart-3
           
            $selectedDate2 = $request->input('selectedDate', null);
            
    
            // If no date is selected, use current month and year
            if (!$selectedDate2) {
                $selectedDate2 = date('Y-m'); // Default to current year and month
            }
            
            // Extract selected month and year from the selected date
            $currentMonth2 = date('m', strtotime($selectedDate2));
            $currentYear2 = date('Y', strtotime($selectedDate2));
            
            
            $totalOrderCount2 = Order::whereMonth('order_date', $currentMonth2)
                ->whereYear('order_date', $currentYear2)
                
                ->where('uid', '!=', 0)
                ->get()
                ->groupBy('writer_name');
            $totalOrderChartCount2 = Order::whereMonth('order_date', $currentMonth2)
                ->whereYear('order_date', $currentYear2)
               
                
                ->where('uid', '!=', 0)
               
                ->count();
            
            
            $userByWid2 = [];
            $othersOrder2 = 0; // Initialize a variable to keep track of orders where user name is null or empty
            
            foreach ($totalOrderCount2 as $writer_name => $orders) {
                // Get the user associated with this 'writer_name'
                $teamMembers = Order::where('writer_name', $writer_name)->first();
               
                // Check if user name is not empty or null
                if (!empty($teamMembers->writer_name)) {
                    // Store user details along with the orders
                    $userByWid2[] = [
                        'user' => $teamMembers->writer_name,
                        'orders' => $orders->count(),
                    ];
                } else {
                    // Increment othersOrder count if user name is null or empty
                    $othersOrder2 += $orders->count();
                }
            }
            
            // Include 'Others' order count if there are any orders with null or empty user names
            if ($othersOrder2 > 0) {
                $userByWid2[] = [
                    'user' => 'Not Assign',
                    'orders' => $othersOrder2,
                ];
            }
            
            // Include total orders count
            $userByWid2[] = [
                'user' => 'Total Orders',
                'orders' => $totalOrderChartCount2,
            ];
            // echo '<pre>'; print_r($userByWid2) ; exit;
        // chart-3 
        
    

        $totalOrderCount = Order::count();
        $notAssignOrderCount = Order::Where('admin_id', '8392')->where(function ($query)
            {
            $query->whereNotNull('writer_status')
                    ->orWhere('writer_status', '!=', '');
            })
            ->count();
    
        $inprogressOrder13 = Order::where('writer_status', 'In Progress')->count();
        $completeOrder13 = Order::where('writer_status', 'Completed')->count();
        $totalwritertl = Order::where('admin_id', '8392')->count();
    
        // Writer
        // dd(auth()->user()->id);
        $writerOrder = Order::where('wid', auth()->user()->id)->count();

        $writerNotAssignOrderCount = Order::
        Where('writer_status', '')
        ->where('wid', auth()->user()->id)
        ->count();
    
    
        // Subwriter
        $subWriterOrder = Order::where('swid', auth()->user()->id)->count();
    
        // Total User Count
        $totalUserCount = User::count();
    
        // Today's Order Count
        $todayOrdersCount = Order::where('uid' , '!=' , 0)->whereDate('created_at', Carbon::today())->count();
    
        // Feedback Count
        $feedbackCount = Order::where('status_issue', 'Issue Raised')->count();
    
        // Order Count for the Current Month
        $currentMonthOrdersCount = Order::whereMonth('created_at', Carbon::now()->month)->count();
    
        // Order by status
        $otherOrder = Order::where('projectstatus', 'Other')->count();
        $cancelledOrder = Order::where('projectstatus', 'Cancelled')->count();
        $pendingOrder = Order::where('projectstatus', 'Pending')->count();
        $holdWorkOrder = Order::where('projectstatus', 'Hold Work')->count();
        $inprogressOrder = Order::where('projectstatus', 'In Progress')->count();
    
        $userData = User::where('tl_id', auth()->user()->id)->get();
        $userData2 = User::where('role_id', 6)->where('flag', 0)->get();
        $data = ['Team' => $userData, 'writer' => $userData2];
    
        if (auth()->check()) {
            switch (auth()->user()->role_id) {
                case 1:
                    return view('dashboard', compact('userByWid2','userByWid','totalOrderCount', 'totalUserCount', 'todayOrdersCount', 'feedbackCount', 'otherOrder', 'cancelledOrder', 'pendingOrder', 'holdWorkOrder', 'inprogressOrder', 'currentMonthOrdersCount'));
                case 3:
                    return view('dashboard.QcTeam');
                case 4:
                    return view('dashboard.marketingTeam', compact('totalOrderCount', 'totalUserCount', 'todayOrdersCount', 'feedbackCount', 'otherOrder', 'cancelledOrder', 'pendingOrder', 'holdWorkOrder', 'inprogressOrder', 'currentMonthOrdersCount'));
                case 5:
                    return view('dashboard.projectTeam');
                case 6:
                    return view('dashboard.writer', compact('writerOrder', 'writerNotAssignOrderCount', 'data'));
                case 7:
                    return view('dashboard.subWriter', compact('subWriterOrder'));
                case 8:
                    return view('dashboard.team13', compact('totalwritertl', 'inprogressOrder13', 'completeOrder13', 'data', 'notAssignOrderCount', 'todayOrdersCount', 'feedbackCount', 'otherOrder', 'cancelledOrder', 'pendingOrder', 'holdWorkOrder', 'inprogressOrder', 'currentMonthOrdersCount'));
                case 9:
                    return view('dashboard.marketingTeam', compact('totalOrderCount', 'totalUserCount', 'todayOrdersCount', 'feedbackCount', 'otherOrder', 'cancelledOrder', 'pendingOrder', 'holdWorkOrder', 'inprogressOrder', 'currentMonthOrdersCount'));
                case 10:
                    return view('dashboard.marketingTeam', compact('totalOrderCount', 'totalUserCount', 'todayOrdersCount', 'feedbackCount', 'otherOrder', 'cancelledOrder', 'pendingOrder', 'holdWorkOrder', 'inprogressOrder', 'currentMonthOrdersCount'));
              
                default:
                    abort(403, 'Unauthorized action.');
            }
        } else {
            abort(403, 'Unauthorized action.');
        }
    }
    
    public function write_advertisement()
    {
        // Retrieve all advertisements from the database
        $advertisements = Add::all();

        // Pass the advertisements to the view
        return view('blog-sample.advertisement', compact('advertisements'));
    }
    public function advertisement_store(Request $request)
    {
        // Create a new instance of the Add model
        $add = new Add();

        // Set the created_by field to the name of the authenticated user
        $add->created_by = auth()->user()->name;

        if ($request->hasFile('photo')) {
            $uploadedFile = $request->file('photo');

            // Generate a unique filename based on the original file name
            $fileName = uniqid() . '_' . $uploadedFile->getClientOriginalName();

            // Define the destination path
            $destinationPath = public_path('assets/media/blogthumbnail');

            // Move the uploaded file to the destination path
            $uploadedFile->move($destinationPath, $fileName);

            // Update the user's photo field with the file path
            $add->Images = 'assets/media/blogthumbnail/' . $fileName;
        } else {
            // If no photo is uploaded, set a default value
            $add->Images = 'assets/media/avatars/blank.png';
        }

        // Save the advertisement
        $add->save();

        // Redirect back with success message
        return redirect()->back()->with('success', 'Add submitted successfully');
    }
    public function destroyAdvertisement($id)
    {
        // Logic to delete the blog entry
        $add = Add::find($id);
        $add->delete();

        // Redirect or respond as needed
        return redirect()->back()->with('success', 'entry deleted successfully');
    }

    public function blog(Request $request)
    {
        $blogs = Blog::where('type', 'blog')
             ->orderByDesc('id') // Ordering by 'dest' column in descending order
             ->paginate(6);
        
        $data['title'] = 'Assignment In Need- Assignment Writing Help Services Blogs';
        $data['description'] = 'Read insightful blogs on assignment writing help services at Assignment In Need. Discover tips, expert advice, and guidance to help you excel in your academic work.';
        $data['keyword'] = '';
        
        if ($request->has('page') ) 
        {
            $data['canonical'] = 'https://www.assignnmentinneed.com/blog?page='.$request->input('page');
        } else 
        {
            $data['canonical'] = 'https://www.assignnmentinneed.com/blog'; // Adjust this route name as per your routes file
        }
            
        return view('frontend.header.blog', compact('blogs','data'));
    }
    public function write_blog()
    {
        
        return view('blog-sample.blog');
    }
    public function blog_list(Request $request)
    {
        // Retrieve the filter parameters from the request
        $title = $request->input('title');
        $type = $request->input('type');
    
        // Initialize the query builder for the Blog model
        $query = Blog::query();
    
        // Apply the title filter if provided
        if ($title) {
            $query->where('tittle', 'like', '%' . $title . '%');
        }
    
        // Apply the type filter if provided
        if ($type) {
            $query->where('type', $type);
        }
    
        // Order the results by creation date and paginate
        $data['blog'] = $query->orderBy('created_at', 'desc')->paginate(20);
    
        // Pass the filtered blog list to the view
        return view("blog-sample.blog-list", compact('data'));
    }

    public function blogedit(Request $request , $id)
    {
        $data = [
            'blog' => Blog::find($id)
        ]; 
        // print_r($data['blog']); exit;      
 
        return view("blog-sample.blog-edit", compact('data'));
    }
    
    public function getBlogBySlug($slug)
    {
        // $data['blog'] = Blog::find($id);
       
        $data['blog'] = Blog::where('slug', $slug)->first();
        $data['recent_post'] = Blog::where('type', 'blog')->latest()->take(5)->get();

        // Check if the blog exists
        if (!$data['blog']) {
            abort(404); // Or handle the case where the blog with the given slug is not found
        }
     
        $data['title'] = $data['blog']->meta_title;
        $data['description'] = $data['blog']->meta_discribtion;
        $data['keyword'] = $data['blog']->meta_tag;
        $data['canonical'] = 'https://www.assignnmentinneed.com/blog/'.$data['blog']->slug;

        
       

                
        return view("frontend.header.blog-detail", compact('data'));
    }
    

    public function blog_store(Request $request)
    {
        if ($request->input('type') === "blog") {
            // Validate the request data
            $request->validate([
                'blogTitle' => 'required',
                'blogContent' => 'required',
            ]);
    
            // Check if the title already exists
            $existingBlog = Blog::where('tittle', $request->input('blogTitle'))->first();
            if ($existingBlog) {
                return redirect()->back()->with('error', 'Blog with this title already exists.');
            }
    
            // Generate a unique slug for the blog title
            $slug = Str::slug($request->input('blogTitle'), '-');
            $existingSlugCount = Blog::where('slug', $slug)->count();
            if ($existingSlugCount > 0) {
                $slug .= '-' . ($existingSlugCount + 1);
            }
    
            $blog = new Blog;
            $blogContent = $request['blogContent'];
            $images = [];
    
            // Extract and download images in <img> tags within the content
            if (strpos($blogContent, '<img') !== false) {
                preg_match_all('/<img[^>]+src="([^">]+)"/', $blogContent, $matches);
    
                foreach ($matches[1] as $imageUrl) {
                    $fileName = basename($imageUrl);
                    $imageContents = @file_get_contents($imageUrl);
    
                    if ($imageContents !== false) {
                        $destinationPath = base_path('assets/media/blogthumbnail');
                        if (!file_exists($destinationPath)) {
                            mkdir($destinationPath, 0755, true);
                        }
    
                        $fullPath = $destinationPath . '/' . $fileName;
                        file_put_contents($fullPath, $imageContents);
    
                        // Store relative path for later use
                        $images[] = 'assets/media/blogthumbnail/' . $fileName;
                    }
                }
            }
    
            // Set blog properties
            $blog->tittle = $request['blogTitle'];
            $blog->content = $blogContent;
            $blog->type = $request['type'];
            $blog->slug = $slug;
    
            // Handle main photo upload
            if ($request->hasFile('photo')) {
                $uploadedFile = $request->file('photo');
                $fileName = uniqid() . '_' . $uploadedFile->getClientOriginalName();
                $destinationPath = base_path('assets/media/blogthumbnail');
    
                if (!file_exists($destinationPath)) {
                    mkdir($destinationPath, 0755, true);
                }
    
                $uploadedFile->move($destinationPath, $fileName);
                $blog->Images = 'assets/media/blogthumbnail/' . $fileName;
            } else {
                // Set default image if no photo is uploaded
                $blog->Images = 'assets/media/avatars/blank.png';
            }
    
            // Save the blog entry
            $blog->save();
            return redirect()->back()->with('success', 'Blog submitted successfully');
        } 
    }


    public function blog_edit(Request $request, $id)
    {
        // Find the blog by ID
        $blog = Blog::find($id);
        if (!$blog) {
            return redirect()->back()->with('error', 'Blog not found');
        }
    
        $blogContent = $request->input('blogContent');
        $images = [];
    
        // Extract and download images from <img> tags in the content
        if (preg_match_all('/<img[^>]+src="([^">]+)"/', $blogContent, $matches)) {
            foreach ($matches[1] as $imageUrl) {
                $fileName = basename($imageUrl);
                $destinationPath = base_path('assets/media/blogthumbnail');
    
                try {
                    // Ensure directory exists
                    if (!file_exists($destinationPath)) {
                        mkdir($destinationPath, 0755, true);
                    }
    
                    // Download and save the image
                    $imageContents = file_get_contents($imageUrl);
                    $fullPath = $destinationPath . '/' . $fileName;
                    file_put_contents($fullPath, $imageContents);
    
                    // Store relative path for later use
                    $images[] = 'assets/media/blogthumbnail/' . $fileName;
                } catch (\Exception $e) {
                    // Log the error if image download or save fails
                    \Log::error('Failed to download or save image: ' . $e->getMessage());
                }
            }
        }
    
        // Update the blog attributes
        $blog->tittle = $request->input('blogTitle');
        $blog->slug = Str::slug($request->input('blogTitle'), '-');
        $blog->content = $blogContent;
    
        // Handle main photo upload if provided
        if ($request->hasFile('photo')) {
            $uploadedFile = $request->file('photo');
            $fileName = uniqid() . '_' . $uploadedFile->getClientOriginalName();
            $destinationPath = base_path('assets/media/blogthumbnail');
    
            // Ensure directory exists
            if (!file_exists($destinationPath)) {
                mkdir($destinationPath, 0755, true);
            }
    
            // Save the uploaded photo
            $uploadedFile->move($destinationPath, $fileName);
            $blog->Images = 'assets/media/blogthumbnail/' . $fileName;
        }
    
        // Save the updated blog entry
        $blog->save();
    
        return redirect()->back()->with('success', 'Blog updated successfully');
    }

    
    
    public function destroyBlog($id)
    {
        // Logic to delete the blog entry
        $blog = Blog::find($id);
        $blog->delete();

        // Redirect or respond as needed
        return redirect()->back()->with('success', 'Blog entry deleted successfully');
    }

    public function sample()
    {
        $samples = Blog::where('type', 'sample')->paginate(3);
        $data['title'] = 'Free Assignment and Homework and More Sample- Assignment In Need';
        $data['description'] = 'Free samples For Assignments, essays, research papers, homework, and dissertations on Assignment In Need. Support we provide to help you achieve academic success.';
        $data['keyword'] = '';
        $data['canonical']='https://www.assignnmentinneed.com/samples';
        return view('frontend/header/samples', compact('samples','data'));
        // return view('frontend/header/samples');
    }
    public function sample_store(Request $request)
    {
        if ($request->input('type') === "sample") {
           // Validate the request data
            $request->validate([
                'blogTitle' => 'required',
                'blogContent' => 'required',
            ]);

            // Check if the title already exists
            $existingBlog = Blog::where('tittle', $request->input('blogTitle'))->first();
            if ($existingBlog) {
                return redirect()->back()->with('error', 'Sample with this title already exists.');
            }

            // Generate slug
            $slug = Str::slug($request->input('blogTitle'), '-');

            // Check if the slug is unique
            $existingSlugCount = Blog::where('slug', $slug)->count();
            if ($existingSlugCount > 0) {
                // If the slug already exists, append a unique identifier
                $slug .= '-' . ($existingSlugCount + 1);
            }

            $blog = new Blog;
            $blogContent = $request['blogContent'];
            $images = [];

            // Check if the blog content contains any <img> tags
            if (strpos($blogContent, '<img') !== false) {
                // Use regular expression to extract image URLs from <img> tags
                preg_match_all('/<img[^>]+src="([^">]+)"/', $blogContent, $matches);

                // Iterate through each matched image URL
                foreach ($matches[1] as $image) {
                    // Extract image URL
                    $imageUrl = $image;

                    // Generate a unique filename based on the image URL
                    $fileName = basename($imageUrl); // Extracts the filename from the URL

                    // Download image from URL
                    $imageContents = file_get_contents($imageUrl);

                    // Check if image download was successful
                    if ($imageContents !== false) {
                        // Define the destination directory where the image will be saved
                        $destinationPath = 'assets/media/blogthumbnail';

                        // Save the image to the storage disk
                        $saved = public_path('assets/media/blogthumbnail');

                        // Check if image was successfully saved
                        if ($saved) {
                            // Construct the public URL for the saved image
                            $publicUrl = public_path('assets/media/blogthumbnail');

                            // Store the public URL for later use
                            $images[] = $publicUrl;
                        } else {
                            // Handle error if image could not be saved
                            // (e.g., log the error, display a message to the user)
                        }
                    } else {
                        // Handle error if image could not be downloaded
                        // (e.g., log the error, display a message to the user)
                    }
                }
            }
            $blog->tittle = $request['blogTitle'];
            $blog->content = $request['blogContent'];
            $blog->type = $request['type'];

            $blog->slug = Str::slug($request->input('blogTitle'), '-');        

            if ($request->hasFile('photo')) {
                $uploadedFile = $request->file('photo');

                // Generate a unique filename based on the original file name
                $fileName = uniqid() . '_' . $uploadedFile->getClientOriginalName();

                // Define the destination path
                $destinationPath = public_path('assets/media/blogthumbnail');

                // Move the uploaded file to the destination path
                $uploadedFile->move($destinationPath, $fileName);

                // Update the user's photo field with the file path
                $blog->Images = 'assets/media/blogthumbnail/' . $fileName;
            } else {
                // If no photo is uploaded, set a default value
                $blog->Images = 'assets/media/avatars/blank.png';
            }

            // echo '<pre>'; print_r($blog); exit;

            $blog->save();
            return redirect()->back()->with('success', 'Sample submitted successfully');

            
        } 
        
    }
    public function getSampleBySlug($slug)
    {
        // $data['blog'] = Blog::find($id);
        $data['blog'] = Blog::where('slug', $slug)->first();
        // Check if the blog exists
        if (!$data['blog']) {
            abort(404); // Or handle the case where the blog with the given slug is not found
        }
     
        $data['recent_post'] = Blog::where('type', 'sample')->latest()->take(5)->get();
        $data['title'] = $slug;
        $data['description'] = '';
        $data['keyword'] = '';
        

                
        return view("frontend.header.sample-detail", compact('data'));
    }
    public function create_sample()
    {
        
        return view('blog-sample.sample');
    }
    

  

    public function sample_list()
    {
        
        $data = [
            'blog' => Blog::where('type', 'sample')->orderBy('created_at', 'desc')->get(),
        ];        
       
        return view("blog-sample.sample-listt", compact('data'));
    }
    public function destroySample($id)
    {
        // Logic to delete the blog entry
        $blog = Blog::find($id);
        $blog->delete();

        // Redirect or respond as needed
        return redirect()->back()->with('success', 'Sample entry deleted successfully');
    }


    public function pricing()
    {
        $data['title'] = 'Affordable Prices For All Assignment Help 40% Off & Free CV- Assignment In Need';
        $data['description'] = 'Assignment In Need offers affordable prices for all assignment help services, ensuring that you get professional academic assistance without breaking the bank.';
        $data['keyword'] = '';
        return view("frontend.pricing", compact('data'));
    }
    // public function placeOrder()
    // {
    //     $data['title'] = 'Place Your Order for Assignment Help Easy & Secure at 40% off-Assignment In Need';
    //     $data['description'] = 'Easily place your order for top-quality assignment help with Assignment In Need. Enjoy a seamless, secure process and get expert assistance tailored to your needs. Start now!';
    //     $data['keyword'] = '';
    //     return view("frontend.place-order", compact('data'));
    // }
    
      public function thankyou()
    {
        return view('thankyou');
    }
}
