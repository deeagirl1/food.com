$(function(){
    $('#productContainer').submit(function( event ) {
        event.preventDefault();
         $.post( 'handlers/addProduct.php', $(this).serialize(), function(data, status) {
            if(status === 'success') {
                let val = JSON.parse(data);
                if(val[0]===true){
                    alert("Product succesfully added");
                    document.location='index.php';
                }
                else alert('Something went wrong');
            }
            else 
            {
                alert('Something went wrong');
            }
        });  
        
      });

});