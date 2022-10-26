<!-- format đơn vị tiền tệ -->
<?php
    // session_start();
    if (!function_exists('currency_format')) {
        function currency_format($number, $suffix = 'đ') {
            if (!empty($number)) {
                return number_format($number, 0, ',', '.') . "{$suffix}";
            }
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
        <link rel="stylesheet" href="../../style.css">
        <link rel="stylesheet" href="../../public/CSS/cart.css">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
        <title>Giỏ hàng</title>
    </head>
    <body>
        <div class="container">
            
            <?php 
                include_once "../../components/header.php";
            ?>
            <?php
                include_once "../../controllers/manageCart.php";              
            ?>
            <form action="../../views/cart/index.php?action=submit" method="POST">
                <div class="cart-body">
                    <div class="row">
                        <div class="col-lg-7 col-md-12 col-12 cart-products">
                            <?php
                                if(isset($_SESSION['cart'])&&(is_array($_SESSION['cart']))) {
                                    include '../../components/cartProduct.php';
                                    echo '
                                    </div>
                                    <div class="col-lg-5 col-md-12 col-12 cart-info">
                                        <div class="cart-info-content">
                                            <p class="cart-info-txt"></p>
                                            <div class="cart-info-content-price">
                                                <p class="cart-info-content-price-txt">Thành tiền</p>'?>
                                                <?php
                                                    if(count($_SESSION['cart'])>0) {
                                                        echo'
                                                        <p class="cart-info-content-price-money">'.currency_format($totalcartprice).'</p>';
                                                    }
                                                    else {
                                                        echo'
                                                        <p class="cart-info-content-price-money">0</p>';
                                                    }
                                                ?>
                                    <?php
                                    echo'
                                            </div>
                                        </div>
                                        <div class="cart-info-btn">
                                            <a href="./index.php?delcart=1" class="cart-btn-link">
                                                <div class="cart-btn-view" style="background-color: #fff !important; color: #000 !important;  border: 1px solid #000 !important;">
                                                    Xóa giỏ hàng
                                                </div>
                                            </a>
                                            <a href="./index.php?updatecart=1" class="cart-btn-link">
                                                <div class="cart-btn-view" style="background-color: #fff !important; color: #000 !important;  border: 1px solid #000 !important;">
                                                    Cập nhật giỏ hàng
                                                </div>
                                            </a>
                                            <a href="../checkout/index.php" class="cart-btn-link">
                                                <div class="cart-btn-view" style="border: 1px solid #000 !important;"">
                                                    Đặt hàng
                                                </div>
                                            </a>
                                            <a href="../../index.php" class="cart-btn-link">
                                                <div class="cart-btn-view" style="background-color: #fff !important; color: #000 !important;  border: 1px solid #000 !important;">
                                                    Về trang chủ
                                                </div>
                                            </a>
                                        </div>
                                    </div>';
                                } 
                            ?>
                    </div>          
                    <?php include_once "../../components/footer.php"?>
                </div>
            </form>
            <?php include_once "../../components/scrollToTop.php"?>
        </div>      
    </body>

    <script src="../../public/JS/cart.js"></script>
    <!-- <script src="../../public/JS/detailProduct.js"></script> -->
    <script src="https://kit.fontawesome.com/644376ed9d.js" crossorigin="anonymous"></script>
</html>