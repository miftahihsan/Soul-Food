<?php

  // cook can post offers using this form
  echo '<form method = "POST" action="../config/submitCookPost.php" enctype="multipart/form-data">';

    // Post name

    echo '<input name="postHeader" type="postHeader" class="form-control" id="postHeader" aria-describedby="emailHelp" placeholder="Enter Post name">';
    echo '<small id="emailHelp" class="form-text text-muted"> <required class = "required">*</required> Field required </small>';
    echo '<br>';

    // postPrice
    echo '<div class = "input-group" >';

      echo '<div class="input-group-prepend">';
            echo '<div class="input-group-text">&#2547;</div>';
      echo '</div>';

      echo '<input name="postPrice" type="postPrice" class="form-control" id="postPrice" aria-describedby="emailHelp" placeholder="Enter Price">';
      echo '</div>';
      echo '<small id="emailHelp" class="form-text text-muted"> <required class = "required">*</required> Field required </small>';

    echo '<br>';

    // post Discount if any
    echo '<div class = "input-group" >';

      echo '<div class="input-group-prepend">';
            echo '<div class="input-group-text">%</div>';
      echo '</div>';

      echo '<input name="postDiscount" type="postDiscount" class="form-control"
      id="postDiscount" aria-describedby="emailHelp" placeholder="Enter discount if any">';

    echo '</div>';


    echo '<br>';

    // Iage upoad
    // echo "<div>";
      echo "<i id='dismiss-image' class = 'fa fa-close text-muted' onclick = 'closeImg();' style = 'position: absolute; right:0;' ></i>";
      echo '<img id="image" name = "image" class="cook-image img-thumbnail" src="" alt="" width="100%">';
    // echo '<div>';


    // image upload
    echo '<label class="upload-image-btn btn-primary">';
        echo '<input id="file-button" name = "post-image" class="file-button" type="file" onchange="imagePreview.call(this);"
         accept="image/jpeg, image/png, image/jpg">';
            echo 'UPLOAD IMAGE';
    echo '</label>';
    echo '<small id="emailHelp" class="form-text text-muted"> <required class = "required">*</required>required field. </small>';

    echo '<br>';

    echo "<h1>Write something about post</h1>";

    echo '<textarea id="about-food" class="" placeholder="Post Offer" name="about-food" rows="2" cols="80" width = "100%"></textarea>';
    echo '<small id="emailHelp" class="form-text text-muted"> <required class = "required">*</required> Must be of atleast 500 words.</small>';

    echo '<br>';

    echo '<button type = "submit" id = "disable" class = "btn btn-primary btn-full-width" name = "submit-offer" > POST </button>';

  echo '</form>';

  echo "<hr>";


?>
