<?php

  include 'hideWarning.php';

  include_once 'dbCon.php';


  function checkFolder($path, $cook_id, $dir){

    // if dir does not exist create a dir
    if(!is_dir($path)){

      // make the main folder and create sub folders
      mkdir($dir."/cook_".$cook_id, 0777);
      mkdir($dir."/cook_".$cook_id."/cook_profile_pic", 0777);

    }

  }

  $verified = false;
  $dir = "../static/images/cook_folder";

  // selecting the logged in user
  $sqlCommand = " SELECT *
                  FROM cook
                  WHERE user_id = '".$_SESSION["user_id"]."' ";

  $query = mysqli_query($sqlCon, $sqlCommand);

  // // checking if he is a cook
  while($row = mysqli_fetch_assoc($query)){

    // if($row['user_id'])

    if($row["verified"] == 1){
      checkFolder($dir."/".$row['cook_id'], $row['cook_id'], $dir);
      $verified = 1;
    }


  }


  //
  // // $dir = "../static/images/cook_folder";
  // // mkdir($dir."/".$_SESSION['user_id'], 0777)
  //
  //
  // echo "<br>";
  //
  // echo $_SESSION['user_id'];

 ?>
