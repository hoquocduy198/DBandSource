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
//frontend

// use Symfony\Component\Routing\Annotation\Route;

// use Illuminate\Routing\Route;

Route::get('/','HomeController@index');
Route::get('/trang-chu',['as'=>'trang-chu','uses'=>'HomeController@index']);

//category_product_index
Route::get('/Danh-muc-san-pham/{category_product_id}','CategoryProduct@show_category_home');
Route::get('/Danh-muc-hieu-san-pham/{brand_product_id}','BrandProduct@show_brand_home');

//productDetail

Route::get('/product-detail/{product_id}','ProductController@detail_product');


//order

Route::get('/all-order','CartController@show_order');
Route::get('/unactive-checkout/{checkout_id}','CartController@unactive_checkout');
Route::get('/delete-checkout/{checkout_id}','CartController@delete_checkout');

//ShoppingCart

Route::get('/add-product-shopping/{product_id}','CartController@add_cart');
Route::get('/them-sl/{rowId}','CartController@add_qty_cart');
Route::get('/tru-sl/{rowId}','CartController@down_qty_cart');
Route::get('/delete-cart/{rowId}','CartController@delete_cart');
Route::get('/gio-hang',['as'=>'giohang','uses'=>'CartController@show_cart']);
Route::post('/get-name','CartController@address');
Route::post('/get-dis','CartController@district');
Route::post('/checkout','CartController@checkout');
Route::get('/oder/{checkout_id_oder}','CartController@oder');
//backend
Route::get('/admin','AdminController@index');
Route::get('/dashboard','AdminController@show_dashboard');
Route::get('/logout','AdminController@logout');
Route::post('/admin-dashboard','AdminController@dashboard');

//categoryProduct
Route::get('/add-category-product','CategoryProduct@add_category_product');
Route::get('/all-category-product','CategoryProduct@all_category_product');

Route::get('/edit-category-product/{category_product_id}','CategoryProduct@edit_category_product');
Route::get('/delete-category-product/{category_product_id}','CategoryProduct@delete_category_product');

Route::get('/unactive-category-product/{category_product_id}','CategoryProduct@unactive_category_product');
Route::get('/active-category-product/{category_product_id}','CategoryProduct@active_category_product');

Route::post('/save-category-product','CategoryProduct@save_category_product');
Route::post('/update-category-product/{category_product_id}','CategoryProduct@update_category_product');

//brandProduct
Route::get('/add-brand-product','BrandProduct@add_brand_product');
Route::get('/all-brand-product','BrandProduct@all_brand_product');

Route::get('/edit-brand-product/{brand_product_id}','BrandProduct@edit_brand_product');
Route::get('/delete-brand-product/{brand_product_id}','BrandProduct@delete_brand_product');

Route::get('/unactive-brand-product/{brand_product_id}','BrandProduct@unactive_brand_product');
Route::get('/active-brand-product/{brand_product_id}','BrandProduct@active_brand_product');

Route::post('/save-brand-product','BrandProduct@save_brand_product');
Route::post('/update-brand-product/{Brand_product_id}','brandProduct@update_brand_product');
//ProductController
Route::get('/add-product','ProductController@add_product');
Route::get('/all-product','ProductController@all_product');

Route::get('/edit-product/{product_id}','ProductController@edit_product');
Route::get('/delete-product/{product_id}','ProductController@delete_product');

Route::get('/unactive-product/{product_id}','ProductController@unactive_product');
Route::get('/active-product/{product_id}','ProductController@active_product');

Route::post('/save-product','ProductController@save_product');
Route::post('/update-product/{product_id}','ProductController@update_product');
//search
Route::post('/search-product','SearchController@search_product');
Route::get('/cua-hang','SearchController@index');
//Đếm sp trong thư mục
// Route::get('/count-product','CountController@count_product');
// Route::get('/update-category-product/{}')

//typeaheah
Route::get('search',['as'=>'search','uses'=>'SearchControllers@search']);
Route::get('autocomplete',[ 'as'=>'autocomplete','uses'=>'SearchControllers@autocomplete']);

//login lgout
Route::get('/dang-nhap',[
       'as'=>'login',
       'uses'=>'HomeController@getLogin'
   ]);
   
   Route::post('/dang-nhap',[
       'as'=>'login',
       'uses'=>'HomeController@postLogin'
   ]);
   
   Route::get('/dang-ki',[
       'as'=>'signin',
       'uses'=>'HomeController@getSignin'
   ]);
   
   Route::post('/dang-ki',[
       'as'=>'signin',
       'uses'=>'HomeController@postSignin'
   ]);
   
   Route::get('/dang-xuat',[
       'as'=>'logout',
       'uses'=>'HomeController@postLogout'
   ]);
   //api
   Route::get('/client','HttpClientController@getclient');