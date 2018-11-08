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

     <div class="container dashboard-background mb-4 text-center">

       <br>

       <?php



          for ($i=0; $i < 5; $i++) {
            // <!-- Start of receipt  -->
            echo '<div class="receipt-header">';
              echo '<div class="row">';
                echo '<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">';
                  echo '<h3 class="receipt-name" > <b>Seller : </b> <i>Miftah</i> </h3>';
                echo '</div>';
                echo '<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">';

                echo '</div>';
                echo '<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">';
                  echo '<h3 class="receipt-date" > <b>Date : </b> <i>1:10:18</i> </h3>';
                echo '</div>';
              echo '</div>';


              echo '<table id="myTable" class="table bg-white rounded text-center">';

                echo '<thead class="table-striped" >';
                  echo '<tr>';
                    echo '<th scope="col" >Name</th>';
                    echo '<th scope="col" >Quantity</th>';
                    echo '<th scope="col" >Unit Price(&#2547;)</th>';
                    echo '<th scope="col" >Total Price(&#2547;)</th>';
                  echo '</tr>';
                echo '</thead>';

                  for ($j=0; $j < 4 ; $j++) {
                    echo '<tbody>';
                      echo '<tr>';
                        echo '<td> <b> Burger from Cheese lab </b> </td>';
                        echo '<td> 10 </td>';
                        echo '<td> 260 </td>';
                        echo '<td> <custom-tag> 2600 </custom-tag> </td>';
                      echo '</tr>';
                    echo '</tbody>';
                  }


              echo '</table>';

              echo '<div class="row" style="text-align:center;">';

                      // <!-- Row 1 -->
                echo '<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">';
                  echo '<h5> <b>Sub Total : </b> </h5>';
                echo '</div>';

                      // <!-- Fillers -->
                echo '<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">';

                echo '</div>';
                echo '<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">';

                echo '</div>';
                      // <!-- Fillers -->

                echo '<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">';
                  echo '<custom-tag><h5> <b>2600</b> </h5></custom-tag>';
                echo '</div>';


                      // <!-- Row 2 -->
                echo '<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">';
                  echo '<h5> <b>Discount :</b> </h5>';
                echo '</div>';

                      // <!-- Fillers -->
                echo '<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">';

                echo '</div>';
                echo '<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">';

                echo '</div>';
                      // <!-- Fillers -->

                echo '<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">';
                  echo '<h5 style="color:#ef4046;" > <u><b>(100)</b></u> </h5>';
                echo '</div>';



                      // <!-- Row 3 -->
                echo '<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">';
                  echo '<h5> <b>Net Total :</b> </h5>';
                echo '</div>';

                      // <!-- Fillers -->
                echo '<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">';

                echo '</div>';
                echo '<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">';

                echo '</div>';
                      // <!-- Fillers -->

                echo '<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">';
                  echo '<custom-tag><h5> <b>2500</b> </h5></custom-tag>';
                echo '</div>';


                      // <!-- Row 4 -->
                echo '<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">';
                  echo '<h5> <b>Pay Type :</b> </h5>';
                echo '</div>';

                      // <!-- Fillers -->
                echo '<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">';

                echo '</div>';
                echo '<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">';

                echo '</div>';
                      // <!-- Fillers -->

                echo '<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">';
                  echo '<h5> <b>Cash</b> </h5>';
                echo '</div>';

              echo '</div>';

              echo "<br>";

              echo '<div class = "print-btn-container">';
                echo '<button class = "btn btn-primary" >Print Receipt</button>';
              echo '</div>';

              echo '<hr class = "hr-dotted" >';
              echo "<br>";

            echo '</div>';

            // <!--End of receipt  -->
          }

        ?>

        <h1>Have a Nice day!
          <br>
          Even A better one tomorrow!
        </h1>

        <br>
        <hr>
        <hr>

     </div>

     <div class="container no-activity">

       <!-- No activity div -->
       <!-- <div class="screen-center">
         <img src="..\static\images\logo\hearBroken.png" alt="" width="230px">
       </div> -->

     </div>

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
