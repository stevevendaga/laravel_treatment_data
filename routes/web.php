<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TreatmentsController;

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
Route::get('/', [TreatmentsController::class,'uploadView']);
Route::get('/index', [TreatmentsController::class,'index']);
Route::post('/uploadnow', [TreatmentsController::class,'processExcel_internal']);
Route::get('/getdata', [TreatmentsController::class,'processdata']);
Route::get('/view_contract', [TreatmentsController::class,'view_contract']);
Route::get('/api_documentation', [TreatmentsController::class,'api_documentation']);
//===== Route to api for external use=====================
Route::get('/getDataId', [TreatmentsController::class,'getDataId']);
Route::get('/getDataDate', [TreatmentsController::class,'getDataDate']);
Route::get('/getDataCompany', [TreatmentsController::class,'getDataCompany']);
Route::get('/getDataAmount', [TreatmentsController::class,'getDataAmount']);
Route::get('/getDataReadStatus', [TreatmentsController::class,'getDataReadStatus']);
Route::get('/getDataUploadStatus', [TreatmentsController::class,'getDataUploadStatus']);


Route::get('/test', [TreatmentsController::class, 'testpage']);
Route::get('/getUsers', [TreatmentsController::class, 'getUsers']);
Route::post('/treatments/{id}', [TreatmentsController::class, 'getDatabyid']);
