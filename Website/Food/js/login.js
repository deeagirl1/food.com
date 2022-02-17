$(function(){
    $('#loginForm').submit(function( event ) {
        event.preventDefault();
         $.post('handlers/loginCheck.php', $(this).serialize(), function(data, status) {
            if(status === 'success') {
                let val = JSON.parse(data);
                if(val[0]===true){
                    document.location='index.php';
                }
                else alert('Invalid credentials supplied');
            }
            else 
            {
                alert('Something went wrong');
            }
        }); 
        
      });

});
