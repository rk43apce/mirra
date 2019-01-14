<?php
class Token {

    public static function generate($tokenName) {

        return Session::put($tokenName, md5(uniqid()));
    }
    
    public static function check($tokenName, $ToeknValue) {

    if(Session::exists($tokenName) && $ToeknValue === Session::get($tokenName)) {
        Session::delete($tokenName);
        return true;
    }

    return false;
    }
    
}