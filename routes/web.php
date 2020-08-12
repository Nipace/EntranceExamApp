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
    return view('home');
})->name('front.home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');
Route::Resource('/admin/{set}/question','Backend\QuestionAnswerController')->middleware('auth');
Route::Resource('/admin/student','Backend\StudentController')->middleware('auth');

Route:: get('/{set}/set/student','Frontend\StudentController@index')->name('student.index');
Route:: post('/{set}/set/student','Frontend\StudentController@store')->name('student.store');
Route::get('/set/{set}/student/{roll}','Frontend\QuestionController@index')->name('studentquestion.index');
Route::post('/set/{set}/student/{roll}','Frontend\QuestionController@store')->name('studentquestion.store');
Route::get('/{roll}/student/thankyou','Frontend\QuestionController@thankyou')->name('front.thankyou');
Route::get('/admin/search','Backend\StudentController@search');
Route::get('/admin/{roll}/result','Frontend\QuestionController@thankyou');