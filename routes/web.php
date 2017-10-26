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
use Illuminate\Http\Request;

Route::get('/', function (Request $request) {
    $employee = new \App\Http\Controllers\EmployeeController();
    $search = $request->input('search');
    $employees = $employee->welcome1($search);
    // return view('employee.welcome1')->with(['employees'=>$employees]);
    return $employees;
});

Route::resource('employee','EmployeeController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
