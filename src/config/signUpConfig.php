<?php

  include 'hideWarning.php';

  include_once 'dbCon.php';

  //email
  $email = mysqli_real_escape_string($sqlCon, $_POST['email']);

  // Password
  $password = mysqli_real_escape_string($sqlCon, $_POST['password']);
  $confirmPassword = mysqli_real_escape_string($sqlCon, $_POST['confirmPassword']);

  // First name , middle name and last name
  $firstName = mysqli_real_escape_string($sqlCon, $_POST['firstName']);
  $middleName = mysqli_real_escape_string($sqlCon, $_POST['middleName']);
  $lastName = mysqli_real_escape_string($sqlCon, $_POST['lastName']);

  // phone
  $phoneNumber = mysqli_real_escape_string($sqlCon, $_POST['phoneNumber']);

  // street
  $streetName = mysqli_real_escape_string($sqlCon, $_POST['streetName']);
  $postalCode = mysqli_real_escape_string($sqlCon, $_POST['postalCode']);


  // Check if strings are empty
  // Add angular js later here
  if( empty($email) || empty($password) || empty($confirmPassword) || empty($streetName) || empty($postalCode)){
    header("Location: ../templates/signUpUser.php");
  }

  if($password != $confirmPassword){
    echo("Password did not match");
    exit();
  }

  // hash Password
  $hashed_password = password_hash($password, PASSWORD_DEFAULT);

  // Reister user here
  $sqlCommand = "INSERT INTO user (user_email, user_password, user_first_name,
  user_middle_name, user_last_name, user_phone_number, user_street_address,
  user_postal_code) VALUES ('".$email."', '".$hashed_password."', '".$firstName."', '".$middleName."',
   '".$lastName."', '".$phoneNumber."', '".$streetName."', '".$postalCode."')";

   mysqli_query($sqlCon, $sqlCommand);

   // now we retrieve the last inserted id
   $last_insterted_id = mysqli_insert_id($sqlCon);
   $edited_user_id = "user_".(string)$last_insterted_id;

   // Inserting into helper table
   $sqlCommand = "INSERT INTO helper_table_user (id, user_id) VALUES ('".$last_insterted_id."', '".$edited_user_id."')";

   mysqli_query($sqlCon, $sqlCommand);

   echo "DONE";

  // clsoing the sql con
  mysqli_close($sqlCon);

?>
