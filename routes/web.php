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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/','HomeController@index')->name('home');
Route::get('/tentang-pt-graha-vister-mandiri','HomeController@about')->name('about');
Route::get('/dijual','HomeController@dijual')->name('dijual');
Route::get('/dijual/{id}','HomeController@dijualDetail')->name('detail-dijual');
Route::get('/disewakan','HomeController@disewakan')->name('disewakan');
Route::get('/disewakan/{id}', 'HomeController@disewakanDetail')->name('detail-disewakan');
Route::get('/cari-property/{id}','HomeController@pencarian')->name('cari');

Route::get('/login','Auth\LoginController@index')->name('login');
Route::post('/postlogin','Auth\LoginController@postLogin')->name('post-login');
Route::post('/logout','Auth\LoginController@logout')->name('logout');


Route::prefix('dashboard-admin')
    ->middleware([
        'auth:admin',
        'ceklevel:admin'
    ])
    ->namespace('Admin')
    ->group(function () {
        Route::get('/', 'DashboardController@index')->name('dashboard-admin');       
        Route::resource('/data/properti-dijual', 'PropertyController');
        Route::resource('/data/pengguna', 'PenggunaController');
});
