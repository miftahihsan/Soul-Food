<?php

  include 'hideWarning.php';

  // include_once 'dbCon.php';

  // if submit button is clicked
  if(isset($_POST['submit'])){

    // take in the form info

    //email
    $email = mysqli_real_escape_string($sqlCon, $_POST['email']);

    // First name , middle name and last name
    $firstName = mysqli_real_escape_string($sqlCon, $_POST['firstName']);
    $middleName = mysqli_real_escape_string($sqlCon, $_POST['middleName']);
    $lastName = mysqli_real_escape_string($sqlCon, $_POST['lastName']);

    // speciality
    $speciality = mysqli_real_escape_string($sqlCon, $_POST['speciality']);

    // phone
    $phoneNumber = mysqli_real_escape_string($sqlCon, $_POST['phoneNumber']);

    // street
    $streetName = mysqli_real_escape_string($sqlCon, $_POST['streetName']);
    $postalCode = mysqli_real_escape_string($sqlCon, $_POST['postalCode']);


    // $Test = mysqli_real_escape_string($sqlCon, $_POST['Test']);

    // now take in the image path
    $cookPhoto = $_FILES['cook-image'];
		$cookPhotoTempName = $_FILES['cook-image']['tmp_name'];
		$cookPhotoName = $_FILES['cook-image']['name'];
		$cookPhotoError = $_FILES['cook-image']['error'];
		$cookPhotoSize = $_FILES['cook-image']['size'];
		$cookPhotoExploded = explode('.', $cookPhotoName);
		$cookPhotoExtension = strtolower(end($cookPhotoExploded));

    // If anything is left empty log user out
    if(empty($email) || empty($firstName) || empty($middleName) ||
      empty($lastName) || empty($speciality) || empty($phoneNumber) ||
      empty($streetName) || empty($postalCode) || $cookPhotoSize == 0){
        header("Location:http://localhost/cse_471_porject/src/templates/loginPage.php");
        exit();
      }

    // if every thing is filled up by the user
    // then proceed to register the data into the database

    $sqlCommand = "SELECT *
                    FROM cook
                    WHERE cook_email = '".$email."' ";

    // if(mysqli_query($sqlCon, $sqlCommand)){
    //   echo "HELLO";
    // }else{
    //   echo "NO";
    // }

    $query = mysqli_query($sqlCon, $sqlCommand);

    $numberOfRows = mysqli_num_rows($query);

    if($numberOfRows > 0){
      echo "EMAIL ID ALREADY TAKEN";

      // close connection and abort
      mysqli_close($sqlCon);
      exit();
    }



    $sqlCommand = " INSERT INTO cook (user_id, verified, rating, speciality,
                                      cook_email, street_name, postal_code)
                    VALUES('".$_SESSION["user_id"]."', 0, 0, '".$speciality."',
                            '".$email."', '".$streetName."', '".$postalCode."') ";

    if(mysqli_query($sqlCon, $sqlCommand)){
      echo "Success";
    }
    else{
      echo "Nope";
    }

    // close connections
    mysqli_close($sqlCon);

  }

 ?>
