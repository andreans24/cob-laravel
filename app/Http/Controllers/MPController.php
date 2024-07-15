<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\View\View;
use Illuminate\Support\Facades\Session;
use App\Models\Post;

class MPController extends Controller
{
    public function upload(Request $request)
    {
        if ($request->hasFile('upload')) {

            $file = $request->upload;
            $newName = time() . "." . $file->getClientOriginalExtension();
            $file->move("images", $newName);
            $url = asset("images/$newName");
            return response()->json(['fileName' => $newName, 'uploaded' => 1, 'url' => $url]);
        }
    }
}
