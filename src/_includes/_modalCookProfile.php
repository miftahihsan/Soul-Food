<?php

echo '<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Update Profile</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">


      <form method="post" enctype="multipart/form-data">
        <div class="container">

          <div class="row dashboard-background">

            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

              <div class="text-center" style="height:100%; padding:40px;">


                <div class="cook-photo-container img-thumbnail">
                  <img id="image" name = "image" class="cook-image" src="" alt="" width="100%">
                </div>


                 <label class="upload-image-btn btn-primary">
                     <input id="file-button" name = "cook-image" class="file-button" type="file" onchange="imagePreview.call(this);"
                      accept="image/jpeg, image/png, image/jpg">
                         UPLOAD IMAGE
                 </label>

                 <small id="emailHelp" class="form-text text-muted"> <red style="color:red;">*</red> JPEG JGP PNG only <br> 540 X 540 </small>
              </div>

            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

              <div style="background-color:white; padding:40px;">



                  <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                  <small id="emailHelp" class="form-text text-muted">We\'ll never share your email with anyone else.</small>

                  <br>

                  <div class = "row">

                    <div class="form-group col">


                    <input name="firstName" type="text" class="form-control" id="exampleInputPassword1" placeholder="First Name">

                    </div>

                    <div class="form-group col">


                    <input name="middleName" type="text" class="form-control" id="exampleInputPassword1" placeholder="Middle Name">

                    </div>

                    <div class="form-group col">


                      <input name="lastName" type="text" class="form-control" id="exampleInputPassword1" placeholder="Last Name">

                    </div>

                  </div>



                  <input name="speciality" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Speciality">

                  <br>


                  <input name="phoneNumber" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Phone number">
                  <small id="emailHelp" class="form-text text-muted">Can not be more the 11 characters long.</small>

                  <br>


                  <div class = "row">

                    <div class="form-group col">


                    <input  name="streetName" type="text" class="form-control" id="exampleInputPassword1" placeholder="Street Name">

                    </div>

                    <div class="form-group col">



                    <input name="postalCode" type="text" class="form-control" id="exampleInputPassword1" placeholder="Postal Code">



                    </div>


                  </div>


                  <button type="submit" name = "submit" class="btn btn-primary btn-full-width">Submit</button>




              </div>

            </div>

          </div>

        </div>

      </form>


      </div>

    </div>
  </div>
</div>';



 ?>
