<?php 
  include ("header.php");
?>

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
            <p id="contact">To increase our approach to more clients we've decided to use this website so we can deliver your food
              right at your
              place within Barcelona city and the towns around.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section style="background-image: url(./assets/img/about.png)" class="py-5 contact-bg pb_md_py_cover">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="contact">
            <h1>Contact us</h1>

            <form action="">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="topic">Topic</label>
                    <input type="text" class="form-control" id="topic">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="message">Message</label>
                    <textarea class="w-100" name="" id="" cols="30" rows="5"></textarea>
                  </div>
                </div>
                <div class="ml-auto ">
                  <input type="submit" value="Send">
                </div>

              </div>
            </form>
          </div>

        </div>
      </div>
    </div>
  </section>


  <?php 
      include "footer.php";
  ?>