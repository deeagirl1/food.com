$(function(){
      $(".passwordbtn").click(function() {
        $.ajax({
               type: "POST",
               url: "handlers/addToShoppingCart.php",
               data: $(this).parent().serialize(), 
               success: function(data) {
                    alert('Added to a shopping cart');
                    document.location='index.php';
               }
        });
        return false; 
    }); 
}); 

