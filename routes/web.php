<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChatController;

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



Route::get('','ItemsController@showItems')->name('top');
Auth::routes();

Route::get('/threads', function () {
    return view('views.chat');
})->name('threads');


Route::get('items/{item}','ItemsController@showItemDetail')->name('item');
Route::get('items/{item}/threads/create', 'ItemsController@create')->name('threads');
Route::post('items/{item}/threads/create', 'ItemsController@create');
Route::get('/home','HomeController@index')->name('home');
Route::get('/result/ajax', 'HomeController@getData');
Route::get('hensyu/{item}','ItemsController@showItemDetail1')->name('item1');
Route::post('/add', 'HomeController@add')->name('add');
Route::get('/result/ajax','HomeController@getData');
Route::get('/matching', 'MatchingController@index')->name('matching');

//いいね機能
Route::get('/reply/like/{id}', 'itemsController@like')->name('reply.like');
Route::get('/reply/unlike/{id}', 'itemsController@unlike')->name('reply.unlike');



Route::middleware('auth')
	->group(function () {

	     

		Route::get('hensyu/{item}/buy','ItemsController@showBuyItemForm1')->name('item1.buy');
	     Route::post('hensyu/{item}/buy','ItemsController@editProfile1')->name('item1.buy');
	     Route::get('items/{item}/buy','ItemsController@showBuyItemForm')->name('item.buy');
	      Route::post('items/{item}/buy','ItemsController@showBuyItemForm')->name('item.buy');
	     Route::post('items/{item}/buy', 'ItemsController@buyItem')->name('item.buy');
	      Route::get('sell', 'SellController@showSellForm')->name('sell');
              Route::post('sell','SellController@sellItem')->name('sell'); 
       
	});

Route::prefix('mypage')
     ->namespace('MyPage')
     ->middleware('auth')
     ->group(function () {
	     Route::get('edit-profile', 'ProfileController@showProfileEditForm')->name('mypage.edit-profile');
	     Route::post('edit-profile', 'ProfileController@editProfile')->name('mypage.edit-profile');


	     Route::get('bought-items', 'BoughtItemsController@showBoughtItems')->name('mypage.bought-items');
	     Route::get('sold-items','SoldItemsController@showSoldItems')->name('mypage.sold-items');
     });
