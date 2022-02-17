$(function(){

    $('#registerForm').submit(function( event ) {
        event.preventDefault();
         $.post( 'handlers/registerAccount.php', $(this).serialize(), function(data, status) {
            if(status === 'success') {
                let val = JSON.parse(data);
                if(val[0]===2){
                    alert('Thank you for registration, please log in!');
                    document.location='login.php';
                }
                else alert('Something went wrong, please try again!');
            }
            else 
            {
                alert('Something went wrong');
            }
        }); 
        
      });

});
