<?php

  include 'hideWarning.php';

  include 'dbCon.php';

  // $email = mysqli_real_escape_string($sqlCon, $_POST['email']);
  // $password = mysqli_real_escape_string($sqlCon, $_POST['password']);

  $email = mysqli_real_escape_string($sqlCon, $_POST['user_email']);
  $password = mysqli_real_escape_string($sqlCon, $_POST['user_password']);

  $sqlCommand = "SELECT * FROM user WHERE user_email = '$email' ";

  $query = mysqli_query($sqlCon, $sqlCommand);

  $count = mysqli_num_rows($query);

  if($count == 0){
    echo "No Such Accout Exists";
    exit();
  }

  while ($row = mysqli_fetch_assoc($query)) {

    $doesPassExist = password_verify($password, $row['user_password']);

    if(!$doesPassExist){
      echo "Error try again";
      exit();
    }

    // initializing all the session variables
    include_once 'sessionConfig.php';

    // saving all the user information into session
    $_SESSION['user_id'] = "user_".$row['id'];
    $_SESSION['user_email'] = $row['user_email'];
    $_SESSION['user_Fname'] = $row['user_first_name'];
    $_SESSION['user_Mname'] = $row['user_middle_name'];
    $_SESSION['user_Lname'] = $row['user_last_name'];
    $_SESSION['user_phone'] = $row['user_phone_number'];
    $_SESSION['user_street_address'] = $row['user_street_address'];
    $_SESSION['user_postal_code'] = $row['user_postal_code'];
    $_SESSION['is_chef'] = $row['is_cook'];

    // setting login = true
    $_SESSION['logged_in'] = "true";

    break;

  }


  // closing the connection
  mysqli_close($sqlCon);

  // this is for google chrome only because it looses its session variables
  session_write_close();

  // navigating to another page
  header("Location:http://localhost/cse_471_porject/src/templates/explorePage.php");

  // just to be safe
  exit();

 ?>
