<?php

    include "../libs/load.php";

    // Start a session
    Session::start();

    if (!Session::get('login_user'))
    {
        header("Location: index.php");
        exit;
    }

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta content="text/html; charset=UTF-8" http-equiv="Content-Type" />
        <meta content="IE=edge" http-equiv="X-UA-Compatible" />
        <meta content="width=device-width, initial-scale=1.0" name="viewport" />
        <meta content="" name="description" />
        <meta content="" name="keywords" />
        <meta content="Trymywebsites" name="author" />
        
        <?php include "temp/head.php" ?>

    </head>

    <body>
        <div class="app-wrapper">
            <div class="loader-wrapper">
                <div class="app-loader">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>

            <!-- Menu Navigation starts -->
            <?php include "temp/sideheader.php" ?>
            <!-- Menu Navigation ends -->
            
            <div class="app-content">
                <div class="">
                    <!-- Header Section starts -->
                    <?php include "temp/header.php" ?>
                    <!-- Header Section ends -->

                    <!-- Body main section starts -->
                    <main>
                        <div class="container-fluid mt-3">
                            <div class="row">

                                <div class="col-md-6 col-xxl-4">
                                    <div class="card project-connect-card">
                                        <div class="card-body pb-0">
                                            <div class="text-center">
                                                <h5 class="mb-2 f-s-24">Welcome, <span class="text-primary f-w-700">Admin.</span></h5>
                                                <p class="f-s-14 text-dark pb-0 txt-ellipsis-2">Here's what's happening with your store today.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </main>
                </div>
            </div>
            <!-- Body main section ends -->

            <!-- tap on top -->
            <div class="go-top">
                <span class="progress-value">
                    <i class="ti ti-chevron-up"></i>
                </span>
            </div>

            <!-- Footer Section starts-->
            <footer>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-9 col-12">
                            <ul class="footer-text">
                                <li>
                                    <p class="mb-0">2025 Design and Developed By</p>
                                </li>
                                <li><a href="https://trymywebsites.com"> Trymywebsites </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- Footer Section ends-->
        </div>

        <!-- modal -->

        <?php include "temp/footer.php" ?>

    </body>

</html>