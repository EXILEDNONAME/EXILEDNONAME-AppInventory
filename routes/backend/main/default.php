<?php

// DATA-SUPPLIERS
Route::group([
  'as' => 'data-supplier.',
  'prefix' => 'dashboard/data/supplier',
  'namespace' => 'Backend\Main',
], function(){
  Route::get('status-done/{id}', 'DataSupplierController@status_done')->name('status-done');
  Route::get('status-pending/{id}', 'DataSupplierController@status_pending')->name('status-pending');
  Route::get('enable/{id}', 'DataSupplierController@enable')->name('enable');
  Route::get('disable/{id}', 'DataSupplierController@disable')->name('disable');
  Route::get('status/{id}/{slug}', 'DataSupplierController@status')->name('status');
  Route::get('delete/{id}', 'DataSupplierController@delete')->name('delete');
  Route::get('deleteall', 'DataSupplierController@deleteall')->name('deleteall');
  Route::resource('/', 'DataSupplierController')->parameters(['' => 'id']);
});

// JENIS-BARANG
Route::group([
  'as' => 'jenis-barang.',
  'prefix' => 'dashboard/data/jenis-barang',
  'namespace' => 'Backend\Main',
], function(){
  Route::get('status-done/{id}', 'JenisBarangController@status_done')->name('status-done');
  Route::get('status-pending/{id}', 'JenisBarangController@status_pending')->name('status-pending');
  Route::get('enable/{id}', 'JenisBarangController@enable')->name('enable');
  Route::get('disable/{id}', 'JenisBarangController@disable')->name('disable');
  Route::get('status/{id}/{slug}', 'JenisBarangController@status')->name('status');
  Route::get('delete/{id}', 'JenisBarangController@delete')->name('delete');
  Route::get('deleteall', 'JenisBarangController@deleteall')->name('deleteall');
  Route::resource('/', 'JenisBarangController')->parameters(['' => 'id']);
});

// MERK-BARANG
Route::group([
  'as' => 'merk-barang.',
  'prefix' => 'dashboard/data/merk-barang',
  'namespace' => 'Backend\Main',
], function(){
  Route::get('status-done/{id}', 'MerkBarangController@status_done')->name('status-done');
  Route::get('status-pending/{id}', 'MerkBarangController@status_pending')->name('status-pending');
  Route::get('enable/{id}', 'MerkBarangController@enable')->name('enable');
  Route::get('disable/{id}', 'MerkBarangController@disable')->name('disable');
  Route::get('status/{id}/{slug}', 'MerkBarangController@status')->name('status');
  Route::get('delete/{id}', 'MerkBarangController@delete')->name('delete');
  Route::get('deleteall', 'MerkBarangController@deleteall')->name('deleteall');
  Route::resource('/', 'MerkBarangController')->parameters(['' => 'id']);
});

// DATA-BARANG
Route::group([
  'as' => 'data-barang.',
  'prefix' => 'dashboard/stok-barang',
  'namespace' => 'Backend\Main',
], function(){
  Route::get('status-done/{id}', 'StokBarangController@status_done')->name('status-done');
  Route::get('status-pending/{id}', 'StokBarangController@status_pending')->name('status-pending');
  Route::get('enable/{id}', 'StokBarangController@enable')->name('enable');
  Route::get('disable/{id}', 'StokBarangController@disable')->name('disable');
  Route::get('status/{id}/{slug}', 'StokBarangController@status')->name('status');
  Route::get('delete/{id}', 'StokBarangController@delete')->name('delete');
  Route::get('deleteall', 'StokBarangController@deleteall')->name('deleteall');
  Route::resource('/', 'StokBarangController')->parameters(['' => 'id']);
});
