<?php
ob_start();
include("header.php");
if (empty($_GET['data'])) {
    header("Location: index.php");
    exit;
}
?>
<!-- Title Bar -->
<div class="pbmit-title-bar-wrapper" style="background-image: url(images/bg/about-01.jpg);">
    <div class="container">
        <div class="pbmit-title-bar-content">
            <div class="pbmit-title-bar-content-inner">
                <div class="pbmit-tbar">
                    <div class="pbmit-tbar-inner">
                        <h1 class="pbmit-tbar-title" style="color: white;">Products</h1>
                    </div>
                </div>
                <div class="pbmit-breadcrumb">
                    <div class="pbmit-breadcrumb-inner">
                        <span>
                            <a title="" href="index.php" class="home"><span style="color: white;">Home</span></a>
                        </span>
                        <span class="sep"><i class="pbmit-base-icon-angle-double-right"></i></span>
                        <span class="post-root post post-post current-item" style="color: white;">Products</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Title Bar End-->
<!-- Blog Start -->
<section class="section-lg">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-8">
                <div class="pbmit-heading-subheading">
                    <h4 class="pbmit-subtitle">Our Products</h4>
                    <h2 class="pbmit-title">Home</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <?php
                $products = Operations::getProductCate($conn);
                if (!empty($products)) {
                    foreach ($products as $pro) {
            ?>
            <div class="col-md-4">
                <article class="pbmit-blog-style-3">
                    <div class="post-item">
                        <div class="pbmit-featured-container">
                            <div class="pbmit-featured-wrapper">
                                <img src="images/<?= $pro['img'] ?>" class="img-fluid" alt="" />
                            </div>
                        </div>
                        <div class="pbminfotech-box-content">
                            <div class="pbminfotech-box-container">
                                <h6 style="font-size: 25px;"><?= $pro['title'] ?></h6>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
            <?php
                    }
                } else {
                    echo "<p>Products Not Found</p>";
                }
            ?>
        </div>
    </div>
</section>
<!-- Service End -->
<?php
include("footer.php")
?>