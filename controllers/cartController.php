<?php
require_once "../modules/cart_module.php";

if (isset($_POST['cartcontroller'])) {
    $prodpricetotal = $_POST['prod_quantity'] * $_POST['prod_price'];

    $product = array(
    "prod_id" => $_POST['prod_id'], 
    "prod_name" => $_POST['prod_name'], 
    "prod_image" => $_POST['prod_image'],
    "prod_size" => $_POST['size'], 
    "prod_color" => $_POST['color'], 
    "prod_price" => $_POST['prod_price'],
    "prod_quantity" => $_POST['prod_quantity'], 
    "prod_price_total" => $prodpricetotal
    );
}  
    

    switch ($_POST["cartcontroller"]) {
        case "addToCart":
            addToCart($product);
            //var_dump(addToCart($product));
            //header('location: ../views/detailProduct/index.php?page=detailproduct&id='.$_POST['prod_id'].'');
            break;
        case "buyNow":
            addToCart($product);
            header('location: ../views/cart/index.php');
            break;
        case "updateCart":
            updateCart($_POST['prod_id'], $_POST['prod_quantity_up']);
            header('location: ../views/cart/index.php');
            break;
        case "removeFromCart":
            removeFromCart($_POST['prod_id']);
            header('location: ../views/cart/index.php');
            break;
        case "emptyCart":
            emptyCart();
            header('location: ../views/cart/index.php');
            break;
        default:
            break;
    }

?>