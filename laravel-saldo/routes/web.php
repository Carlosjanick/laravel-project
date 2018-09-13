<?php

Route::get('/', 'Site\SiteController@index')->name('site');

Route::group(['middleware' => ['auth'], 'namespace'=> 'Admin', 'prefix' => 'admin'], function(){   //namespace Admin -> Admin\AdminController ... prefix url admin/...
    #-- balance 
    Route::get('/', 'AdminController@index')->name('admin.home'); //admin
    Route::get('balance', 'BalanceController@index')->name('admin.balance');  //admin/balance
    
    #-- Deposito
    Route::get('deposit', 'BalanceController@deposit')->name('balance.deposit');   //admin/deposit
    Route::post('deposit', 'BalanceController@depositStore')->name('balance.store');   //admin/deposit  //post
   
    #-- Retirada
    Route::get('withdrawn', 'BalanceController@withdrawn')->name('balance.withdrawn');    //admin/withdrawn
    Route::post('withdrawn', 'BalanceController@withdrawnStore')->name('withdrawn.estore');    //admin/withdrawn //post

    #-- Transfer
    Route::get('transfer', 'BalanceController@transfer')->name('balance.transfer');    //admin/transfer 
    Route::post('comfirm-transfer', 'BalanceController@confirmTransfer')->name('confirm.transfer');    //admin/comfirm-transfer //post
    Route::post('transfer', 'BalanceController@transferStore')->name('transfer.store');    //admin/transfer //post
    
    #-- Historic
    Route::get('historic', 'BalanceController@historics')->name('admin.historic');  //admin/historic
    #-- Search
    Route::any('historic-search', 'BalanceController@searchHistorics')->name('historic.search');  # -- recebe qualquer tipo de requisiçao para poder fazer o filtro certo sem perder a paginação
});

Auth::routes();

# -- perfil utilizador
Route::get('minha-conta', 'Admin\UserController@profile')->name('profile')->middleware('auth');
Route::post('perfil-update', 'Admin\UserController@profileUpdate')->name('profile.update')->middleware('auth');

//autorization
Route::group(['prefix' => 'admin', 'middleware' => ['role:admin']], function() {
    Route::resource('roles','RoleController');
    //Route::resource('users','UserController');
});
