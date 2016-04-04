/*..............register before radio btn.............. */

function courseDate() {
   // var error = "";
    var stripped = element_6_2.value.replace(/[\(\)\.\-\ ]/g, '');  
    var strippedM = element_6_1.value.replace(/[\(\)\.\-\ ]/g, '');
    var strippedY = element_6_3.value.replace(/[\(\)\.\-\ ]/g, '');
     
    var stringD = document.forms["form1"]["element_6_2"].value; 
    var stringM = document.forms["form1"]["element_6_1"].value; 
    var stringY = document.forms["form1"]["element_6_3"].value; 
  //  var stringZ = parseInt(document.forms["form1"]["element_6_3"]);
     
      //(stringD == null || stringD == "") ||  (stringM == null || stringM == "") || (stringY == null || stringY == "")   
    if ( (stringD == null || stringD == "") || (stringM == null || stringM == "") || (stringY == null || stringY == "") ){        
        element_6_2.style.background = 'Yellow';
        element_6_1.style.background = 'Yellow';
        element_6_3.style.background = 'Yellow';
        alert("Course Date must be filled out");
        return false;
        //(/[^0-9]/.test(stringD)) || (/[^0-9]/.test(stringM)) || (/[^0-9]/.test(stringY))
    }else if ( (/[^0-9]/.test(stringD)) || (/[^0-9]/.test(stringM)) || (/[^0-9]/.test(stringY))   ) {       
         element_6_2.style.background = 'Yellow';
         element_6_1.style.background = 'Yellow';
         element_6_3.style.background = 'Yellow';
         alert("Date can only contain Numbers");
        return false;  
     } /*
      else if (!(2016 <= stringZ && stringZ <= 2017)) {
        error = "aaaaaaaaaaaa";
        id.style.background = 'Yellow';
        alert(error);
        return false;
    }*/
    else if (isNaN(parseInt(stripped))) {
        error = "The Date contains illegal characters. Don't include dash (- or +)\n";
        element_6_2.style.background = 'Yellow';
        element_6_1.style.background = 'Yellow';
        element_6_3.style.background = 'Yellow';
        alert(error);
        return false;
    }
    return true;
    }

function radioBtnReg(){
if( (  (!document.getElementById("registered_0").checked) && (!document.getElementById("registered_1").checked)  ) ) {
       alert("Please select Whethere Registered or Not..!");
  return false;
  
   }else{
    return true;
}
}


/*...............validate  the Name................*/

function validateName() {
    var stringf = document.forms["form1"]["fnameA"].value;     
     var stringL = document.forms["form1"]["lnameA"].value; 
    if (stringf == null || stringf == "") {
        fnameA.style.background = 'Yellow';
        alert("Name must be filled out");
        return false;
    } else if (/[^a-zA-Z]/.test(stringf)) {       
         fnameA.style.background = 'Yellow';
         alert("Name can only contain alphanumeric characters");
        return false;
    }else if (/[^a-zA-Z]/.test(stringL)) {       
         lnameA.style.background = 'Yellow';
         alert("Name can only contain alphanumeric characters");
        return false;
    }
    return true;
}

/*  ..................................Birth day validation......................*/

function birthDay() {
   // var error = "";
    var stripped = element_5_2.value.replace(/[\(\)\.\-\ ]/g, '');  
    var strippedM = element_5_1.value.replace(/[\(\)\.\-\ ]/g, '');
    var strippedY = element_5_3.value.replace(/[\(\)\.\-\ ]/g, '');
     
    var stringD = document.forms["form1"]["element_5_2"].value; 
    var stringM = document.forms["form1"]["element_5_1"].value; 
    var stringY = document.forms["form1"]["element_5_3"].value; 
     
      //(stringD == null || stringD == "") ||  (stringM == null || stringM == "") || (stringY == null || stringY == "")   
    if ( (stringD == null || stringD == "") || (stringM == null || stringM == "") || (stringY == null || stringY == "") ){        
        element_5_2.style.background = 'Yellow';
        element_5_1.style.background = 'Yellow';
        element_5_3.style.background = 'Yellow';
        alert("Birth Day must be filled out");
        return false;
        //(/[^0-9]/.test(stringD)) || (/[^0-9]/.test(stringM)) || (/[^0-9]/.test(stringY))
    }else if ( (/[^0-9]/.test(stringD)) || (/[^0-9]/.test(stringM)) || (/[^0-9]/.test(stringY))   ) {       
         element_5_2.style.background = 'Yellow';
         element_5_1.style.background = 'Yellow';
         element_5_3.style.background = 'Yellow';
         alert("Birth Day can only contain Numbers");
        return false;  
     }    
    else if (isNaN(parseInt(stripped))) {
        error = "Your Birth Day contains illegal characters. Don't include dash (- or +)\n";
        element_5_2.style.background = 'Yellow';
        element_5_1.style.background = 'Yellow';
        element_5_3.style.background = 'Yellow';
        alert(error);
        return false;
    }
    return true;
    }



/*.......................validete gender......................*/

function Gender(){
if( (  (!document.getElementById("Male").checked) && (!document.getElementById("Female").checked)  ) ) {
       alert("Please your Gender..!");
  return false;
  
   }else{
      // alert("Please select Whethere Registered or Not..!");
    return true;
}
}



/*===================email validation============================================*/

function  validateEmail(){
    var emailID = document.form1.email2.value;
    atpos = emailID.indexOf("@");
    dotpos = emailID.lastIndexOf(".");
     var mailformat = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    
    if (email3.value == "") {
        error = "You didn't enter a Email address.\n";
        email3.style.background = 'Yellow';
        alert(error);
        return false;
    } else if (atpos < 1 || (dotpos - atpos < 2)) {

        email3.style.background = 'Yellow';
        alert("Please enter correct email Address")
        document.myForm.EMail.focus();
        return false;
    }else if(!emailID.match(mailformat)){
        email3.style.background = 'Yellow';
        alert("Please enter correct email Address")
       return false;        
    }
    return true;
}


/* ===============================nic validation================================*/

function nic(id) {
    var error = "";
    var stripped = id.value.replace(/[\(\)\.\-\ ]/g, '');
    //var stripped = id.value.replace(/[\(\)\.\-\ ]/g, '');

    if (id.value == "") {
        error = "You didn't enter a Nic number.\n";
        id.style.background = 'Yellow';
        alert(error);
        return false;

    } else if (isNaN(parseInt(stripped))) {
        error = "The NIC number contains illegal characters. Don't include dash (- or +)\n";
        id.style.background = 'Yellow';
        alert(error);
        return false;
    } else if (!(10 <= stripped.length && stripped.length <= 12)) {
        error = "The NIC number is the wrong length. Don't include dash (-)\n";
        id.style.background = 'Yellow';
        alert(error);
        return false;
    }
    return true;
}

/*............... address validation......................*/

function valiDateAddress() {
    var stringf = document.forms["form1"]["address1"].value;     
      
    if (stringf == null || stringf == "") {
        address1.style.background = 'Yellow';
        alert("Language must be filled your Address");
        return false;
    }
    return true;
}

/*.................... mother toung validation...............*/

function valiDateMotherTounge() {
    var stringf = document.forms["form1"]["motherTounge"].value;     
      
    if (stringf == null || stringf == "") {
        motherTounge.style.background = 'Yellow';
        alert("Language must be filled out");
        return false;
    } else if (/[^a-zA-Z]/.test(stringf)) {       
         motherTounge.style.background = 'Yellow';
         alert("Language only contain alphanumeric characters");
        return false;
    }
    return true;
}

/*======================================phone number validation==================================*/

function validatePhone(id) {
    var error = "";
    var stripped = id.value.replace(/[\(\)\.\-\ ]/g, '');
    //var stripped = id.value.replace(/[\(\)\.\-\ ]/g, '');

    if (id.value == "") {
        error = "You didn't enter a phone number.\n";
        id.style.background = 'Yellow';
        alert(error);
        return false;

    } else if (isNaN(parseInt(stripped))) {
        error = "The phone number contains illegal characters. Don't include dash (- or +)\n";
        id.style.background = 'Yellow';
        alert(error);
        return false;
    } else if (!(10 <= stripped.length && stripped.length <= 12)) {
        error = "The phone number is the wrong length. Make sure you included an area code. Don't include dash (-)\n";
        id.style.background = 'Yellow';
        alert(error);
        return false;
    }
    return true;
}

/* ======================fax number validation=======================================*/


function validateFax(id) {
    var error = "";
   // var stripped = id.value.replace(/[\(\)\.\-\ ]/);  
     var stringf = document.forms["form1"]["fax"].value; 
     
     if (/[^0-9]/.test(stringf)) {       
         id.style.background = 'Yellow';
         alert("Fax can only contain Numbers");
        return false;  
     }    
   /* else if (isNaN(parseInt(stripped))) {
        error = "The fax number contains illegal characters. Don't include dash (- or +)\n";
        id.style.background = 'Yellow';
        alert(error);
        return false;
    }*/else if (!(10 <= stripped.length && stripped.length <= 12)) {
        error = "The fax number is the wrong length. Make sure you included an area code. Don't include dash (-)\n";
        id.style.background = 'Yellow';
        alert(error);
        return false;
    }
    return true;
}


/*.......................validate helth ............... */
 String.prototype.trim = function() {
      return this.replace(/^\s+|\s+$/g,"");
    }

/*function helth() {
      
    var myText = document.getElementById("helth").value;
  /* 
   if(myText.length<1)
   {
        window.alert("This field cant be left empty");
        return false;
   }
   else
   {
        return true;
   }*/
/*
 String.prototype.trim = function() {
      return this.replace(/^\s+|\s+$/g,"");
    }
    
    function helth() {
      if(document.getElementById("helth").value.trim() == ''){
        alert("1111111111");
        return false ;
          document.getElementById("helth").style.display ="2";
      }else{
        return true ;
      }
    }
*/
function helth() {
var mystring = document.getElementById('helth').value; 
    if(!mystring.match(/\S/)) {
        alert ('Empty value is not allowed');
        return false;
    } else {
        alert("correct input");
        return true;

    }
}
function helth() {
if(document.getElementById("helth").value == "")
{
    alert("debug");
    document.getElementById("helth").style.display ="none";
    return false;
}
return true
}






/*.........................validate descipline.....................*/
function discipline(){
if( (  (!document.getElementById("discipling_0").checked) && (!document.getElementById("discipling_1").checked)  ) ) {
       alert("Please read Discipline ..!");
  return false;
  
   }else{
      // alert("Please select Whethere Registered or Not..!");
    return true;
}
}





