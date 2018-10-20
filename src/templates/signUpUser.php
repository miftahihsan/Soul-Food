<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login Page</title>

    <!-- //incudeing the style sheets here -->
    <?php
      include_once '../static/bootStrapCss.php'
     ?>

     <link rel="stylesheet" href="../static/styles.css">
     <link rel="stylesheet" href="../static/commonStyles.css">

  </head>


  <body>

    <!-- // the nav bar here -->
    <?php
      include_once '../_includes/navbar/_navBarSignUp.php'
     ?>

     <div class="custom-login-container mg-tp-80 card-view hide-overflow-x">

       <?php
          include '../form/signUpForm.php';
        ?>

     </div>


     <!-- // the css bootstrap here -->
    <?php
      include_once '../static/bootStrapJS.php'
     ?>

  </body>

</html>
