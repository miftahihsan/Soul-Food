<?php

  include_once 'dbCon.php';


  // $sqlCommand = "SELECT *
  //                FROM confirmed_purchase
  //                WHERE cart_id
                 // IN (SELECT cart_id
                 //     FROM user_cart
                 //     INNER JOIN cook_post
                 //     ON user_cart.post_id = cook_post.post_id
                 //     WHERE cook_id
                 //     IN (
                 //        SELECT cook_id
                 //        FROM cook
                 //        WHERE user_id = '".$_SESSION["user_id"]."'
                 //        AND purchased = 1
                 //     ))
                 //  AND order_status = 0";


  $sqlCommand = "SELECT *
                 FROM user
                 INNER JOIN
                 helper_table_user
                 ON user.id = helper_table_user.id
                 INNER JOIN user_cart
                 ON helper_table_user.user_id = user_cart.user_id
                 INNER JOIN confirmed_purchase
                 ON user_cart.cart_id = confirmed_purchase.cart_id
                 WHERE confirmed_purchase.cart_id
                 IN (SELECT cart_id
                     FROM user_cart
                     INNER JOIN cook_post
                     ON user_cart.post_id = cook_post.post_id
                     WHERE cook_id
                     IN (
                        SELECT cook_id
                        FROM cook
                        WHERE user_id = '".$_SESSION["user_id"]."'
                        AND purchased = 1
                     ))
                  AND order_status = 0";

  $query = "";

  if($query = mysqli_query($sqlCon, $sqlCommand)){

    if(mysqli_num_rows($query)<=0){
      echo "<div class = 'container no-activity'>";

      echo "</div>";

      include_once '../_includes/_footer.php';
      include_once '../static/bootStrapJS.php';
      exit();
    }

  }
  else {
    echo "NO";
  }

 ?>
