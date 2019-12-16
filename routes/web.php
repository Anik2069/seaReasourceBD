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

Route::get('/', function () {
    return view('customerview.index');
});

Auth::routes();

Route::get('/home', 'HomeController@index');



Route::get('/adminlogin', function () {
    return view('admin.login');
});
Route :: post ('/loginadmin','AdminController@index');


Route::group(['middleware' => 'checkuser'],function () {
    Route::get('/adminhome', function () {
        return view('admin.index');
    });

    Route::post('/productinsert', 'ProductController@productinsert')->name('productinsert');

    Route::get('/productpost', 'ProductController@viewproduct');
    Route::get('/createpost', 'ProductController@createpost');


    Route::get('/checkmessage', 'MessageController@viewMessage');
    Route::get('/blogs', 'BlogsController@viewblogs');
    Route::get('/createblogs', 'BlogsController@viewpage');
    Route::post('/uploadblog', 'BlogsController@store');
    Route::get('/notification', 'CommentController@viewnotification');


    Route::get('/invoice/{id}', 'OrderController@invoicepage');

    Route::get('/preview/{id}', 'ProductController@preview');

    Route::get('/mis', 'OrderController@misview');

    Route::get('/misyear', 'OrderController@misviewyear');
    Route::post('/submityear', 'OrderController@misviewyear1');

    Route::post('/submityear1', 'OrderController@viewaccount1');

    Route::get('/account', 'OrderController@viewaccount');


    Route::get('/dealers', 'DealersController@index');
    Route::post('/adddealers', 'DealersController@adddealers');
    Route::get('/profile/{id}', 'DealersController@viewprofile');
    Route::post('/addincoming', 'IncomingController@history');
    Route::get('/deletein/{id}', 'IncomingController@del');
    Route::get('/deleteout/{id}', 'OutgoingController@del');

    Route::get('/deleteproduct/{id}', 'ProductController@deleteproduct');
    Route::get('/edit/{id}', 'ProductController@editproduct');
    Route::post('/editproduct', 'ProductController@editproduct1');


    Route::get('/dealersinovice/{id}', 'DealersController@invoice');


    Route::post('/addout', 'OutgoingController@history');
    Route::get('/addclient',function () {
        return view('admin.clientadd');
    });
    Route::get('/logout','AdminController@logout');

});



Route::get('/foodview','ProductController@viewCustomer');
Route::get('/itemview','ProductController@viewCustomer1');
Route::get('/foodblog','ProductController@viewCustomer2');
Route::get('/itemsblog','ProductController@viewCustomer3');
Route::get('/ordercheck','OrderController@vieworder');
Route::get('/blogview/{id}','ProductController@viewblog');
Route::post('postcomment','CommentController@postcomment');

















//customer



Route::post('/sendmessage','MessageController@sendmessage');


Route::get('/home', 'ProductController@viewhome');
Route::get('/contact', function () {
    return view('customerview.contact');
});
Route::get('/admin', function () {
    return view('customerview.index1');
});
Route::get('/food_details/{id}','ProductController@fooddetails');
Route::post('/order',"OrderController@index");
Route::get('/users',"ChartContoller@index");


