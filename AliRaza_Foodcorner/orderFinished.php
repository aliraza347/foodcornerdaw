<?php 
  include ("header.php");
  $orderSL = 0;
  
  //include ("check-table.php");
?>
<?php
setcookie("lastOrder", "", time() - 86400);
if(!isset($_COOKIE['lastOrder'])) {
  //var_dump($_SESSION['cookieValue']);
  setcookie("lastOrder", $_SESSION['cookieValue'], time() + 86400 );
}
?>
<style>
  .cartnumber{margin-top: -13px;}
</style>
  <section style="background-image: url(./assets/img/about.png); padding: 200px 0" class=" contact-bg pb_md_py_cover">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="contact">
            <h1>Order</h1>
            <h4 class="text-center text-light">Your order has been placed successfully</h4>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php
     session_destroy();
     if(isset($_SESSION['lastOrder'])){echo ($_COOKIE['lastOrder']);}
     ?>
         <script>
    document.getElementById('orderNumber').innerText = 0;
  </script>
  <?php 
      include "footer.php";
  ?>
