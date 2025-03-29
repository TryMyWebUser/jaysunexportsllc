<?php

    include "../libs/load.php";

    // Start a session
    Session::start();

    // Redirect if the user is already logged in
    if (Session::get('login_user'))
    {
        header('Location: welcome.php');
        exit;
    }

    $error = "";

    // Check if form is submitted
    if ($_SERVER['REQUEST_METHOD'] === 'POST')
    {
        // Check if both username and password keys exist in $_POST
        if (isset($_POST['submit']) && isset($_POST['username']) && isset($_POST['password']))
        {
            $username = $_POST['username'] ?? "";
            $password = $_POST['password'] ?? "";
            $error = User::login($username, $password);
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta content="text/html; charset=UTF-8" http-equiv="Content-Type" />
        <meta content="IE=edge" http-equiv="X-UA-Compatible" />
        <meta content="width=device-width, initial-scale=1.0" name="viewport" />

        <link href="assets/images/logo/favicon.png" rel="icon" type="image/x-icon" />
        <link href="assets/images/logo/favicon.png" rel="shortcut icon" type="image/x-icon" />

        <title>Admin - Login</title>

        <!--font-awesome-css-->
        <link href="assets/vendor/fontawesome/css/all.css" rel="stylesheet" />

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/" rel="preconnect" />
        <link crossorigin href="https://fonts.gstatic.com/" rel="preconnect" />
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&amp;display=swap" rel="stylesheet" />

        <!-- iconoir icon css  -->
        <link href="assets/vendor/ionio-icon/css/iconoir.css" rel="stylesheet" />

        <!-- tabler icons-->
        <link href="assets/vendor/tabler-icons/tabler-icons.css" rel="stylesheet" type="text/css" />

        <!-- Bootstrap css-->
        <link href="assets/vendor/bootstrap/bootstrap.min.css" rel="stylesheet" type="text/css" />

        <!-- App css-->
        <link href="assets/css/style.css" rel="stylesheet" type="text/css" />

        <!-- Responsive css-->
        <link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />
    </head>

    <body class="sign-in-bg">
        <div class="app-wrapper d-block">
            <div class="main-container">
                <!-- Body main section starts -->
                <div class="container">
                    <div class="row sign-in-content-bg">
                        <div class="col-lg-6 image-contentbox d-none d-lg-block">
                            <div class="form-container">
                                <div class="signup-content mt-4">
                                    <span>
                                        <img alt="" style="width: 4rem;" class="img-fluid" src="../images/homepage-6/header/logo-b.png" />
                                    </span>
                                </div>

                                <div class="signup-bg-img">
                                    <img alt="" class="img-fluid" src="assets/images/login/01.png" />
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 form-contentbox">
                            <div class="form-container">
                                <form class="app-form rounded-control" method="POST">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="mb-5 text-center text-lg-start">
                                                <h2 class="text-primary-dark f-w-600">Welcome To Admin!</h2>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="mb-3">
                                                <label class="form-label" for="username">Username or Email</label>
                                                <input class="form-control" id="username" name="username" placeholder="Enter Your Username or Email" type="text" required/>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="mb-3">
                                                <label class="form-label" for="password">Password</label>
                                                <input class="form-control" id="password" name="password" placeholder="Enter Your Password" type="password" required/>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="mb-3">
                                                <button class="btn btn-light-primary w-100" type="submit" name="submit" role="button">Login</button>
                                            </div> 
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Body main section ends -->
            </div>
        </div>
        <!-- latest jquery-->
        <script src="assets/js/jquery-3.6.3.min.js"></script>

        <!-- Bootstrap js-->
        <script src="assets/vendor/bootstrap/bootstrap.bundle.min.js"></script>
    </body>
</html>