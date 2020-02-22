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



Auth::routes();

// Route::group(['prefix'= ])

Route::get('/state', 'ContactController@state');

Route::post('/add_state', 'ContactController@add_state')->name('AddState');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/application', 'PermitController@application')->name('Apply');

Route::post('/save-application', 'PermitController@create_application')->name('SaveApplication');

Route::get('/approval1', 'PermitController@approval1')->name('approval1')->middleware(IsAdmin::class);

Route::get('approval-admin/{id}', 'PermitController@approval_admin')->name('AprrovalAdmin');

Route::get('/approval2', 'PermitController@approval2')->name('approval2')->middleware(IsSupervisor::class);

Route::get('approval-supervisor/{id}', 'PermitController@approval_Supervisor')->name('AprrovalSupervisor');

Route::get('reject-admin/{id}', 'PermitController@reject_admin')->name('RejectAdmin');

Route::get('reject-supervisor/{id}', 'PermitController@reject_supervisor')->name('RejectSupervisor');