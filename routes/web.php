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
Route::get("/task", "TaskController@index");
Route::get("/task/index/{id}","TaskController@show");
Route::get("/task/filter","TaskController@index");
Route::get("/task/create","TaskController@create");
Route::post("/task/create", "TaskController@store");
Route::get("/task/edit/{id}", "TaskController@edit");
Route::post("/task/edit/{id}", "TaskController@update");
//-----------------Department----------------
Route::get("/department","DepartmentController@index");
Route::get("/department/create","DepartmentController@create");
Route::post("/department/create", "DepartmentController@store");
Route::get("/department/edit/{id}", "DepartmentController@edit");
Route::post("/department/edit/{id}", "DepartmentController@update");
//-----------------input----------------
Route::get("/input","InputController@index");
Route::get("/input/create","InputController@create");
Route::post("/input/create", "InputController@store");
Route::get("/input/edit/{id}", "InputController@edit");
Route::post("/input/edit/{id}", "InputController@update");
//-----------------Output----------------
Route::get("/output","OutputController@index");
Route::get("/output/create","OutputController@create");
Route::post("/output/create", "OutputController@store");
Route::get("/output/edit/{id}", "OutputController@edit");
Route::post("/output/edit/{id}", "OutputController@update");
//-----------------Machine----------------
Route::get("/machine","MachineController@index");
Route::get("/machine/create","MachineController@create");
Route::post("/machine/create", "MachineController@store");
Route::get("/machine/edit/{id}", "MachineController@edit");
Route::post("/machine/edit/{id}", "MachineController@update");
//-----------------Tooling----------------
Route::get("/tooling","ToolingController@index");
Route::get("/tooling/create","ToolingController@create");
Route::post("/tooling/create", "ToolingController@store");
Route::get("/tooling/edit/{id}", "ToolingController@edit");
Route::post("/tooling/edit/{id}", "ToolingController@update");
//--------------------------------------------------
Route::get("/contact","HomeController@contact");
Route::get('/home', 'HomeController@index')->name('home');

