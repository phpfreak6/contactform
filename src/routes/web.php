<?php
    
	
   
    Route::group(['namespace' => 'phpfreak6\Contactform\Http\Controllers', 'middleware' => ['web']], function(){
        Route::get('contact', 'ContactFormController@index');
        Route::post('contact', 'ContactFormController@sendMail')->name('contact');
    });
	
?>