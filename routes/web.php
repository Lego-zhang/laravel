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
// 闭包路由
Route::get('/', function () {
    return view('welcome');
});

// 控制器路由

Route::get('/home/h1', 'HomeController@h1');

Route::any('getOrder', 'HomeController@getOrder');

Route::any('/home/dbTest', 'HomeController@dbTest');
//Route::get('getOrder/{id?}','HomeController@getOrder');

Route::get('getOrder/{id?}', function ($id) {
    return [11, $id];
})->where('id', '.*');


// 命名路由
Route::get('getUser', 'HomeController@getUser')->name('get.user');
Route::get('getUrl', function () {
    return redirect()->route('get.user', ['id' => '10']);
//    return redirect()->to(\route('get.user',['id'=>'10']));
//    return \route('get.user');
});
