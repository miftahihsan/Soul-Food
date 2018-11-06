function dec(){
  var qty_box = document.getElementById("quantity-box").value;
  if(qty_box != 0){
    qty_box = parseInt(qty_box) - 1;
    document.getElementById("quantity-box").value = qty_box;
  }
}

function inc(){
  var qty_box = document.getElementById("quantity-box").value;
  qty_box = parseInt(qty_box) + 1;
  document.getElementById("quantity-box").value = qty_box;
}


// Prevents from letter insertion
// $( "#quantity-box" ).keypress(function( event ) {
//   if ( ( event.which < 48 || event.which > 57 ) && ( event.which != 127 && event.which != 8
//   && event.which != 37 && event.which != 38 && event.which != 39 && event.which != 40)) {
//
//      event.preventDefault();
//
//   }
// });
