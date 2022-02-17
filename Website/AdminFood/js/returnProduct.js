$(function(){
    $(".passwordbtn2").click(function() {
      $.ajax({
             type: "POST",
             url: "handlers/returnToStock.php",
             data: $(this).parent().serialize(), 
             success: function(data) {
                  alert('Returned to stock');
                  document.location='index.php';
             }
      });
      return false; 
  }); 
}); 
