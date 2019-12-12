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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login','LoginController@index')->name('login.index');
Route::post('/login','LoginController@verify')->name('login.verify');
Route::get('/logout','LogoutController@index')->name('logout.index');

Route::get('/registration','RegistrationController@index')->name('registration.index');
Route::post('/registration','RegistrationController@store')->name('registration.store');

Route::group(['middleware'=>['sess']], function(){
    // ADMIN
	Route::get('/admin', 'AdminController@index')->name('admin.index');
    Route::get('/admin/adminProfile', 'AdminController@show')->name('admin.show');
    Route::post('/admin/adminProfile', 'AdminController@update')->name('admin.update');
    Route::get('/admin/userList', 'UserController@userList')->name('admin.userList');
    Route::get('/admin/customer/delete/{id}', 'UserController@delete')->name('admin.delete');
    Route::post('/admin/customer/delete/{id}', 'UserController@destroy')->name('admin.destroy');

    // customer
     Route::get('/customer', 'UserController@index')->name('user.index');
     Route::get('/')

    ///book
    Route::get('/admin/addBook', 'BookController@create')->name('admin.create');
    Route::post('/admin/addBook', 'BookController@store')->name('admin.store');
    Route::get('/admin/bookList', 'BookController@Booklist')->name('admin.bookList');
    
   
   
});
