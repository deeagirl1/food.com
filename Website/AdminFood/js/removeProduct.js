$(function(){
    $(".passwordbtn1").click(function() {
      $.ajax({
             type: "POST",
             url: "handlers/removeFromStock.php",
             data: $(this).parent().serialize(), 
             success: function(data) {
                  alert('Removed from stock');
                  document.location='index.php';
             }
      });
      return false; 
  }); 
}); 

