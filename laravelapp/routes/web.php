<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategoryController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get( '/contact', function () {
    //return "Nikhil Bhingradiya";
});

Route::get( '/secondR', function () {
    return "Laravel makes it easy to develop website";
});


Route::get('uid/{uid}', function ($uid){
    return "ID: $uid";
})->where('uid', '[0-9]+');

Route::get( '/users/{users?}', function ($users ="Batman") {
    return "Users: $users";
})->name('users.show');

Route::group(['as' => 'users.', 'prefix' => 'users', 'where' => ['user' => '[A-Za-z\s]+', 'image' => '[0-9]+']] ,
    function(){
        Route::get('/{users?}', function ($users = "Batman") {
            return "Users: $users";
        })->name('users.show');


        Route::get('/users/{users}/images/{images}', function ($users, $images) {
            return "User: $users Image:$images";
        })->name('users.images.show');

    });



Route::get('aboutme', function (){
    $fullName = "Nikhil Bhingradiya";
    return view('pages.about', compact("fullName"));
})->name('aboutme.show');

Route::get('aboutme', function (){
    $name =['fullName' => 'Nihkil Bhingaradiya'];
    return view('pages.about')->with($name);
})->name('aboutme.show');

Route::get('thingsiknow', function (){
    $languages = ['PHP','Angular','Python','c#','Java','C++'];
    return view('pages.langs', compact('languages'));
})->name('thingsiknow.show');

Route::get('contact', function (){
    $email = ['email'=> 'NB@76myscc.ca'];
    return view('pages/contact')->with ($email);
})->name('contact');

//week 3
Route::get('articles/create', [ArticleController::class,'create'])->name('articles.create');

Route::post('articles', [ArticleController::class, 'store'])->name('articles.store');
Route::get('articles', [ArticleController::class,'index'])->name('articles.index');

Route::get('articles/{article}', [ArticleController::class, 'show'])->name('articles.show');

//week 5/4
Route::get('categories/create', [CategoryController::class,'create'])->name('categories.create');

Route::post('categories', [CategoryController::class,'store'])->name('categories.store');

Route::get('categories', [CategoryController::class, 'index'])->name('categories.index');
Route::get('categories/{category}', [CategoryController::class, 'show'])->name('categories.show');
Route::get('categories/{category}/edit', [CategoryController::class, 'edit'])->name('categories.edit');
Route::patch('categories/{category}/', [CategoryController::class, 'update'])->name('categories.update');


