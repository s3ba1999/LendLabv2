<?php

use App\Http\Controllers\LaboratoryController;
use App\Models\Laboratory;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Auth;
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
Route::middleware(['auth'])->name('public.')->group(function () {
    Route::get('/', 'PublicController@index')->name('index');

    Route::get('/laboratorio/{laboratory}', 'PublicController@laboratory')->name('laboratorio');

    Route::get('/laboratorio/{laboratory}/accesorios', 'PublicController@accessories')->name('accessories');
    Route::get('/laboratorio/{laboratory}/activos', 'PublicController@actives')->name('actives');

    Route::get('/laboratorio/{laboratory}/activos/{active}', 'PublicController@active')->name('active');
    Route::get('/laboratorio/{laboratory}/accessory/{accessory}', 'PublicController@accessory')->name('accessory');

    Route::get('/laboratorio/{laboratory}/accessory/{accessory}', 'PublicController@accessory')->name('accessory');


    Route::post('/carrito/addcart', 'CartController@addCart')->name('cart.add');
    Route::delete('/carrito/rmvcart/{id}', 'CartController@rmvCart')->name('cart.remv');
    Route::get('/carrito', 'CartController@cart')->name('cart');

    Route::post('requirement', 'RequierementController@store')->name('newRequirement');

});

Auth::routes();

Route::post('/register/student', 'UserController@createStudent')->name('register_student');

Route::prefix('admin')->middleware('auth')->group(function () {
    Route::resource('laboratory', 'LaboratoryController');

    Route::resource('student', 'StudentController');

    Route::resource('docent', 'DocentController');

    Route::resource('mananger', 'ManangerController');

    Route::resource('active', 'ActiveController');

    Route::resource('accessory', 'AccessoryController');

    Route::resource('requirement', 'RequierementController');

});



Route::get('/home', 'HomeController@index')->name('home');
