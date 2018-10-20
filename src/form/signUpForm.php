<?php

echo '<form method="post" action="../config/signUpConfig.php">';

  // echo '<label for="exampleInputEmail1">Email address</label>';

  // EMAIL
  echo '<input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">';
  echo '<small id="emailHelp" class="form-text text-muted">We\'ll never share your email with anyone else.</small>';

  echo '<br>';

  // Password and confirm password
  echo "<div class = 'row'>";

    echo '<div class="form-group col">';

    // echo '<label for="exampleInputPassword1">Password</label>';
    echo '<input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">';

    echo '</div>';

    echo '<div class="form-group col">';

      // echo '<label for="exampleInputPassword1">Confirm Password</label>';
      echo '<input name="confirmPassword" type="password" class="form-control" id="exampleInputPassword1" placeholder="Confirm Password">';

    echo '</div>';

  echo "</div>";

  // echo '<br>';

  // User name
  echo "<div class = 'row'>";

    echo '<div class="form-group col">';

    // echo '<label for="exampleInputPassword1">Password</label>';
    echo '<input name="firstName" type="text" class="form-control" id="exampleInputPassword1" placeholder="First Name">';

    echo '</div>';

    echo '<div class="form-group col">';

    // echo '<label for="exampleInputPassword1">Password</label>';
    echo '<input name="middleName" type="text" class="form-control" id="exampleInputPassword1" placeholder="Middle Name">';

    echo '</div>';

    echo '<div class="form-group col">';

      // echo '<label for="exampleInputPassword1">Password</label>';
      echo '<input name="lastName" type="text" class="form-control" id="exampleInputPassword1" placeholder="Last Name">';

    echo '</div>';

  echo "</div>";

  // echo '<br>';

  // User phone number
  echo '<input name="phoneNumber" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Phone number">';
  echo '<small id="emailHelp" class="form-text text-muted">Can not be more the 11 characters long.</small>';

  echo '<br>';

  // User Street
  echo "<div class = 'row'>";

    echo '<div class="form-group col">';

    // echo '<label for="exampleInputPassword1">Password</label>';
    echo '<input  name="streetName" type="text" class="form-control" id="exampleInputPassword1" placeholder="Street Name">';

    echo '</div>';

    echo '<div class="form-group col">';

    // echo '<label for="exampleInputPassword1">Password</label>';
    echo '<input name="postalCode" type="text" class="form-control" id="exampleInputPassword1" placeholder="Postal Code">';

    echo '</div>';


  echo "</div>";

  // echo '<br>';

  // echo '<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">';
  // echo '<small id="emailHelp" class="form-text text-muted">We\'ll never share your email with anyone else.</small>';

   // <!-- This one will act as a remember me check box -->
   // <!-- <div class="form-group form-check">
   //   <input type="checkbox" class="form-check-input" id="exampleCheck1">
   //   <label class="form-check-label" for="exampleCheck1">Check me out</label>
   // </div> -->

   echo '<button type="submit" class="btn btn-primary btn-full-width">Submit</button>';

 echo '</form>';

 ?>
