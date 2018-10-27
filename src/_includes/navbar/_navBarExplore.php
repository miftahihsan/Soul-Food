<?php

  // include_once '../_checkSession.php';

  // if(session_status == PHP_SESSION_NONE){
    session_start();
  // }
  if($_SESSION['logged_in'] == null){
    header("Location:http://localhost/cse_471_porject/src/templates/loginPage.php");
  }

  // isset($_SESSION['logged_in']) &&
  if($_SESSION['logged_in'] == "true"){
    echo '<nav class=" navbar navbar-expand-md navbar-dark bg-custom navbar-inverse my-custom-navbar">';

        echo '<a class="navbar-brand" href="#"><img src="webLogo.jpg"  alt="Soul Food"></a>';
        echo '<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">';
          echo '<span class="navbar-toggler-icon"></span>';
        echo '</button>';

        echo '<div class="collapse navbar-collapse" id="navbarCollapse">';

          //search bar
          echo '<form class="form-inline mt-2 mt-md-0 mx-auto">';
            echo "<div>";
              echo '<input class="form-control mr-sm-3 custom-navbar-search-bar" type="text" placeholder="Search" aria-label="Search">';

              echo '<button class="btn btn-custom-white search-button my-2 my-sm-0" type="submit">Search</button>';

              echo "<br>";

              echo "<div style='margin-top:10px;' >";

                echo '<select class="custom-select">';
                  echo '<option selected>Region</option>';
                  echo '<option value="1">One</option>';
                  echo '<option value="2">Two</option>';
                  echo '<option value="3">Three</option>';
                echo '</select>';

                echo '<select class="custom-select" style = "margin-left:5px;">';
                  echo '<option selected>Cuisine</option>';
                  echo '<option value="1">One</option>';
                  echo '<option value="2">Two</option>';
                  echo '<option value="3">Three</option>';
                echo '</select>';

              echo "</div>";

            echo "</div>";
          echo '</form>';

          echo '<ul class="navbar-nav ml-auto custom-navbar-items">';

            echo '<li class="nav-item active">';
              echo '<a class="nav-link not-active" href="../templates/learnDashboard.php">Learn!!<span class="sr-only">(current)</span></a>';
            echo '</li>';

            echo '<li class="nav-item active">';
              echo '<a class="nav-link active-tab" href="../templates/explorePage.php">Explore<span class="sr-only">(current)</span></a>';
            echo '</li>';

            if(!$_SESSION['is_chef']){
              echo '<li class="nav-item active">';
                echo '<a class="nav-link not-active" href="#">Become a Cook</a>';
              echo '</li>';
            }

            echo '<li class="nav-item active">';
              echo '<a class="nav-link not-active" href="#">About</a>';
            echo '</li>';

            // drop down dashboard
            echo '<li class="nav-item dropdown">';
              echo '<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Dropdown</a>';
              echo '<div class="dropdown-menu">';
                echo '<a class="dropdown-item" href="../templates/userAccount.php">My account</a>';
                echo '<a class="dropdown-item" href="#">Favourites</a>';
                echo '<a class="dropdown-item" href="#">History</a>';
                if($_SESSION['is_chef']){
                  echo '<div role="separator" class="dropdown-divider"></div>';
                  echo '<a class="dropdown-item" href="#">Cook Account</a>';
                }
                // echo '<div role="separator" class="dropdown-divider"></div>';
                // echo '<a class="dropdown-item" href="#three">three</a>';
              echo '</div>';
            echo '</li>';

            echo '<li class="nav-item active">';
              echo '<a class="nav-link" href="../templates/loginPage.php">Logout</a>';
            echo '</li>';

          echo '</ul>';

        echo '</div>';

    echo '</nav>';
  }
  else{
    echo '<nav class=" navbar navbar-expand-md navbar-dark bg-custom navbar-inverse my-custom-navbar">';

        echo '<a class="navbar-brand" href="#"><img style class="" src="logo.png"  alt="">Soul Cook</a>';
        echo '<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">';
          echo '<span class="navbar-toggler-icon"></span>';
        echo '</button>';

        echo '<div class="collapse navbar-collapse" id="navbarCollapse">';

          //search bar
          echo '<form class="form-inline mt-2 mt-md-0 mx-auto">';
            echo "<div>";
              echo '<input class="form-control mr-sm-3 custom-navbar-search-bar" type="text" placeholder="Search" aria-label="Search">';

              echo '<button class="btn btn-custom-white search-button my-2 my-sm-0" type="submit">Search</button>';

              echo "<br>";

              echo "<div style='margin-top:10px;' >";

                echo '<select class="custom-select">';
                  echo '<option selected>Region</option>';
                  echo '<option value="1">One</option>';
                  echo '<option value="2">Two</option>';
                  echo '<option value="3">Three</option>';
                echo '</select>';

                echo '<select class="custom-select" style = "margin-left:5px;">';
                  echo '<option selected>Cuisine</option>';
                  echo '<option value="1">One</option>';
                  echo '<option value="2">Two</option>';
                  echo '<option value="3">Three</option>';
                echo '</select>';

              echo "</div>";

            echo "</div>";
          echo '</form>';

          echo '<ul class="navbar-nav ml-auto custom-navbar-items">';

            echo '<li class="nav-item active">';
              echo '<a class="nav-link not-active" href="../templates/learnDashboard.php">Learn!!<span class="sr-only">(current)</span></a>';
            echo '</li>';

            echo '<li class="nav-item active">';
              echo '<a class="nav-link active-tab" href="../templates/explorePage.php">Explore<span class="sr-only">(current)</span></a>';
            echo '</li>';

            echo '<li class="nav-item active">';
              echo '<a class="nav-link not-active" href="#">About</a>';
            echo '</li>';

            echo '<li class="nav-item active">';
              echo '<a class="nav-link not-active" href="../templates/loginPage.php">Log in</a>';
            echo '</li>';

            echo '<li class="nav-item active">';
              echo '<a class="nav-link not-active" href="../templates/signUpUser.php">Sign Up</a>';
            echo '</li>';

          echo '</ul>';

        echo '</div>';

    echo '</nav>';
  }



 ?>
