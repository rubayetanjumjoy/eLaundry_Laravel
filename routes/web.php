<?php
use Illuminate\Support\Facades\Routes; 
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
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
 
 
route::get('/master', function()
{
    return view('master');
});
 
route::post('/login','UserController@login');
route::get('/product','productController@index');
route::get('/details/{id}','productController@detail');
route::post('/add_to_cart','productController@addToCart');
route::get('/cartlist','productController@cartlist');
route::get('/removecart/{id}','productController@removecartitem');
route::get('/logout','UserController@logout');
route::get('/ordernow','productController@ordernow');
route::post('/orderplace','productController@orderplace');
route::get('/myorders','productController@myorders');
route::get('/signup','UserController@signup');
route::post('/master',  'UserController@insertregi');
 