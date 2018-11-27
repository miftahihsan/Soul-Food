<?php

  include_once 'dbCon.php';

  function sendError(){
    mysqli_close($sqlCon);
    header('HTTP/1.1 500 Internal Server Booboo');
    header('Content-Type: application/json; charset=UTF-8');
    die(json_encode(array('message' => 'ERROR', 'code' => 1337)));
  }

  $cart_id = $_POST["cart_id"];

  $sqlCommand = "UPDATE user_cart
                 SET purchased = 1
                 WHERE cart_id = '$cart_id'";

  if(mysqli_query($sqlCon, $sqlCommand)){
    // echo "Success";
  }else{
    sendError();
  }

  $sqlCommand = "SELECT cart_id, post_id, user_id, quantity, discount, unit_price
                 FROM user_cart
                 WHERE cart_id = '$cart_id'";
  $query = "";
  if($query = mysqli_query($sqlCon, $sqlCommand)){
    // echo "Success";
  }else{
    sendError();
  }

  $row = mysqli_fetch_assoc($query);

  // now inserting the ata into the purchased table
  $sqlCommand = "INSERT INTO
                 confirmed_purchase
                 (cart_id, post_id, user_id, quantity, discount, unit_price)
                 VALUES('".$row["cart_id"]."', '".$row["post_id"]."', '".$row["user_id"]."', '".$row["quantity"]."',
                   '".$row["discount"]."', '".$row["unit_price"]."')";

if($query = mysqli_query($sqlCon, $sqlCommand)){
  echo "Success";
}else{
  sendError();
}
  // echo "";

?>
