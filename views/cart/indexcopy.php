<!-- format đơn vị tiền tệ -->
<?php
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
        <link rel="stylesheet" href="./style.css">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
        <title>Giỏ hàng</title>
    </head>
    <body>
        <div class="container">
            
            <?php 
                //Tắt đỡ để test
                // include_once "../../components/header.php";
            ?>
            <?php
                include_once "../../controllers/cartController.php";
                if(!isset($_SESSION['cart'])) {
                    $_SESSION['cart'] = array();
                }
                //Empty cart
                if(isset($_GET['delcart'])&&($_GET['delcart']==1)) unset($_SESSION['cart']);
                //Delete product from cart
                if(isset($_GET['delid'])&&($_GET['delid']>=0)) {
                    array_splice($_SESSION['cart'], $_GET['delid'], 1);
                }
                if(isset($_POST['action'])) {
                    switch($_POST['action']) {
                        case "addtocart":
                            $prod_name = $_POST['prod_name'];
                            $prod_image = $_POST['prod_image'];
                            $prod_price = $_POST['prod_price'];
                            $prod_size = $_POST['prod_size'];
                            $prod_color = $_POST['prod_color'];
                            $prod_quantity = $_POST['prod_quantity'];
                            
                            //Product in cart?
                            $flag = 0;
                            for ($i=0 ; $i < sizeof($_SESSION['cart'])  ; $i++ ) { 
                                if($_SESSION['cart'][$i] == $prod_name) {
                                    $flag = 1;
                                    $nquantity = $prod_quantity + $_SESSION['cart'][$i][5];
                                    $_SESSION['cart'][$i][5] = $nquantity;
                                    break;
                                }
                            }
                            if($flag == 0) { //sp chưa tồn tại trong giỏ thì thêm mới
                                $product=[$prod_name, $prod_image, $prod_price, $prod_size, $prod_color, $prod_quantity];
                                $_SESSION['cart'][] = $product;

                                //test thôi, mở ra là kh load đc giao diện cart đó hê hê
                                // unset($_SESSION['cart']); exit;
                                // var_dump($_SESSION['cart']); exit;
                            }
                            break;
                        case "buynow":
                            // làm xong cái add mới làm tiếp cái buy
                            echo 'mua ngay nè';
                            break;
                        case "addtocart2":
                            // làm xong cái add mới làm tiếp cái buy
                            echo 'test thêm vào giỏ 2';

                            $prod_name = $_POST['product_name'];
                            $prod_image = $_POST['product_img'];
                            $prod_price = $_POST['product_price'];
                            $prod_size = $_POST['product_size'];
                            $prod_color = $_POST['product_color'];
                            $prod_quantity = 1;
                            
                            //Product in cart?
                            $flag = 0;
                            for ($i=0 ; $i < sizeof($_SESSION['cart'])  ; $i++ ) { 
                                if($_SESSION['cart'][$i] == $prod_name) {
                                    $flag = 1;
                                    $nquantity = $prod_quantity + $_SESSION['cart'][$i][5];
                                    $_SESSION['cart'][$i][5] = $nquantity;
                                    break;
                                }
                            }
                            if($flag == 0) { //sp chưa tồn tại trong giỏ thì thêm mới
                                $product=[$prod_name, $prod_image, $prod_price, $prod_size, $prod_color, $prod_quantity];
                                $_SESSION['cart'][] = $product;

                                //test thôi, mở ra là kh load đc giao diện cart đó hê hê
                                // unset($_SESSION['cart']); exit;
                                // var_dump($_SESSION['cart']); exit;
                            }
                            break;
                    }
                }
            ?>
            <form action="../../views/cart/indexcopy.php?action=submit" method="POST">
                <div class="cart-body">
                    <div class="row">
                        <?php
                            if(isset($_SESSION['cart'])&&(is_array($_SESSION['cart']))) {
                                if(sizeof($_SESSION['cart'])>0) {
                                    $totalcartprice = 0;
                                    for($i = 0; $i < sizeof($_SESSION['cart']); $i++) {
                                        $totalpriceprod = (int)$_SESSION['cart'][$i][2] * (int)$_SESSION['cart'][$i][5];
                                        $totalcartprice += $totalpriceprod;
                                        echo'
                                        <div class="col-lg-7 col-md-12 col-12 cart-products">
                                            <div class="cart-item">
                                                <div class="row">
                                                    <div class="col-3">
                                                        <img src="'.$_SESSION['cart'][$i][1].'" class="cart-item-img" alt="">
                                                    </div>
                                                    <div class="col-9">
                                                        <div class="cart-item-name">
                                                            '.$_SESSION['cart'][$i][0].'
                                                        </div>
                                                        <div class="cart-item-color-size">
                                                            <div class="color">
                                                                Màu sắc: '.$_SESSION['cart'][$i][4].'
                                                            </div>
                                                            <div class="size">
                                                                Size: '.$_SESSION['cart'][$i][3].'
                                                            </div>
                                                        </div>
                                                        <div class="cart-item-quantity-price">
                                                            <div class="cart-item-quantity">
                                                                <div class="cart-item-quantity-minus">
                                                                    <span class="material-symbols-outlined minus-icon">
                                                                        remove
                                                                    </span>
                                                                </div>
                                                                <input type="text" value="'.$_SESSION['cart'][$i][5].'" min="0" max="10" class="cart-item-quantity-input" name="quantity">
                                                                <div class="cart-item-quantity-plus">
                                                                    <span class="material-symbols-outlined plus-icon">
                                                                        add
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <div class="cart-item-price">'.currency_format($totalpriceprod).'</div>
                                                                <a href="indexcopy.php?delid='.$i.'">
                                                                    <span class="material-symbols-outlined del-icon">
                                                                        delete
                                                                    </span>
                                                                </a> 
                                                            </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>';
                                    }
                                }
                                else {
                                    echo'
                                        <div class="col-lg-7 col-md-12 col-12 cart-products">
                                            <div class="cart-item">
                                                Giỏ hàng rỗng!
                                            </div>
                                        </div>';
                                }
                                echo '
                                    <div class="col-lg-5 col-md-12 col-12 cart-info">
                                        <div class="cart-info-content">
                                            <p class="cart-info-txt"></p>
                                            <div class="cart-info-content-price">
                                                <p class="cart-info-content-price-txt">Thành tiền</p>
                                                <p class="cart-info-content-price-money">'.currency_format($totalcartprice).'</p>
                                            </div>
                                        </div>
                                        <div class="cart-info-btn">
                                            <a href="../checkout/index.php" class="cart-btn-link">
                                                <div class="cart-btn-view" style="border: 1px solid #000 !important;"">
                                                    Đặt hàng
                                                </div>
                                            </a>
                                            <a href="./indexcopy.php?delid=1" class="cart-btn-link">
                                                <div class="cart-btn-view" style="background-color: #fff !important; color: #000 !important;  border: 1px solid #000 !important;">
                                                    Xóa giỏ hàng
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


            <!-- <div class="cart-body">
                <div class="row">
                    <div class="col-lg-5 col-md-12 col-12 cart-info">
                        <div class="cart-info-content">
                            <p class="cart-info-txt"></p>
                            <div class="cart-info-content-price">
                                <p class="cart-info-content-price-txt">Thành tiền</p>
                                <p class="cart-info-content-price-money"></p>
                            </div>
                        </div>
                        <div class="cart-info-btn">
                            <a href="../checkout/index.php" class="cart-btn-link">
                                <div class="cart-btn-view">
                                    Đặt hàng
                                </div>
                            </a>
                            <a href="../../index.php" class="cart-btn-link">
                                <div class="cart-btn-view">
                                    Về trang chủ
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-12 col-12 cart-products">
                        <div class="cart-item">
                            <div class="row">
                                <div class="col-3">
                                    <img src="../../src/img/products/women/product-women-6-1.jpg" class="cart-item-img" alt="">
                                </div>
                                <div class="col-9">
                                    <div class="cart-item-name">
                                        Đầm Cut Out Đính Ngọc Trai
                                    </div>
                                    <div class="cart-item-color-size">
                                        <div class="color">
                                            Màu sắc: Trắng
                                        </div>
                                        <div class="size">
                                            Size: S
                                        </div>
                                    </div>
                                    <div class="cart-item-quantity-price">
                                        <div class="cart-item-quantity">
                                            <div class="cart-item-quantity-minus">
                                                <span class="material-symbols-outlined minus-icon">
                                                    remove
                                                </span>
                                            </div>
                                            <input type='text' value='1' min='0' max='10' class='cart-item-quantity-input'>
                                            <div class="cart-item-quantity-plus">
                                                <span class="material-symbols-outlined plus-icon">
                                                    add
                                                </span>
                                            </div>
                                        </div>
                                        <div class="cart-item-price">950.000đ</div>
                                        <span class="material-symbols-outlined del-icon">
                                            delete
                                        </span>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="cart-item">
                            <div class="row">
                                <div class="col-3">
                                    <img src="../../src/img/products/women/product-women-7-1.jpg" class="cart-item-img" alt="">
                                </div>
                                <div class="col-9">
                                    <div class="cart-item-name">
                                        Set Áo Và Chân Váy Họa Tiết Kẻ
                                    </div>
                                    <div class="cart-item-color-size">
                                        <div class="color">
                                            Màu sắc: Xanh
                                        </div>
                                        <div class="size">
                                            Size: XL
                                        </div>
                                    </div>
                                    <div class="cart-item-quantity-price">
                                        <div class="cart-item-quantity">
                                            <div class="cart-item-quantity-minus">
                                                <span class="material-symbols-outlined minus-icon">
                                                    remove
                                                </span>
                                            </div>
                                            <input type="text" value='1' min='0' max='10' class='cart-item-quantity-input'>
                                            <div class="cart-item-quantity-plus">
                                                <span class="material-symbols-outlined plus-icon">
                                                    add
                                                </span>
                                            </div>
                                        </div>
                                        <div class="cart-item-price">750.000đ</div>
                                        <span class="material-symbols-outlined del-icon">
                                            delete
                                        </span>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="cart-item">
                            <div class="row">
                                <div class="col-3">
                                    <img src="../../src/img/products/women/product-women-5-1.jpg" class="cart-item-img" alt="">
                                </div>
                                <div class="col-9">
                                    <div class="cart-item-name">
                                        Set Áo Blazer Và Quần Suông Dài
                                    </div>
                                    <div class="cart-item-color-size">
                                        <div class="color">
                                            Màu sắc: Vàng Cam
                                        </div>
                                        <div class="size">
                                            Size: X
                                        </div>
                                    </div>
                                    <div class="cart-item-quantity-price">
                                        <div class="cart-item-quantity">
                                            <div class="cart-item-quantity-minus">
                                                <span class="material-symbols-outlined minus-icon">
                                                    remove
                                                </span>
                                            </div>
                                            <input type='text' value='2' min='0' max='10' class='cart-item-quantity-input'>
                                            <div class="cart-item-quantity-plus">
                                                <span class="material-symbols-outlined plus-icon">
                                                    add
                                                </span>
                                            </div>
                                        </div>
                                        <div class="cart-item-price">1.250.000đ</div>
                                        <span class="material-symbols-outlined del-icon">
                                            delete
                                        </span>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php include_once "../../components/footer.php"?>
            </div> -->

            <?php include_once "../../components/scrollToTop.php"?>
        </div>      
    </body>
    <script src="../../public/JS/cart.js"></script>
    <script src="../../public/JS/detailProduct.js"></script>
    <script src="https://kit.fontawesome.com/644376ed9d.js" crossorigin="anonymous"></script>\
    <script>
        function addCart(id) {
            num = $("#num");
            alert(id);
        }
    </script>
</html>