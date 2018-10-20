<?php

  session_start();
  if($_SESSION['logged_in'] == null){
    header("Location:http://localhost/cse_471_porject/src/templates/loginPage.php");
  }

 ?>
