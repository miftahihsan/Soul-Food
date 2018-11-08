function changeHeartColor(event){
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
