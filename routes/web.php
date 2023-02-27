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

Route::get('/', "HomeController@index")->name("home");
Route::get('/about', "Home\AboutController@index")->name("home.about");
Route::get('/katalog', "Home\KatalogController@index")->name("home.katalog");
Route::get('/repository', "Home\RepositoryController@index")->name("home.repository");
Route::prefix('admin')->group(function () {
    Route::get("/", "Admin\DashboardController@index")->name("admin.dashboard");
    Route::prefix('role')->group(function () {
        Route::get("/", "Admin\RoleController@index")->name("admin.role");
        Route::get("/datatables", "Admin\RoleController@datatable")->name("admin.role.datatable");
        Route::get("/single/{uuid}", "Admin\RoleController@getById")->name("admin.role.id");
        Route::post("/aksi", "Admin\RoleController@aksi")->name("admin.role.aksi");
    });
    Route::prefix('user')->group(function () {
        Route::get("/", "Admin\UserController@index")->name("admin.user");
        Route::get("/datatables", "Admin\UserController@datatable")->name("admin.user.datatable");
        Route::get("/single/{uuid}", "Admin\UserController@getById")->name("admin.user.id");
        Route::post("/aksi", "Admin\UserController@aksi")->name("admin.user.aksi");
    });
});