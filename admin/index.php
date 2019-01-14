<?php 
require_once '../autoload/init.php';

if (Input::exists('post')) {

	$error = 0;

	$email = Input::get('email');
	$password =Input::get('password');

	if (empty($email)) {
		$error = 1;
	}
	if (empty($password)) {
		$error = 1;
	}

	if ($error == 0) {	
		$login = new Login();
		$result =  $login->adminLogin($email, $password);
		if ($result) {	
		 	Session::put('adminId', $result['adminId']);
		 	Redirect::to('dashboard.php');	
		} else {
			Session::put('errorMsg', 'Invalid usernam/password!');
		}	
	} else {
		Session::put('errorMsg', 'Invalid input!');
	}
}	




?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">

    <title></title>
    <!-- Favicon -->
    <link rel="icon" href="../assets/img/brand/favicon.png" type="image/png">
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:300,400,600,700,800">
    <!-- Font Awesome 5 -->
    <link rel="stylesheet" href="../assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">
    <!-- Theme CSS -->
    <link rel="stylesheet" href="../assets/css/theme.css">
</head>

<body>

    <main>
        <div class="container h-100vh d-flex align-items-center">
            <div class="col">
                <div class="row justify-content-center">
                    <div class="col-md-6 col-lg-5 col-xl-4">

                        <div class="text-center mb-5">
                            <h6 class="h3">Welcome back</h6>
                            <p class="text-muted mb-0">Sign in to your account to continue</p>                             
                            <?php echo (Session::exists('errorMsg'))? Session::get('errorMsg') : ""; ?>                          
                        </div>
                        <span class="clearfix"></span>

                        <form role="form" method="post" action="">
                            <div class="form-group">
                                <label class="form-control-label">Email address</label>
                                <div class="input-group input-group-transparent">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                                    </div>
                                    <input type="email" class="form-control"  placeholder="name@example.com" name="email" required="" autofocus="">
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div>
                                        <label class="form-control-label">Password</label>
                                    </div>
                                    <div class="mb-2">
                                        <a href="recover-simple.html" class="small text-light text-unerline--dashed">Lost password?</a>
                                    </div>
                                </div>
                                <div class="input-group input-group-transparent">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-key"></i></span>
                                    </div>
                                    <input type="password" class="form-control"  placeholder="Password" name="password" required="">
                                    <div class="input-group-append">
                                        <span class="input-group-text">
                                        <i class="fas fa-eye"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center mb-3">
                                <button type="submit" class="btn btn-block btn-primary">Sign in</button>
                            </div>
                            <div class="text-center">
                                <small>Not registered?</small>
                                <a href="register-simple.html" class="small font-weight-bold">Create account</a>
                            </div>
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Core -->
    <script src="../assets/vendor/jquery/dist/jquery.min.js"></script>
    <script src="../assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/vendor/in-view/dist/in-view.min.js"></script>
    <!-- Theme JS -->
    <script src="../assets/js/theme.min.js"></script>

</body>

</html>
