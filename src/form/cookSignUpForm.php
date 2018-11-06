<?php
  echo '<form method="post" enctype="multipart/form-data">';
    echo '<div class="container">';

      echo '<div class="row dashboard-background">';

        echo '<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">';

          echo '<div class="text-center" style="height:100%; padding:40px;">';

            // <!-- Image preview Box -->
            echo '<div class="cook-photo-container img-thumbnail">';
              echo '<img id="image" name = "image" class="cook-image" src="" alt="" width="100%">';
            echo '</div>';

            // <!-- Browse button -->
             echo '<label class="upload-image-btn btn-primary">';
                 echo '<input id="file-button" name = "cook-image" class="file-button" type="file" onchange="imagePreview.call(this);"
                  accept="image/jpeg, image/png, image/jpg">';
                     echo 'UPLOAD IMAGE';
             echo '</label>';

             echo '<small id="emailHelp" class="form-text text-muted"> <red style="color:red;">*</red> JPEG JGP PNG only <br> 540 X 540 </small>';
          echo '</div>';

        echo '</div>';

        echo '<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">';

          echo '<div style="background-color:white; padding:40px;">';

            // start here
            // echo '<form method="post" enctype="multipart/form-data">';

              // echo '<label for="exampleInputEmail1">Email address</label>';

              // EMAIL
              echo '<input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">';
              echo '<small id="emailHelp" class="form-text text-muted">We\'ll never share your email with anyone else.</small>';

              echo '<br>';

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


              // Speciality
              echo '<input name="speciality" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Speciality">';

              echo '<br>';

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
                // echo '<input name="postalCode" type="text" class="form-control" id="exampleInputPassword1" placeholder="Postal Code">';

                echo '<input name="postalCode" type="text" class="form-control" id="exampleInputPassword1" placeholder="Postal Code">';



                echo '</div>';


              echo "</div>";


              echo '<button type="submit" name = "submit" class="btn btn-primary btn-full-width">Submit</button>';


             // echo '</form>';
            // End here
          echo '</div>';

        echo '</div>';

      echo '</div>';

    echo '</div>';

  echo "</form>";

 ?>
