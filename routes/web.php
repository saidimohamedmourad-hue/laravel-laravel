<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\indexcontroller;
use App\Http\Controllers\jobcontroller;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TagController;
use App\Models\Tag;
use Illuminate\Support\Facades\Route;

Route::get('/', [Indexcontroller::class,"index"]);
Route::get('/about', [Indexcontroller::class,"about"]);
Route::get('/contact', [Indexcontroller::class,"contact"]);

route::get('job',[Jobcontroller::class,'index']);

route::get('/blog',[PostController::class,'index']);
route::get('/blog/create',[ PostController::class,'create']);
route::get('/blog/delete',[ PostController::class,'delete']);
route::get('/blog/{id}',[PostController::class,'show']);

route::get('/comments',[CommentController::class,'index']);
route::get('/comments/create',[CommentController::class,'create']);

route::get('/tags',[TagController::class,'index']);
route::get('/tags/create',[TagController::class,'create']);

route::get('/tags/many',[TagController::class,'testManyToMany']);