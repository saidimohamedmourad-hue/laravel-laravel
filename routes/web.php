<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\indexcontroller;
use App\Http\Controllers\jobcontroller;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TagController;
use App\Models\Tag;
use Illuminate\Support\Facades\Route;

Route::get('/', indexcontroller::class);
Route::get('/about', AboutController::class);
Route::get('/contact', ContactController::class);

route::get('job',[Jobcontroller::class,'index']);

route::resource('/blog',PostController::class);
// route::get('/blog',[PostController::class,'index']);
// route::post('/blog/create',[ PostController::class,'create']);
// route::delete('/blog/{id}',[ PostController::class,'delete']);
// route::get('/blog/{id}',[PostController::class,'show']);

route::resource('/comments',CommentController::class);
//route::get('/comments',[CommentController::class,'index']);
//route::post('/comments/create',[CommentController::class,'create']);

route::resource('/tags',TagController::class);
//route::get('/tags',[TagController::class,'index']);
//route::post('/tags/create',[TagController::class,'create']);
route::get('/tags/many',[TagController::class,'testManyToMany']);