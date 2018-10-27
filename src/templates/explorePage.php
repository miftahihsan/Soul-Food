<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Explore</title>

    <!-- star icon -->
    <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

    <!-- //incudeing the style sheets here -->
    <?php
      include_once '../static/bootStrapCss.php'
     ?>
     <!-- Added later -->

     <script src="sweetalert2.min.js"></script>
     <link rel="stylesheet" href="sweetalert2.min.css">

     <!-- Added later -->

     <link rel="stylesheet" href="../static/styles.css">
     <link rel="stylesheet" href="../static/commonStyles.css">

  </head>


  <body class="hide-overflow-x">

    <!-- // the nav bar here -->
    <?php
      include_once '../_includes/navbar/_navBarExplore.php'
     ?>

     <!-- This is where the slider starts from -->

     <div class="row">

       <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 slider-container">

         <div id="carouselExampleIndicators" class="shadow-lg carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="d-block w-100 img-fluid" src="../static/images/burger.jpg" alt="First slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100 img-fluid" src="../static/images/pizza.jpg" alt="Second slide">

              </div>
              <div class="carousel-item">
                <img class="d-block w-100 img-fluid" src="../static/images/curry.jpg" alt="Third slide">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>

       </div>

     </div>


     <!-- This is where the slides end -->


     <!-- from here the display of food begins -->
     <div class="container mg-tp-80 dashboard-background">

       <br>

       <h1><custom-tag>Discover Best</custom-tag> Home-cooked Food in Dhaka</h1>

       <br>

       <div class="card-deck">

         <?php

          for ($i=0; $i < 3; $i++) {
            echo '
            <div class="card">


              <a class="explore-card" href="cart.php">

                <img class="card-img-top" src="../static/images/burger.jpg" alt="Card image cap">
                <div class="overlay">
                  <div class="text">&#2547; 346</div>
                </div>

                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->

                  <hr>
                  <!-- stars stats here -->
                  <x-star-rating>

                    <div class="star full"></div>
                    <div class="star full"></div>
                    <div class="star full"></div>
                    <div class="star"></div>
                    <div class="star"></div>

                  </x-star-rating>
                  <!-- star ends here -->
                </div>

              </a>

            </div>';
          }

          ?>

      </div>

      <br>

      <div class="card-deck">

        <?php

        for ($i=0; $i < 3; $i++) {
          echo '
          <div class="card">


            <a class="explore-card" href="cart.php">

              <img class="card-img-top" src="../static/images/pizza.jpg" alt="Card image cap">
              <div class="overlay">
                <div class="text">&#2547; 346</div>
              </div>

              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->

                <hr>
                <!-- stars stats here -->
                <x-star-rating>

                  <div class="star full"></div>
                  <div class="star full"></div>
                  <div class="star full"></div>
                  <div class="star"></div>
                  <div class="star"></div>

                </x-star-rating>
                <!-- star ends here -->
              </div>

            </a>

          </div>';
        }

         ?>

     </div>


     <br>

     <div class="card-deck">

       <?php

       for ($i=0; $i < 3; $i++) {
         echo '
         <div class="card">


           <a class="explore-card" href="cart.php">

             <img class="card-img-top" src="../static/images/curry.jpg" alt="Card image cap">
             <div class="overlay">
               <div class="text">&#2547; 346</div>
             </div>

             <div class="card-body">
               <h5 class="card-title">Card title</h5>
               <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
               <!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->

               <hr>
               <!-- stars stats here -->
               <x-star-rating>

                 <div class="star full"></div>
                 <div class="star full"></div>
                 <div class="star full"></div>
                 <div class="star"></div>
                 <div class="star"></div>

               </x-star-rating>
               <!-- star ends here -->
             </div>

           </a>

         </div>';
       }

        ?>

      </div>

      <hr>

     </div>

     <?php
       include_once '../_includes/_footer.php';
      ?>

     <!-- // the css bootstrap here -->
    <?php
      include_once '../static/bootStrapJS.php'
     ?>


  </body>

</html>
