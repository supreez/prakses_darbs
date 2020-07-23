<?php

use Illuminate\Support\Facades\Route;
use App\specialitates as Specialitates;
use Illuminate\Http\Request;
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
Route::get('/prieksmeti', function () {
    return view('/admin/prieksmeti');
});
Route::get('/specialitates', 'SpecialitatesController@allSpecialitates');
Route::post('/specialitates', 'SpecialitatesController@addSpecialitates');
Route::delete('/specialitates', 'SpecialitatesController@deleteSpecialitates');
Route::get('/specialitates/labot_specialitates/{id}', 'SpecialitatesController@updateSpecialitates');
Route::post('/specialitates/labot_specialitates/{id}', 'SpecialitatesController@editSpecialitates');
Route::get('/index1', 'SpecialitatesController@allSpecialitatesForIndex1');
Route::get('/rvtadminrvt', function(){ return view('/admin/rvtadminrvt');});
Route::get('/view_admin', 'StudentiController@allStudenti');
