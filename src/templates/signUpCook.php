<?php

  session_start();
  $_SESSION['logged_in'] = "false";


  // This will be later handled by js to handle it dynamically
  include "../config/cookSignUp.php";

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
      include_once '../_includes/navbar/_navBarBecomeCook.php'
     ?>

     <div class="mb-4">

     </div>
     <!-- Code here... -->


      <?php

        // this is for checking if user accout has been verified or not
        include_once "../config/dbCon.php";
        $sqlCommand  = "SELECT verified
                        FROM cook WHERE user_id = '".$_SESSION['user_id']."' ";

        $query = mysqli_query($sqlCon, $sqlCommand);

        $rows = mysqli_num_rows($query);

        if($rows == 0){
          include '../form/cookSignUpForm.php';
          // exit();
        }

        else{

          while($row = mysqli_fetch_assoc($query)){
            if($row['verified'] == 0){

              echo '<div class="container no-activity">';

                // <!-- No activity div -->
                echo '<h1 class = "text-center text-muted" style = "margin-top: 50px;" > Not Verified yet !!
                      <br>
                      <i style = "font-size:2em;" class="fa fa-frown-o"></i>
                      </h1>';


              echo '</div>';

              // exit();
            }
          }

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


     <script type="text/javascript">

     </script>

     <script type="text/javascript" src="../static/scripts/uploadImage.js"> </script>

  </body>

</html>
