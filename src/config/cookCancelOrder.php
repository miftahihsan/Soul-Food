
<?php

  include_once 'dbCon.php';

  function sendError(){
    mysqli_close($sqlCon);
    header('HTTP/1.1 500 Internal Server Booboo');
    header('Content-Type: application/json; charset=UTF-8');
    die(json_encode(array('message' => 'ERROR', 'code' => 1337)));
  }

  $cart_id = $_POST['cart_id'];

  $sqlCommand = "UPDATE user_cart
                 SET purchased = 500
                 WHERE cart_id = '$cart_id'";

  if(mysqli_query($sqlCon, $sqlCommand)){
    // echo "SUCCESS";
  }else{
    sendError();
  }

  $sqlCommand = "UPDATE confirmed_purchase
                 SET order_status = 500
                 WHERE cart_id = '$cart_id'";

  if(mysqli_query($sqlCon, $sqlCommand)){
    // mysqli_close($sqlCon);
    // echo "SUCCESS";
  }else{
    sendError();
  }


  $sqlCommand = "SELECT user_id, post_id, quantity, discount, money_earned, order_status
                 FROM confirmed_purchase
                 WHERE cart_id = '$cart_id'";

  $orderCancelResult = mysqli_query($sqlCon, $sqlCommand);

  $orderCancelHistory = mysqli_fetch_assoc($orderCancelResult);

  // $earnedMoney = $orderCancelHistory[""];

 ?>
