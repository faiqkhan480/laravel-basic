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

//$article = [{ title : 'first blog', blog : 'blogs Content', }]

Route::get('/', function () {
    return view('welcome');
});

// Listing Blogs
Route::get('/app', 'blogController@show');

// To get Form
Route::get('/get_form', 'formController@getForm');

// To get Form data
Route::post('/get_data', 'formController@getData');

Route::get('/about/{id}', function ($id) {
    $data = ['name'=>'About us', 'content'=>['1', '2', '3', '4', '5'], 'id'=> $id];
    return view('pages.about', $data);
});

Route::get('/contact', function () {
    return view('pages.contact')->with('name', 'Contact Us');
});
