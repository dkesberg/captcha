<?php

Validator::extend('captcha', function($attribute, $value, $parameters)
{
    if (is_array($parameters) && isset($parameters[0])) {
        return Captcha::check($value, $parameters[0]);    
    }    
    return Captcha::check($value);
});
