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

   // Route::get('/user-home','SalerecordControlller@index')->name('place.item.user');
    
    Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

    Route::get('/home', 'DashboardController@index')->name('home');
    Route::post('/logout', 'AuthController@logout')->name('logout');

    //USer routes
    Route::get('/home/user','UserController@index')->name('get.user');
    Route::get('/home/user/create','UserController@create')->name('user.create');





    //Items route
    Route::get('/items','ItemController@index')->name('item');
    Route::post('/items/create','ItemController@postCreate')->name('create');
    Route::get('/items/get-edit/{id}','ItemController@getEdit')->name('get.edit');
    Route::post('/items/post-edit/{id}','ItemController@postEdit')->name('post.edit');
    Route::get('/items/delete/{id}','ItemController@delete')->name('delete');
    Route::post('/items/searchfood','SearchController@searchFoodItem');
    
    //Order Placement
    //Route::get('/food-orders', 'OrderController@index')->name('place.order');
    Route::get('/food-orders', 'SalerecordController@index')->name('place.item');
    Route::post('/food-orders/searchfood', 'SearchController@searchOrderFoodItem');
    Route::post('addOrder', 'SalerecordController@postCreateSale');
    Route::get('/delete-item/{id}','SalerecordController@getDeleteItem')->name('newsale.delete');
    Route::post('/food-order/confirm','OrderController@postOrderCreate')->name('newsale.save');
    Route::get('/food-order/clear','SalerecordController@deleteUserOrder')->name('newsale.clear');
    Route::get('/food-order/update/{id}','SalerecordController@edit')->name('newsaleItem.update');
    Route::post('/food-order/update/{id}','SalerecordController@update')->name('order.item.edit');
    ///Customers

    Route::get('/admin/customer','CustomerController@index')->name('customer');
    Route::post('/customer/search','SearchController@searchCustomers');
    Route::post('/admin/customer/create','CustomerController@postCreate')->name('customer.create');
    Route::get('/admin/customer/edit/{id}', 'CustomerController@edit')->name('get.edit');
    Route::get('/admin/customer/delete/{id}','CustomerController@delete')->name('get.delete');
    Route::post('/admin/customer/update/{id}','CustomerController@update')->name('post.update');

    ///Online- OtherOrders 

    Route::get('/admin/other-order','OnlineSalerecordController@index')->name('online.order');
    Route::post('/admin/other-order/update/{id}','OnlineSalerecordController@update')->name('online.newsaleItem.update');
    Route::get('/admin/other-order/edit/{id}','OnlineSalerecordController@edit')->name('online.newsaleItem.edit');
    Route::get('/admin/other-order/delete-item/{id}','OnlineSalerecordController@getDeleteItem')->name('online.newsale.delete');
    Route::post('/admin/addOnlineOrder', 'OnlineSalerecordController@postCreateSale');
    Route::post('/food-orders/searchOnlinefood', 'SearchController@searchOnlineOrderFoodItem');
    Route::post('/customer/search/online','SearchController@searchOnlineCustomers');
    Route::post('/other-order/confirm','OnlineOrderController@postOrderCreate')->name('online.newsale.save');
    Route::get('/other-order/clear','OnlineSalerecordController@deleteUserOrder')->name('online.newsale.clear');
    Route::get('/admin/online-customer/add/{id}','OnlineSalerecordController@getCustomers')->name('get.customer');

    //Taway-Orders
    Route::get('/taway-orders', 'TakeAwayItemController@index')->name('taway-orders');  
    Route::get('/taway-orders/drinks','TakeAwayItemController@drinks')->name('taway-orders-drinks'); 
    Route::get('/taway-orders/desert','TakeAwayItemController@desert')->name('taway-orders-desert'); 
    Route::get('/taway-orders/sides','TakeAwayItemController@sides')->name('taway-orders-sides'); 
    Route::get('/taway-orders/pizza','TakeAwayItemController@pizza')->name('taway-orders-pizza'); 
    Route::get('/taway-orders/curry','TakeAwayItemController@curry')->name('taway-orders-curry'); 
    Route::get('/taway-orders/shawarma','TakeAwayItemController@shawarma')->name('taway-orders-shawarma'); 
    Route::get('/taway-orders/wrap','TakeAwayItemController@wrap')->name('taway-orders-wrap'); 
    Route::get('/taway-orders/burgers','TakeAwayItemController@burgers')->name('taway-orders-burgers'); 
    Route::get('/taway-orders/grilled','TakeAwayItemController@grilled')->name('taway-orders-grilled'); 
    Route::get('/taway-orders/salads','TakeAwayItemController@salads')->name('taway-orders-salads'); 
    Route::get('/taway-orders/spdeals','TakeAwayItemController@spdeals')->name('taway-orders-spdeals'); 
    Route::get('/taway-orders/preview','TawayOrderController@preview')->name('taway-orders-preview');

});