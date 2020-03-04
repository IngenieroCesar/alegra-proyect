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


// Route::get('/', function () {
//     return view('welcome');
// });

Route::resource('/', 'HomeController');

  Route::group(['prefix' => 'admin'], function () {
    // Route::prefix('admin')->group(function () {
  Route::get('/', 'AdminController@index')->name('admin'); 
  Route::get('permission', 'PermissionController@index')->name('view_permission'); 
  Route::get('permission/create', 'PermissionController@create')->name('create_permission');

  Route::get('menu', 'MenuController@index')->name('view_menu');
  Route::get('menu/create', 'MenuController@create')->name('create_menu');
  Route::post('menu', 'MenuController@store')->name('store_menu'); 

});