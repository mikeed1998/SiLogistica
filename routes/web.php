<?php

    use Illuminate\Support\Facades\Route;
    use Illuminate\App\Http\Controllers\FrontController;
    use Illuminate\App\Http\Controllers\SeccionController;
    use Illuminate\App\Http\Controllers\AJAXController;
    use Illuminate\App\Http\Controllers\Auth\LoginController;
    use Illuminate\App\Http\Controllers\SliderPrincipalController;
    use Illuminate\App\Http\Controllers\EmpresaController;
    use Illuminate\App\Http\Controllers\ServicioController;


    Route::get('/', 'FrontController@index')->name('front.home');
    Route::get('/nosotros', 'FrontController@nosotros')->name('front.nosotros');
    Route::get('/contacto', 'FrontController@contacto')->name('front.contacto');
    Route::get('/servicios', 'FrontController@servicios')->name('front.servicios');
    Route::get('/servicio_detalle/{servicio}', 'FrontController@servicio')->name('front.servicio');
 
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

        Route::prefix('slider')->name('slider.')->group(function(){
            Route::get('/', 'SliderPrincipalController@index')->name('slider.index');
            Route::post('/store', 'SliderPrincipalController@store')->name('slider.store');
            Route::delete('/destroy/{slider}', 'SliderPrincipalController@destroy')->name('slider.destroy');
        });

        Route::prefix('empresa')->name('empresa.')->group(function(){
            Route::get('/', 'EmpresaController@index')->name('empresa.index');
            Route::post('/store', 'EmpresaController@store')->name('empresa.store');
            Route::delete('/destroy/{empresa}', 'EmpresaController@destroy')->name('empresa.destroy');
        });

        Route::prefix('servicio')->name('servicio.')->group(function(){
            Route::get('/', 'ServicioController@index')->name('servicio.index');
            Route::get('/create', 'ServicioController@create')->name('servicio.create');
            Route::post('/store', 'ServicioController@store')->name('servicio.store');
            Route::get('/edit/{servicio}', 'ServicioController@edit')->name('servicio.edit');
            Route::put('/update/{servicio}', 'ServicioController@update')->name('servicio.update');
            Route::delete('/destroy/{servicio}', 'ServicioController@destroy')->name('servicio.destroy');
        });

        Route::prefix('secciones')->name('seccion.')->group(function(){
            Route::get('/','SeccionController@index')->name('index');
			Route::get('/{slug}','SeccionController@show')->name('show');
        });
    });

    Route::patch('/editarajax', 'AJAXController@editarajax');
    Route::post('/switch_inicio', 'AJAXController@switch_inicio')->name('ajax.switch_inicio');




