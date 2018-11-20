<?php

  session_start();
  include_once 'dbCon.php';

  // Name of the food
  $postName = mysqli_real_escape_string($sqlCon, $_POST['postHeader']);

  $postPrice = mysqli_real_escape_string($sqlCon, $_POST['postPrice']);

  $postDiscount = mysqli_real_escape_string($sqlCon, $_POST['postDiscount']);

  $aboutFood = mysqli_real_escape_string($sqlCon, $_POST['about-food']);

  // now take in the image path
  $cookOfferPhoto = $_FILES['post-image'];
  $cookOfferPhotoTempName = $_FILES['post-image']['tmp_name'];
  $cookOfferPhotoName = $_FILES['post-image']['name'];
  $cookOfferPhotoError = $_FILES['post-image']['error'];
  $cookOfferPhotoSize = $_FILES['post-image']['size'];
  $cookOfferPhotoExploded = explode('.', $cookOfferPhotoName);
  $cookOfferPhotoExtension = strtolower(end($cookOfferPhotoExploded));


  // Now we are retrieeing the cooks id form the cook table
  $sqlCommand = " SELECT cook_id
                  FROM cook
                  WHERE user_id = '".$_SESSION["user_id"]."' ";


  // Executing the query to get the cookd id
  $result = mysqli_query($sqlCon, $sqlCommand);

  $rowCookInfo = mysqli_fetch_assoc($result);

  $cookId = $rowCookInfo['cook_id'];

  // now we enter the the form information into the cook_post table
  $cookOfferPhotoName = date("Y-m-d.H-i-s")."-".$cookOfferPhotoName;

  // $sqlCommand = " INSERT INTO cook_post (cook_id, food_pic, food_title,
  //                                         food_description, rating, discount)
  //                 VALUES ('".$cookId."'. '".$cookOfferPhotoName."', '".$postName."',
  //                         '".$aboutFood."', 0, '".$postDiscount."') ";

  $sqlCommand = " INSERT INTO cook_post (cook_id, food_pic, food_title, food_description,
                                    discount, rating, price)
                  VALUES('".$rowCookInfo["cook_id"]."', '".$cookOfferPhotoName."', '".$postName."',
                          '".$aboutFood."', '".$postDiscount."', 0, '".$postPrice."') ";


  if(mysqli_query($sqlCon, $sqlCommand)){

    $sqlCommand = " SELECT post_id
                    FROM cook_post
                    WHERE cook_id = '".$cookId."' ";

    $result = mysqli_query($sqlCon, $sqlCommand);

    $cookPostInfo = mysqli_fetch_assoc($result);

    $postID = $cookPostInfo['post_id'];

    echo $postID;

    $dir = "../static/images/cook_folder";


    $imageDestination = $dir."/cook_".$cookId."/post//".$cookOfferPhotoName;

    // move the image into the created folder
    move_uploaded_file($cookOfferPhotoTempName, $imageDestination);

    // mysqli_close($sqlCon);
    Header("Location: http://localhost/cse_471_porject/src/templates/cook_dashboard.php?success");
    exit();

  } else{
    echo "PROBLEM";
  }

  // closing he connection
  mysqli_close($sqlCon);

 ?>
