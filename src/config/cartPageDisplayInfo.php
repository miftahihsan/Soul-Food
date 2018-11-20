<?php


  include_once 'dbCon.php';

  if(isset($_GET["PST_V"])){
    $postID = mysqli_real_escape_string($sqlCon, $_GET["PST_V"]);

    $sqlCommand = "SELECT *
                  FROM cook_post
                  INNER JOIN cook
                  ON cook.cook_id = cook_post.cook_id
                  INNER JOIN helper_table_user
                  ON cook.user_id = helper_table_user.user_id
                  INNER join user
                  ON helper_table_user.id = user.id
                  WHERE post_id = '".$postID."' ";

    if ($query = mysqli_query($sqlCon, $sqlCommand)){

    }
    else{

    }

    $cookAndFoodArray = mysqli_fetch_assoc($query);

  }
  else{
    Header("Location: http://localhost/cse_471_porject/src/templates/explorePage.php");
  }





 ?>
