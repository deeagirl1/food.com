$(function(){
    $(".completeBtn").click(function() {
      $.ajax({
             type: "POST",
             url: "handlers/completeOrder.php",
             data: $(this).parent().serialize(), 
             success: function(data) {
                  alert('Completed Order');
                  document.location='index.php?page=orders';
             }
      });
      return false; 
  }); 
}); 
