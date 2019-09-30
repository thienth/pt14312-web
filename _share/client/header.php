<?php 
require_once './commons/db.php';

$sql = "select * from categories where show_menu = 1";
$menus = executeQuery($sql);
 ?>

<!--header start-->
<header class="l-header">

    <div class="l-navbar l-navbar_t-light l-navbar_expand js-navbar-sticky">
        <div class="container-fluid">
            <nav class="menuzord js-primary-navigation" role="navigation" aria-label="Primary Navigation">

                <!--logo start-->
                <a href="index-2.html" class="logo-brand">
                    <img class="retina" src="public/assets/img/logo.png" alt="Massive">
                </a>
                <!--logo end-->

                <!--mega menu start-->
                <ul class="menuzord-menu menuzord-right c-nav_s-standard">
                    <?php foreach ($menus as $m): ?>
                    <li><a href="danh-muc.php?id=<?php echo $m['id'] ?>"><?php echo $m['cate_name'] ?></a></li>
                    <?php endforeach ?>

                    <li>
                        <a href="javascript:void(0)"><i class="fa fa-search"></i> Search</a>
                        <div class="megamenu megamenu-quarter-width navbar-search">
                            <form role="searchform" action="search.php" method="get">
                                <input type="text" name="keyword" class="form-control" placeholder="Search Here">
                            </form>
                        </div>
                    </li>
                </ul>
                <!--mega menu end-->

            </nav>
        </div>
    </div>

</header>
<!--header end-->