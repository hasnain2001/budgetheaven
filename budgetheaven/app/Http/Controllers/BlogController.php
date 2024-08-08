<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Stores;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Support\Str;

class BlogController extends Controller
{


       public function blog_home()
    {
          $blogs = Blog::paginate(5);
    $chunks = Stores::latest()->limit(25)->get();

        return view('blog', compact('blogs', 'chunks'));
    }

    public function blogs() {
        $blogs = Blog::all();
        return view('admin.Blog.index', compact('blogs'));
    }


public function blog_show($title) {

    $decodedTitle = str_replace('-', ' ', $title);

    $blog = Blog::where('title', $decodedTitle)->firstOrFail();
     $chunks = Stores::latest()->limit(25)->get();


    return view('blog_details', compact('blog','chunks'));
}









    public function create() {
        return view('admin.Blog.create');
    }


   public function store(Request $request)
{
    // Validate request data
    $validatedData = $request->validate([
        'title' => 'required|string|max:255',
        'content' => 'required|string',
        'category_image' => 'required|image|mimes:jpeg,png,jpg,gif',
        'meta_title' => 'nullable|string|max:65',
        'meta_description' => 'nullable|string|max:155',
        'meta_keyword' => 'nullable|string|max:255',
    ]);

    // Handle file upload for category_image
    if ($request->hasFile('category_image')) {
        $image = $request->file('category_image');
        $imageName = time().'.'.$image->getClientOriginalExtension();
        $image->move(public_path('uploads'), $imageName);
        $imagePath = 'uploads/'.$imageName;
    } else {
        $imagePath = null;
    }

    // Create new Blog instance
    $blog = new Blog();
    $blog->title = $request->input('title');
    $blog->category_image = $imagePath;
    $blog->meta_title = $request->input('meta_title');
    $blog->meta_description = $request->input('meta_description');
    $blog->meta_keyword = $request->input('meta_keyword');

    // Process content from CKEditor
    $content = $request->input('content');

    // Load HTML content into DOMDocument
    $dom = new \DOMDocument();
    libxml_use_internal_errors(true);
    $dom->loadHTML('<?xml encoding="UTF-8">' . $content, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
    libxml_clear_errors();

    // Process images in the content
    $images = $dom->getElementsByTagName('img');
    foreach ($images as $img) {
        $image_64 = $img->getAttribute('src');
        if (strpos($image_64, 'data:image/') === 0) {
            $image_parts = explode(';', $image_64);
            $image_type_aux = explode('/', $image_parts[0]);
            $image_type = $image_type_aux[1];
            $image_base64 = base64_decode(explode(',', $image_parts[1])[1]);
            $imageName = Str::random(10) . '.' . $image_type;
            $path = public_path('uploads/') . $imageName;
            file_put_contents($path, $image_base64);

            // Update the src attribute in the image tag
            $img->setAttribute('src', asset('uploads/' . $imageName));
        }
    }

    // Save the updated content back to the blog
    $blog->content = $dom->saveHTML();
    $blog->save();

    // Flash success message and redirect back
    session()->flash('success', 'Blog created successfully.');
    return redirect()->back()->with('success', 'Blog created successfully.');
}


    public function edit($id)
    {
        $blog = Blog::findOrFail($id);
        return view('admin.Blog.edit', compact('blog'));
    }

public function update(Request $request, $id)
{

    $validatedData = $request->validate([
        'title' => 'required',
        'content' => 'required|string',
        'category_image' => 'image|mimes:jpeg,png,jpg,gif',
        'meta_title' => 'nullable|string|max:65',
        'meta_description' => 'nullable|string|max:155',
        'meta_keyword' => 'nullable|string|max:255',
    ]);


    $blog = Blog::findOrFail($id);


    if ($request->hasFile('category_image')) {
        $image = $request->file('category_image');
        $imageName = time().'.'.$image->getClientOriginalExtension();
        $image->move(public_path('uploads'), $imageName);
        $imagePath = 'uploads/'.$imageName;
        $blog->category_image = $imagePath;
    }


    $content = $request->input('content');



    $dom = new \DomDocument();


    libxml_use_internal_errors(true);


    $dom->loadHTML($content, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);


    $errors = libxml_get_errors();
    if (!empty($errors)) {

    }

    libxml_clear_errors();


    $blog->content = $dom->saveHTML();

    $blog->meta_title = $request->input('meta_title');
    $blog->meta_description = $request->input('meta_description');
    $blog->meta_keyword = $request->input('meta_keyword');
    $blog->save();
    return redirect()->back()->with('success', 'Blog updated successfully.');
}

public function destroy($id)
{

    $blog = Blog::findOrFail($id);

    $blog->delete();

    return redirect()->back()->with('success', 'Blog deleted successfully.');
}

    public function index()
    {
        $blogs = Blog::paginate(10);
        return view('admin.Blog', compact('blogs'));
    }
       public function deleteSelected(Request $request)
    {
        $selectedIds = $request->input('selected_blogs');

        if ($selectedIds) {

            Blog::whereIn('id', $selectedIds)->delete();

            return redirect()->back()->with('success', 'Selected blog entries deleted successfully.');
        } else {
            return redirect()->back()->with('error', 'No blog entries selected for deletion.');
        }
    }

public function bulkDelete(Request $request)
    {
        $selectedBlogs = $request->input('selected_blogs');

        if ($selectedBlogs) {
            Blog::whereIn('id', $selectedBlogs)->delete();
            return redirect()->back()->with('success', 'Selected blog entries deleted successfully.');
        }

       return redirect()->back()->with('error', 'No blog entries selected for deletion.');
    }


}
