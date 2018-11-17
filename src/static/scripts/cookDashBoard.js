$(document).ready(function(){
  $("#disable").prop("disabled",true);
  $("#dismiss-image").hide();
});

$("#post-div").hide();

function displayPost(event){

  $("#post-div").toggle('slow');

  if($(event).hasClass("fa-plus")){

    $(event).removeClass("fa-plus");
    $(event).addClass("fa-minus");

  }else{

    $(event).removeClass("fa-minus");
    $(event).addClass("fa-plus");

  }
}

function closeImg(){
  $("#dismiss-image").hide('slow');
  $("#image").hide('slow');
  setTimeout($("#image").prop('src', ""), 1000)
  // $("#image").prop('src', "").hide('slow');
}

// This goes through a constant check if conditions are met or not
setInterval(function(){

  var postHeader = $('#postHeader').val();
  var postPrice = $('#postPrice').val();

  // Getting the word count from the editor
  theEditor = tinymce.activeEditor;
  var wordCount = theEditor.plugins.wordcount.getCount();

  if($('#image').attr('src') != ""){
    $("#dismiss-image").show('slow');
  }


  // alert(tinyMCE.activeEditor.getContent());

  // knowing if the image has been uploaded or not

  if(postHeader != "" && postPrice != "" && wordCount >= 5 && $('#image').attr('src') != ""){
    $("#disable").prop("disabled",false);
  }
  else{
    $("#disable").prop("disabled",true);
  }

}, 100);
