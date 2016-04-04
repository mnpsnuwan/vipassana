function EmailValidation(){
	var email = document.getElementById("email").value;
	filter = /^(^([a-zA-Z]{1,20}[-_.]{0,1}[a-zA-Z0-9]{1,20})(\@gmail\.com|\@yahoo\.com|\@hotmail\.com)$)+$/;
	if (filter.test(email.value)) {
		document.getElementById("email").style.border="3px solid green";
		return true;
	} else{
		document.getElementById("email").style.border="3px solid red";
		document.getElementById('myhint').innerHTML="Enter Valid Email";
	};
}

function validateName() {
    var stringf = document.getElementById("name").value;
    if (stringf == null || stringf == "") {
        document.getElementById("name").style.border="3px solid red";
        document.getElementById('myhint').innerHTML="Name must be filled out";
        //alert("Name must be filled out");
        return false;
    } else if (/[^a-zA-Z]/.test(stringf)) { 
    	//alert("number");      
        document.getElementById("name").style.border="3px solid red";
        document.getElementById('myhint').innerHTML="Name can only contain alphanumeric characters";
        return false;
    }
    return true;
}

function  validateEmail(){
    var emailID = document.getElementById("email").value;
    atpos = emailID.indexOf("@");
    dotpos = emailID.lastIndexOf(".");
     var mailformat = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    
    if (email.value == "") {
        document.getElementById('myhint').innerHTML= "You didn't enter a Email address.\n";
        email.style.border = 'red';
        return false;
    } else if (atpos < 1 || (dotpos - atpos < 2)) {

        document.getElementById("email").style.border="3px solid red";
		document.getElementById('myhint').innerHTML="Enter Valid Email";
        //document.myForm.EMail.focus();
        return false;
    }else if(!emailID.match(mailformat)){
        email.style.border = 'red';
        document.getElementById('myhint').innerHTML="Please enter correct email Address";
       return false;        
    }
    return true;
}

function validatePhone(id) {
    var error = "";
    var stripped = id.value.replace(/[\(\)\.\-\ ]/g, '');
    //var stripped = id.value.replace(/[\(\)\.\-\ ]/g, '');

    if (id.value == "") {
        document.getElementById('myhint').innerHTML= "You didn't enter a phone number.\n";
        id.style.background = 'Yellow';
        //alert(error);
        return false;

    } else if (isNaN(parseInt(stripped))) {
        document.getElementById('myhint').innerHTML= "The phone number contains illegal characters. Don't include dash (- or +)\n";
        id.style.background = 'Yellow';
        //alert(error);
        return false;
    } else if (!(10 <= stripped.length && stripped.length <= 12)) {
        document.getElementById('myhint').innerHTML= "The phone number is the wrong length. Make sure you included an area code. Don't include dash (-)\n";
        id.style.background = 'Yellow';
        //alert(error);
        return false;
    }
    return true;
}