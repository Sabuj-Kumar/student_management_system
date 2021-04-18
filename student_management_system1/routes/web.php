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




Route::get('/course_registration','course_system@course_registration')->name('course_registration');
Route::get('/student_list','course_system@getcourse')->name('student_list');
Route::post('/course_insert','course_system@course_insert')->name('course_insert');
Route::get('/student_registration','student_system@student_registration')->name('student_registration');
Route::get('/Show_Student_List','student_system@getdata')->name('Show_Student_List');
Route::post('/insert','student_system@insert')->name('insert');
//Route::get('/getdata','student_system@getdata')->name('getdata');
