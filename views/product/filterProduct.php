<?php 
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
    include_once "../../controllers/productController.php";
    $controller = new ProductController();
    $currentPage = 1;
    if(isset($_GET['current-page'])) {
        $currentPage = $_GET['current-page'];
    }
    $limit = 4;
    $offset = ($currentPage - 1) * $limit;
    $totalPages = 0;
    $data = NULL;
    if (isset($_GET["type"])){
        $type = $_GET["type"];
        if($type != -1) {
            $products = $controller->getProductByType($type);
            $totalProducts = count($products);
            $totalPages = ceil($totalProducts / $limit);
            $data = $controller->filterProductByTypeLimit($type, $limit, $offset);
        }
        else{
            $products = $controller->getAllProduct();
            $totalProducts = count($products);
            $totalPages = ceil($totalProducts / $limit);
            $data = $controller->filterProductByLimit($limit, $offset);
        }
    }

    if(isset($_POST['action'])) {
        if($data == NULL) {
            echo "Không có sản phẩm nào được tìm thấy";
        }else {
            
            foreach($data as $product){
                $arraycolor = explode(", ",$product->getColor());
                echo "
                <div class='col-lg-3 col-md-6 col-6'>
                    <div class='card'>
                        <div class='product-img'>
                            <span class='badget'>
                                -50%
                            </span>
                            <a href='../detailProduct/indexpd.php?id=".$product->getId()."'>
                                <img src='".$product->getImage02()."' class='product-img-content product-img-2'/>
                                <img src='".$product->getImage01()."' class='product-img-content product-img-1'/>
                            </a>
                            <div class='pro-btn d-flex'>
                                <a href='../detailProduct/indexpd.php?id=".$product->getId()."' class='hidden-btn'>
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
                            <a href='../detailProduct/indexpd.php?id=".$product->getId()."' class='btn btn-primary' style='background-color: transparent; border: none;'>
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
    
?>