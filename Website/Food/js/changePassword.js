$(function(){
    $('#accountForm').submit(function( event ) {
        event.preventDefault();

        pass = document.forms["accountForm"]["psw"].value;
        newPass = document.forms["accountForm"]["new-psw"].value;
        rptNewPass = document.forms["accountForm"]["psw-repeat"].value;

        if(pass == "" || newPass == "" || rptNewPass == "") {alert('Field(s) cannot be empty')};
         $.post( 'handlers/changePassword.php', $(this).serialize(), function(data, status) {
            if(status === 'success') {
                let val = JSON.parse(data);
                if(val[0] === 2){
                    alert('Successful!');
                    document.location='index.php?page=myaccount';
                }
                else if(val[0] === 1){
                    alert('Invalid credentials supplied');
                }
                else alert('Passwords are not same.');
            }
            else 
            {
                alert('Something went wrong');
            }
        }); 
      });

});