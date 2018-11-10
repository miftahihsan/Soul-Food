<?php

  session_start();
  $_SESSION['logged_in'] = "false";

 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title> <?php echo $_SESSION['user_Fname']." ".$_SESSION['user_Lname']; ?> </title>

    <!-- //incudeing the style sheets here -->
    <?php
      include_once '../static/bootStrapCss.php'
     ?>

     <!-- star icon link -->
     <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

     <!-- Font awsome -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

     <!-- bootstrap -->
     <link rel="stylesheet" href="../static/styles.css">
     <link rel="stylesheet" href="../static/commonStyles.css">

     <!-- Tiny Mice text editor -->
     <script src='https://devpreview.tiny.cloud/demo/tinymce.min.js'></script>


    <!-- Tiny mice textarea link -->
    <script type="text/javascript" src="../static/scripts/miceEditor.js"> </script>

  </head>


  <body class="hide-overflow-x">


    <!-- // the nav bar here -->
    <?php
      include_once '../_includes/navbar/_navBarDropDown.php'
     ?>

     <?php
      include "../config/displayCookInfo.php";
      ?>

     <div class="mb-4">

     </div>
     <!-- Code here... -->

     <!-- Check if user is a cook -->
     <?php

      // include_once '../config/checkCookVerification.php';
      //
      // if($verified == 0){
      //
      //   echo '<div class="container no-activity">';
      //
      //     // <!-- No activity div -->
      //     echo '<h1 class = "text-center text-muted" style = "margin-top: 50px;" > Not Verified yet !!
      //           <br>
      //           <i style = "font-size:2em;" class="fa fa-frown-o"></i>
      //           </h1>';
      //
      //
      //   echo '</div>';
      //
      // }

      ?>

      <!-- Cook can post from here -->
      <div class="cook-container dashboard-background mb-4">

        <!-- This is the open and close button of the post -->
        <div class="post-div-header">

          <div class="row">

            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
              <h4>Create post</h4>
            </div>

            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
              <i class="fa fa-plus post-div-state" onclick="displayPost(this)"></i>
            </div>

          </div>

          <hr>

        </div>

        <div id="post-div">

          <div class="row post-offer-row">

            <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">

              <?php
              echo '<img class="cook-profile-pic"
              src="..\static\images\cook_folder\cook_'.$cookInfo['cook_id'].'\cook_profile_pic\\'.$cookInfo['cook_profile_pic'].' "
               width="100%;" alt="">';
                ?>

            </div>

            <div class="col-xs-11 col-sm-11 col-md-11 col-lg-11">
              <?php include '../form/postOffer.php' ?>
            </div>

          </div>

        </div>

      </div>

      <!-- post div ends here -->

      <!-- Start coding from here -->
      <div class="cook-container dashboard-background">

        <!-- cook profile -->
        <div class="row">
          <!-- start of a row -->

          <!-- Cook profile pic -->
          <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2" >

            <!-- cook Image -->
            <?php echo '<img class="cook-profile-pic"
            src="..\static\images\cook_folder\cook_'.$cookInfo['cook_id'].'\cook_profile_pic\\'.$cookInfo['cook_profile_pic'].' "
             width="100%;" alt="">'; ?>

          </div>

          <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1" style="text-align:right;">
            <!-- <i style="color:#f1421f;" class="fa fa-map-marker fa-font-size"></i> -->
            <button type="button" title = "Location" style="color:#f1421f;" class="btn btn-light fa fa-map-marker fa-font-size" name="button"></button>
          </div>

          <!-- Cook name -->
          <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5" >
            <!-- <b>Miftah Uddin Md Ihsan , Dhanmondi Dhaka 1205</b> -->
            <?php echo "<b>".$_SESSION['user_Fname']." ".$_SESSION['user_Mname']." ".$_SESSION['user_Lname']." ,
            ".$cookInfo['street_name']." ".$cookInfo['postal_code']." </b>"; ?>
            <br>
            <br>
            <b>Speciality : &nbsp; </b> <?php echo $cookInfo["speciality"]; ?>
            <br>
            <br>
            <b>Verified : &nbsp; </b> <i style="background-color:green; border-radius:50%; color:white;" class="fa fa-check"></i>
            <br>
            <br>
            <b>Email : &nbsp; </b> <?php echo $cookInfo["cook_email"]; ?>
            <br>
            <br>
            <b>Phone : &nbsp; </b> 0183661619

          </div>

          <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
            <!-- Stars stats from here -->
            <x-star-rating class="mg-left-10" >

              <?php

                $countOfStar = 0;
                for ($i=0; $i < $cookInfo["rating"]; $i++) {

                  echo '<div class="star full"></div>';

                  $countOfStar = $countOfStar + 1;

                }

                for ($i=$countOfStar; $i < 5; $i++) {
                  echo '<div class="star"></div>';
                }

               ?>
              <!-- <div class="star full"></div>
              <div class="star full"></div>
              <div class="star full"></div>
              <div class="star"></div>
              <div class="star"></div> -->

            </x-star-rating>

            <button type="button" title = "Edit" class="btn btn-light fa fa-edit fa-edit-btn fa-font-size text-muted"
            name="button" data-toggle="modal" data-target="#exampleModalCenter"></button>
            <!-- Stars end here -->

            <br>
            <p class="text-muted mg-left-10 " >Rating : <?php echo $cookInfo['rating'].".0"; ?> </p>
            <br>
            <br>
            <br>
            <br>
            <button type="button" title = "Report" class="btn btn-light fa fa-thumbs-up mg-left-10 fa-font-size" name="button"></button>
            <button type="button" title = "Report" class="btn btn-light fa fa-thumbs-down mg-left-10 fa-font-size" name="button"></button>
            <button type="button" title="Mark as favourite" class="btn btn-light fa fa-heart fa-blue-heart mg-left-10 fa-font-size" name="button" onclick="changeHeartColor(this);" ></button>
            <button type="button" title = "Report" class="btn btn-light fa fa-flag mg-left-10 fa-font-size" name="button"></button>
          </div>

          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <br>
            <hr>
            <button type="button" title = "Edit" class="btn btn-light fa fa-edit fa-edit-btn fa-font-size text-muted"
            name="button" data-toggle="modal" data-target="#exampleModalCenter"></button>

            <custom-tag><h1>About Cook</h1> </custom-tag>
            <p> <?php echo $cookInfo['cook_info']; ?> </p>
          </div>

          <!-- Row Ends here -->

        </div>


        <br>

        <custom-tag> <h1>Top Rated</h1> </custom-tag>

        <hr>

        <!-- Card deck stats here -->

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

        <!-- Card deck ends here -->

        <br>

        <!-- Card deck stats here -->

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

        <!-- Card deck ends here -->

        <br>

        <!-- Card deck stats here -->

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

        <!-- Card deck ends here -->

        <hr>

        <!-- Show all -->

        <nav aria-label="Page navigation example">
         <ul class="pagination learn-pagination">
           <li class="page-item"><a class="page-link" href="#">Show All</a></li>
         </ul>
       </nav>

      </div>
      <!-- dash board ends here -->

    <!-- close connection here only for this page -->
    <?php

      mysqli_close($sqlCon);

     ?>

    <!-- CoomProfile -->
    <?php
      include '../_includes/_modalCookProfile.php';
    ?>
     <!-- footer -->
     <?php
       include_once '../_includes/_footer.php';
      ?>

     <!-- // the css bootstrap here -->
    <?php
      include_once '../static/bootStrapJS.php'
     ?>

     <!-- notifying library -->
     <script type="text/javascript" src="../static/scripts/libraries/notify/notify.js"> </script>

     <script type="text/javascript" src="../static/scripts/uploadImage.js"> </script>
     <script type="text/javascript" src="../static/scripts/addToFavourite.js"> </script>

     <!-- Increase text area length with text lines -->
     <script type="text/javascript" src="../static/scripts/resizeTextAreaWithLines.js"> </script>

     <!-- adding the toggle functionality -->
     <script type="text/javascript" src="../static/scripts/cookDashBoard.js"></script>

  </body>

</html>
