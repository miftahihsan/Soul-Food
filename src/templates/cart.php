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

     <!-- checing for URL query -->

     <?php
      include_once '../config/cartPageDisplayInfo.php';
      ?>

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
               <?php
                echo '<img class="cart-page-image img-thumbnail" src="../static/images/cook_folder/cook_'.$cookAndFoodArray["cook_id"].'/post//'.$cookAndFoodArray["food_pic"].'" alt="Avatar">';
                ?>
             </div>

             <!-- This is the div for the add o cart button and description -->
             <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 card-page-title">
               <h3><?php echo $cookAndFoodArray["food_title"]; ?></h3>
               <!-- Stars stats from here -->
               <x-star-rating>

                 <div class="star full"></div>
                 <div class="star full"></div>
                 <div class="star full"></div>
                 <div class="star"></div>
                 <div class="star"></div>

               </x-star-rating>

               <!-- Stars end here -->

               <p>256 reviews | <a class="remove-a-dec" style="color:#1067f2;font-weight: 900;"
                  href="#" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">write a review</a> </p>

               <p><b>Location : </b> <?php echo $cookAndFoodArray["street_name"]; ?> </p>
               <hr>
               <custom-tag><h1>&#2547; <?php echo $cookAndFoodArray["price"]; ?></h1></custom-tag>
               <p><b>Cook Name : </b> <a class="remove-a-dec"
                 style="color:#1067f2;font-weight: 900;"
                 href="#"><?php echo $cookAndFoodArray["user_first_name"]." ".$cookAndFoodArray["user_last_name"]; ?></a></p>
               <p><b>Disocunt : </b> <?php echo $cookAndFoodArray["discount"]; ?>% </p>
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
                <?php echo '<button type="button" title="Add to wish list" id = "'.$cookAndFoodArray["post_id"].'" class="btn btn-primary" name="button" onclick="checkLoginStatus('.$_SESSION['logged_in'].' ,this);">Add to Cart</button>'; ?>
                <?php echo '<button type="button" title="Mark as favourite" class="btn btn-light fa fa-heart fa-blue-heart mg-left-10 fa-font-size" name="button" onclick="changeHeartColor(this, '.$_SESSION['logged_in'].');" ></button>'; ?>
                <button type="button" title="Visit out Facebook" class="btn btn-light fa fa-facebook-official mg-left-10 fa-font-size" name="button"></button>
                <button type="button" title="Subscribe to our channel" class="btn btn-light fa fa-youtube mg-left-10 fa-font-size" name="button"></button>
                <button type="button" title="Follow us on instagram" class="btn btn-light fa fa-instagram mg-left-10 fa-font-size" name="button"></button>
              </div>

               <!-- Pagination ends here -->


             </div>

           </div>

           <hr>

         <custom-tag><h1 class="about-this-header">About this</h1></custom-tag>
         <hr>
         <div class="row">
           <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1" style="padding-top:10px;">
             <div class="" style="border-radius:50%; overflow:hidden; width:80px; height:80px;" >
               <?php echo '<img style = "width:100%; height:100%;" src="../static/images/cook_folder/cook_'.$cookAndFoodArray["cook_id"].'/cook_profile_pic//'.$cookAndFoodArray["cook_profile_pic"].'" alt="">'; ?>
             </div>
           </div>
           <div class="col-xs-11 col-sm-11 col-md-11 col-lg-11" style="padding:0 20px;">
             <br>
             <b><?php echo "<h2 style = 'font-size:2em;' >".$cookAndFoodArray["user_first_name"]." ".$cookAndFoodArray["user_last_name"]."</h3>"; ?></b>
             <p><?php echo $cookAndFoodArray["food_description"]; ?></p>
           </div>
         </div>

         <hr>
       </div>


     </div>

     <!-- card view here of all the high rated food of the same catagory -->


     <br>
     <h1><custom-tag> Related </custom-tag> Posts</h1>
     <hr>
     <div class="card-deck">

       <?php
       include_once '../config/displayRelatedSearch.php';
       $count = 0;
        while ($relatedArray = mysqli_fetch_assoc($query)) {
          if($count == 3){
            mysqli_close($sqlCon);
            break;
          }
          if($relatedArray["post_id"] != $cookAndFoodArray["post_id"]){
            echo '
            <div class="card">


              <a class="explore-card" href="cart.php?PST_V='.$relatedArray["post_id"].'">

              <div style = "height:170px; overflow:hidden;" >
                <img class="card-img-top" src="../static/images/cook_folder/cook_'.$relatedArray["cook_id"].'/post//'.$relatedArray["food_pic"].'" alt="Card image cap">
              </div>
                <div class="overlay">
                  <div class="text">&#2547;'.$relatedArray["price"].'</div>
                </div>

                <div class="card-body">
                <h5 class="card-title"><b>'.$relatedArray["food_title"].'</b></h5>
                <hr>
                <div class = "hide-card-length" >
                  <p class="card-text">'.$relatedArray["food_description"].'</p>
                </div>
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

          if($relatedArray["post_id"] != $cookAndFoodArray["post_id"]){
            $count = $count + 1;
          }

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

     <!-- ... effect -->
     <script type="text/javascript" src="../static/scripts/libraries/jQuery.dotdotdot/dist/jquery.dotdotdot.js"></script>
     <script type="text/javascript">
      $(".hide-card-length").dotdotdot();
     </script>

     <script type="text/javascript">

     function checkLoginStatus(event, elem){
       // alert(event);
       if(event == false){
         $.notify("Please login before adding to cart", "error");
         // window.location.replace("http://localhost/cse_471_porject/src/templates/loginPage.php");
         // $.notify("You must have an account!", "error");
       }else{
         // user is logged in

           var post_id = $(elem).attr('id');
           var user_id = '<?php echo $_SESSION["user_id"];?>';
           var quantity = $("#quantity-box").val();

           if(quantity == 0){
             $.notify("Please select quantity", "error");
             return;
           }

           $.ajax({
                type: 'POST',
                url: '../config/addToCart.php',
                data: {
                  post_id: post_id,
                  user_id: user_id,
                  quantity: quantity
                },
                success: function(response) {
                    $.notify("Added to Cart", "success");
                },
                error: function(xhr, status, error) {

                  $.notify("Failed to add to cart", "error");
                }
            });

         }
       }

     </script>

  </body>

</html>
