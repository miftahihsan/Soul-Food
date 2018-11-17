<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Learn</title>

    <!-- //incudeing the style sheets here -->
    <?php
      include_once '../static/bootStrapCss.php';
     ?>

     <link rel="stylesheet" href="../static/styles.css">
     <link rel="stylesheet" href="../static/commonStyles.css">

  </head>


  <body class="hide-overflow-x">

    <!-- // the nav bar here -->
    <?php
      include_once '../_includes/navbar/_navBarLearn.php';
     ?>

     <div class="container dashboard-background">

       <div class="row">

         <!-- hard coded for now -->

         <?php

         include_once '../config/dbCon.php';

         $sqlCommand = " SELECT *
                         FROM youtube_videos ";

          $videoResults = mysqli_query($sqlCon, $sqlCommand);

          // <iframe width="100%" height="315" src="https://www.youtube.com/embed/Zv8z1Ghs8DA"
          // frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>

          while($row = mysqli_fetch_assoc($videoResults)) {
            echo '<div class="video-text col-xs-12 col-sm-12 col-md-12 col-lg-6">
                    '.$row["video"].'
                  </div>

                  <div class="video-text col-xs-12 col-sm-12 col-md-12 col-lg-6">

                    <a class = "remove-a-dec" href="learnVideoDashBoard.php?v_id='.$row["video_id"].'"><div class = "hide-text-length learn-page-ptag" style = "height:315px;">
                      <h1>'.$row["video_title"].'</h1>
                      <p>'.$row["video_description"].'</p>
                    </div></a>

                  </div>';
          }

          ?>

       </div>

       <hr>

       <!-- Pagination starts here -->

       <nav aria-label="Page navigation example">
        <ul class="pagination learn-pagination">
          <li class="page-item"><a class="page-link" href="#">Previous</a></li>
          <li class="page-item"><a class="page-link" href="#">1</a></li>
          <li class="page-item"><a class="page-link" href="#">2</a></li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
          <li class="page-item"><a class="page-link" href="#">Next</a></li>
        </ul>
      </nav>

      <hr>

       <!-- Pagination ends here -->

     </div>

     <?php
       include_once '../_includes/_footer.php';
      ?>

     <!-- // the css bootstrap here -->
    <?php
      include_once '../static/bootStrapJS.php'
     ?>

     <!-- include jquerydotdotdot -->
     <script type="text/javascript" src="../static/scripts/libraries/jQuery.dotdotdot/dist/jquery.dotdotdot.js"></script>
     <script type="text/javascript">
      $(".hide-text-length").dotdotdot();
     </script>
     <!-- <script type="text/javascript" src="../static/scripts/hideExtraLine.js"></script> -->

  </body>

</html>
