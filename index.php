<?php 
    session_start();
    $filepath = realpath(dirname(__FILE__));
    if(isset($_GET['msg'])) {
        if($_GET['msg'] === 'login-out') {
            if(isset($_SESSION['role']) && isset($_SESSION['firstName']) && isset($_SESSION['lastName'])) {
                unset($_SESSION['role']);
                unset($_SESSION['firstName']);
                unset($_SESSION['lastName']);
            }
        }
    }
    if (!function_exists('currency_format')) {
        function currency_format($number, $suffix = 'đ') {
            if (!empty($number)) {
                return number_format($number, 0, ',', '.') . "{$suffix}";
            }
        }
    }
    if (!function_exists('color_format')) {
        function color_format($color) {
            $colorHex = "";
            $arraycolor = array(
                "blue" => "C6E9EC",
                "white" => "FFFFFF",
                "pink" => "FB6E7C",
                "orange" => "F3A45F",
                "yellow" => "F4ED95",
                "red" => "EC3333",
                "black" => "212529",
                "green" => "98A882",
                "gray" => "A8A9AD",
            );
            while($element = current($arraycolor)) {
                if(key($arraycolor) == $color) {
                    $colorHex = $arraycolor[key($arraycolor)];
                }
                next($arraycolor);
            }
            return $colorHex;
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="./public/CSS/basepd.css">
        <link rel="stylesheet" href="./style.css">
        <link rel="stylesheet" href="./public/CSS/stylespd.css">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
        <title>Home</title>
    </head>
    <body>
        <div class="container">
            <?php 
                include_once "./components/header.php";
            ?>
           
            <div class="home-body">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ul class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ul>
                    <!-- Images && content -->
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="./src/img/slider6.jpg"/>
                        </div>
                        <div class="carousel-item">
                            <img src="./src/img/slider5.jpg"/>
                        </div>
                        <div class="carousel-item">
                            <img src="./src/img/slider4.jpg"/>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
                <div id="best-seller">
                    <div class="title">
                        <p class="content">BEST SELLER</p>
                    </div>
                    <div class="type">
                        <div class="type-list">
                            <a href="./index.php?type=1" class="type-list-link">
                                <div class="type-item">IVY Women</div>
                            </a>
                            <a href="./index.php?type=0" class="type-list-link">
                                <div class="type-item">IVY Men</div>
                            </a>
                            <a href="./index.php?type=2" class="type-list-link">
                                <div class="type-item">IVY Kid</div>
                            </a>
                            
                        </div>

                        <div class="type-content">
                            <div class='type-content-list block'>
                                <div class='row'>
                                    <?php 
                                        include "./controllers/productController.php";
                                        $controller = new ProductController();
                                       
                                        if(isset($_GET['type'])) {
                                            $type = $_GET['type'];
                                            $data = $controller->getProductByTypeLimit($type, 4, 0);
                                            foreach ($data as $product) {
                                                $arraycolor = explode(", ",$product->getColor());
                                                echo"
                                                    <div class='col-lg-3 col-md-6 col-6 product'>
                                                        <div class='card'>
                                                            <div class='product-img'>
                                                                <span class='badget'>
                                                                    -50%
                                                                </span>
                                                                <a href='./views/detailProduct/indexpd.php?id=".$product->getId()."'>
                                                                    <img src='".$product->getImage02()."' class='product-img-content product-img-2'/>
                                                                    <img src='".$product->getImage01()."' class='product-img-content product-img-1'/>
                                                                </a>
                                                                <div class='pro-btn d-flex'>
                                                                    <a href='#' class='hidden-btn'>
                                                                        <i class='fa-solid fa-eye'></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class='card-body'>
                                                                <h5 class='card-title product-info'>
                                                                    <div class='list-color d-flex'>
                                                                        <div class='dot-list d-flex'>
                                                                            ";?>
                                                                            <?php 
                                                                            foreach($arraycolor as $cpro) {
                                                                                $colorHex = color_format($cpro);
                                                                                echo '
                                                                                    <label class="color-button" style="background-color:#'.$colorHex.';" for="'.strtolower($cpro).'"></label>
                                                                                ';
                                                                            }
                                                                            ?>
                                                                            <?php 
                                                                            echo "
                                                                        </div>
                                                                        <div class='favorite'>
                                                                            <span class='material-symbols-outlined favorite-icon'>
                                                                                favorite
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class='product-name'>
                                                                        ".$product->getName()."
                                                                    </div>
                                                                </h5>
                                                                <p class='card-text'>
                                                                    <div class='product-price d-flex'>
                                                                        <div class='product-price__new'>".currency_format($product->getPrice())."</div>
                                                                        <strike><div class='product-price__old'>1.150.000đ</div></strike>
                                                                    </div>
                                                                </p>
                                                                <a href='./views/detailProduct/indexpd.php?id=".$product->getId()."' class='btn btn-primary' style='background-color: transparent; border: none;'>
                                                                    <div class='product-cart'>
                                                                        <span class='material-symbols-outlined product-cart-icon'>
                                                                            local_mall
                                                                        </span>
                                                                        <p class='product-cart-buy'>Mua ngay</p>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                ";
                                            }
                                            echo "
                                                <button class='type-button'>
                                                    <a href='../views/product/index.php?type=".$type."' class='nav-item-link'>
                                                        Xem tất cả
                                                    </a>
                                                </button>
                                            ";
                                        }else {
                                            $data = $controller->getProductByTypeLimit(1, 4, 0);
                                            foreach ($data as $product) {
                                                $arraycolor = explode(", ",$product->getColor());
                                                echo"
                                                    
                                                    <div class='col-lg-3 col-md-6 col-6 product'>
                                                        <div class='card'>
                                                            <div class='product-img'>
                                                                <span class='badget'>
                                                                    -50%
                                                                </span>
                                                                <a href='./views/detailProduct/indexpd.php?id=".$product->getId()."'>
                                                                    <img src='".$product->getImage02()."' class='product-img-content product-img-2'/>
                                                                    <img src='".$product->getImage01()."' class='product-img-content product-img-1'/>
                                                                </a>
                                                                <div class='pro-btn d-flex'>
                                                                    <a href='#' class='hidden-btn'>
                                                                        <i class='fa-solid fa-eye'></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class='card-body'>
                                                                <h5 class='card-title product-info'>
                                                                    <div class='list-color d-flex'>
                                                                        <div class='dot-list d-flex'>
                                                                            ";?>
                                                                            <?php 
                                                                            foreach($arraycolor as $cpro) {
                                                                                $colorHex = color_format($cpro);
                                                                                echo '
                                                                                    <label class="color-button" style="background-color:#'.$colorHex.';" for="'.strtolower($cpro).'"></label>
                                                                                ';
                                                                            }
                                                                            ?>
                                                                            <?php 
                                                                            echo "
                                                                        </div>
                                                                        <div class='favorite'>
                                                                            <span class='material-symbols-outlined favorite-icon'>
                                                                                favorite
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class='product-name'>
                                                                        ".$product->getName()."
                                                                    </div>
                                                                </h5>
                                                                <p class='card-text'>
                                                                    <div class='product-price d-flex'>
                                                                        <div class='product-price__new'>".currency_format($product->getPrice())."</div>
                                                                        <strike><div class='product-price__old'>1.150.000đ</div></strike>
                                                                    </div>
                                                                </p>
                                                                <a href='./views/detailProduct/indexpd.php?id=".$product->getId()."' class='btn btn-primary' style='background-color: transparent; border: none;'>
                                                                    <div class='product-cart'>
                                                                        <span class='material-symbols-outlined product-cart-icon'>
                                                                            local_mall
                                                                        </span>
                                                                        <p class='product-cart-buy'>Mua ngay</p>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                ";
                                            }
                                            echo "
                                                <button class='type-button'>
                                                    <a href='../views/product/index.php?type=1' class='nav-item-link'>
                                                        Xem tất cả
                                                    </a>
                                                </button>
                                            ";
                                        }
                                        
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <div class="banner">
                    <div class="row">
                        <div class="col-12 mb-4">
                            <img src="./src/img/trending.jpg" class="top-img" alt="">
                        </div>
                        <div class="col-6">
                            <img src="./src/img/trending1.jpg" class=" bottom-left-img" alt="" style="width: 100%">
                        </div>
                        <div class="col-6">
                            <img src="./src/img/trending2.jpg" class=" bottom-right-img" alt="" style="width: 100%">
                        </div>
                    </div>
                    
                </div>
                <div class="gallery">
                    <div class="title">
                        <p class="content">Gallery</p>
                    </div>
                    <div class="gallery-list">
                        <div class="row">
                            <div class="col-lg-3 col-md-3 col-6 gallery-item">
                                <img src="./src/img/gallery/gallery-1.jpg" class="gallery-item-img" alt="">
                            </div>
                            <div class="col-lg-3 col-md-3 col-6 gallery-item">
                                <img src="./src/img/gallery/gallery-2.jpg" class="gallery-item-img" alt="">
                            </div>
                            <div class="col-lg-3 col-md-3 col-6 gallery-item">
                                <img src="./src/img/gallery/gallery-3.jpg" class="gallery-item-img" alt="">
                            </div>
                            <div class="col-lg-3 col-md-3 col-6 gallery-item">
                                <img src="./src/img/gallery/gallery-4.jpg" class="gallery-item-img" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <?php 
                    include_once "./components/footer.php";
                ?>
                <?php
                    include_once "./components/scrollToTop.php"
                ?>
            </div>
        </div>
        <script src="./script.js"></script>
    </body>
    <script src="https://kit.fontawesome.com/644376ed9d.js" crossorigin="anonymous"></script>
</html>