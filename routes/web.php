<?php

use Illuminate\Support\Facades\Route;
use PhpParser\Node\Stmt\Return_;
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
    return view('auth/login');
});

Route::get('home','RequestController@getServicecenter');
Route::get('/map','RequestController@map');
Route::get('servicecarts/{id}','RequestController@dataatc');

Route::get('details', function () {

	$ip = request()->ip();
    $data = \Location::get($ip);
    dd($data);

});

Auth::routes();
Route::group(['middleware'=>'auth'] ,function(){
Route::get('test','RequestController@request');
Route::get('test','RequestController@DataRequest');
Route::get('servicecart','RequestController@serviceCart');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('listservices','servicecenter@list');

Route::get('deletecart/{id}','RequestController@deleteCart');
Route::get('payment','RequestController@payment');

});