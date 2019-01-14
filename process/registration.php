<?php
require_once '../autoload/init.php';

if (!Input::exists('post')) { 
    Redirect::to('./index.php');
}

if (!Token::check('registration', Input::get('token'))) { 
    Redirect::to('./register.php');
}

$error = 0;
$message = '';
$registrationId =  Input::get('registrationId');
$email =  Input::get('email');
$password =  Input::get('password');
$confirmePassword =  Input::get('confirmePassword'); 

if(empty($email)) {
    $error = 1; 
}

if(empty($password)) {
    $error = 1; 
}

if(empty($confirmePassword)) {
    $error = 1; 
}

if($error == '1') {  
    $error = 1;  
    Session::put('errorMsg', 'Invalid inputs!.');
    Redirect::to('../register.php');
    exit();
} 

if($password !== $confirmePassword) {
    $error = 1; 
    Session::put('errorPwd', 'Confirme password not matched!.');
    Redirect::to('../register.php');
    exit();
}

$registration = new Registration();

if($registration->exists($email)) {  
    Session::put('errorMsg', 'Email already register!.');
    Redirect::to('../register.php');
    exit();
} 

$data = array(
    "registrationId"=>$registrationId,
    "email"=>$email, 
    "password"=>$password                         
);

if (empty($data)) {
    Session::put('errorMsg', 'Some problem occured. please try again !.');
    Redirect::to('../register.php');
    exit();
}

if (!is_array($data)) {
    Session::put('errorMsg', 'Some problem occured. please try again !.');
    Redirect::to('../register.php');
    exit();
}

if(!$registration->doRegistration($data)){
    Session::put('errorMsg', 'Some problem occured. please try again !.');
    Redirect::to('../register.php');
    exit();
} 

Session::put('errorMsg', 'Thank you for registration!.');
Redirect::to('../thankyou.php');
exit();
