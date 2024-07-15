<?php

// use App\Models\User;
// use App\Models\Category;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\CobaController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\MyPostController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\editorController;
use App\Http\Controllers\MPController;





Route::get('/', function () {
    return view('Home', [
        "title" => "Home",
        "active" => 'home'
    ]);
});

Route::get('/about', function () {
    return view('About', [
        "title" => "About",
        "active" => 'about',
        "name" => "Kopegmar Tanjung Priok",
        "email" => "kopegmar@gmail.com",
        "image" => "logokpm2.png"
    ]);
});

Route::get('/posts', [PostController::class, 'index']);

// HALAMAN SINGLE POST dengan Route model Binding
route::get('posts/{post:slug}', [PostController::class, 'show']);

// Route untuk mengarahkan halaman Categories
// Route::get('/categories/{category:slug}', function(Category $category){
//     return view('posts', [
//         'title' => "Post By Category : $category->name",
//         'active'=> 'categories',
//         'posts' => $category->posts->load('category', 'author'),
//     ]);
// });

// Route::get('/authors/{author:username}', function(User $author) {
//     return view('posts', [
//         'title' => "Post By Author : $author->name",
//         'active'=> 'posts',
//         'posts' => $author->posts->load('category', 'author'), 
//         // $author->posts->load('category', 'author')
//     ]);
// });


// Route untuk menjadikan link Categories
Route::get('/categories', function () {
    return view('Categories', [
        'title' => 'Post Categories',
        'active' => 'categories',
        'categories' => Category::all()
    ]);
});


Route::get('/form', function () {
    return view('Form', [
        'title' => 'Form',
        "active" => 'form'
    ]);
});

// Login
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

// Register
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

// dashboard
Route::get('/dashboard', function () {
    return view('dashboard.index');
})->middleware('auth');

Route::get('/mypost/checkSlug', [MyPostController::class, 'checkSlug'])->middleware('auth');
// Route::resource('/mypost', MyPostController::class)->middleware('auth');
Route::get('mypost', [MyPostController::class, 'index'])->name('mypost.index');
Route::get('/mypost/create', [MyPostController::class, 'create'])->name('mypost.create');
Route::get('/mypost/{id}/show', [MyPostController::class, 'show'])->name('mypost.show');
Route::get('/mypost/{id}/edit', [MypostController::class, 'edit'])->name('mypost.edit');
Route::delete('/mypost/{id}/destroy', [MyPostController::class, 'destroy'])->name('mypost.destroy');
Route::post('/mypost/create', [MyPostController::class, 'store'])->name('mypost.store');
Route::post('/mypost/image', [MyPostController::class, 'upload'])->name('mypost.image');
Route::put('/mypost/{id}/update', [MyPostController::class, 'update'])->name('mypost.update');


//crud tanpa resource
Route::get('/employe', [CobaController::class, 'index'])->name('employe.index'); //index
Route::get('/employe/create', [CobaController::class, 'create'])->name('employe.create'); //form create ambil nama route
Route::post('/employe/store', [CobaController::class, 'store'])->name('employe.store'); // nampilin yg sudah di create
Route::post('/employee/upload', [CobaController::class, 'UploadImage'])->name('upload.image')->middleware('auth');
Route::delete('/employe/{id}/destroy', [CobaController::class, 'destroy'])->name('employe.destroy');


Route::get('/items', [ItemController::class, 'index'])->name('items.index');
Route::get('/items/create', [ItemController::class, 'create'])->name('items.create');
Route::post('/items/store', [ItemController::class, 'store'])->name('items.store');
Route::get('/items/{id}/edit', [ItemController::class, 'edit'])->name('items.edit');
Route::put('/items/{id}/update', [ItemController::class, 'update'])->name('items.update');
Route::delete('/items/{id}/destroy', [ItemController::class, 'destroy'])->name('items.destroy');

// ckeditor
Route::get('ckeditor', [editorController::class, 'index'])->middleware('auth');
Route::post('ckeditor/store', [editorController::class, 'store'])->name('ckeditor.store');
Route::post('ckeditor/upload', [editorController::class, 'upload'])->name('ckeditor.upload');

Route::resource('/sekolah', StudentController::class)->middleware('auth');
Route::resource('/product', ProductController::class)->middleware('auth');
