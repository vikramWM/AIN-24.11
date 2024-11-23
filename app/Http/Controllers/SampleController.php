<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Sample;
use Illuminate\Http\Request;
use App\Models\SampleCategory;
use Illuminate\Tests\Integration\Database\EloquentHasManyThroughTest\Category;
use Illuminate\Support\Str;
use Barryvdh\DomPDF\Facade\Pdf; // Ensure this package is installed and configured

class SampleController extends Controller
{
    public function index()
    {
        $sampleCategory = SampleCategory::all();
        return view('sample.sampleCategory' ,compact('sampleCategory'));
    }


    public function indexpage()
    {
        $categories = SampleCategory::withCount('sample')
            ->having('sample_count', '>', 0) 
            ->orderBy('name', 'asc') 
            ->get()
            ->groupBy(function ($category) {
                return strtoupper(substr($category->name, 0, 1)); // Group by first letter
            });;
    
        return view('sample.free-samples', compact('categories'));
    }

    public function categoryDeatails($title)
    {
        $category = SampleCategory::where('name', $title)->first();
        $categoryId = $category->id;
        $categoryName =  $category->name;
       
        $sample = Sample::with('category')->where('category' , $categoryId)->get();
        // echo '<pre>'; print_r($sample) ;exit;
        return view('sample.sampleCategorydetails', compact('sample' , 'categoryName'));
    }
    
    
    public function store(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:255',
    ]);

    try {
        SampleCategory::create(['name' => $request->name]);

        return redirect()->back()->with('success', 'Data submitted successfully!');
    } catch (\Exception $e) {
        \Log::error("Error submitting data: " . $e->getMessage());

            return redirect()->back()->with('error', 'An error occurred while submitting the data.');
    }
}
public function update(Request $request, $id)
{
    $request->validate([
        'name' => 'required|string|max:255',
    ]);

    try {
        $category = SampleCategory::findOrFail($id);
        $category->update(['name' => $request->name]);

        return redirect()->back()->with('success', 'Category updated successfully!');
    } catch (\Exception $e) {
        \Log::error("Error updating category: " . $e->getMessage());
        return redirect()->back()->with('error', 'An error occurred while updating the category.');
    }
}
public function destroy($id)
{
    try {
        $category = SampleCategory::findOrFail($id);
        $category->delete();

        return redirect()->back()->with('success', 'Category updated successfully!');
    } catch (\Exception $e) {
        \Log::error("Error deleting category: " . $e->getMessage());
        return redirect()->back()->with('error', 'An error occurred while deleting the category.');
    }
}

public function samplewrite()
{
    $sampleCategory = SampleCategory::all();
    return view('sample.writesample' , compact('sampleCategory'));
    
}

public function storeService(Request $request)
{
    $validatedData = $request->validate([
        'category' => 'required|integer',
        'editorContent' => 'required|string',
        'title' => 'required|string',
    ]);

    $validatedData['slug'] = Str::slug($validatedData['title'], '-');

    Sample::create([
        'category' => $validatedData['category'],
        'content' => $validatedData['editorContent'],
        'title' => $validatedData['title'],
        'slug' => $validatedData['slug'],
    ]);

    return redirect()->back()->with('success', 'Content saved successfully!');
}


public function sampleDeatails(Request $request , $title, $subject)
{

  $sample = Sample::where('slug', $subject)->latest('id')->first();
  $category = SampleCategory::where('name', $title)->first();
        $categoryId = $category->id;
        $categoryName =  $category->name;
       
  $samplesuggestion = Sample::with('category')->where('category' , $categoryId)->get();

  return view('sample.sampleDetails', compact('sample', 'samplesuggestion', 'categoryName'));
}

 



public function downloadSample($slug)
{
    // Fetch the Sample record based on slug
    $sample = Sample::where('slug', $slug)->firstOrFail();

    // Generate PDF with title and content
    $pdf = Pdf::loadView('pdf.sample', ['sample' => $sample]);

    // Return the PDF as a response that triggers an automatic download
    return response()->streamDownload(
        fn () => print($pdf->output()), // Stream the PDF content
        $sample->title . '.pdf',        // The filename of the downloaded file
        [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'attachment; filename="' . $sample->title . '.pdf"',
        ]
    );
}


}
