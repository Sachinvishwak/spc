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


Route::get('/home', 'HomeController@index')->name('home');
Auth::routes();


Route::group(['prefix' => 'admin', 'middleware' => 'auth:admin'], function(){
  Route::get('/', 'AdminController@index')->name('admin.dashboard');
  Route::get('dashboard', 'AdminController@index')->name('admin.dashboard');
  Route::get('assets', 'AdminController@assets')->name('admin.assets');
  Route::get('createAsset', 'AdminController@createAsset')->name('admin.createAsset');
  Route::get('production', 'AdminController@production')->name('admin.production');
  Route::get('insight', 'AdminController@insight')->name('admin.insight');
  Route::get('maintenence', 'AdminController@maintenence')->name('admin.maintenence');
  Route::get('report', 'AdminController@report')->name('admin.report');


  Route::get('Insights-Equipment', 'AdminController@Insights_Equipment');
  Route::get('Insight-propeller-live-data-chart','AdminController@Insight_propeller_live_data_chart');
  Route::get('Insights-Predictive-Analysis','AdminController@Insight_Predictive_Analysis');
  Route::get('Insights-Propellor-Summary','AdminController@Insights_Propellor_Summary');


  

  //assets form submit
  Route::post('create_asset', 'AdminController@assetFormSubmit')->name('admin.create_asset');
  Route::post('update_asset', 'AdminController@updateAsset')->name('admin.update_asset');
  Route::get('delete_asset/{id}', 'AdminController@assetDelete')->name('admin.delete_asset');
  Route::get('view_asset/{id}', 'AdminController@assetView')->name('admin.view_asset');
  Route::get('edit_asset/{id}', 'AdminController@assetEdit')->name('admin.edit_asset');

  //ticket create ticket
  Route::post('create_ticket', 'AdminController@ticketFormSubmit')->name('admin.create_ticket');
  Route::post('update_ticket', 'AdminController@updateTicket')->name('admin.update_ticket');
  Route::get('delete_ticket/{id}', 'AdminController@ticketDelete')->name('admin.delete_ticket');
  Route::get('view_ticket/{id}', 'AdminController@ticketView')->name('admin.view_ticket');
  Route::get('edit_ticket/{id}', 'AdminController@ticketEdit')->name('admin.edit_ticket');
});

Route::prefix('admin')->group(function () {
  Route::get('login', 'Auth\Admin\LoginController@login')->name('admin.auth.login');
  Route::post('login', 'Auth\Admin\LoginController@loginAdmin')->name('admin.auth.loginAdmin');
  Route::post('logout', 'Auth\Admin\LoginController@logout')->name('admin.auth.logout');
});



