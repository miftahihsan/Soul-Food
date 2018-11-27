// function removeItem(event){
//   // alert($(event).attr('id'));
//   var delete_row = $(event).attr('id');
//
//   var array = delete_row.split("_");
//
//   if(confirm("Are you sure you want to remove this from the cart?!")){
//
//     $.ajax({
//          type: 'POST',
//          url: '../../config/removeFromCart.php',
//          data: {
//            cart_id: array[1]
//          },
//          success: function(response) {
//              $.notify("Removed from cart", "success");
//          },
//          error: function(xhr, status, error) {
//            alert(error);
//            alert(xhr);
//            alert(error);
//            $.notify("Failed to remove from cart", "error");
//          }
//      });
//
//   }else {
//     // do nothing
//   }
//
//   // $("#table_row_"+array[2]+"").animate({'line-height':0},1000).hide(1);
//   // $("#confirm_purchase_"+array[2]+"").animate({'line-height':0},1000).hide(1);
//   // $("#"+array[2]+"").animate({'line-height':0},1000).hide(1);
// }
