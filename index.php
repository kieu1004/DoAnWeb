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
        <link rel="stylesheet" href="./style.css">
        <link rel="stylesheet" href="./pages/detailProduct/stylespd.css">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
        <title>Home</title>
    </head>
    <body>
        <div class="container">
            
                <div class="search-section d-flex justify-content-center align-items-center">
                    <input type="text" placeholder="TÌM KIẾM SẢN PHẨM" class="search-input">
                    <a href="./pages/search/index.php" class="search-link" style="color: none !important;">
                        <span class="material-symbols-outlined header-icon search-icon-1">
                            search
                        </span>
                    </a>
                    
                    <i class="fa-solid fa-xmark cancel-icon"></i>
                </div>
                <div class="category">
                    <i class="fa-solid fa-xmark cancel-icon"></i>
                    <br>
                    <a href="./pages/login/index.php">
                        <button class="login-btn">
                            Đăng nhập
                        </button>
                    </a>
                    <ul class="category-list">
                        <li class="category-item">Trang chủ</li>
                        <li class="category-item">Sản phẩm</li>
                        <li class="category-item">Nam</li>
                        <li class="category-item">Nữ</li>
                        <li class="category-item">Liên hệ</li>
                    </ul>
                </div>
                
                
                
                <div id="header">
                    <div class="container">
                        <div class="logo">
                            <a href="./index.php"><img src="./src/img/logo.png" class="image"/></a>
                        </div>
                        <div id="navigation-bar">
                            <span class="material-symbols-outlined bar-icon">
                                menu
                            </span>
                        </div>
                        <div class="list d-md-none d-lg-flex align-items-center justify-content-center">
                            <ul class="nav-list hide-on-mobile-tablet">
                                <li class="nav-item">Trang chủ</li>
                                <li class="nav-item">Sản phẩm</li>
                                <li class="nav-item">Nam</li>
                                <li class="nav-item">Nữ</li>
                                <li class="nav-item">Liên hệ</li>
                            </ul>
                        </div>                     
                        <div class="nav-icon">
                            <span class="material-symbols-outlined header-icon search-icon">
                                search
                            </span>
                            <div class="header-icon">
                                <span class="material-symbols-outlined cart-icon">
                                    shopping_cart
                                </span>
                                <span class="cart-number"></span>
                            </div>
                            <a href="./pages/login/index.php" class="header-icon user-icon">
                                <span class="material-symbols-outlined">
                                    person
                                </span>
                            </a>
                        </div>
                        <div class="col-lg-4 col-md-4 col-9 cart">
                            <div class="cart-header">
                                <div class="cart-title">
                                    <div class="content">Giỏ hàng</div>
                                    <div class="quantity"></div>
                                </div>
                                <i class="fa-solid fa-xmark cancel-icon"></i>
                            </div>
                           <div class="cart-products">
                                <div class="cart-item">
                                    <div class="row">
                                        <div class="col-3">
                                            <img src="./src/img/products/women/product-women-6-1.jpg" class="cart-item-img" alt="">
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
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="cart-item">
                                    <div class="row">
                                        <div class="col-3">
                                            <img src="./src/img/products/women/product-women-7-1.jpg" class="cart-item-img" alt="">
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
                                                    <input type='text' value='1' min='0' max='10' class='cart-item-quantity-input'>
                                                    <div class="cart-item-quantity-plus">
                                                        <span class="material-symbols-outlined plus-icon">
                                                            add
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="cart-item-price">750.000đ</div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="cart-item">
                                    <div class="row">
                                        <div class="col-3">
                                            <img src="./src/img/products/women/product-women-5-1.jpg" class="cart-item-img" alt="">
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
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                           </div>
                           <div class="cart-total">
                                <div class="cart-total-title">Tổng cộng:</div>
                                <div class="cart-total-money"></div>
                           </div>
                           <a href="./pages/cart/index.php" class="cart-btn-link">
                                <div class="cart-btn-view">
                                    Xem giỏ hàng
                                </div>
                           </a>
                           
                        </div>
                    </div>            
                </div>
           
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
                            <div class="type-item border-active">IVY Women</div>
                            <div class="type-item">IVY Men</div>
                            <div class="type-item">IVY Kids</div>
                        </div>

                        <div class="type-content">
                            <div class="type-content-list block">
                                <div class="row">
                                    <div class="col-lg-3 col-md-6 col-6 product">
                                        <div class="card">
                                            <div class="product-img">
                                                <span class="badget">
                                                    -50%
                                                </span>
                                                <img src="./src/img/products/women/product-women-1-2 (2).jpg" class="product-img-content product-img-2"/>
                                                <img src="./src/img/products/women/product-women-1-1 (3).jpg" class="product-img-content product-img-1"/>
                                            </div>
                                            <div class="card-body">
                                                <h5 class="card-title product-info">
                                                    <div class="list-color d-flex">
                                                        <div class="dot-list d-flex">
                                                            <div class="dot green"></div>
                                                            <div class="dot pink"></div>
                                                            <div class="dot yellow"></div>
                                                        </div>
                                                        <div class="favorite">
                                                            <span class="material-symbols-outlined favorite-icon">
                                                                favorite
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="product-name">
                                                        Đầm Lụa Cố Đô
                                                    </div>
                                                </h5>
                                                <p class="card-text">
                                                    <div class="product-price d-flex">
                                                        <div class="product-price__new">750.000đ</div>
                                                        <strike><div class="product-price__old">1.150.000đ</div></strike>
                                                    </div>
                                                </p>
                                                <a href="#" class="btn btn-primary" style="background-color: transparent; border: none;">
                                                    <div class="product-cart">
                                                        <span class="material-symbols-outlined product-cart-icon">
                                                            local_mall
                                                        </span>
                                                        <p class="product-cart-buy">Mua ngay</p>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                        
                                    <div class="col-lg-3 col-md-6 col-6 product">
                                        <div class="card">
                                            <div class="product-img">
                                                <span class="badget">
                                                    -50%
                                                </span>
                                                <a href="./pages/detailProduct/indexpd.php"><img src="./src/img/products/women/product-women-2-2.jpg" class="product-img-content product-img-2"/></a>
                                                <img src="./src/img/products/women/product-women-2-1.jpg" class="product-img-content product-img-1"/>
                                            </div>
                                            <div class="card-body">
                                                <h5 class="card-title product-info">
                                                    <div class="list-color d-flex">
                                                        <div class="dot-list d-flex">
                                                            <div class="dot green"></div>
                                                            <div class="dot pink"></div>
                                                            <div class="dot yellow"></div>
                                                        </div>
                                                        <div class="favorite">
                                                            <span class="material-symbols-outlined favorite-icon">
                                                                favorite
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="product-name">
                                                        Đầm Lụa Cách Điệu Phối Nơ Lệch
                                                    </div>
                                                </h5>
                                                <p class="card-text">
                                                    <div class="product-price d-flex">
                                                        <div class="product-price__new">750.000đ</div>
                                                        <strike><div class="product-price__old">1.150.000đ</div></strike>
                                                    </div>
                                                </p>
                                                <a href="#" class="btn btn-primary" style="background-color: transparent; border: none;">
                                                    <div class="product-cart">
                                                        <span class="material-symbols-outlined product-cart-icon">
                                                            local_mall
                                                        </span>
                                                        <p class="product-cart-buy">Mua ngay</p>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
    
                                    <div class="col-lg-3 col-md-6 col-6 product">
                                        <div class="card">
                                            <div class="product-img">
                                                <span class="badget">
                                                    -50%
                                                </span>
                                                <img src="./src/img/products/women/product-women-3-2.jpg" class="product-img-content product-img-2"/>
                                                <img src="./src/img/products/women/product-women-3-1.jpg" class="product-img-content product-img-1"/>
                                            </div>
                                            <div class="card-body">
                                                <h5 class="card-title product-info">
                                                    <div class="list-color d-flex">
                                                        <div class="dot-list d-flex">
                                                            <div class="dot green"></div>
                                                            <div class="dot pink"></div>
                                                            <div class="dot yellow"></div>
                                                        </div>
                                                        <div class="favorite">
                                                            <span class="material-symbols-outlined favorite-icon">
                                                                favorite
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="product-name">
                                                        Đầm Ôm Cánh Tiên
                                                    </div>
                                                </h5>
                                                <p class="card-text">
                                                    <div class="product-price d-flex">
                                                        <div class="product-price__new">650.000đ</div>
                                                        <strike><div class="product-price__old">850.000đ</div></strike>
                                                    </div>
                                                </p>
                                                <a href="#" class="btn btn-primary" style="background-color: transparent; border: none;">
                                                    <div class="product-cart">
                                                        <span class="material-symbols-outlined product-cart-icon">
                                                            local_mall
                                                        </span>
                                                        <p class="product-cart-buy">Mua ngay</p>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
    
                                    <div class="col-lg-3 col-md-6 col-6 product">
                                        <div class="card">
                                            <div class="product-img">
                                                <span class="badget">
                                                    -50%
                                                </span>
                                                <img src="./src/img/products/women/product-women-4-2.jpg" class="product-img-content product-img-2"/>
                                                <img src="./src/img/products/women/product-women-4-1.jpg" class="product-img-content product-img-1"/>
                                            </div>
                                            <div class="card-body">
                                                <h5 class="card-title product-info">
                                                    <div class="list-color d-flex">
                                                        <div class="dot-list d-flex">
                                                            <div class="dot green"></div>
                                                            <div class="dot pink"></div>
                                                            <div class="dot yellow"></div>
                                                        </div>
                                                        <div class="favorite">
                                                            <span class="material-symbols-outlined favorite-icon">
                                                                favorite
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="product-name">
                                                        Đầm Thỏ Cut-Out
                                                    </div>
                                                </h5>
                                                <p class="card-text">
                                                    <div class="product-price d-flex">
                                                        <div class="product-price__new">750.000đ</div>
                                                        <strike><div class="product-price__old">1.150.000đ</div></strike>
                                                    </div>
                                                </p>
                                                <a href="#" class="btn btn-primary" style="background-color: transparent; border: none;">
                                                    <div class="product-cart">
                                                        <span class="material-symbols-outlined product-cart-icon">
                                                            local_mall
                                                        </span>
                                                        <p class="product-cart-buy">Mua ngay</p>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
    
                                    <div class="col-lg-3 col-md-6 col-6 product">
                                        <div class="card">
                                            <div class="product-img">
                                                <span class="badget">
                                                    -50%
                                                </span>
                                                <img src="./src/img/products/women/product-women-5-2.jpg" class="product-img-content product-img-2"/>
                                                <img src="./src/img/products/women/product-women-5-1.jpg" class="product-img-content product-img-1"/>
                                            </div>
                                            <div class="card-body">
                                                <h5 class="card-title product-info">
                                                    <div class="list-color d-flex">
                                                        <div class="dot-list d-flex">
                                                            <div class="dot green"></div>
                                                            <div class="dot pink"></div>
                                                            <div class="dot yellow"></div>
                                                        </div>
                                                        <div class="favorite">
                                                            <span class="material-symbols-outlined favorite-icon">
                                                                favorite
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="product-name">
                                                        Set Áo Blazer Và Quần Suông Dài
                                                    </div>
                                                </h5>
                                                <p class="card-text">
                                                    <div class="product-price d-flex">
                                                        <div class="product-price__new">1.250.000đ</div>
                                                        <strike><div class="product-price__old">1.450.000đ</div></strike>
                                                    </div>
                                                </p>
                                                <a href="#" class="btn btn-primary" style="background-color: transparent; border: none;">
                                                    <div class="product-cart">
                                                        <span class="material-symbols-outlined product-cart-icon">
                                                            local_mall
                                                        </span>
                                                        <p class="product-cart-buy">Mua ngay</p>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
    
                                    <div class="col-lg-3 col-md-6 col-6 product">
                                        <div class="card">
                                            <div class="product-img">
                                                <span class="badget">
                                                    -50%
                                                </span>
                                                <img src="./src/img/products/women/product-women-6-2.jpg" class="product-img-content product-img-2"/>
                                                <img src="./src/img/products/women/product-women-6-1.jpg" class="product-img-content product-img-1"/>
                                            </div>
                                            <div class="card-body">
                                                <h5 class="card-title product-info">
                                                    <div class="list-color d-flex">
                                                        <div class="dot-list d-flex">
                                                            <div class="dot green"></div>
                                                            <div class="dot pink"></div>
                                                            <div class="dot yellow"></div>
                                                        </div>
                                                        <div class="favorite">
                                                            <span class="material-symbols-outlined favorite-icon">
                                                                favorite
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="product-name">
                                                        Đầm Cut-Out Đính Ngọc Trai
                                                    </div>
                                                </h5>
                                                <p class="card-text">
                                                    <div class="product-price d-flex">
                                                        <div class="product-price__new">950.000đ</div>
                                                        <strike><div class="product-price__old">1.150.000đ</div></strike>
                                                    </div>
                                                </p>
                                                <a href="#" class="btn btn-primary" style="background-color: transparent; border: none;">
                                                    <div class="product-cart">
                                                        <span class="material-symbols-outlined product-cart-icon">
                                                            local_mall
                                                        </span>
                                                        <p class="product-cart-buy">Mua ngay</p>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
    
                                    <div class="col-lg-3 col-md-6 col-6 product">
                                        <div class="card">
                                            <div class="product-img">
                                                <span class="badget">
                                                    -50%
                                                </span>
                                                <img src="./src/img/products/women/product-women-7-2.jpg" class="product-img-content product-img-2"/>
                                                <img src="./src/img/products/women/product-women-7-1.jpg" class="product-img-content product-img-1"/>
                                            </div>
                                            <div class="card-body">
                                                <h5 class="card-title product-info">
                                                    <div class="list-color d-flex">
                                                        <div class="dot-list d-flex">
                                                            <div class="dot green"></div>
                                                            <div class="dot pink"></div>
                                                            <div class="dot yellow"></div>
                                                        </div>
                                                        <div class="favorite">
                                                            <span class="material-symbols-outlined favorite-icon">
                                                                favorite
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="product-name">
                                                        Set Áo Và Chân Váy Họa Tiết Kẻ
                                                    </div>
                                                </h5>
                                                <p class="card-text">
                                                    <div class="product-price d-flex">
                                                        <div class="product-price__new">750.000đ</div>
                                                        <strike><div class="product-price__old">1.150.000đ</div></strike>
                                                    </div>
                                                </p>
                                                <a href="#" class="btn btn-primary" style="background-color: transparent; border: none;">
                                                    <div class="product-cart">
                                                        <span class="material-symbols-outlined product-cart-icon">
                                                            local_mall
                                                        </span>
                                                        <p class="product-cart-buy">Mua ngay</p>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
    
                                    <div class="col-lg-3 col-md-6 col-6 product">
                                        <div class="card">
                                            <div class="product-img">
                                                <span class="badget">
                                                    -50%
                                                </span>
                                                <img src="./src/img/products/women/product-women-8-2.jpg" class="product-img-content product-img-2"/>
                                                <img src="./src/img/products/women/product-women-8-1.jpg" class="product-img-content product-img-1"/>
                                            </div>
                                            <div class="card-body">
                                                <h5 class="card-title product-info">
                                                    <div class="list-color d-flex">
                                                        <div class="dot-list d-flex">
                                                            <div class="dot green"></div>
                                                            <div class="dot pink"></div>
                                                            <div class="dot yellow"></div>
                                                        </div>
                                                        <div class="favorite">
                                                            <span class="material-symbols-outlined favorite-icon">
                                                                favorite
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="product-name">
                                                        Đầm Thỏ Dáng Baloon
                                                    </div>
                                                </h5>
                                                <p class="card-text">
                                                    <div class="product-price d-flex">
                                                        <div class="product-price__new">1.450.000đ</div>
                                                        <strike><div class="product-price__old">1.750.000đ</div></strike>
                                                    </div>
                                                </p>
                                                <a href="#" class="btn btn-primary" style="background-color: transparent; border: none;">
                                                    <div class="product-cart">
                                                        <span class="material-symbols-outlined product-cart-icon">
                                                            local_mall
                                                        </span>
                                                        <p class="product-cart-buy">Mua ngay</p>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="type-content-list">
                                <div class="row">
                                    <div class="col-lg-3 col-md-6 col-6 product">
                                        <div class="card">
                                            <div class="product-img">
                                                <span class="badget">
                                                    -50%
                                                </span>
                                                <img src="./src/img/products/men/product-men-1-2.jpg" class="product-img-content product-img-2"/>
                                                <img src="./src/img/products/men/product-men-1-1.jpg" class="product-img-content product-img-1"/>
                                            </div>
                                            <div class="card-body">
                                                <h5 class="card-title product-info">
                                                    <div class="list-color d-flex">
                                                        <div class="dot-list d-flex">
                                                            <div class="dot green"></div>
                                                            <div class="dot pink"></div>
                                                            <div class="dot yellow"></div>
                                                        </div>
                                                        <div class="favorite">
                                                            <span class="material-symbols-outlined favorite-icon">
                                                                favorite
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="product-name">
                                                        Áo Sơ Mi Denim
                                                    </div>
                                                </h5>
                                                <p class="card-text">
                                                    <div class="product-price d-flex">
                                                        <div class="product-price__new">750.000đ</div>
                                                        <strike><div class="product-price__old">1.150.000đ</div></strike>
                                                    </div>
                                                </p>
                                                <a href="#" class="btn btn-primary" style="background-color: transparent; border: none;">
                                                    <div class="product-cart">
                                                        <span class="material-symbols-outlined product-cart-icon">
                                                            local_mall
                                                        </span>
                                                        <p class="product-cart-buy">Mua ngay</p>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                        
                                    <div class="col-lg-3 col-md-6 col-6 product">
                                        <div class="card">
                                            <div class="product-img">
                                                <span class="badget">
                                                    -50%
                                                </span>
                                                <img src="./src/img/products/men/product-men-2-2.jpg" class="product-img-content product-img-2"/>
                                                <img src="./src/img/products/men/product-men-2-1.jpg" class="product-img-content product-img-1"/>
                                            </div>
                                            <div class="card-body">
                                                <h5 class="card-title product-info">
                                                    <div class="list-color d-flex">
                                                        <div class="dot-list d-flex">
                                                            <div class="dot green"></div>
                                                            <div class="dot pink"></div>
                                                            <div class="dot yellow"></div>
                                                        </div>
                                                        <div class="favorite">
                                                            <span class="material-symbols-outlined favorite-icon">
                                                                favorite
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="product-name">
                                                        Áo Thun Nam Cổ Tròn
                                                    </div>
                                                </h5>
                                                <p class="card-text">
                                                    <div class="product-price d-flex">
                                                        <div class="product-price__new">550.000đ</div>
                                                        <strike><div class="product-price__old">950.000đ</div></strike>
                                                    </div>
                                                </p>
                                                <a href="#" class="btn btn-primary" style="background-color: transparent; border: none;">
                                                    <div class="product-cart">
                                                        <span class="material-symbols-outlined product-cart-icon">
                                                            local_mall
                                                        </span>
                                                        <p class="product-cart-buy">Mua ngay</p>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
    
                                    <div class="col-lg-3 col-md-6 col-6 product">
                                        <div class="card">
                                            <div class="product-img">
                                                <span class="badget">
                                                    -50%
                                                </span>
                                                <img src="./src/img/products/men/product-men-3-2.jpg" class="product-img-content product-img-2"/>
                                                <img src="./src/img/products/men/product-men-3-1.jpg" class="product-img-content product-img-1"/>
                                            </div>
                                            <div class="card-body">
                                                <h5 class="card-title product-info">
                                                    <div class="list-color d-flex">
                                                        <div class="dot-list d-flex">
                                                            <div class="dot green"></div>
                                                            <div class="dot pink"></div>
                                                            <div class="dot yellow"></div>
                                                        </div>
                                                        <div class="favorite">
                                                            <span class="material-symbols-outlined favorite-icon">
                                                                favorite
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="product-name">
                                                        Áo Thun Emotion
                                                    </div>
                                                </h5>
                                                <p class="card-text">
                                                    <div class="product-price d-flex">
                                                        <div class="product-price__new">350.000đ</div>
                                                        <strike><div class="product-price__old">750.000đ</div></strike>
                                                    </div>
                                                </p>
                                                <a href="#" class="btn btn-primary" style="background-color: transparent; border: none;">
                                                    <div class="product-cart">
                                                        <span class="material-symbols-outlined product-cart-icon">
                                                            local_mall
                                                        </span>
                                                        <p class="product-cart-buy">Mua ngay</p>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
    
                                    <div class="col-lg-3 col-md-6 col-6 product">
                                        <div class="card">
                                            <div class="product-img">
                                                <span class="badget">
                                                    -50%
                                                </span>
                                                <img src="./src/img/products/men/product-men-4-2.jpg" class="product-img-content product-img-2"/>
                                                <img src="./src/img/products/men/product-men-4-1.jpg" class="product-img-content product-img-1"/>
                                            </div>
                                            <div class="card-body">
                                                <h5 class="card-title product-info">
                                                    <div class="list-color d-flex">
                                                        <div class="dot-list d-flex">
                                                            <div class="dot green"></div>
                                                            <div class="dot pink"></div>
                                                            <div class="dot yellow"></div>
                                                        </div>
                                                        <div class="favorite">
                                                            <span class="material-symbols-outlined favorite-icon">
                                                                favorite
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="product-name">
                                                        Áo Polo Nam Kẻ Ngang
                                                    </div>
                                                </h5>
                                                <p class="card-text">
                                                    <div class="product-price d-flex">
                                                        <div class="product-price__new">750.000đ</div>
                                                        <strike><div class="product-price__old">1.150.000đ</div></strike>
                                                    </div>
                                                </p>
                                                <a href="#" class="btn btn-primary" style="background-color: transparent; border: none;">
                                                    <div class="product-cart">
                                                        <span class="material-symbols-outlined product-cart-icon">
                                                            local_mall
                                                        </span>
                                                        <p class="product-cart-buy">Mua ngay</p>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
    
                                    <div class="col-lg-3 col-md-6 col-6 product">
                                        <div class="card">
                                            <div class="product-img">
                                                <span class="badget">
                                                    -50%
                                                </span>
                                                <img src="./src/img/products/men/product-men-5-2.jpg" class="product-img-content product-img-2"/>
                                                <img src="./src/img/products/men/product-men-5-1.jpg" class="product-img-content product-img-1"/>
                                            </div>
                                            <div class="card-body">
                                                <h5 class="card-title product-info">
                                                    <div class="list-color d-flex">
                                                        <div class="dot-list d-flex">
                                                            <div class="dot green"></div>
                                                            <div class="dot pink"></div>
                                                            <div class="dot yellow"></div>
                                                        </div>
                                                        <div class="favorite">
                                                            <span class="material-symbols-outlined favorite-icon">
                                                                favorite
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="product-name">
                                                        Áo Polo Sọc Kẻ Ngang
                                                    </div>
                                                </h5>
                                                <p class="card-text">
                                                    <div class="product-price d-flex">
                                                        <div class="product-price__new">750.000đ</div>
                                                        <strike><div class="product-price__old">1.150.000đ</div></strike>
                                                    </div>
                                                </p>
                                                <a href="#" class="btn btn-primary" style="background-color: transparent; border: none;">
                                                    <div class="product-cart">
                                                        <span class="material-symbols-outlined product-cart-icon">
                                                            local_mall
                                                        </span>
                                                        <p class="product-cart-buy">Mua ngay</p>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
    
                                    <div class="col-lg-3 col-md-6 col-6 product">
                                        <div class="card">
                                            <div class="product-img">
                                                <span class="badget">
                                                    -50%
                                                </span>
                                                <img src="./src/img/products/men/product-men-6-2.jpg" class="product-img-content product-img-2"/>
                                                <img src="./src/img/products/men/product-men-6-1.jpg" class="product-img-content product-img-1"/>
                                            </div>
                                            <div class="card-body">
                                                <h5 class="card-title product-info">
                                                    <div class="list-color d-flex">
                                                        <div class="dot-list d-flex">
                                                            <div class="dot green"></div>
                                                            <div class="dot pink"></div>
                                                            <div class="dot yellow"></div>
                                                        </div>
                                                        <div class="favorite">
                                                            <span class="material-symbols-outlined favorite-icon">
                                                                favorite
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="product-name">
                                                        Áo Polo Nam Kẻ Ngang
                                                    </div>
                                                </h5>
                                                <p class="card-text">
                                                    <div class="product-price d-flex">
                                                        <div class="product-price__new">950.000đ</div>
                                                        <strike><div class="product-price__old">1.150.000đ</div></strike>
                                                    </div>
                                                </p>
                                                <a href="#" class="btn btn-primary" style="background-color: transparent; border: none;">
                                                    <div class="product-cart">
                                                        <span class="material-symbols-outlined product-cart-icon">
                                                            local_mall
                                                        </span>
                                                        <p class="product-cart-buy">Mua ngay</p>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
    
                                    <div class="col-lg-3 col-md-6 col-6 product">
                                        <div class="card">
                                            <div class="product-img">
                                                <span class="badget">
                                                    -50%
                                                </span>
                                                <img src="./src/img/products/men/product-men-7-2.jpg" class="product-img-content product-img-2"/>
                                                <img src="./src/img/products/men/product-men-7-1.jpg" class="product-img-content product-img-1"/>
                                            </div>
                                            <div class="card-body">
                                                <h5 class="card-title product-info">
                                                    <div class="list-color d-flex">
                                                        <div class="dot-list d-flex">
                                                            <div class="dot green"></div>
                                                            <div class="dot pink"></div>
                                                            <div class="dot yellow"></div>
                                                        </div>
                                                        <div class="favorite">
                                                            <span class="material-symbols-outlined favorite-icon">
                                                                favorite
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="product-name">
                                                        Áo Thun Nam Học Tiết
                                                    </div>
                                                </h5>
                                                <p class="card-text">
                                                    <div class="product-price d-flex">
                                                        <div class="product-price__new">750.000đ</div>
                                                        <strike><div class="product-price__old">1.150.000đ</div></strike>
                                                    </div>
                                                </p>
                                                <a href="#" class="btn btn-primary" style="background-color: transparent; border: none;">
                                                    <div class="product-cart">
                                                        <span class="material-symbols-outlined product-cart-icon">
                                                            local_mall
                                                        </span>
                                                        <p class="product-cart-buy">Mua ngay</p>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
    
                                    <div class="col-lg-3 col-md-6 col-6 product">
                                        <div class="card">
                                            <div class="product-img">
                                                <span class="badget">
                                                    -50%
                                                </span>
                                                <img src="./src/img/products/men/product-men-8-2.jpg" class="product-img-content product-img-2"/>
                                                <img src="./src/img/products/men/product-men-8-1.jpg" class="product-img-content product-img-1"/>
                                            </div>
                                            <div class="card-body">
                                                <h5 class="card-title product-info">
                                                    <div class="list-color d-flex">
                                                        <div class="dot-list d-flex">
                                                            <div class="dot green"></div>
                                                            <div class="dot pink"></div>
                                                            <div class="dot yellow"></div>
                                                        </div>
                                                        <div class="favorite">
                                                            <span class="material-symbols-outlined favorite-icon">
                                                                favorite
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="product-name">
                                                        Áo Polo Phối Kẻ
                                                    </div>
                                                </h5>
                                                <p class="card-text">
                                                    <div class="product-price d-flex">
                                                        <div class="product-price__new">1.450.000đ</div>
                                                        <strike><div class="product-price__old">1.750.000đ</div></strike>
                                                    </div>
                                                </p>
                                                <a href="#" class="btn btn-primary" style="background-color: transparent; border: none;">
                                                    <div class="product-cart">
                                                        <span class="material-symbols-outlined product-cart-icon">
                                                            local_mall
                                                        </span>
                                                        <p class="product-cart-buy">Mua ngay</p>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="type-content-list">
                                <div class="row">
                                    <div class="col-lg-3 col-md-6 col-6 product">
                                        <div class="card">
                                            <div class="product-img">
                                                <span class="badget">
                                                    -50%
                                                </span>
                                                <img src="./src/img/products/kid/product-kid-1-2.jpg" class="product-img-content product-img-2"/>
                                                <img src="./src/img/products/kid/product-kid-1-1.jpg" class="product-img-content product-img-1"/>
                                            </div>
                                            <div class="card-body">
                                                <h5 class="card-title product-info">
                                                    <div class="list-color d-flex">
                                                        <div class="dot-list d-flex">
                                                            <div class="dot green"></div>
                                                            <div class="dot pink"></div>
                                                            <div class="dot yellow"></div>
                                                        </div>
                                                        <div class="favorite">
                                                            <span class="material-symbols-outlined favorite-icon">
                                                                favorite
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="product-name">
                                                        Áo Ngắn Tay Họa Tiết
                                                    </div>
                                                </h5>
                                                <p class="card-text">
                                                    <div class="product-price d-flex">
                                                        <div class="product-price__new">190.000đ</div>
                                                        <strike><div class="product-price__old">350.000đ</div></strike>
                                                    </div>
                                                </p>
                                                <a href="#" class="btn btn-primary" style="background-color: transparent; border: none;">
                                                    <div class="product-cart">
                                                        <span class="material-symbols-outlined product-cart-icon">
                                                            local_mall
                                                        </span>
                                                        <p class="product-cart-buy">Mua ngay</p>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                        
                                    <div class="col-lg-3 col-md-6 col-6 product">
                                        <div class="card">
                                            <div class="product-img">
                                                <span class="badget">
                                                    -50%
                                                </span>
                                                <img src="./src/img/products/kid/product-kid-2-2.jpg" class="product-img-content product-img-2"/>
                                                <img src="./src/img/products/kid/product-kid-2-1.jpg" class="product-img-content product-img-1"/>
                                            </div>
                                            <div class="card-body">
                                                <h5 class="card-title product-info">
                                                    <div class="list-color d-flex">
                                                        <div class="dot-list d-flex">
                                                            <div class="dot green"></div>
                                                            <div class="dot pink"></div>
                                                            <div class="dot yellow"></div>
                                                        </div>
                                                        <div class="favorite">
                                                            <span class="material-symbols-outlined favorite-icon">
                                                                favorite
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="product-name">
                                                        Quàn Sooc Phối Màu
                                                    </div>
                                                </h5>
                                                <p class="card-text">
                                                    <div class="product-price d-flex">
                                                        <div class="product-price__new">140.000đ</div>
                                                        <strike><div class="product-price__old">280.000đ</div></strike>
                                                    </div>
                                                </p>
                                                <a href="#" class="btn btn-primary" style="background-color: transparent; border: none;">
                                                    <div class="product-cart">
                                                        <span class="material-symbols-outlined product-cart-icon">
                                                            local_mall
                                                        </span>
                                                        <p class="product-cart-buy">Mua ngay</p>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
    
                                    <div class="col-lg-3 col-md-6 col-6 product">
                                        <div class="card">
                                            <div class="product-img">
                                                <span class="badget">
                                                    -50%
                                                </span>
                                                <img src="./src/img/products/kid/product-kid-3-2.jpg" class="product-img-content product-img-2"/>
                                                <img src="./src/img/products/kid/product-kid-3-1.jpg" class="product-img-content product-img-1"/>
                                            </div>
                                            <div class="card-body">
                                                <h5 class="card-title product-info">
                                                    <div class="list-color d-flex">
                                                        <div class="dot-list d-flex">
                                                            <div class="dot green"></div>
                                                            <div class="dot pink"></div>
                                                            <div class="dot yellow"></div>
                                                        </div>
                                                        <div class="favorite">
                                                            <span class="material-symbols-outlined favorite-icon">
                                                                favorite
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="product-name">
                                                        Áo Sơ Mi Họa Tiết Lá
                                                    </div>
                                                </h5>
                                                <p class="card-text">
                                                    <div class="product-price d-flex">
                                                        <div class="product-price__new">210.000đ</div>
                                                        <strike><div class="product-price__old">420.000đ</div></strike>
                                                    </div>
                                                </p>
                                                <a href="#" class="btn btn-primary" style="background-color: transparent; border: none;">
                                                    <div class="product-cart">
                                                        <span class="material-symbols-outlined product-cart-icon">
                                                            local_mall
                                                        </span>
                                                        <p class="product-cart-buy">Mua ngay</p>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
    
                                    <div class="col-lg-3 col-md-6 col-6 product">
                                        <div class="card">
                                            <div class="product-img">
                                                <span class="badget">
                                                    -50%
                                                </span>
                                                <img src="./src/img/products/kid/product-kid-4-2.jpg" class="product-img-content product-img-2"/>
                                                <img src="./src/img/products/kid/product-kid-4-1.jpg" class="product-img-content product-img-1"/>
                                            </div>
                                            <div class="card-body">
                                                <h5 class="card-title product-info">
                                                    <div class="list-color d-flex">
                                                        <div class="dot-list d-flex">
                                                            <div class="dot green"></div>
                                                            <div class="dot pink"></div>
                                                            <div class="dot yellow"></div>
                                                        </div>
                                                        <div class="favorite">
                                                            <span class="material-symbols-outlined favorite-icon">
                                                                favorite
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="product-name">
                                                        Áo Thun Polo Máy Ảnh
                                                    </div>
                                                </h5>
                                                <p class="card-text">
                                                    <div class="product-price d-flex">
                                                        <div class="product-price__new">160.000đ</div>
                                                        <strike><div class="product-price__old">320.000đ</div></strike>
                                                    </div>
                                                </p>
                                                <a href="#" class="btn btn-primary" style="background-color: transparent; border: none;">
                                                    <div class="product-cart">
                                                        <span class="material-symbols-outlined product-cart-icon">
                                                            local_mall
                                                        </span>
                                                        <p class="product-cart-buy">Mua ngay</p>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
    
                                    <div class="col-lg-3 col-md-6 col-6 product">
                                        <div class="card">
                                            <div class="product-img">
                                                <span class="badget">
                                                    -50%
                                                </span>
                                                <img src="./src/img/products/kid/product-kid-5-2.jpg" class="product-img-content product-img-2"/>
                                                <img src="./src/img/products/kid/product-kid-5-1.jpg" class="product-img-content product-img-1"/>
                                            </div>
                                            <div class="card-body">
                                                <h5 class="card-title product-info">
                                                    <div class="list-color d-flex">
                                                        <div class="dot-list d-flex">
                                                            <div class="dot green"></div>
                                                            <div class="dot pink"></div>
                                                            <div class="dot yellow"></div>
                                                        </div>
                                                        <div class="favorite">
                                                            <span class="material-symbols-outlined favorite-icon">
                                                                favorite
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="product-name">
                                                        Set Áo 2 Dây Và Quần Phối Bèo
                                                    </div>
                                                </h5>
                                                <p class="card-text">
                                                    <div class="product-price d-flex">
                                                        <div class="product-price__new">190.000đ</div>
                                                        <strike><div class="product-price__old">350.000đ</div></strike>
                                                    </div>
                                                </p>
                                                <a href="#" class="btn btn-primary" style="background-color: transparent; border: none;">
                                                    <div class="product-cart">
                                                        <span class="material-symbols-outlined product-cart-icon">
                                                            local_mall
                                                        </span>
                                                        <p class="product-cart-buy">Mua ngay</p>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
    
                                    <div class="col-lg-3 col-md-6 col-6 product">
                                        <div class="card">
                                            <div class="product-img">
                                                <span class="badget">
                                                    -50%
                                                </span>
                                                <img src="./src/img/products/kid/product-kid-6-2.jpg" class="product-img-content product-img-2"/>
                                                <img src="./src/img/products/kid/product-kid-6-1.jpg" class="product-img-content product-img-1"/>
                                            </div>
                                            <div class="card-body">
                                                <h5 class="card-title product-info">
                                                    <div class="list-color d-flex">
                                                        <div class="dot-list d-flex">
                                                            <div class="dot green"></div>
                                                            <div class="dot pink"></div>
                                                            <div class="dot yellow"></div>
                                                        </div>
                                                        <div class="favorite">
                                                            <span class="material-symbols-outlined favorite-icon">
                                                                favorite
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="product-name">
                                                        Áo Thun Polo Ivy Kids
                                                    </div>
                                                </h5>
                                                <p class="card-text">
                                                    <div class="product-price d-flex">
                                                        <div class="product-price__new">220.000đ</div>
                                                        <strike><div class="product-price__old">350.000đ</div></strike>
                                                    </div>
                                                </p>
                                                <a href="#" class="btn btn-primary" style="background-color: transparent; border: none;">
                                                    <div class="product-cart">
                                                        <span class="material-symbols-outlined product-cart-icon">
                                                            local_mall
                                                        </span>
                                                        <p class="product-cart-buy">Mua ngay</p>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
    
                                    <div class="col-lg-3 col-md-6 col-6 product">
                                        <div class="card">
                                            <div class="product-img">
                                                <span class="badget">
                                                    -50%
                                                </span>
                                                <img src="./src/img/products/kid/product-kid-7-2.jpg" class="product-img-content product-img-2"/>
                                                <img src="./src/img/products/kid/product-kid-7-1.jpg" class="product-img-content product-img-1"/>
                                            </div>
                                            <div class="card-body">
                                                <h5 class="card-title product-info">
                                                    <div class="list-color d-flex">
                                                        <div class="dot-list d-flex">
                                                            <div class="dot green"></div>
                                                            <div class="dot pink"></div>
                                                            <div class="dot yellow"></div>
                                                        </div>
                                                        <div class="favorite">
                                                            <span class="material-symbols-outlined favorite-icon">
                                                                favorite
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="product-name">
                                                        Áo Sơ Mi Tay Dài Ivy Kids
                                                    </div>
                                                </h5>
                                                <p class="card-text">
                                                    <div class="product-price d-flex">
                                                        <div class="product-price__new">220.000đ</div>
                                                        <strike><div class="product-price__old">350.000đ</div></strike>
                                                    </div>
                                                </p>
                                                <a href="#" class="btn btn-primary" style="background-color: transparent; border: none;">
                                                    <div class="product-cart">
                                                        <span class="material-symbols-outlined product-cart-icon">
                                                            local_mall
                                                        </span>
                                                        <p class="product-cart-buy">Mua ngay</p>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
    
                                    <div class="col-lg-3 col-md-6 col-6 product">
                                        <div class="card">
                                            <div class="product-img">
                                                <span class="badget">
                                                    -50%
                                                </span>
                                                <img src="./src/img/products/kid/product-kid-8-2.jpg" class="product-img-content product-img-2"/>
                                                <img src="./src/img/products/kid/product-kid-8-1.jpg" class="product-img-content product-img-1"/>
                                            </div>
                                            <div class="card-body">
                                                <h5 class="card-title product-info">
                                                    <div class="list-color d-flex">
                                                        <div class="dot-list d-flex">
                                                            <div class="dot green"></div>
                                                            <div class="dot pink"></div>
                                                            <div class="dot yellow"></div>
                                                        </div>
                                                        <div class="favorite">
                                                            <span class="material-symbols-outlined favorite-icon">
                                                                favorite
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="product-name">
                                                        Đàm BabyDoll Và Vai Phối Bèo
                                                    </div>
                                                </h5>
                                                <p class="card-text">
                                                    <div class="product-price d-flex">
                                                        <div class="product-price__new">190.000đ</div>
                                                        <strike><div class="product-price__old">350.000đ</div></strike>
                                                    </div>
                                                </p>
                                                <a href="#" class="btn btn-primary" style="background-color: transparent; border: none;">
                                                    <div class="product-cart">
                                                        <span class="material-symbols-outlined product-cart-icon">
                                                            local_mall
                                                        </span>
                                                        <p class="product-cart-buy">Mua ngay</p>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        
                        <button class="type-button">
                            Xem tất cả
                        </button>
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
                <div class="footer">
                    <div class="row">
                        <div class="col-md-3 col-12 footer-item">
                            <div class="title">
                                <a href="#"><img src="./src/img/logo.png" class="logo" alt=""></a>
                            </div>
                            <div class="body">
                                <ul class="list">
                                    <li class="item">Về IvyModa</li>
                                    <li class="item">Tuyển dụng</li>
                                    <li class="item">Hệ thống cửa hàng</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3 col-12 footer-item">
                            <div class="title">
                                Dịch vụ khách hàng
                            </div>
                            <div class="body">
                                <ul class="list">
                                    <li class="item">Chính sách điều khoản</li>
                                    <li class="item">Hướng dẫn mua hàng</li>
                                    <li class="item">Chính sách thanh toán</li>
                                    <li class="item">Chính sách đổi trả</li>
                                    <li class="item">Chính sách bảo hành</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3 col-12 footer-item">
                            <div class="title">
                                Liên hệ
                            </div>
                            <div class="body">
                                <ul class="list">
                                    <li class="item">Hotline</li>
                                    <li class="item">Email</li>
                                    <li class="item">Messenger</li>
                                    <li class="item">Live chat</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3 col-12 footer-item">
                            <div class="title">
                                Download App
                            </div>
                            <div class="body">
                                <ul class="list">
                                    <li class="item">
                                        <a href="https://apps.apple.com/app/id1430094474?fbclid=IwAR3xAzj-xTmtj35aQUB8KhTLk1zFgyw2zssisSyn9qkRA6w4fgt6kI7j8Q8"><img src="./src/img/download-1.png" alt=""></a>
                                    </li>
                                    <li class="item">
                                        <a href="https://play.google.com/store/apps/details?id=com.ivymoda.app&fbclid=IwAR2Ki0MhC0MdCSEqmnP9BUNLhKg7ZresCBqA8BfRkPBBswJ99-YNqOX4cL8"><img src="./src/img/download-2.png" alt=""></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        
        <script src="./script.js"></script>
    </body>
    <script src="https://kit.fontawesome.com/644376ed9d.js" crossorigin="anonymous"></script>
</html>