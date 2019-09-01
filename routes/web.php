<?php

Route::get('/test', function () {
    return "test";
});

Auth::routes();
Route::namespace('BackEnd')->prefix('admin')->group(function(){
    Route::middleware('auth')->group(function () {
        Route::get('/', 'BrefController@index');
        Route::resource('brefs', 'BrefController');
        Route::resource('galleries', 'GalleryController');
        Route::resource('news', 'NewsController');
        Route::resource('questions', 'QuestionController');
        Route::resource('users', 'UserController')->middleware('checkAdmin');
        // Route::get('lock', 'PrefController@lock')->name('lock');
       
    });
});

Route::namespace('FrontEnd')->group(function(){
    Route::get('/' , "HomeController@index")->name('index');
    Route::get('/index' , "HomeController@index")->name('index');
    Route::get('news/{id?}' , "HomeController@news")->name('news');
    //Route::get('news/{id}' , "HomeController@show_news")->name('singleNews');
    Route::get('about' , "HomeController@about")->name('about');
    Route::get('timeline' , "HomeController@timeline")->name('timeline');
    Route::get('gallery' , "HomeController@gallery")->name('gallery');
    Route::get('faq' , "HomeController@faq")->name('faq');
    Route::get('404' , "HomeController@not_found")->name('404');
    
});
Route::fallback(function () {
    
   return redirect()->route("404");
   return view('front-end.404');
});