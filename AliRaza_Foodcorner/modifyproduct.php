<?php
require_once ("clases/dish.php");

if(isset($_POST['quantityP'])){
    session_start();

    $productQuantity = $_POST['quantityP'];
    $productID = $_POST['productID'];


    $_SESSION['cart'][$productID]->setQuantity($productQuantity);

    
    header("Location:payment.php");
    
}elseif(isset($_POST['increase'])){
    session_start();

    $productQuantity = $_POST['quantity'];
    $quantity = (int) $productQuantity;
    $quantity++;
    $productID = $_POST['productID'];


    $_SESSION['cart'][$productID]->setQuantity($quantity);

    
    header("Location:payment.php");
    
}elseif(isset($_POST['decrease'])){
    session_start();

    $productQuantity = $_POST['quantity'];
    $quantity = (int) $productQuantity;
    if ($quantity > 1) {
        $quantity--;
        $productID = $_POST['productID'];
    
    
        $_SESSION['cart'][$productID]->setQuantity($quantity);
        
    }
    header("Location:payment.php");   
}elseif(isset($_POST['deleteP'])){
    session_start();
    //session_destroy();
    unset($_SESSION['cart'][$_POST['deleteP']]);
    header("Location:payment.php");

}else{
    header("Location:payment.php");
}



?>