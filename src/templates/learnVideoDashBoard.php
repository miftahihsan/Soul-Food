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

     <div class="container-fluid dashboard-background" style="padding:20px;">



         <!-- hard coded for now -->
      <!-- <div class="mb-4"></div> -->

      <?php

        include_once '../config/dbCon.php';

        $v_id = $_GET['v_id'];



        $sqlCommand = " SELECT *
                             FROM youtube_videos
                             WHERE video_id = '".$v_id."' ";

        $videoResults = mysqli_query($sqlCon, $sqlCommand);

        $videoArray = mysqli_fetch_assoc($videoResults);

        echo $videoArray["video"];

      ?>


      <hr>


      <div class="container">

        <br>

        <?php echo '<h1 style = "font-size:4em;" > '.$videoArray["video_title"].' </h1>' ?>

        <hr>

        <?php echo '<p> '.$videoArray["video_description"].' </p>'; ?>

      </div>

       <!-- Pagination ends here -->

     </div>

     <?php
       include_once '../_includes/_footer.php';
      ?>

     <!-- // the css bootstrap here -->
    <?php
      include_once '../static/bootStrapJS.php'
     ?>
     <!-- <script type="text/javascript" src="../static/scripts/hideExtraLine.js"></script> -->

  </body>

</html>
