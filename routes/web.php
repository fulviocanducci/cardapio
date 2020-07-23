<?php use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function () {
    Route::get('/', ['uses' => 'HomeController@index'])->name('admin.home.index');

    Route::get('/inputs', ['uses' => 'InputsController@index'])->name('admin.inputs.index');

    Route::get('/products', ['uses' => 'ProductsController@index'])->name('admin.products.index');
});

