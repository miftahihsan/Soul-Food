<?php

  $sqlCommand = "SELECT *
                 FROM cook_post
                 WHERE cuisine = '".$cookAndFoodArray["cuisine"]."' ";


  if($query = mysqli_query($sqlCon, $sqlCommand)){
    // echo "YES";
  }else {
    // echo "NO";
  }


 ?>
