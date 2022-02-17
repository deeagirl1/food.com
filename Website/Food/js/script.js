const form = document.getElementById('registerForm');
const firstName = document.getElementById('firstName');
const lastName = document.getElementById('lastName');
const email = document.getElementById('email');
const street = document.getElementById('street');
const streetnr = document.getElementById('streetnr'); 
const zipcode = document.getElementById('zipcode'); 
const city = document.getElementById('city');
const psw1 = document.getElementById('psw');
const psw2 = document.getElementById('psw-repeat');


form.addEventListener('submit', e => {
	e.preventDefault();
	
	checkInputs();
});

function checkInputs() {
	
	const firstNameValue = firstName.value.trim();
    const lastNameValue = lastName.value.trim();
    const streetValue = street.value.trim();
    const streetnrValue = streetnr.value.trim();
    const zipcodeValue = zipcode.value.trim();
    const cityValue = city.value.trim();
    const psw1Value = psw1.value.trim();
    const psw2Value = psw2.value.trim();
	
	if(firstNameValue === '') {
		text = "First name cannot be empty!";
        document.getElementById('message1').style.visibility ="visible";
        document.getElementById('message1').innerHTML = text;

	} 
    else
    {
        document.getElementById('message1').style.visibility ="hidden";
    }
    
    if(lastNameValue === '') {
		text = "Last name cannot be empty!";
        document.getElementById('message2').style.visibility ="visible";
        document.getElementById('message2').innerHTML = text;

	} 
    else
    {
        document.getElementById('message2').style.visibility ="hidden";
    }

    if(streetValue === '') {
		text = "Street cannot be empty!";
        document.getElementById('message4').style.visibility ="visible";
        document.getElementById('message4').innerHTML = text;

	} 
    else
    {
        document.getElementById('message4').style.visibility ="hidden";
    }
    if(streetnrValue === '') {
		text = "StreetNr cannot be empty!";
        document.getElementById('message5').style.visibility ="visible";
        document.getElementById('message5').innerHTML = text;
	}
    else 
    {
        document.getElementById('message5').style.visibility ="hidden";
    }
    if(zipcodeValue === '') {
		text = "Zipcode cannot be empty!";
        document.getElementById('message6').style.visibility ="visible";
        document.getElementById('message6').innerHTML = text;

	} 
    else
    {
        document.getElementById('message6').style.visibility ="hidden";
    }
    if(cityValue === '') {
		text = "City cannot be empty!";
        document.getElementById('message7').style.visibility ="visible";
        document.getElementById('message7').innerHTML = text;

	} 
    else
    {
        document.getElementById('message7').style.visibility ="hidden";
    }
	if(psw2Value !== psw1Value)
    {
        text = "Passwords must match!";
        document.getElementById('message9').style.visibility ="visible";
        document.getElementById('message9').innerHTML = text;
    } 
    else
    {
        document.getElementById('message9').style.visibility ="hidden";
    }
    
} 
	
