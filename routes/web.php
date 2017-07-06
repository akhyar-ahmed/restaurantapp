<?php
use App\Http\Middleware\checkAuthMiddleware;
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

Route::get('/', 'AuthController@index')->name('login')->middleware('guest');
Route::post('/auth', ['uses' => 'AuthController@login', 'as' => 'auth'])->middleware('guest');

Route::group(['middleware' => 'auth'], function () {
    
    Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

    Route::get('/home', 'DashboardController@index')->name('home');
    Route::post('/logout', 'AuthController@logout')->name('logout');
    //Items route
    Route::get('/items','ItemController@index')->name('item');
    Route::post('/items/create','ItemController@postCreate')->name('create');
    Route::get('/items/get-edit/{id}','ItemController@getEdit')->name('get.edit');
    Route::post('/items/post-edit/{id}','ItemController@postEdit')->name('post.edit');
    Route::get('/items/delete/{id}','ItemController@delete')->name('delete');
    Route::post('/items/searchfood','SearchController@searchFoodItem');
    
    //Order Placement
    Route::get('/food-orders', 'OrderController@index')->name('place.order');
    Route::get('/foodorders', 'SalerecordController@index')->name('place.item');
    Route::post('/food-orders/searchfood', 'SearchController@searchOrderFoodItem');
    Route::post('addOrder', 'SalerecordController@postCreateSale');
    Route::get('/delete-item/{id}','SalerecordController@getDeleteItem')->name('newsale.delete');
    Route::post('/food-order/confirm','OrderController@postOrderCreate')->name('newsale.save');
    Route::post('/food-order/clear','SalerecordController@postDeleteUserOrder')->name('newsale.clear');
    Route::get('/food-order/update/{id}','SalerecordController@edit')->name('newsaleItem.update');
    Route::post('/food-order/update/{id}','SalerecordController@update')->name('order.item.edit');
    ///
});