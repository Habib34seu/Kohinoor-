<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'App\Http\Controllers\HomeController@index');
Route::get('/admin', 'App\Http\Controllers\AdminController@index');


// ===========  Brand Category router Start====================================================
Route::get('/brandCategory', 'App\Http\Controllers\BrandCategoryController@index');
Route::post('/brc-create', 'App\Http\Controllers\BrandCategoryController@store')->name('brc-create');
Route::get('/brcshow/{id}', "App\Http\Controllers\BrandCategoryController@show")->name('brcshow');
// ===========  Brand Category router End ====================================================

// ===========  Brand  router Start====================================================
Route::get('/brand', 'App\Http\Controllers\BrandController@index');
Route::post('/b-create', 'App\Http\Controllers\BrandController@store')->name('b-create');
Route::get('/bshow/{id}', "App\Http\Controllers\BrandController@show")->name('bshow');
// ===========  Brand  router End ====================================================


// ===========  Product Category  router Start====================================================
Route::get('/productCategory', 'App\Http\Controllers\ProductCategoryController@index');
Route::post('/pc-create', 'App\Http\Controllers\ProductCategoryController@store')->name('pc-create');
Route::get('/pcshow/{id}', "App\Http\Controllers\ProductCategoryController@show")->name('pcshow');
// ===========  Product Category router End ====================================================


// ===========  Product SubCategory  router Start====================================================
Route::get('/productSubCategory', 'App\Http\Controllers\ProductSubCategoryController@index');
Route::post('/psc-create', 'App\Http\Controllers\ProductSubCategoryController@store')->name('psc-create');
Route::get('/pscshow/{id}', "App\Http\Controllers\ProductSubCategoryController@show")->name('pscshow');
// ===========  Product SubCategory router End ====================================================


// ===========  Product SubCategory  router Start====================================================
Route::get('/product', 'App\Http\Controllers\ProductController@index');
Route::post('/p-create', 'App\Http\Controllers\ProductController@store')->name('p-create');
Route::get('/pshow/{id}', "App\Http\Controllers\ProductController@show")->name('pshow');
// ===========  Product SubCategory router End ====================================================


// ===========  About router ====================================================
Route::get('/about', 'App\Http\Controllers\AboutController@index');
Route::post('/about-create', 'App\Http\Controllers\AboutController@store')->name('about-create');
Route::get('/abshow/{id}', "App\Http\Controllers\AboutController@show")->name('abshow');
// ===========  Half About End ====================================================

// ===========  Half yearly router ====================================================
Route::get('/half-yearly', 'App\Http\Controllers\HalfYearlyReportController@index_half');
Route::post('/halfyear-create', 'App\Http\Controllers\HalfYearlyReportController@store')->name('halfyear-create');
Route::get('/hshow/{id}', "App\Http\Controllers\HalfYearlyReportController@show")->name('hshow');
// ===========  Half yearly router End ====================================================


// ===========  PSI router ====================================================
Route::get('/psi', 'App\Http\Controllers\PSIController@index');
Route::post('/psi-create', 'App\Http\Controllers\PSIController@store')->name('psi-create');
// ===========  PSI router End ====================================================


// ===========  Corporate Governance router ====================================================
Route::get('/cg', 'App\Http\Controllers\CorporateGovernanceController@index');
Route::post('/cg-create', 'App\Http\Controllers\CorporateGovernanceController@store')->name('cg-create');
Route::get('/cshow/{id}', "App\Http\Controllers\CorporateGovernanceController@show")->name('cshow');
// ===========  Corporate Governance router End ====================================================


// ===========  Quarterly Result router ====================================================
Route::get('/qr', 'App\Http\Controllers\QuarterlyResultController@index');
Route::post('/qr-create', 'App\Http\Controllers\QuarterlyResultController@store')->name('qr-create');
Route::get('/qshow/{id}', "App\Http\Controllers\QuarterlyResultController@show")->name('qshow');
// ===========  Quarterly Result router End ====================================================
