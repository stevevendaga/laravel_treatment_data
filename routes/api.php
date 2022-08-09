<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;

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
//==========ROUTES FOR EXTERNAL USE =================
Route::post('/treatments', 
        [ApiController::class, 'upload_data']);//upload treatment data
Route::get('/processing_status', 
        [ApiController::class, 'process_upload_status']);//status of processing uploaded xls file
Route::get('/treatments/date/{date}', 
        [ApiController::class, 'getdatabydate']);//get data by date
Route::get('/treatments/amount/{amount1}/{amount2}',
        [ApiController::class, 'getdatabyamount']);//get data by amount
Route::get('/treatments/winingcompay/{company}', 
        [ApiController::class, 'getdatabycompany']);//get data by wining company
Route::get('/treatments/{id}', 
        [ApiController::class, 'getdatabyid']);//get data by a given id
Route::get('/treatments/readstatus/{id}', 
        [ApiController::class, 'get_read_status']);//get contract read status
//==========END ROUTE FOR EXTERNAL USE =================

Route::get('/', [ApiController::class,'uploadView']);
Route::get('/index', [ApiController::class,'index']);
Route::post('/uploadnow', [ApiController::class,'processdata']);
Route::get('/getdata', [ApiController::class,'processdata']);
