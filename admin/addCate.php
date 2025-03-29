<?php

    include "../libs/load.php";

    // Start a session
    Session::start();

    if (!Session::get('login_user'))
    {
        header("Location: index.php");
        exit;
    }

    $error = "";

    // Check if form is submitted
    if ($_SERVER['REQUEST_METHOD'] === 'POST')
    {
        // Check if both username and password keys exist in $_POST
        if (isset($_POST['submit']) && isset($_POST['category']))
        {
            $cate = $_POST['category'] ?? "";
            $error = User::setCategory($cate);
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <?php include 'temp/head.php'; ?>

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
                <!-- Header Section starts -->
                <?php include "temp/header.php" ?>
                <!-- Header Section ends -->

                <!-- Body main section starts -->

                <main>
                    <div class="container-fluid">
                        <!-- Base inputs start -->
                        <div class="row">
                            <div class="col-12">
                                <div class="card card-body">
                                    <form class="form-horizontal" method="POST">
                                        <div class="mb-3">
                                            <label class="form-label">Category</label>
                                            <input type="text" class="form-control" placeholder="Enter Category" name="category" required>
                                        </div>
                                        <div class="col-12">
                                            <div class="d-md-flex align-items-center">
                                                <div class="ms-auto mt-3 mt-md-0">
                                                    <button type="submit" name="submit" class="btn btn-primary hstack gap-6">
                                                        Submit
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- Base inputs end -->
                    </div>
                </main>
            </div>
        
        </div>
        
        <?php include "temp/footer.php"; ?>
        
    </body>
</html>