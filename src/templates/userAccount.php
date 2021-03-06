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


       <!-- display user cart -->
       <?php include_once '../config/queryUserCart.php' ?>

       <table id="myTable" class="table table-bordered table-hover hadow p-3 mb-5 bg-white rounded text-center">

         <thead class="thead-dark" >
           <tr>
             <th scope="col" ></th>
             <th scope="col" >Food Name</th>
             <th scope="col" >Quantity</th>
             <th scope="col" >Unit Price(&#2547;)</th>
             <th scope="col" >Discount(%)</th>
             <th scope="col" >Total Price(&#2547;)</th>
             <th scope="col" >Remove</th>
           </tr>
         </thead>

         <?php
           $i = 0;
           while($userCartArray = mysqli_fetch_assoc($query)) {

             $totalPrice = ((int)$userCartArray["quantity"] * (int)$userCartArray["unit_price"]);
             $priceAfterDiscount = $totalPrice - ($totalPrice * ((int)$userCartArray["discount"])/100);

             echo '<tbody>
                     <tr id = "table_row_'.$i.'" >
                       <th> <img id = "my_cart_img_'.$i.'" class="img-thumbnail" src="../static/images/cook_folder/cook_'.$userCartArray["cook_id"].'//post/'.$userCartArray["food_pic"].'" width="100px" alt=""> </th>
                       <td> <b> '.$userCartArray["item"].' </b> </td>
                       <td> '.$userCartArray["quantity"].' </td>
                       <td> '.$userCartArray["unit_price"].'</td>
                      <td> <b style = "color:#e82c3e;" >('.$userCartArray["discount"].')</b></td>
                       <td> <custom-tag> '.$priceAfterDiscount.' </custom-tag> </td>';


                 echo '<td id = "'.$i.'" >';
                      if($userCartArray["purchased"] == 0){
                          echo '<button id="remove_'.$userCartArray["cart_id"].'_'.$i.'" class="btn btn-danger fa fa-close" type="button" name="button" onclick = "removeItem(this)" title = "remove from cart"></button>
                          <button id="confirm_purchase_'.$userCartArray["cart_id"].'_'.$i.'" class="btn btn-green fa fa-check" type="button" name="button" onclick = "confirmPurchase(this)" title = "Confirm Purchase"></button>';
                      }
                      else if($userCartArray["purchased"] == 500) {
                        echo 'Your order was cancled <br>
                        <button id="remove_'.$userCartArray["cart_id"].'_'.$i.'" class="btn btn-danger fa fa-close" type="button" name="button" onclick = "removeItem(this)" title = "remove from cart"></button>
                        ';
                      }
                      else{
                          echo "Waiting for <br> order <br> confirmation";
                      }
                 echo '</td>';

              echo '</tr>
                   </tbody>';

                   $i = $i+1;
           }

           mysqli_close($sqlCon);
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

    <!-- check why the remove from script is not working later -->
    <script type="text/javascript">

      function removeItem(event){
        // alert($(event).attr('id'));
        var delete_row = $(event).attr('id');

        var array = delete_row.split("_");



        if(confirm("Are you sure you want to remove this from the cart?!")){

          $.ajax({
               type: 'POST',
               url: '../config/removeFromCart.php',
               data: {
                 cart_id: array[1]
               },
               success: function(response) {
                   $.notify("Removed from cart", "success");
                   // alert(response);

                   $("#table_row_"+array[2]+"").animate({'line-height':0},1000).hide(1);
                   $("#confirm_purchase_"+array[2]+"").animate({'line-height':0},1000).hide(1);
                   $("#"+array[2]+"").animate({'line-height':0},1000).hide(1);

               },
               error: function(xhr, status, error) {
                 alert(error);
                 alert(xhr);
                 alert(error);
                 $.notify("Failed to remove from cart", "error");
               }
           });

        }else {
          // do nothing
        }


      }


      function confirmPurchase(event){

        var confirm_row = $(event).attr('id');
        var remove_button = confirm_row.replace("confirm_purchase", "remove");

        var array = confirm_row.split("_");
        // confirm purchase
        if(confirm("Are you sure you want purchase this item?")){

          $.ajax({
               type: 'POST',
               url: '../config/confirmPurchase.php',
               data: {
                 cart_id: array[2]
               },
               success: function(response) {
                   $.notify("Order has been placed", "success");


                   $("#"+confirm_row+"").remove();
                   $("#"+remove_button+"").remove();
                   $("#"+array[3]).html('Waiting for <br> order <br> confirmation');
                   // alert($(event).closest('td').attr('id'));
                   // $("#confirm_purchase_"+array[3]+"").animate({'line-height':0},1000).hide(1);
                   // $("#"+array[3]+"").animate({'line-height':0},1000).hide(1);

               },
               error: function(xhr, status, error) {
                 alert(error);
                 alert(xhr);
                 alert(error);
                 $.notify("Failed to purchase", "error");
               }
           });

        }else {
          // do nothing
        }

      }

    </script>

    <!-- <script type="text/javascript" src="../static/scripts/libraries/jQuery.dotdotdot/dist/jquery.dotdotdot.js"></script> -->
    <script type="text/javascript" src="../static/scripts/libraries/notify/notify.js"> </script>

  </body>

</html>
