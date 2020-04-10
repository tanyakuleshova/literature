<?php

use Illuminate\Support\Facades\Route;
use Laravel\Ui\AuthRouteMethods;

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
    return view('main');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/gallery', function () {
    return view('gallery');
});

Route::get('/packages', function () {
    return view('packages');
});
Route::get('/testing/classes', function () {
    return view('classes.classes_testing');
});
Route::get('/homeworks/classes', function () {
    return view('classes.classes_homeworks');
});
Route::get('/lessons/classes', function () {
    return view('classes.classes_lessons');
});

Route::get('/testing/classes/8_class/tests', 'FrontTestController@index');
Route::get('/testing/classes/9_class/tests', 'FrontTestController@index');
Route::get('/testing/classes/10_class/tests','FrontTestController@index');

Route::get('/homeworks/classes/8_class/homeworks', 'FrontHomeworkController@index');
Route::get('/homeworks/classes/9_class/homeworks', 'FrontHomeworkController@index');
Route::get('/homeworks/classes/10_class/homeworks','FrontHomeworkController@index');

Route::get('/lessons/classes/8_class/lessons', 'FrontLessonController@index');
Route::get('/lessons/classes/9_class/lessons', 'FrontLessonController@index');
Route::get('/lessons/classes/10_class/lessons','FrontLessonController@index');

Route::get('/admin_08', function () {
    return view('admin');
})->middleware('isadmin');
Route::get('/admin_08/create_test', function () {
    return view('admin.creating_test');
});

Route::get('/admin_08/create_lesson', function () {
    return view('admin.creating_lesson');
});

Route::get('/admin_08/create_homework', function () {
    return view('admin.creating_homework');
});

Route::post('/admin_test_store', 'AdminTestController@store');
Route::post('/admin_homework_store', 'AdminHomeworkController@store');
Route::post('/admin_lesson_store', 'AdminLessonController@store');

Route::get('/homework_download/{file}/{name}', 'FrontHomeworkController@store');
Route::get('/lesson_download/{file}/{name}', 'FrontLessonController@store');

