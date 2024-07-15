<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\View\View;
use Illuminate\Support\Facades\Session;
use App\Models\Editor;



class editorController extends Controller
{

    public function index()
    {
        return view('ckeditor');
    }

    //save data input
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'title' => 'required',
            'slug' => 'required',
            'description' => 'required',
        ]);

        $input = $request->all();

        // $input['title'] = $request->title;
        // $input['slug'] = $request->slug;
        // $input['description'] = $request->description;

        Editor::create($input);

        return redirect('ckeditor')->with('success', 'Editor succes upload data and image');
    }

    // public function upload(Request $request)
    // {
    //     if ($request->hasFile('upload')) {

    //         $file = $request->upload;
    //         $newName = time() . "." . $file->getClientOriginalExtension();
    //         $file->move("images", $newName);
    //         $url = asset("images/$newName");
    //         return response()->json(['fileName' => $newName, 'uploaded' => 1, 'url' => $url]);
    //     }
    // }

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
}
