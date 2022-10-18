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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/namasaya', function () {
    return view('welcome');
});

Route::get('foo', function () {
    return "Hellow World";
});

Route::view('/selamatdatang', 'welcome');

Route::get('greeting', function () {
    return view('welcome', ['name'=>'Michael']);
});

Route::get('/my', function () {
    return view('mybiodata');
});

Route::get('/myfriend/{nrp?}', function ($nrp = null) {
    return view('myfriend', ['nrp'=> $nrp]);
})->name('myfriend');

Route::resource('product', ProductController::class);
Route::post('/product/showinfo', 'ProductController@showinfo')->name('product.showinfo');
Route::post('/product/showproduct', 'ProductController@showProduct')->name('product.showproduct');
// Route::view('/product/index', 'welcome');
// Route::get('/product/index', 'Controller@index');




// TIDAK BISA METHOD POST MEMANGGIL VIEW
// Route::Post('', function () {
//     return view('welcome');
// });
