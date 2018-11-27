function changeHeartColor(event, login_status){

  if(login_status == false){
    window.location.replace("http://localhost/cse_471_porject/src/templates/loginPage.php");
  }

  if($(event).hasClass('fa-blue-heart')){

   $(event).removeClass('fa-blue-heart');
   $(event).addClass('fa-red-heart');
   $(event).attr('title', 'Remove from favourite');

   // notify user
   $.notify("Added to favourite list!!", "success");

  }
  else if($(event).hasClass('fa-red-heart')){

    $(event).removeClass('fa-red-heart');
    $(event).addClass('fa-blue-heart');
    $(event).attr('title', 'Mark as favourite');

    // notify user
    $.notify("Removed from favourite list.", "error");

  }
}


// function checkLoginStatus(event, elem){
//
//   if(event == false){
//     window.location.replace("http://localhost/cse_471_porject/src/templates/loginPage.php");
//   }else{
//     // user is logged in
//     var post_id = $(elem).attr('id');
//     var user_id = ''<?php echo $_SESSION["user_id"];?>';
//     alert( user_id );
//   }
// }
