<?php

// Route::group(['prefix' => 'painel'], function() {
//     Route::get('/grupo1', function() {return 'grupo1';});
//     Route::get('/grupo2', function() {return 'grupo2';});    
// });
Auth::routes();

Route::get('/', 'SiteController@index');//->middleware('auth');
Route::get('/contato', 'SiteController@contato');
Route::get('/categoria/{id}', 'SiteController@categoria');

Route::group(['middleware' => ['auth']], function () {
    
    Route::get('balance', 'Admin\BalanceController@index');
    Route::get('balance/deposit', 'Admin\BalanceController@deposit')->name('balance.deposit');
    Route::post('balance/store', 'Admin\BalanceController@store')->name('balance.store');
    

    Route::resource('produtos', 'Painel\ProdutoController');
    Route::get('/home', 'HomeController@index')->name('home');

});

// Route::get('/produtos/test', 'Painel\ProdutoController@test');
// Route::get('/produtos', 'Painel\ProdutoController@index');
// Route::get('/produtos/cadastro', 'Painel\ProdutoController@cadastro');
// Route::post('/produtos/store', 'Painel\ProdutoController@store');
// Route::get('/produtos/edit/{id}', 'Painel\ProdutoController@edit');

Route::get('/empresa', function() {
    return 'Em construção';
});




