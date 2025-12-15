 <?php

 use App\Http\Controllers\api\PostApiController;

 use App\Http\Controllers\CommentController;
 use App\Http\Controllers\TagController;
 use Illuminate\Support\Facades\Route; 

//rest api {restful api} => HTTP Standard
//Rquest delete , post, get, put , patch
//response =>204,201,200,400,404,500

// route::post('/blog',[ PostController::class,'create']);
//  route::delete('/blog/{id}',[ PostController::class,'delete']);

//  route::post('/comments',[CommentController::class,'create']);

//  route::post('/tags',[TagController::class,'create']);
Route::apiResource('post ',PostApiController::class);

//Route::get('post/{id}',PostApiController::class);