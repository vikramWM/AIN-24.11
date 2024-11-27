<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\CategoyType;
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
    $type = CategoyType::all();
    return view('sample.writesample' , compact('sampleCategory', 'type'));
    
}

public function storeService(Request $request)
{
    $validatedData = $request->validate([
        'category' => 'required|integer',
        'editorContent' => 'required|string',
        'title' => 'required|string',
        'type' => 'required|integer',
    ]);
    // dd( $validatedData);
    $validatedData['slug'] = Str::slug($validatedData['title'], '-');

    Sample::create([
        'category' => $validatedData['category'],
        'content' => $validatedData['editorContent'],
        'title' => $validatedData['title'],
        'type_id' => $validatedData['type'],
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

public function sample_listt(Request $request)
{
    // Retrieve the filter parameters from the request
    $title = $request->input('title');
    $type = $request->input('type');

    // Initialize the query builder for the Blog model
    $query = Sample::query();

    // Apply the title filter if provided
    if ($title) {
        $query->where('title', 'like', '%' . $title . '%');
    }

    // Apply the type filter if provided
    if ($type) {
        $query->where('type', $type);
    }

    // Order the results by creation date and paginate
    $data['sample'] = $query->orderBy('created_at', 'desc')->paginate(20);

    // Pass the filtered blog list to the view
    return view("blog-sample.sample-list", compact('data'));
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


// routing for sample by navneet

public function samplesShows (Request $request)
{
        // Retrieve the filter parameters from the request
        $title = $request->input('title');
        $category = $request->input('category');
    
        // Initialize the query builder for the Blog model
        $query = Sample::with('categotyData', 'type');
    
        // Apply the title filter if provided
        if ($title) {
            $query->where('title', 'like', '%' . $title . '%');
        }
    
        // Apply the type filter if provided
        // if ($category) {
        //     $query->where('category', $category);
        // }
        if (!empty($category)) {
            $query->whereHas('category', function ($q) use ($category) {
                $q->where('name', $category) // Filter by category ID
                  ->orWhere('name', 'like', '%' . $category . '%'); // Or by category name
            });
        }
       $data['samples'] = $query->get();

 
    // echo '<pre>'; print_r($data); exit;

    return view('sample.sample-list' , compact('data'));
}



 public function samplesUpades($id){
    $sampleCategory = SampleCategory::all();
    $type = CategoyType::all();
    $sample = Sample::find($id);

    // echo $sample ;

    return view('sample.writesample' , compact('sampleCategory', 'sample' , 'type'));
 }


 public function Sampleupdate(Request $req, $id)
 {
     // Validate the incoming request data
     $validatedData = $req->validate([
         'category' => 'required|integer',
         'editorContent' => 'required|string',
         'title' => 'required|string',
         'type' => 'required|integer',
     ]);
 
     // Generate a slug from the title
     $validatedData['slug'] = Str::slug($validatedData['title'], '-');
 
     // Find the record by ID and update it
     $sample = Sample::findOrFail($id);
     $sample->update([
         'category' => $validatedData['category'],
         'content' => $validatedData['editorContent'],
         'title' => $validatedData['title'],
         'type_id' => $validatedData['type'],
         'slug' => $validatedData['slug'],
     ]);
 
     // Redirect back with a success message
     return redirect('/samples')->with('success', 'Content updated successfully!');
 }


 public function destroySample($id)

 {
      
     $sample = Sample::find($id);
     $sample->delete();

      
     return redirect()->back()->with('success', 'Sample deleted successfully');
 }

 public function indexType(){

    $CategoryType = CategoyType::orderBy('id', 'desc')->get();
    // echo '<pre>'; print_r($CategoryType); exit;
    return view("sample.categorytype", compact('CategoryType'));
 }

 public function sampleTypeStore(Request $req)
 {
    
    $type =  new CategoyType();
    $type->name = $req->input('name');
    $type->save();
    return redirect()->back()->with('sucess', 'Sample Type Save Succesfully');
 }

 public function sampleTypeUpdate(Request $req ,$id )
 {
    $type =  CategoyType::find($id);
    $type->name = $req->input('name');
    $type->save();
    return redirect()->back()->with('sucess', 'Sample Type Updated Succesfully');
 }


  public function destroysampleType($id)

  {

    $type = CategoyType::find($id);
    $type->delete();
    return redirect()->back()->with('sucess', 'Sample Type deleted Succesfully');

  }



}

