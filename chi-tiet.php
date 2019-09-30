<?php 
require_once './commons/db.php';
$query = "select * from products order by id desc limit 8";
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


        <!--page title start-->
        <section class="page-title">
            <div class="container">
                <h4 class="text-uppercase">Chi tiết sản phẩm: </h4>
            </div>
        </section>
        <!--page title end-->

        <!--body content start-->
        <section class="body-content ">

            <div class="page-content product-grid">
                <div class="container">
                    <div class="row">
                        <h2>Chi tiết sản phẩm</h2>
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
</html>
