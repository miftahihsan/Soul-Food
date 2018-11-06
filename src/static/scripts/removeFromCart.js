function removeItem(event){
  // alert($(event).attr('id'));
  var delete_row = parseInt($(event).attr('id'));

  // document.getElementById("myTable").deleteRow(delete_row);
  // document.getElementById("myTable").deleteRow(0);
  $("#table_row_"+$(event).attr('id')+"").animate({'line-height':0},1000).hide(1);
  $("#confirm_purchase_"+$(event).attr('id')+"").animate({'line-height':0},1000).hide(1);
  $("#"+$(event).attr('id')+"").animate({'line-height':0},1000).hide(1);
}
