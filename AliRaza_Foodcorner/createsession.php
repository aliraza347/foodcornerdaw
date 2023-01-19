<?php
require_once ("clases/createDish.php");

if(isset($_POST['addtocart'])){
    $order = $appetizer[$_POST['addtocart']];
    session_start();
    //unset($_SESSION['cart']);

    if(isset($_SESSION['cart'])){
        if(in_array($order, $_SESSION['cart'])){
            echo("this Product already exists");
        }else{
            array_push($_SESSION['cart'],$order);
        }
        
    }else{
        $_SESSION['cart']=array();
        array_push($_SESSION['cart'],$order);
    }
    //var_dump( $_SESSION['cart']);

    header("Location:index.php");

}elseif(isset($_POST['addtocartM'])){
    $order = $appetizer[$_POST['addtocartM']];
    session_start();

    if(isset($_SESSION['cart'])){
        if(in_array($order, $_SESSION['cart'])){
            echo("this Product already exists");
        }else{
            array_push($_SESSION['cart'],$order);
        }
        
    }else{
        $_SESSION['cart']=array();
        array_push($_SESSION['cart'],$order);
    }

    header("Location:shop.php");
    
}elseif(isset($_POST['addtocartMV'])){
    $order = $mainDish[$_POST['addtocartMV']];
    session_start();

    if(isset($_SESSION['cart'])){
        if(in_array($order, $_SESSION['cart'])){
            echo("this Product already exits");
        }else{
            array_push($_SESSION['cart'],$order);
        }
        
    }else{
        $_SESSION['cart']=array();
        array_push($_SESSION['cart'],$order);
    }
    
    header("Location:shop.php");
    
}elseif(isset($_POST['addtocartDS'])){
    $order = $dessert[$_POST['addtocartDS']];
    session_start();

    if(isset($_SESSION['cart'])){
        if(in_array($order, $_SESSION['cart'])){
            echo("this Product already exits");
        }else{
            array_push($_SESSION['cart'],$order);
        }
        
    }else{
        $_SESSION['cart']=array();
        array_push($_SESSION['cart'],$order);
    }
    
    header("Location:shop.php");
    
}else{
    header("Location:index.php");
}



?>

