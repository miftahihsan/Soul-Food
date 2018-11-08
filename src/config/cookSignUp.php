<?php

  include 'hideWarning.php';

  include_once 'dbCon.php';


  // echo "HELLO";

  // if submit button is clicked
  if(isset($_POST['submit'])){


      // This part is for checking verification of cook
      function createFolder($path, $cook_id, $dir){

        // if dir does not exist create a dir
        if(!is_dir($path)){

          // make the main folder and create sub folders
          mkdir($dir."/cook_".$cook_id, 0777);
          mkdir($dir."/cook_".$cook_id."/cook_profile_pic", 0777);

        }

      }

      $dir = "../static/images/cook_folder";
      $finalDestination = "";

      // This part is for checking verification of cook


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

    echo $cookPhotoName;

    // If anything is left empty log user out
    // if(empty($email) || empty($firstName) || empty($middleName) ||
    //   empty($lastName) || empty($speciality) || empty($phoneNumber) ||
    //   empty($streetName) || empty($postalCode) || $cookPhotoSize == 0){
    //     header("Location:http://localhost/cse_471_porject/src/templates/loginPage.php");
    //     exit();
    //   }

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


    // Now we upload the image to the folder
    $cookPhotoName = date("Y-m-d.H-i-s")."-".$cookPhotoName;

    // cook information has been entered
    $sqlCommand = " INSERT INTO cook (user_id, verified, rating, speciality,
                                      cook_email, street_name, postal_code,
                                      cook_profile_pic)
                    VALUES('".$_SESSION["user_id"]."', 0, 0, '".$speciality."',
                            '".$email."', '".$streetName."', '".$postalCode."',
                           '".$cookPhotoName."') ";

    if(mysqli_query($sqlCon, $sqlCommand)){
      echo "Success";
    }
    else{
      echo "Nope";
    }


    // cook information has been entered
    $sqlCommand = " SELECT *
                    FROM cook
                    WHERE user_id = '".$_SESSION["user_id"]."' ";

    // Executing the query
    $query = mysqli_query($sqlCon, $sqlCommand);

    // create cook folder
    while($row = mysqli_fetch_assoc($query)){

      // create the cook folder
      createFolder($dir."/".$row['cook_id'], $row['cook_id'], $dir);
      $finalDestination = $dir."/cook_".$row['cook_id']."/cook_profile_pic"."/".$cookPhotoName;

    }

    // move the image into the created folder
    move_uploaded_file($cookPhotoTempName, $finalDestination);


    // close connections
    mysqli_close($sqlCon);

  }

 ?>
