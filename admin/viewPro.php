<?php

    include "../libs/load.php";

    // Start a session
    Session::start();

    if (!Session::get('login_user'))
    {
        header("Location: index.php");
        exit;
    }

    $products = Operations::getProducts();

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
                        <div class="row">
                            <?php
                                if (!empty($products)) {
                                    foreach ($products as $pro) {
                            ?>
                            <div class="col-md-6 col-lg-4 d-flex align-items-stretch">
                                <div class="card w-100">
                                    <div class="p-4 d-flex align-items-stretch h-100">
                                        <div class="row">
                                            <div class="col-4 col-md-3 d-flex align-items-center">
                                                <img src="<?= $pro['img']; ?>" class="rounded img-fluid">
                                            </div>
                                            <div class="col-8 col-md-9 d-flex align-items-center">
                                                <div>
                                                    <h5><?= $pro['title'] ?></h5>
                                                    <a href="javascript:void(0)" class="card-title link-primary fw-semibold text-dark"><?= $pro['category']; ?></a>
                                                    <p class="card-subtitle mt-1">
                                                        <a href="editPro.php?edit_id=<?= $pro['id']; ?>">
                                                            <button type="button" class="btn btn-square btn-outline-info me-1 p-1">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-width="1.5" d="m14.36 4.079l.927-.927a3.932 3.932 0 0 1 5.561 5.561l-.927.927m-5.56-5.561s.115 1.97 1.853 3.707C17.952 9.524 19.92 9.64 19.92 9.64m-5.56-5.561L12 6.439m7.921 3.2l-5.26 5.262L11.56 18l-.16.161c-.578.577-.867.866-1.185 1.114a6.6 6.6 0 0 1-1.211.749c-.364.173-.751.302-1.526.56l-3.281 1.094m0 0l-.802.268a1.06 1.06 0 0 1-1.342-1.342l.268-.802m1.876 1.876l-1.876-1.876m0 0l1.094-3.281c.258-.775.387-1.162.56-1.526q.309-.647.749-1.211c.248-.318.537-.607 1.114-1.184L8.5 9.939"/></svg>
                                                            </button>
                                                        </a>
                                                        <a href="deletePro.php?delete_id=<?= $pro['id']; ?>">
                                                            <button type="button" class="btn btn-square btn-outline-danger ms-1 p-1">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 32 32"><path fill="currentColor" d="M13.5 6.5V7h5v-.5a2.5 2.5 0 0 0-5 0m-2 .5v-.5a4.5 4.5 0 1 1 9 0V7H28a1 1 0 1 1 0 2h-1.508L24.6 25.568A5 5 0 0 1 19.63 30h-7.26a5 5 0 0 1-4.97-4.432L5.508 9H4a1 1 0 0 1 0-2zM9.388 25.34a3 3 0 0 0 2.98 2.66h7.263a3 3 0 0 0 2.98-2.66L24.48 9H7.521zM13 12.5a1 1 0 0 1 1 1v10a1 1 0 1 1-2 0v-10a1 1 0 0 1 1-1m7 1a1 1 0 1 0-2 0v10a1 1 0 1 0 2 0z"/></svg>
                                                            </button>
                                                        </a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php } } else { echo "<p>Products Not Found</p>"; } ?>
                        </div>
                    </div>
                </main>

            </div>

        </div>

        <?php include "temp/footer.php"; ?>
        
    </body>
</html>