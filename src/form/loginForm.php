<?php

echo '<form method="post" action="../config/login.php">';

   echo '<div class="form-group">';
     echo '<label for="exampleInputEmail1">Email address</label>';
     echo '<input type="email" class="form-control" name = "user_email" id="user_email" aria-describedby="emailHelp" placeholder="Enter email">';
   echo '</div>';

   echo '<div class="form-group">';
     echo '<label for="exampleInputPassword1">Password</label>';
     echo '<input type="password" class="form-control" name = "user_password" id="user_password" placeholder="Password">';
   echo '</div>';

   // <!-- This one will act as a remember me check box -->
   // <!-- <div class="form-group form-check">
   //   <input type="checkbox" class="form-check-input" id="exampleCheck1">
   //   <label class="form-check-label" for="exampleCheck1">Check me out</label>
   // </div> -->

   echo '<button type="submit" class="btn btn-primary btn-full-width">Login</button>';

   echo '<div class="login-msg" style ="text-align:center; margin-top: 20px;"></div>';

 echo '</form>';

 ?>
