<?php 
    if((isset($_SESSION['user_id'])) and (isset($_SESSION['user_name']))){
        require_once ("clases/dish.php");
        include 'header/header2.php';
    }else{
        require_once ("clases/dish.php");
        session_start();
        if((isset($_SESSION['user_id'])) and (isset($_SESSION['user_name']))){
            include 'header/header2.php';
        }else{
            include 'header/header1.php';
        }
    }
    
    
?>