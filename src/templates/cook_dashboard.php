<?php

  session_start();
  $_SESSION['logged_in'] = "false";

 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title> <?php echo $_SESSION['user_Fname']; ?> </title>

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
      include_once '../_includes/navbar/_navBarDropDown.php'
     ?>

     <div class="mb-4">

     </div>
     <!-- Code here... -->

     <!-- Check if user is a cook -->
     <?php

      include_once '../config/checkCookVerification.php';

      if($verified == 1){

        echo '<div class="container no-activity">';

          // <!-- No activity div -->
          echo '<p class = "text-center" style = "margin-top: 50px;" > Not Verified yet !!</p>';


        echo '</div>';

      }



      ?>

     <!-- footer -->
     <?php
       include_once '../_includes/_footer.php';
      ?>

     <!-- // the css bootstrap here -->
    <?php
      include_once '../static/bootStrapJS.php'
     ?>


  </body>

</html>
