<?php

  include_once 'dbCon.php';

  $post_id = $_POST["post_id"];
  $user_id = $_POST["user_id"];
  $quantity = $_POST["quantity"];


  $sqlCommand = "SELECT food_title, price, discount
                 FROM cook_post
                 WHERE post_id = '$post_id'";

  if ($query = mysqli_query($sqlCon, $sqlCommand)) {
    // code...
  }else {
    mysqli_close($sqlCon);
    header('HTTP/1.1 500 Internal Server Booboo');
    header('Content-Type: application/json; charset=UTF-8');
    die(json_encode(array('message' => 'ERROR', 'code' => 1337)));
  }

  $row = mysqli_fetch_assoc($query);

  $food_title = $row["food_title"];
  $price = $row["price"];
  $discount = $row["discount"];

  $sqlCommand = "INSERT INTO user_cart
                 (item, quantity, unit_price, discount, user_id, post_id, purchased)
                 VALUES('".$food_title."', '".$quantity."', '".$price."', '".$discount."', '".$user_id."', '".$post_id."', 0)";

  if(mysqli_query($sqlCon, $sqlCommand)){

    mysqli_close($sqlCon);

    exit();

  }else{
    mysqli_close($sqlCon);
    header('HTTP/1.1 500 Internal Server Booboo');
    header('Content-Type: application/json; charset=UTF-8');
    die(json_encode(array('message' => 'ERROR', 'code' => 1337)));
  }

 ?>
