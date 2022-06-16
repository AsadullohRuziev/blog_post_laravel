<?php

use App\Http\Controllers\BlogPostController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});


// The route we have created to show all blog posts.
Route::get('/blog', [BlogPostController::class, 'index']);


//show
Route::get('/blog/{blogPost?}', [BlogPostController::class, 'show']);


Route::get('/blog/create/post', [BlogPostController::class, 'create']); //shows create post form
Route::post('/blog/create/post', [BlogPostController::class, 'store']); //saves the created post to the databse
Route::get('/blog/{blogPost}/edit', [BlogPostController::class, 'edit']); //shows edit post form
Route::put('/blog/{blogPost}/edit', [BlogPostController::class, 'update']); //commits edited post to the database
Route::delete('/blog/{blogPost}', [BlogPostController::class, 'destroy']); //deletes post from the database









