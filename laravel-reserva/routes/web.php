<?php
# -- Site
Route::get('/', 'Site\SiteController@index');
Route::get('promocoes', 'Site\SiteController@promotions')->name('promotions');

# -- Panel
Route::get('panel', 'Panel\PanelController@index');

# -- Auth
Auth::routes();