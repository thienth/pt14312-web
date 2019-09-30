<?php 
require_once './commons/db.php';
$keyword = $_GET['keyword'];
$query = "select * from products where name like '%$keyword%' order by id desc";
$products = executeQuery($query);
// var_dump($products);die;

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">

    <!--favicon icon-->
    <link rel="icon" type="image/png" href="public/assets/img/favicon.png">

    <title>Shop 4 Column</title>

    <?php 
    include_once './_share/client/style.php';
     ?>
</head>

<body>

    <!--  preloader start -->
    <div id="tb-preloader">
        <div class="tb-preloader-wave"></div>
    </div>
    <!-- preloader end -->


    <div class="wrapper">

        <?php 
        include_once './_share/client/header.php';
         ?>
        <!--body content start-->
        <section class="body-content ">

            <div class="page-content product-grid">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <!--product option-->
                            <div class="clearfix m-bot-30 inline-block">
                                <div class="pull-left">
                                    <form method="post" action="#">
                                        <select class="form-control">
                                            <option>Default sorting</option>
                                            <option>Sort by popularity</option>
                                            <option>Sort by average ratings</option>
                                            <option>Sort by newness</option>
                                            <option>Sort by price: low to high</option>
                                            <option>Sort by price: high to low</option>
                                        </select>
                                    </form>
                                </div>

                                <div class="pull-left m-top-5 m-left-10">
                                    Showing 1–10 of 55 results
                                </div>

                                <div class="pull-right shop-view-mode">
                                    <a href="#"> <i class="fa fa-th-large"></i> 
                                    </a>
                                    <a href="#"> <i class="fa fa-th-list"></i> 
                                    </a>
                                </div>
                            </div>
                            <!--product option-->
                            <div class="row">
                            	<?php foreach ($products as $pro): ?>
                                <div class="col-md-3">
                                    <!--product list-->
                                    <div class="product-list">
                                        <div class="product-img">
                                            <a href="#">
                                                <img src="<?php echo $pro['image'] ?>" alt="" />
                                            </a>
                                            <a href="#">
                                                <img src="<?php echo $pro['image'] ?>" alt="" />
                                            </a>
                                            <div class="sale-label">
                                                Sale
                                            </div>
                                        </div>
                                        <div class="product-title">
                                            <h5><a href="#"><?php echo $pro['name'] ?></a></h5>
                                        </div>
                                        <div class="product-price">
                                            <del>$79.00</del> $59.99
                                        </div>
                                        <div class="product-rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <div class="product-btn">
                                            <a href="#" class="btn btn-extra-small btn-dark-border  "><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                        </div>
                                    </div>
                                    <!--product list-->
                                </div>
                                <?php endforeach ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </section>
        <!--body content end-->

        <?php 
        include_once './_share/client/footer.php';
         ?>

    </div>


    <?php 
    include_once './_share/client/script.php';
     ?>
</body>


<!-- Mirrored from massive.markup.themebucket.net/shop-4.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 08 Sep 2017 04:55:09 GMT -->
</html>
