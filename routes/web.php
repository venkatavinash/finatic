<?php

use Spatie\Permission\Models\Role;

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

/* Auth*/

Auth::routes();
Route::get('/user/verify/{token}', 'Auth\RegisterController@verifyUser');
Route::get('/home', 'HomeController@index')->name('home');



/*Admin */
Route::group(['namespace' => 'Admin','prefix'=>'admin','as'=>'admin.','middleware' => ['role:super admin|admin']], function() {
    /* Index */
    Route::get('/dashboard','AdminBaseController@index')->name('dashboard');



    /* Data */
    Route::get('/users/data','ManageUsersController@data')->name('users.data');
    Route::get('/roles/data','ManageRolesController@data')->name('roles.data');
    Route::get('/permissions/data','ManagePermissionsController@data')->name('permissions.data');
    Route::get('/firms/data','ManageFirmsController@data')->name('firms.data');

    /* Users CRUD*/


    Route::get('/users/export','ManageUSersController@index')->name('users.export');

    Route::resource('users','ManageUsersController');

    /* Roles CRUD*/

    Route::get('/roles/export','ManageRolesController@index')->name('roles.export');
    Route::resource('roles','ManageRolesController');


    /* permissions */

    Route::get('/permissions/export','ManagePermissionsController@index')->name('permissions.export');
    Route::resource('permissions','ManagePermissionsController');


    /* firms */

    Route::get('/roles/export','ManageFirmsController@index')->name('firms.export');
    Route::resource('firms','ManageFirmsController');
    /* Base data */

});


Route::group(['namespace' => 'Firm','as'=>'firm.','middleware' => ['role:firm']], function() {
    /* Index */
    Route::get('/dashboard','FirmDashboardController@index')->name('dashboard');
    Route::resource('basedata','FirmBasedataController');


});
