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

     <!-- Style sheet custom here -->
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
     <!-- This is only for empty carts -->
     <!-- <div class="no-activity">
       <img src="..\static\images\logo\cart.png" width="400px" style="margin-left:36%; margin-top:3%;" alt="">
     </div> -->

     <div class="container">


       <table id="myTable" class="table table-bordered table-hover hadow p-3 mb-5 bg-white rounded text-center">

         <thead class="thead-dark" >
           <tr>
             <th scope="col" ></th>
             <th scope="col" >Name</th>
             <th scope="col" >Quantity</th>
             <th scope="col" >Unit Price(&#2547;)</th>
             <th scope="col" >Total Price(&#2547;)</th>
             <th scope="col" >Remove</th>
           </tr>
         </thead>

         <?php

         for ($i=0; $i < 5; $i++) {

           echo '<tbody>
                   <tr id = "table_row_'.$i.'" >
                     <th> <img id = "my_cart_img_'.$i.'" class="img-thumbnail" src="../static/images/burger.jpg" width="100px" alt=""> </th>
                     <td> <b> Burger from Cheese lab </b> </td>
                     <td> 10 </td>
                     <td> 260 </td>
                     <td> <custom-tag> 2600 </custom-tag> </td>
                     <td> <button id="'.$i.'" class="btn btn-danger fa fa-close" type="button" name="button" onclick = "removeItem(this)" title = "remove from cart"></button>
                          <button id="confirm_purchase_'.$i.'" class="btn btn-green fa fa-check" type="button" name="button" onclick = "confirmItem(this)" title = "Confirm Purchase"></button>
                     </td>
                   </tr>
                 </tbody>';

         }

          ?>

       </table>

       <hr>

       <h1> Check out some more  <custom-tag>Delicious</custom-tag> dishes here!!</h1>

       <!-- Related Search -->
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

     <!-- footer -->
     <?php
       include_once '../_includes/_footer.php';
      ?>

     <!-- // the css bootstrap here -->
    <?php
      include_once '../static/bootStrapJS.php'
     ?>

     <script type="text/javascript" src="../static/scripts/removeFromCart.js"></script>

  </body>

</html>
