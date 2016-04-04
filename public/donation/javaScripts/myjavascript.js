function validateEmail(sEmail) {
    var filter = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
    if (filter.test(sEmail)) {
        return true;
    }
    else {
        return false;
    }
}

function phonenumber(inputtxt)  
{  
  var phoneno = /^\d{10}$/;  
  if((inputtxt.value.match(phoneno))  
        {  
      return true;  
        }  
      else  
        {    
        return false;  
        }  
} 