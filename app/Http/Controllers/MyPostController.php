<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\View\View;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use App\Models\Post;
use App\Models\Category;
use \Cviebrock\EloquentSluggable\Services\SlugService;

class MyPostController extends Controller
{
    //nampilin form index
    public function index()
    {
        //nama_database
        $posts = Post::all();
        return view('mypost.index')->with('posts', $posts);
    }

    //nampilin form create
    public function create()
    {
        return view('mypost.create', [
            'categories' => Category::all()
        ]);
    }

    //create oke tanpa ckeditor
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'title' => 'required',
            'slug' => 'required|unique:posts',
            'category_id' => 'required',
            'image' => 'image|file|mimes:jpg,png',
            'body' => 'required',
        ]);

        $input = $request->all();

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = date('d-m-Y') . '.' . $image->getClientOriginalName();
            $path = public_path('/uploads/post');
            $image->move($path, $imageName);
            $input['image'] = $imageName;
        }

        $input['user_id'] = auth()->user()->id;
        $input['excerpt'] = Str::limit(strip_tags($request->body));
        $input['body'] = $request->body;

        Post::create($input);

        return redirect('/mypost')->with('success', 'Post success save!!');
    }

    public function upload(Request $request)
    {
        if ($request->hasFile('upload')) {
            $originName = $request->file('upload')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $fileName = $fileName . '_' . time() . '.' . $extension;

            $request->file('upload')->move(public_path('images'), $fileName);

            $CKEditorFuncNum = $request->input('CKEditorFuncNum');
            $url = asset('images/' . $fileName);
            $msg = 'Image uploaded successfully';
            $response = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";

            @header('Content-type: text/html; charset=utf-8');
            echo $response;
        }
    }


    //show oke
    public function show($id)
    {
        //nama_database
        $posts = Post::find($id);
        return view('mypost.show')->with('posts', $posts);
    }

    //Nampilin Form Edit oke
    public function edit(Post $post, $id)
    {
        $post = Post::findorfail($id);
        return view('mypost.edit', [
            'post' => $post,
            'categories' => Category::all()
        ])->with('post', $post);
    }

    //Proses Edit oke tanpa ckeditor
    public function update(Request $request, $id)
    {
        $post = Post::find($id);

        $input['title'] = ($request->title);
        $input['slug'] = ($request->slug);
        $input['category_id'] = ($request->category_id);
        $input['user_id'] = auth()->user()->id;
        $input['excerpt'] = Str::limit(strip_tags($request->body));
        $input['image'] = ($request->image);
        $input['body'] = ($request->body);

        if ($image = $request->file('image')) {
            $imageName = date('d-m-Y') . '.' . $image->getClientOriginalName();
            $path = public_path('/uploads/post');
            $image->move($path, $imageName);
            $input['image'] = $imageName;
        } else {
            unset($input['image']);
        }

        $post->update($input);

        return redirect('/mypost')->with('success', 'Post Sucess updated!!');
    }

    //DELETE OKE
    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();
        return redirect('/mypost')->with('success', 'Post has been deleted!!');
    }

    // public function checkSlug(Request $request)
    // {
    //     $slug = SlugService::createSlug(Post::class, 'slug', $request->title);
    //     return response()->json(['slug' => $slug]);
    // }

    // public function imgUpload(Request $request)
    // {
    //     $imgpath = $request->file('file')->store('upload', 'public');
    //     return response()->json(['location' => "/storage/$imgpath"]);

    //     // $mainImage = $request->file('file');
    //     // $fileName = time() . '.' . $mainImage->extension();
    //     // Image::make($mainImage)->save(public_path('/' . $fileName));

    //     // return json_encode(['location' => asset('s/' . $fileName)]);
    // }
}
