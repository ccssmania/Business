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
Route::get('index/images/{filename}',function($filename){
	$path = storage_path("app/images/$filename");


	if(!\File::exists($path)) abort(404);
	$file = \File::get($path);
	$type = \File::mimeType($path);

	$response = Response::make($file,200);
	$response->header("Content-Type", $type);

	return $response;
});
//-----------------Process----------------
Route::get("/process","ProcessController@index");
Route::get("/process/create","ProcessController@create");
Route::post("/process/create", "ProcessController@store");
Route::get("/process/edit/{id}", "ProcessController@edit");
Route::post("/process/edit/{id}", "ProcessController@update");
//----------------Task------------------------------
Route::get("/task/{id}","TaskController@show");
Route::get("/task/filter","TaskController@index");
//--------------------------------------------------
Route::get('/home', 'HomeController@index')->name('home');

