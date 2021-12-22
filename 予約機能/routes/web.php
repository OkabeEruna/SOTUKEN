<?php

use Illuminate\Support\Facades\Route;

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


Route::get('/userlogin','App\Http\Controllers\userloginController@move');
Route::post('/newmember','App\Http\Controllers\newmemberController@move');
Route::get('/top2','App\Http\Controllers\top2Controller@move');
Route::post('/top2','App\Http\Controllers\top2Controller@move');
Route::get('/home','App\Http\Controllers\top2Controller@home');
Route::post('/home','App\Http\Controllers\top2Controller@home');
/*予約、地図*/
/*予約*/
Route::post('/yoyaku','App\Http\Controllers\yoyakuController@move');

/*当日予約*/
Route::post('/map','App\Http\Controllers\mapController@move');
Route::get('/yoyaku_time','App\Http\Controllers\yoyaku_timeController@move');
Route::post('/yoyaku_time','App\Http\Controllers\yoyaku_timeController@move');
Route::post('/yoyaku_info','App\Http\Controllers\yoyaku_infoController@move');
Route::get('/yoyaku_info','App\Http\Controllers\yoyaku_infoController@move');
Route::post('/y_check','App\Http\Controllers\y_checkController@move');
Route::post('/y_conp','App\Http\Controllers\y_conpController@move');


/*指定予約*/
Route::post('/y_calendar','App\Http\Controllers\y_calendarController@move');
Route::post('/y_hospital','App\Http\Controllers\y_hospitalController@move');
Route::post('/yoyaku_time2','App\Http\Controllers\yoyaku_time2Controller@move');
Route::post('/yoyaku_info2','App\Http\Controllers\yoyaku_info2Controller@move');
Route::post('/y_check2','App\Http\Controllers\y_check2Controller@move');
Route::post('/yoyaku_Conp','App\Http\Controllers\yoyaku_ConpController@move');

/*予約キャンセル*/
Route::post('/cancel','App\Http\Controllers\cancelController@move');
Route::post('/cancel_Conp','App\Http\Controllers\cancel_ConpController@move');

/*履歴*/
Route::post('/log2','App\Http\Controllers\log2Controller@move');


/*接種券番号*/
Route::post('/ticket','App\Http\Controllers\ticketController@move');


/*その他*/
Route::post('/option','App\Http\Controllers\optionController@move');
Route::post('/option_Conp','App\Http\Controllers\option_ConpController@move');

/*お知らせ*/
Route::post('/mail','App\Http\Controllers\mailController@move');




