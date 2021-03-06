<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Users Route start here
Route::prefix('user')->group(function () {
    Route::get('register', "App\Http\Controllers\Auth\RegisterController@create");
    Route::post('register', "App\Http\Controllers\Auth\RegisterController@store");
    Route::get('/login', "App\Http\Controllers\Auth\LoginController@login");
    Route::post('/login', "App\Http\Controllers\Auth\LoginController@userLogin");
    Route::get('/logout', "App\Http\Controllers\Auth\LoginController@logout");
    
    
});

Route::group(['prefix' => 'user', 'middleware' => ['user']],function () {
    Route::get('/profile',"App\Http\Controllers\Auth\ProfileController@profile");
});
//Users Route end end

//home page rouets start
Route::get('/', "App\Http\Controllers\Front\DashboardController@dashboard");

Route::get('category/view', "App\Http\Controllers\Front\Category\CategoryController@categoryView");

Route::get('category/detail', "App\Http\Controllers\Front\Category\CategoryController@categoryDetail");
//home page rouets end

//categories routes start
Route::group(['prefix'=>'category','middleware' => ['user']], function (){
    Route::get('/list', "App\Http\Controllers\Front\Category\CategoryController@categoryList");
    Route::get('subcategory/list', "App\Http\Controllers\Front\Category\CategoryController@subcategoryList");
   
});
//categories routes end
 
//Quicker product add start
Route::group(['prefix'=>'subcategory','middleware' => ['user']], function (){

    Route::get('{category_id}/{sub_id}/add', "App\Http\Controllers\Front\Product\ProductController@addView");
    Route::get('showmodel', "App\Http\Controllers\Front\Product\ProductController@showmodel");
});

Route::group(['prefix' => 'product', 'middleware' => ['user']], function () {

    Route::post('addcar', "App\Http\Controllers\Front\Product\CarController@carStore");
    Route::post('addmobile', "App\Http\Controllers\Front\Product\MobilController@mobileStore");

});

//Quicker producCategory\Category


//Admin routes start here
Route::prefix('admin')->group(function (){
    Route::get('login', "App\Http\Controllers\Admin\LoginController@login");
    Route::post('login', "App\Http\Controllers\Admin\LoginController@AdminLogin");
    Route::get('logout', "App\Http\Controllers\Admin\LoginController@logout");
   
});
//Admin routes end here

//Admin Dashboard routes start here
Route::group(['prefix' => 'admin', 'middleware' => ['admin']],function () {
    Route::get('dashboard', "App\Http\Controllers\Admin\DashboardController@dashboard");
});
//category routes start here
Route::resource('category', "App\Http\Controllers\Admin\Category\CategoryController");
//category routes end here

//subcategory routes start here
Route::resource('subcategory', "App\Http\Controllers\Admin\SubCategory\SubCategoryController");
//subcategory routes end here

//brand routes start here
Route::resource('brand', "App\Http\Controllers\Admin\Brand\BrandController");
//brand routes end here

//Model routes start here
Route::resource('model', "App\Http\Controllers\Admin\Model\ModelController");
//model routes end here

//user routes start here
Route::resource('user', "App\Http\Controllers\Admin\User\UserController");
//user routes end here
//Admin Dashboard routes end here


//Vendor routes start here
Route::prefix('vendor')->group(function () {
    Route::get('register', "App\Http\Controllers\Vendor\RegisterController@create");
    Route::post('register', "App\Http\Controllers\Vendor\RegisterController@store");
    Route::get('/login', "App\Http\Controllers\Vendor\LoginController@login");
    Route::post('/login', "App\Http\Controllers\Auth\LoginController@userLogin");
    Route::get('/logout', "App\Http\Controllers\Vendor\LoginController@logout");
});
//Vendor routes end here

//Vendor Dashboard routes start here
Route::group(['prefix' => 'vendor', 'middleware' => ['vendor']], function () {
    Route::get('dashboard', "App\Http\Controllers\Admin\DashboardController@dashboard");
});
//Vendor Dashboard routes end here


