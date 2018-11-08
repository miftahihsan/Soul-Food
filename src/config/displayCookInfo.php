<?php

  include_once "hideWarning.php";

  // connecting with dataase
  include_once "dbCon.php";

  // fetch all the data of cook from database
  $sqlCommand = " SELECT *
                  FROM cook
                  WHERE user_id = '".$_SESSION["user_id"]."' ";

  if($query = mysqli_query($sqlCon, $sqlCommand)){

  }
  else{
    echo "NOOOO";
  }

  $cookInfo = mysqli_fetch_assoc($query);


 ?>
