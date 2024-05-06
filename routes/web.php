<?php

    use Illuminate\Support\Facades\Route;
    use Illuminate\App\Http\Controllers\FrontController;
    use Illuminate\App\Http\Controllers\SeccionController;
    use Illuminate\App\Http\Controllers\AJAXController;
    use Illuminate\App\Http\Controllers\Auth\LoginController;


    Route::get('/', 'FrontController@index')->name('front.home');

    Route::get('/admin', 'FrontController@admin')->name('front.admin')->middleware('checkAdminAccess');

    Auth::routes();
    Route::get('/logout', 'Auth\LoginController@logout')->name('logout');

    Route::group(['middleware' => ['auth', 'isUser']], function() {
        Route::get('home', 'HomeController@index')->name('user.home'); 
    });

    Route::group(['middleware' => ['auth', 'isAdmin']], function() {
        Route::get('homeA', 'SeccionController@index')->name('admin.index');

        Route::prefix('politicas')->name('politicas.')->group(function(){
            Route::get('/','PoliticasController@index')->name('index');
            Route::get('/edit/{id}','PoliticasController@edit')->name('edit');
            Route::put('/update/{id}','PoliticasController@update')->name('update');
        });

        Route::prefix('faqs')->name('faqs.')->group(function(){
            Route::get('/','FAQController@index')->name('index');
            Route::get('/create','FAQController@create')->name('create');
            Route::post('/store','FAQController@store')->name('store');
            Route::get('/show/{id}','FAQController@show')->name('show');
            Route::get('/edit/{id}','FAQController@edit')->name('edit');
            Route::put('/update/{id}','FAQController@update')->name('update');
            Route::delete('/destoy','FAQController@destroy')->name('destroy');
        });

        Route::prefix('secciones')->name('seccion.')->group(function(){
            Route::get('/','SeccionController@index')->name('index');
			Route::get('/{slug}','SeccionController@show')->name('show');
        });
    });

