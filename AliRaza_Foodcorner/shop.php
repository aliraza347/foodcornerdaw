<?php 
  include ("header.php");
?>



  <section class="pb_md_py_cover  cover-bg-black cover-bg-opacity-4 menu-bg menu" id="section-home">
    <div class="container">
      <div class="row align-items-center justify-content-center">
        <div class="col-md-12 text-center order-md-1">
          <h2 class="heading">Appetizers</h2>
        </div>
      </div>
      <div class="row">
      <?php
              require_once ("clases/createDish.php");
              $appet = '';
            
              foreach($appetizer as $row){

                $appet .= '<div class="col-md-6">';
                $appet .= '<div class="items">';
                $appet .= '<img class="dish-img" src="./assets/img/'.$row->getPicture().'" alt="">';
                $appet .= '<div class="product-title">';
                $appet .= '<h3>'.$row->getName().'</h3>';
                $appet .= '<form action="createsession.php" method="post"> <button style="background-color: transparent; border: none;cursor: pointer" class="btn btn-dark" type="submit" name="addtocartM" value="'.$row->getId().'"><img src="./assets/img/cart.png" alt=""></button></form>';
                $appet .= '</div>';
                $appet .= '<div class="price">';
                $appet .= '<h3>'.$row->getPrice().'€</h3>'; 
                $appet .= '</div>'; 
                $appet .= '</div>'; 
                $appet .= '</div>'; 

              }

              echo $appet;

            ?>

      </div>
    </div>
  </section>

  <section class="pb_md_py_cover  cover-bg-black cover-bg-opacity-4 menu-bg menu" id="section-home">
    <div class="container">
      <div class="row align-items-center justify-content-center">
        <div class="col-md-12 text-center order-md-1">
          <h2 class="heading">Main dishes
          </h2>
        </div>
      </div>
      <div class="row">
      <?php
            //require_once ("clases/createDish.php");
            $maind = '';
            
            foreach($mainDish as $row){

              $maind .= '<div class="col-md-6">';
              $maind .= '<div class="items">';
              $maind .= '<img class="dish-img" src="./assets/img/'.$row->getPicture().'" alt="">';
              $maind .= '<div class="product-title">';
              $maind .= '<h3>'.$row->getName().'</h3>';
              $maind .= '<form action="createsession.php" method="post"> <button style="background-color: transparent; border: none;cursor: pointer" class="btn btn-dark" type="submit" name="addtocartMV" value="'.$row->getId().'"><img src="./assets/img/cart.png" alt=""></button></form>';
              $maind .= '</div>';
              $maind .= '<div class="price">';
              $maind .= '<h3>'.$row->getPrice().'€</h3>'; 
              $maind .= '</div>'; 
              $maind .= '</div>'; 
              $maind .= '</div>'; 

            }

            echo $maind;

          ?>
      </div>
    </div>
  </section>

  <section class="pb_md_py_cover  cover-bg-black cover-bg-opacity-4 menu-bg menu" id="section-home">
    <div class="container">
      <div class="row align-items-center justify-content-center">
        <div class="col-md-12 text-center order-md-1">
          <h2 class="heading">Desserts
          </h2>
        </div>
      </div>
      <div class="row">
      <?php
            //require_once ("clases/createDish.php");
            $dess = '';
            
            foreach($dessert as $row){

              $dess .= '<div class="col-md-6">';
              $dess .= '<div class="items">';
              $dess .= '<img class="dish-img" src="./assets/img/'.$row->getPicture().'" alt="">';
              $dess .= '<div class="product-title">';
              $dess .= '<h3>'.$row->getName().'</h3>';
              $dess .= '<form action="createsession.php" method="post"> <button style="background-color: transparent; border: none;cursor: pointer" class="btn btn-dark" type="submit" name="addtocartDS" value="'.$row->getId().'"><img src="./assets/img/cart.png" alt=""></button></form>';
              $dess .= '</div>';
              $dess .= '<div class="price">';
              $dess .= '<h3>'.$row->getPrice().'€</h3>'; 
              $dess .= '</div>'; 
              $dess .= '</div>'; 
              $dess .= '</div>'; 

            }

            echo $dess;

          ?>
      </div>
    </div>
  </section>



  <?php 
      include "footer.php";
  ?>