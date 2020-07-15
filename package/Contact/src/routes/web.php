<?php

Route::group(['namespace'=>'Yadav\Contact\Http\Controller'], function(){


    Route::get('contact', 'ContactController@index')->name('contact');

    Route::post('contact','ContactController@send');
    
});

?>