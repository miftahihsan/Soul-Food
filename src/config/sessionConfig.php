<?php

  // starting session here
  session_start();

  // All USER INFORMATION
  $_SESSION['user_id'] = "";
  $_SESSION['user_email'] = "";
  $_SESSION['user_Fname'] = "";
  $_SESSION['user_Mname'] = "";
  $_SESSION['user_Lname'] = "";
  $_SESSION['user_phone'] = "";
  $_SESSION['user_street_address'] = "";
  $_SESSION['user_postal_code'] = "";
  $_SESSION['is_chef'] = "";

  // Check if logged in or not
  $_SESSION['logged_in'] = "false";

  // saving template paths here
  $_SESSION['learnDashboard'] = "../templates/learnDashboard.php";
  $_SESSION['learnDashboard'] = "../templates/loginPage.php";
  $_SESSION['learnDashboard'] = "../templates/signUpCook.php";
  $_SESSION['learnDashboard'] = "../templates/signUpUser.php";


?>
