<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index', [
            'title' => 'Register',
            'active' => 'register'
        ]);
    }

    
    public function store(Request $request)
    {
        
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'username' => ['required', 'min:3', 'max:255', 'unique:users'],
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:6|max:255'
        ]);

        // $validatedData['password'] = bcrypt($validatedData['password']);  //<- ini adalah cara untuk enkripsi password (membuat password di database tidak terlihat) cara pertama
        $validatedData['password'] = Hash::make($validatedData['password']); //<- ini adalah cara untuk enkripsi password cara kedua
        
        User::create($validatedData);

        // $request->session()->flash('success', 'Registration Successfull! Please Login'); //<- ini cara pertama untuk menampilkan alert pada halaman login

        return redirect('/login')->with('success', 'Registration Successfull! Please Login'); //<- ini cara kedua untuk menampilkan alert pada halaman login
    }
}
