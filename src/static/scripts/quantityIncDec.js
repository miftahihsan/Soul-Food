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
