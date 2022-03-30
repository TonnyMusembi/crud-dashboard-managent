<?php

use App\Http\Controllers\API\CompanyController;
use App\Http\Controllers\DashboardController;

use App\Http\Controllers\MombasaController;
use App\Http\Controllers\NairobiController;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

//Route::apiResource('companies', CompanyController::class);

Route::apiResource('companies',CompanyController::class);

//dashboard  routes
Route::get('/dashboard', [DashboardController::class,'index']);

//pages

Route::resource('mombasa', MombasaController::class);
Route::resource('kelas', NairobiController::class);
