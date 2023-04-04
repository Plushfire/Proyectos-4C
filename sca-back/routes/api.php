<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\CareerController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/students',[StudentController::class,'index']);

Route::post('/show_student',[StudentController::class,'show']);

Route::post('/store_career',[CareerController::class,'store']);

Route::post('/store_student',[StudentController::class,'store']);

Route::post('/delete_student',[StudentController::class,'destroy']);

?>