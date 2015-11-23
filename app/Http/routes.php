<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::get('/','Home@index');

Route::get('/404', array(
    'uses'=>'Home@404',
    'as'=>'404'
));
Route::get('/basket', array(
    'uses'=>'Home@basket',
    'as'=>'basket'
));
Route::get('/blog', array(
    'uses'=>'Home@blog',
    'as'=>'blog'
));


Route::get('/category/{value}', array(
    'uses'=>'Home@category',
    'as'=>'category'
));
Route::get('/category_full', array(
    'uses'=>'Home@category_full',
    'as'=>'category_full'
));

Route::get('/category_right', array(
    'uses'=>'Home@category_right',
    'as'=>'category_right'
));


Route::get('/checkout', array(
    'uses'=>'Home@checkout',
    'as'=>'checkout'
));

Route::get('/contact', array(
    'uses'=>'Home@contact',
    'as'=>'contact'
));

Route::get('/customer', array(
    'uses'=>'Home@customer',
    'as'=>'customer'
));

Route::get('/order', array(
    'uses'=>'Home@order',
    'as'=>'order'
));

Route::get('/wishlist', array(
    'uses'=>'Home@wishlist',
    'as'=>'wishlist'
));

Route::get('/detail', array(
    'uses'=>'Home@detail',
    'as'=>'detail'
));

Route::get('/faq', array(
    'uses'=>'Home@faq',
    'as'=>'faq'
));


Route::get('/text', array(
    'uses'=>'Home@text',
    'as'=>'text'
));


Route::get('/text_right', array(
    'uses'=>'Home@text_right',
    'as'=>'text_right'
));

Route::get('/register', array(
    'uses'=>'Home@register',
    'as'=>'register'
));

/*
Route::get('/post/new', array(
    'uses'=>'BlogController@newPost',
    'as'=>'newPost'
));
*/