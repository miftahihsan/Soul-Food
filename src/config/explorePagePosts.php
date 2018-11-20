<?php

  include_once 'dbCon.php';

  $sqlCommand  = "SELECT *
                  FROM cook_post";

  $query = mysqli_query($sqlCon, $sqlCommand);

 ?>
