<?php
require_once './autoload.php';
// if (Input::exists('post')) { 


//     // Token::check('registration', Input::get('token'));

//     var_dump(    Token::check('registration', Input::get('token')));

//     $error = 0;
//     $message = '';
//     $registrationId =  Input::get('registrationId');
//     $email =  Input::get('email');
//     $password =  Input::get('password');
//     $confirmePassword =  Input::get('confirmePassword'); 

//     if(empty($email)) {
//         $error = 1; 
//     }

//     if(empty($password)) {
//         $error = 1; 
//     }

//     if(empty($confirmePassword)) {
//         $error = 1; 
//     }

//     if($password !== $confirmePassword) {
//         $error = 1; 
//         Session::put('errorPwd', 'Confirme password not matched!.');
//     }

//     if($error == '0') {       

//         $registration = new Registration();

//         if(!$registration->exists($email)) {    
    
//             $data = array(
//                 "registrationId"=>$registrationId,
//                 "email"=>$email, 
//                 "password"=>$password                         
//             );
    
//             if($registration->doRegistration($data)){
//                 Session::put('errorMsg', 'Thank you for registration!.');
//                 Redirect::to('./thankyou.php');
//                 exit();
//             } else {
//                 Session::put('errorMsg', 'Some problem occured!. Try again.');
//             }
    
//         } else {
//             Session::put('errorMsg', 'Email already register!.');
//         }
        
//     } else {
//         Session::put('errorMsg', 'All fields are required!.');
//     }

// }


?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Webpixels">

    <title>Login to Mirra Healthcare</title>

   <?php include './include/csslinks.php'; ?> 

</head>

<body>


    <header class="header-transparent" id="header-main">
        <!-- Search -->
        <?php include './include/search.php' ?>  
        <!-- Main navbar -->
        <nav class="navbar navbar-main navbar-expand-lg navbar-sticky navbar-light bg-white" id="navbar-main">
            <?php include './include/header.php' ?>
        </nav>

    </header>

    <main>

        <section class="slice slice-xl">
            
            <div class="container pt-lg">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6">

                        <div class="card shadow zindex-100">
                            <div class="card-body px-md-5 py-5">
                                <div class="text-center mb-5">
                                    <h6 class="h3">Create your free account</h6>
                                    <p class="text-danger mb-0">
                                    <?php echo (Session::exists('errorMsg')) ? Session::flash('errorMsg'). '<br>' : ""; ?>

                                    <?php echo (Session::exists('errorPwd')) ? Session::flash('errorPwd') : ""; ?>
                                    </p>
                                </div>
                                <span class="clearfix"></span>
    
                                <form role="form" method='post' action='./process/registration.php' >
                                    <div class="form-group">
                                        <label class="form-control-label">Email address</label>
                                        <div class="input-group input-group-transparent">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                                            </div>
                                            <input type="email" class="form-control" id="input-email" placeholder="name@example.com" name='email' required>
                                        </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="form-control-label">Password</label>
                                        <div class="input-group input-group-transparent">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                                            </div>
                                            <input type="password" class="form-control" id="input-password" placeholder="********" name='password' required>
                                            <div class="input-group-append">
                                                <span class="input-group-text"> 
                                                <!-- <i class="fas fa-eye"></i> -->
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-control-label">Confirm password</label>
                                        <div class="input-group input-group-transparent">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                                            </div>
                                            <input type="password" class="form-control" id="input-password-confirm" placeholder="********" name='confirmePassword' required>
                                        </div>
                                    </div>
                                    <div class="my-4">
                                        <div class="custom-control custom-checkbox">
                                            <input class="custom-control-input" id="customCheckRegister" type="checkbox" name='agree' required>
                                            <label class="custom-control-label" for="customCheckRegister">
                                                <span>I agree to the <a href="./terms.php">Terms and Conditions</a> and <a href="./privacy.php">Privacy Policy</a>.</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="row align-items-center">
                                        <div class="col-sm-7">
                                            <input type='hidden' name='token' value='<?php echo token::generate('registration');?>'>    
                                            <input type='hidden' name='registrationId' value='<?php echo time();?>'>
                                            <button type="submit" class="btn btn-primary mb-3 mb-sm-0">Create account</button>
                                        </div>
                                        <div class="col-sm-5 text-sm-right">
                                            <!-- <span class="small d-sm-block d-md-inline">Already registered?</span>
                                            <a href="create-profile.html" class="small font-weight-bold">Sign in</a> -->
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

    </main>


    <footer class="footer footer-dark bg-gradient-primary ">
        <?php require './include/footer.php';?>
    </footer>
    <?php require './include/footerlinks.php';?>
</body>

</html>
