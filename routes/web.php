<?php

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/student_details','Entrycontroller@student_details');
Route::get('/result', 'MeritpositionController@result');
Route::get('/details', 'ShowStudentDetailsController@details');
Route::get('/individual_result', 'ShowStudentDetailsController@individual');
Route::get('/individual', function (){
    return view('Individual');
});
Route::get('ExportClients','ExcelController@ExportClients');
Route::get('/upload','ExcelController@upload')->name("upload");
Route::post('import','ExcelController@ImportClients');
Route::get('export','ContactController@contactExport')->name('contact.export');