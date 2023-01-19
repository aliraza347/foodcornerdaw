<?php 
  include ("header.php");
?>

  <section class="pb_cover_v1 cover-bg-black cover-bg-opacity-4"
    style="background-image: url(./assets/img/hero-banner.jpg); background-size: cover; background-position: center;"
    id="section-home">
    <div class="container">
      <div class="row align-items-center justify-content-start">
        <div class="col-md-8 order-md-1">

          <h1 class="heading mb-3">True Ingredients,
            True Flavors</h1>
          <h2>"Relish the taste of Pakistan"</h2>

          <div class="d-flex align-items-center">
            <a href="about.php" role="button"
              class="btn smoothscroll pb_outline-light rounded-0 btn-xl pb_letter-spacing-2 p-3">Get to know us</a>
            <img class="halal" src="./assets/img/halal.png" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="pb_md_py_cover  cover-bg-black cover-bg-opacity-4 menu-bg menu" id="section-home">
    <div class="container">
      <div class="row align-items-center justify-content-center">
        <div class="col-md-12 text-center order-md-1">
          <h2 class="heading">Our Specials</h2>
        </div>
      </div>
      <div class="row">
      <?php
              require_once ("clases/createDish.php");
              $popuparDish = '';
            
              foreach($appetizer as $row){

                $popuparDish .= '<div class="col-md-6">';
                $popuparDish .= '<div class="items">';
                $popuparDish .= '<img class="dish-img" src="./assets/img/'.$row->getPicture().'" alt="">';
                $popuparDish .= '<div class="product-title">';
                $popuparDish .= '<h3>'.$row->getName().'</h3>';
                $popuparDish .= '<form action="createsession.php" method="post"> <button style="background-color: transparent; border: none;cursor: pointer" class="btn btn-dark" type="submit" name="addtocart" value="'.$row->getId().'"><img src="./assets/img/cart.png" alt=""></button></form>';
                $popuparDish .= '</div>';
                $popuparDish .= '<div class="price">';
                $popuparDish .= '<h3>'.$row->getPrice().'€</h3>'; 
                $popuparDish .= '</div>'; 
                $popuparDish .= '</div>'; 
                $popuparDish .= '</div>'; 
              }

              echo $popuparDish;

            ?>
      </div>
    </div>
  </section>

  <section class="pb_md_py_cover cover-bg-black cover-bg-opacity-6 about"
    style="background-image: url(./assets/img/about.png)" id="section-home">
    <div class="container">
      <div class="row align-items-center justify-content-center">
        <div class="col-md-12 order-md-1 text-center">
          <h1 class="heading mb-3">About us</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-8">
          <div class="mb-5">
            <h2>Why us</h2>
            <p>Food corner specializes in providing halal Pakistani food, specially for our desi people living abroad to
              remind them
              home taste.</p>
          </div>
          <div class="mb-5">
            <h2>Since when</h2>
            <p>We were established in 1998 in the beautiful town of Molins de Rei.</p>
          </div>
          <div class="mb-5">
            <h2>Evolution</h2>
            <p>To increase our approach to more clients we've decided to use this website so we can deliver your food
              right at your
              place within Barcelona city and the towns around.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php 
      include "footer.php";
  ?>