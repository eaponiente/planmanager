<?php


Route::get('manager', '\Edgar\PlanManager\ManagerController@index');

Route::get('download', '\Edgar\PlanManager\ManagerController@download')->name('download');