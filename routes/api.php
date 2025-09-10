<?php

use App\Http\Controllers\Api\BlogController;
use App\Http\Controllers\Api\CaseStudyController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});



Route::get('/blogs', [BlogController::class, 'index']);           // Get all blogs       
Route::get('/blogs/{id}', [BlogController::class, 'show']);       // Get single blog




Route::get('/case-studies', [CaseStudyController::class, 'index']);
Route::get('/case-studies/{id}', [CaseStudyController::class, 'show']);