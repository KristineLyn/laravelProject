<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
// use Illuminate\Support\Arr;
// use App\Models\Post;
use App\Http\Controllers\BlogController;

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
    return view('home', [
        'title' => 'Home'
    ]);
});

Route::get('/about', function (){
    return view('about', [
        'title' => 'About'
    ]);
});

Route::get('/resume', function () {
    return view('resume', [
        'title' => 'Resume'
    ]);
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

Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
Route::get('/blog/create', [BlogController::class, 'create'])->middleware('auth')->name('blog.create');
Route::post('/blog', [BlogController::class, 'store'])->middleware('auth')->name('blog.store');
Route::get('/blog/{id}', [BlogController::class, 'show'])->name('blog.show');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
