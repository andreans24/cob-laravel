<?php

namespace App\Http\Controllers;

use App\Models\Employe;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\File;


class CobaController extends Controller
{
    public function index()
    {
        $employes = Employe::all(); //tambahkan untuk menampilkan data foreach
        return view('crud.index')->with('employes', $employes);
    }

    public function create()
    {
        return view('crud.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required', //ambil nama id
            'konten' => 'required', //ambil nama id
            'image' => 'required|image', //ambil nama id
        ]);

        $input['konten'] = (strip_tags($request->konten));

        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'uploads/crud/'; //arahfolder //untuk menyimpan dipublic tidak perlu slash di depan
            $imageName = date('Y-m-d') . "." . $image->getClientOriginalName(); //nama file
            $image->move($destinationPath, $imageName);
            $input['image'] = "$imageName";
        }

        Employe::create($input);

        return redirect()->route('employe.index')->with('success', 'sukses membuat Crud');
    }


    public function show(Employe $employe)
    {
    }

    public function destroy($id)
    {
        $employes = Employe::find($id);
        $employes->delete();

        return redirect('employe.index')->with('success', 'sukes menghapus');
    }
}
