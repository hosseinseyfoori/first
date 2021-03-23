<?php

Route::namespace('hosseinseyfoori\first\Http\Controllers')->group(function (){
Route::get('/admin','AdminController@index')->middleware('admin:protected');
Route::get('/admin/show','AdminController@show');
});
