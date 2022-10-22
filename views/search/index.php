<?php
    session_start();
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
                "brown" => "C4B095",
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/a76b54ad15.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="../../style.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <title>Search Result</title>
</head>
<body>
   <div class="container">
    <header>
        <?php include_once "../../components/header.php"?>
    </header>
    <br>
    <!--Breadcrumb-->
    <nav aria-label="breadcrumb" style="background-color: #e9ecef; margin-top: 12rem;" class="breadcrumb-container">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="../../index.php">Trang chủ</a></li>
                <li class="breadcrumb-item active" aria-current="page">Tìm kiếm</li>
            </ol>
        </div>
    </nav>
    <!--Content-->
        <!--Filter + Products-->
    <div class="row">
        <!--Filter-->    
        
        <!--Products-->
        <div class="col-12 col-lg-12">
            <!--Sort dropdown-->
            <div class="row">
                <div class="col-12 col-lg-7 cold-md-7">
                    <div style="font-size: 2rem; margin-left: -0.5rem; padding-top: 2rem;">
                        Kết quả tìm kiếm theo "<?php echo $_SESSION['search'] ?>"
                    </div>
                </div>
            </div>
            <!--The product-->
            <div class='row' id='product-body'>
                <?php 
                    include_once "../../controllers/productController.php";
                    include_once "../../controllers/cartController.php";
                    $controller = new ProductController();

                    if (isset($_SESSION['search'])){
                        $searchstr = $_SESSION['search'];
                        $data = $controller->getProductByName($searchstr);

                        if (empty($data)){
                            echo "<h1 style='margin-left:1rem;'>Không tìm thấy kết quả nào</h1>";
                        }
                        else{
                            foreach($data as $product){
                                $arraycolor = explode(", ",$product->getColor());
                                echo "  
                                <div class='col-lg-3 col-md-6 col-6 product-search-result'>
                                    <div class='card'>
                                        <div class='product-img'>
                                            <span class='badget'>
                                                -50%
                                            </span>
                                            <a href='../../views/detailProduct/index.php?id=".$product->getId()."'>
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
                                                            foreach ($arraycolor as $cpro){
                                                                $colorHex = color_format($cpro);
                                                                echo '<label class="color-button" style="background-color:#'.$colorHex.';" for="'.strtolower($cpro).'"></label>'; 
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
                                            <a href='../detailProduct/index.php?id=".$product->getId()."' class='btn btn-primary' style='background-color: transparent; border: none;'>
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
                        }
                    }
                    else{
                        echo "<h1 style='margin-left:1rem;'>Không tìm thấy kết quả nào</h1>";
                    }
                ?>
            </div>
        </div>
    </div>
    <footer>
        <?php 
            include_once "../../components/footer.php";
        ?>
    </footer>
   </div>
    <script src="./script.js"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>
</body>
</html>