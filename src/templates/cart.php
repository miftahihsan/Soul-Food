<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Cart</title>

    <!-- star icon link -->
    <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

    <!-- Font awsome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- //incudeing the style sheets here -->
    <?php
      include_once '../static/bootStrapCss.php'
     ?>

     <link rel="stylesheet" href="../static/styles.css">
     <link rel="stylesheet" href="../static/commonStyles.css">

  </head>


  <body class="hide-overflow-x">

    <!-- // the nav bar here -->
    <?php
      include_once '../_includes/navbar/_navBarExplore.php'
     ?>

     <div class="container mg-tp-80">
       <div class="row dashboard-background">

         <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

           <div class="row">

             <!-- This is the div for the image -->
             <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
               <img class="cart-page-image img-thumbnail" src="../static/images/curry.jpg" alt="Avatar">
             </div>

             <!-- This is the div for the add o cart button and description -->
             <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 card-page-title">
               <h3>Soul Food!</h3>
               <!-- Stars stats from here -->
               <x-star-rating>

                 <div class="star full"></div>
                 <div class="star full"></div>
                 <div class="star full"></div>
                 <div class="star"></div>
                 <div class="star"></div>

               </x-star-rating>

               <!-- Stars end here -->

               <p>256 reviews | <a class="remove-a-dec" style="color:#1067f2;font-weight: 900;" href="#" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">write a review</a> </p>

               <p><b>Location : </b> Dhanmondi Dhaka </p>
               <hr>
               <custom-tag><h1>&#2547; 346</h1></custom-tag>
               <p><b>Cook Name : </b> <a class="remove-a-dec" style="color:#1067f2;font-weight: 900;" href="#">Miftah Ihsan</a></p>
               <p><b>Disocunt : </b> 50% </p>
               <hr>

               <!-- Pagination here -->

               <nav aria-label="Page navigation example">
                <ul class="pagination">
                  <!-- <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item"><a class="page-link" href="#">Next</a></li> -->
                  <li class="page-item"> <button class="page-link item-quantity-buttons" onclick="dec();" type="button" name="button">-</button> </li>

                  <li class="page-item"> <input class="page-link item-quantity" id="quantity-box" type="text" name="qty" value="0"> </li>

                  <li class="page-item"> <button class="page-link item-quantity-buttons" onclick="inc();" type="button" name="button">+</button> </li>
                </ul>
              </nav>
              <div class="">
                <button type="button" title="Add to wish list" class="btn btn-primary" name="button">Add to Cart</button>
                <button type="button" title="Mark as favourite" class="btn btn-light fa fa-heart fa-blue-heart mg-left-10 fa-font-size" name="button" onclick="changeHeartColor(this);" ></button>
                <button type="button" title="Visit out Facebook" class="btn btn-light fa fa-facebook-official mg-left-10 fa-font-size" name="button"></button>
                <button type="button" title="Subscribe to our channel" class="btn btn-light fa fa-youtube mg-left-10 fa-font-size" name="button"></button>
                <button type="button" title="Follow us on instagram" class="btn btn-light fa fa-instagram mg-left-10 fa-font-size" name="button"></button>
              </div>

               <!-- Pagination ends here -->


             </div>

           </div>

           <hr>

         <h1 class="about-this-header">About this</h1>
         <hr>
         <p>This is where the owner talks about the food</p>
         <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
         <hr>
       </div>


     </div>

     <!-- card view here of all the high rated food of the same catagory -->
     <br>
     <h1><custom-tag> Related </custom-tag> Posts</h1>
     <hr>
     <div class="card-deck">

       <?php
        for ($i=0; $i < 3; $i++) {
          echo '<div class="card">

            <a class="explore-card" href="#">

              <img class="card-img-top" src="../static/images/burger.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->

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

   </div>


    <?php
      include '../_includes/_modalReview.php'
    ?>

    <?php
      include_once '../_includes/_footer.php';
     ?>


     <!-- // the css bootstrap here -->
    <?php
      include_once '../static/bootStrapJS.php'
     ?>

     <!-- notifying library -->
     <script type="text/javascript" src="../static/scripts/libraries/notify/notify.js"> </script>

     <script type="text/javascript" src="../static/scripts/quantityIncDec.js"> </script>
     <script type="text/javascript" src="../static/scripts/addToFavourite.js"> </script>

  </body>

</html>
