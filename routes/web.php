<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\File;

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
Route::get('/storage/{extra}', function ($extra) {
    return redirect('/public/storage/$extra');
})->where('extra', '.*');
Route::get('/link', function () {
    File::link(
        storage_path('app/public'),
        public_path('storage')
    );
});