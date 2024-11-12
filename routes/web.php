<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Arr;
use App\Models\Post;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home', ['title' => 'Home']);
});

Route::get('/about', function (){
    return view('about', ['title' => 'About']);
});

Route::get('/profile', function () {
    return view('profile', ['title' => 'Profile']);
});

Route::get('/project', function () {
    return view('project', [
        'title' => 'My Project'
    ]);
});

Route::get('/scatterplot', function () {
    return view('scatterplot', [
        'title' => 'Data Visualization'
    ]);
});

Route::get('/heatmap', function () {
    return view('heatmap', [
        'title' => 'Data Visualization'
    ]);
});

Route::get('/choropleth', function () {
    return view('choropleth', [
        'title' => 'Data Visualization'
    ]);
});

Route::get('/treemap', function () {
    return view('treemap', [
        'title' => 'Data Visualization'
    ]);
});

Route::get('/blog', function () {
    return view('blog', [
        'title' => 'Blog',
        'posts' => Post::all()
    ]);
});

Route::get('/test', function () {
    return view('welcome', [
        'title' => 'Test Enviro'
    ]);
});

Route::get('/blog/{id}', function ($id) {
    $post = Post::find($id);
    
    if (!$post) {
        abort(404);
    }
    
    return view('/article', [
        'title' => 'Article',
        'post' => $post
    ]);
});
