<?php

  include_once 'dbCon.php';
  // item, quantity, unit_price, discount, food_pic
  $sqlCommand = "SELECT *
                 FROM user_cart
                 INNER JOIN cook_post
                 ON cook_post.post_id = user_cart.post_id
                 WHERE user_id = '".$_SESSION["user_id"]."'
                 AND NOT purchased = 200";


  $query = mysqli_query($sqlCon, $sqlCommand);


 ?>
