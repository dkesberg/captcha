<?php

Route::get('/captcha', function()
{
    if (Input::has('hid')) {
        return Captcha::create(null, Input::get('hid'));
    }
    
	return Captcha::create();
});
