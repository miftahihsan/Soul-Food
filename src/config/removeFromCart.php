<?php

  include_once 'dbCon.php';

  $cart_id = $_POST["cart_id"];

  $sqlCommand = "DELETE
                 FROM user_cart
                 WHERE cart_id = '$cart_id'";


  if(mysqli_query($sqlCon, $sqlCommand)){
    // success
    mysqli_close($sqlCon);
  }
  else{
    mysqli_close($sqlCon);
    header('HTTP/1.1 500 Internal Server Booboo');
    header('Content-Type: application/json; charset=UTF-8');
    die(json_encode(array('message' => 'ERROR', 'code' => 1337)));
  }

 ?>
