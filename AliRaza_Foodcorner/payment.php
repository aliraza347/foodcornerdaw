<?php 
  include ("header.php");
?>

  <section style="background-image: url(./assets/img/about.png)" class="py-5 contact-bg pb_md_py_cover">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="contact">
            <h1>Cart</h1>

            <div class="row">
              <div class="col-md-12">
                    <?php
              require_once ("clases/createDish.php");
              $finalorder = '';
              $totalPriceL = array();
              $totalPrice = 0;
              //session_destroy();
              if(isset($_SESSION['cart'])){
      

                $_SESSION['cart'] = array_values($_SESSION['cart']);
                //var_dump($_SESSION['cart']);
                $arrayPosition = 0;
                $finalorder .= ' <div class="table-responsive">';
                $finalorder .= ' <table class="table">';
                $finalorder .= ' <thead>';
                $finalorder .= ' <tr>';
                $finalorder .= ' <th scope="col">Product</th>';
                $finalorder .= ' <th scope="col">Quantity</th>';
                $finalorder .= ' <th scope="col">Price</th>';
                $finalorder .= ' <th scope="col">Action</th>';
                $finalorder .= ' </tr>';
                $finalorder .= ' </thead>';
                $finalorder .= ' <tbody>';
                foreach($_SESSION['cart'] as $row){

                  $finalorder .= '<tr>';
                  $finalorder .= '<td>'.$row->getName().'</td>';
                  $finalorder .= '<td><form action="modifyproduct.php" method="post" class="form-inline">';
                  $finalorder .= '<input style="background: transparent;padding: 0; color: white;font-weight: bold; cursor: pointer;" class="form-control-plaintext" type="submit" value="-" name="decrease"><input style="background: transparent;padding: 0;width: 30px;text-align: center; color: white;font-weight: bold;" class="form-control-plaintext" type="number" value="'.$row->getQuantity().'" readonly name="quantity"><input style="background: transparent;padding: 0; color: white;font-weight: bold; cursor: pointer;" class="form-control-plaintext" type="submit" value="+" name="increase"></td>';
                  $finalorder .= '<input type="hidden" value="'.$arrayPosition.'" name="productID">';
                  $finalorder .= '</form></td>';
                  $finalorder .= '<td>'.number_format((float)$row->calculateSQ(), 2, '.', '').'€</td>'; 
                  $finalorder .= '<td><form action="modifyproduct.php" method="post">';
                  $finalorder .= '<input type="hidden" value="'.$arrayPosition.'" name="deleteP">';
                  $finalorder .= '<input style="width: 20px;background-color: transparent;" type="image" style="cursor: pointer;" src="assets/img/delete.png" alt="Submit"  class="mt-1 p-0">';
                  $finalorder .= '</form></td>';
                  $finalorder .= '</tr>';

                  array_push($totalPriceL,$row->calculateSQ());

                  $arrayPosition++;
  
                }
                $totalPrice = Dish::calculatePrice($totalPriceL);
                $_SESSION['totalPrice'] = $totalPrice;
                $finalorder .= '</tbody>';
                $finalorder .= '</table>';
                $finalorder .= '</div>';
                $finalorder .= '<div class="cart-btn">';
                $finalorder .= '<button class="btn btn-light">Subtotal: '.number_format((float)$totalPrice, 2, '.', '').'€</button>';
                $finalorder .= '<button style="cursor: pointer"  onclick=location.href="orderFinished.php" class="btn btn-dark purchase">Purchase</button>';
                $finalorder .= '</div>';

                if(count($_SESSION['cart']) == 0){
                  $finalorder = '<h4 style="text-align: center;color: white;">You dont have any product selected.</h4>';
                }  
              }else{
                $finalorder = '<h4 style="text-align: center;color: white;">You dont have any product selected.</h4>';
              }

              echo $finalorder;


              $orderFin = '';
              if(isset($_SESSION['cart'])){
                foreach($_SESSION['cart'] as $row){
                  $orderFin .= '<p><b>Product Name: </b> '.$row->getName().', <b>Quantity: </b> '.$row->getQuantity().', <b>Price: </b> '.$row->calculateSQ().'€</p>';
  
                }
                $orderFin .= '<p><b>Total Price: </b> '.$_SESSION['totalPrice'].'€</p>';
              }
              

              
              $_SESSION['cookieValue'] = $orderFin;
              

            ?>
                    
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </section>
  <?php 
      include "footer.php";
  ?>