<?php

Route::group(['namespace' => 'Kkthen2002\Contact2\Http\Controllers'], function () {
    Route::get('contact', 'ContactController@index')->name('contact');
    Route::post('contact', 'ContactController@send');
});
