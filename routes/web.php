<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', 'HomeController@homepage');

Route::get('/about-us', 'HomeController@about');

Route::get('/projects', 'ProjectController@index');

Route::get('/students', 'StudentController@index');
Route::get('/students/insert', 'StudentController@insert');
Route::get('/students/update', 'StudentController@update');
Route::get('/students/delete', 'StudentController@delete');

Route::get('/students/show/{id}', 'StudentController@show')->name('students.show');


