let btnPay = document.getElementById('btnPay');
btnPay.addEventListener('click', pay_clicked);
function pay_clicked()
{
    $.post( 'handlers/processOrder.php', $(this).serialize(), function(data, status) {
        if(status === 'success') {
            let val = JSON.parse(data);
            if(val[0] === 2){
                alert('Successful!');
                document.location='index.php';
            }
            else if(val[0] === 1){
                alert('Payment denied.');
            }
            else alert('Shopping cart is empty!.');
        }
        else 
        {
            alert('Something went wrong');
        }
    });
}
