<?php

use App\Http\Controllers\WebsiteController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
    return view('login');
    return view('welcome');
});
Route::get('/register', function () {
    return view('register');

});

Auth::routes();
/* Auth::routes();
Route::group(['middleware' => ['web','auth']],function(){ */
Route::get('/home','HomeController@index')->name('home')->middleware('auth');

/* Route::get('/register', 'RegisterController@index')->name('register');
Route::post('/register','registerController@store'); */
Route::get('/register', 'Auth\AuthController@register')->name('register');
Route::post('/register', 'Auth\AuthController@storeUser');
Route::get('/login', 'Auth\AuthController@login')->name('login');
Route::post('/login', 'Auth\AuthController@authenticate');
Route::get('logout', 'Auth\AuthController@logout')->name('logout');

/* }); */
Route::resource('product_create','ProductController@cat');
Route::get('product','ProductController@show');
Route::get('product_delete/{id}','ProductController@destroy');
Route::get('product_create','ProductController@create');
Route::post('product_submit','ProductController@store');
Route::get('product_edit/{id}','ProductController@edit');
Route::post('product_update/{id}','ProductController@update')->name('product.update');
//////////////////


Route::get('/register', 'Auth\AuthController@register')->name('register');
Route::post('/register', 'Auth\AuthController@storeUser');
Route::get('/login', 'Auth\AuthController@login')->name('login');
Route::post('/login', 'Auth\AuthController@authenticate');
Route::get('logout', 'Auth\AuthController@logout')->name('logout');

/* }); */
Route::resource('product_create','ProductController@cat');
Route::get('product','ProductController@show');
Route::get('product_delete/{id}','ProductController@destroy');
Route::get('product_create','ProductController@create');
Route::post('product_submit','ProductController@store');
Route::get('product_edit/{id}','ProductController@edit');
Route::post('product_update/{id}','ProductController@update')->name('product.update');

Route::get('productreview','productreview@index');
Route::get('productoverview','productoverview@index');

//cencellation*************************************
Route::get('cencellation','cencellation@index');

//categories*************************************
Route::get('categories','categoriesController@show');
Route::get('Sub_categories','SubCategoriesController@show');

//orders*************************************
Route::get('allOrders','allordersController@index');
Route::get('orderview','viewordersControler@index');

//transactions*************************************
Route::get('transactions','transactionsController@index');
Route::get('sellinghistory','sellinghistory@index');
Route::get('Settlement-report','transactions@Settlement_report');
Route::get('subcat', 'ProductController@subCat');
Route::get('Settlement','SettlementController@index');
Route::get('stock','StockController@index');




