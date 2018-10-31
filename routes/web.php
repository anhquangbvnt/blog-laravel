<?php
Route::prefix('admin')->group(function (){
    Route::get('/', 'Admin\HomeController@index');
    Route::get('/user', 'Admin\UserController@index')->name('listAdminUser');
    Route::get('/user/{id}/edit', 'Admin\UserController@update')->name('editAdminUser');
    Route::get('/user/update', 'Admin\UserController@delete')->name('deleteAdminUser');
    Route::get('/user/delete', 'Admin\UserController@delete')->name('deleteAdminUser');
    Route::get('/user/add', 'Admin\UserController@getadd')->name('addAdminUser');
    Route::post('/user', 'UserController@postadd');
});