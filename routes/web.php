<?php

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


/*Route::group(['middleware' => ['auth']], function () {
	Route::get('/', ['as' => 'house.index', 'uses' => 'HomeController@index']);
	Route::get('/house/{assess_id}', ['as' => 'house.info', 'uses' => 'HouseController@info']);
	Route::get('/house_view/{assess_id}', ['as' => 'house.view', 'uses' => 'HouseController@view']);
	Route::get('/house_verify/{assess_id}', ['as' => 'house.verity', 'uses' => 'HouseController@verity']);
	Route::post('/save/{assess_id}', ['as' => 'house.verity', 'uses' => 'HouseController@save']);
});*/

Route::get('/', ['as' => 'home.index', 'uses' => 'HomeController@index']);		//首頁

Route::prefix('store')->group(function () {
	Route::get('create', ['as' => 'store.create', 'uses' => 'StoreController@create']);				//店家建立頁面
	Route::post('store', ['as' => 'store.store', 'uses' => 'StoreController@store']);				//店家建立儲存

	Route::get('mystore/{store_id?}', ['as' => 'store.mystore', 'uses' => 'StoreController@mystore']);	//店家詳細頁面(店家負責人視角)
	Route::get('{store_id}', ['as' => 'store.index', 'uses' => 'StoreController@index']);			//店家詳細頁面(使用者視角)


	Route::get('{store_id}/edit', ['as' => 'store.edit', 'uses' => 'StoreController@edit']);		//店家編輯頁面
	Route::post('{store_id}/update', ['as' => 'store.update', 'uses' => 'StoreController@update']);	//店家編輯更新

	Route::get('{store_id}/show', ['as' => 'store.show', 'uses' => 'StoreController@show']);		//店家即時觀看訂單頁面
});

Route::prefix('receipt')->group(function () {
	Route::get('{receipt_id}', ['as' => 'receipt.index', 'uses' => 'ReceiptController@index']);		//訂單統計頁面

	Route::get('create', ['as' => 'receipt.create', 'uses' => 'ReceiptController@create']);			//訂單建立頁面
	Route::post('store', ['as' => 'receipt.store', 'uses' => 'ReceiptController@store']);			//訂單建立儲存
});

Route::prefix('detail')->group(function () {
	Route::get('/', ['as' => 'detail.index', 'uses' => 'DetailController@index']);					//訂"購"頁面(選產品、數量購買)
	Route::post('store', ['as' => 'detail.store', 'uses' => 'DetailController@store']);				//訂"購"儲存
});

Route::get('invite', ['as' => 'receipt.invite', 'uses' => 'ReceiptController@invite']);				//邀請碼輸入頁面
Route::post('invite', ['as' => 'receipt.inviteStore', 'uses' => 'ReceiptController@inviteStore']);					//邀請碼驗證


// Authentication Routes...
Route::get('login', 'AuthController@showLoginForm')->name('login');
Route::post('login', 'AuthController@login');
Route::get('logout', 'AuthController@logout')->name('logout');

// Registration Routes...
Route::get('register', 'AuthController@showRegistrationForm')->name('register');
Route::post('register', 'AuthController@register')->name('register');

// Password Reset Routes...
Route::get('password/reset', 'AuthController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'AuthController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'AuthController@showResetForm')->name('password.reset');
Route::post('password/reset', 'AuthController@reset');
