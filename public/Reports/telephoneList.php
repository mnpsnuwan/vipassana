<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<a href="dataFromDB.php"></a>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Telephone List</title>
<script type="text/javascript" src="jquery-1.11.3.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script src="jquery.PrintArea.js" type="text/JavaScript" language="javascript"></script>


<script type="text/javascript">
    // php file akata(load city) ajax call aka yanne methanin........


    $(document).ready(function(){           
    $('#search_btn_last').click(function (){    
            // cal_img_5   ,  calendar_5 click
		 							
            var postdataD = $('#element_5_2').val(); 
            var postdataM = $('#element_5_1').val();
            var postdataY = $('#element_5_3').val();
         
         // validate input date...
            if (postdataD === '' | postdataM === '' | postdataY === '')
                {
                    window.alert("Please Enter the date...! ( You can select the Date using calender button...!)");
                }
               else
               {

                    $('#jaximage').fadeIn("slow");
                    $('#loadcity').css("display", "none");

                    //data:{udataD:postdataD , udataM:postdataM , udataY:postdataY},
                    // me thula athi names(RegNo,RegNo...) siyall data base thula atha, html table samaga sambandayak natha	
                   $.ajax({
                    
                type: 'post',
                url: 'getData.php',
               // jsonpCallback: 'jsonCallback',
                dataType: 'json',
             //   jsonp: false,     
             
                        data:{udataD:postdataD, udataM:postdataM, udataY:postdataY },
						
                        success: function (response) {
                            
                        alert(response);
                        
                     //  $('#jaximage').css("display", "none");
                                         
                        var trHTML = '';
                   //     for(var i =1; i < response.length+1;i++){ 
                  // var j =1;
                  
                  
			//$.each(response, function (j, item){
                       $.each(response, function (j,item){
             if(item.gender == "Male") {                                       
           // trHTML += '<tr><td>' + (j+1) + '</td><td>' + item.RegNo + '</td><td>'+ item.nic2 + '</td><td>' + item.address1 + " " + "  " + item.address2 +'</td><td>'+ item.gender + '</td><td>' + item.fname + " " + "  " + item.lname + '</td><td>' + item.phone + '</td></tr>' ; 
            trHTML += '<tr><td>' + item.RegNo + '</td><td>'+ item.nic2 + '</td><td>' + item.address1 + " " + "  " + item.address2 +'</td><td>'+ item.gender + '</td><td>' + item.fname + " " + "  " + item.lname + '</td><td>' + item.phone + '</td></tr>' ; 
} });                                                      
				$('#records_table').append(trHTML);  
                                
                                 var trHTML2 = '';
			//$.each(response, function (j, item){
                        $.each(response, function (j, item){
             if(item.gender == "Female") {                                       
          //  trHTML2 += '<tr><td>' + (j+1) + '</td><td>' + item.RegNo + '</td><td>'+ item.nic2 + '</td><td>' + item.address1 + " " + "  " + item.address2 +'</td><td>'+ item.gender + '</td><td>' + item.fname + " " + "  " + item.lname + '</td><td>' + item.phone + '</td></tr>' ; 
             trHTML2 += '<tr><td>' + item.RegNo + '</td><td>'+ item.nic2 + '</td><td>' + item.address1 + " " + "  " + item.address2 +'</td><td>'+ item.gender + '</td><td>' + item.fname + " " + "  " + item.lname + '</td><td>' + item.phone + '</td></tr>' ; 
} });                                                      
				$('#records_table2').append(trHTML2);                                

        
        



                                // json objct convert to strinh and it;s first element...
                                var jsonStr = JSON.stringify(response[0]['courseType']);
                                $('#courseType').html(jsonStr);

                                /*     for(var i = 0; i < response.length; i++) {
                                 var k = response[i]['courseType'];    
                                 }
                                 $('#courseType').html(k[2]);*/


                       //     }

                      //     else {
                      //          alert("not coursr data found");
                      //      }





                        }

                    });
                }
            });


        });

</script>



<style type="text/css">
.TopicFontSize {
	font-size: 36px;
	font-weight: bold;
	color: #090;
}
.DetailsLable {
	font-weight: bold;
	color: #009;
}
.buttons {
	font-size: 21px;
	color: #063;
}
.Topic2 {
	font-weight: bold;
	color: #096;
	font-size: 20px;
}
#records_table tr td p strong {
	color: #00FF80;
}
#records_table tr td p strong {
	color: #52C045;
}
#courseType {
	color: #0066CC;
	font-size: 22px;
	text-align: center;
	letter-spacing: normal;
	word-spacing: normal;
	white-space: normal;
	width: 6cm;
	height: 18px;
	clear: none;
	float: none;
	vertical-align: 20%;
	right: 7cm;
	left: 0cm;
	top: 20cm;
	bottom: auto;
	padding: 0px;
	margin: 2px;
	border-right-style: none;
	border-top-style: none;
	border-bottom-style: none;
	border-left-style: none;
	clip: rect(auto,30cm,auto,auto);
	padding-left: 0cm;
	nav-right: 10;
	padding-right: 0cm;
	font-weight: bolder;
	background-color: #FFF;
}
#lableCourse {
	color: #00FFCC;
}
#lableCouse2 {
	color: #00FF40;
	font-size: 20px;
}
#lableCouse2 {
	color: #00FF40;
}
#records_table tr td p .Topic2 #lableCouse2 strong {
	color: #00FF40;
}
.colorx {
	color: #33FF66;
	font-size: 21px;
}
colorx2 {
	color: #00FF80;
}
#records_table tr td p .colorx strong {
	color: #00FF80;
}
aaaaaa {
	color: #33FF66;
}
qqqq {
	color: #33FF66;
}
p {
	color: #FF8080;
}
em {
	color: #A40000;
}
#linkk {
	color: #800000;
	font-size: 20px;
	text-decoration: underline;
}
</style>

  <link rel = "stylesheet" type = "text/css" href = "./test date/view.css"></link>
        <script type="text/javascript" src="./test date/view.js"></script>
        <script type="text/javascript" src="./test date/calendar.js"></script>

        <link href="../SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
        <link href="../SpryAssets/SpryValidationTextarea.css" rel="stylesheet" type="text/css" />
        <link href="../SpryAssets/SpryValidationCheckbox.css" rel="stylesheet" type="text/css" />

       
</head>

<body>
<table id="records_table" width="1346" height="171" border="1">
    
    
  <tr>
   <?php
	echo '<a href="../admin/index.php"><h3><b>Back to Home<<<</b></h3></a>';
    ?>
    <td height="18" colspan="7">&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="TopicFontSize">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; Telephone List</span></td>
  </tr>
    
    
    
  <tr>
    <td height="60" colspan="7"><p><span class="colorx"><strong>Course Date  :&nbsp; </strong></span><strong>&nbsp; &nbsp; &nbsp; &nbsp; </strong><span>
        <input id="element_5_2" name="date2" class="element text" size="2" maxlength="2" value="" type="text" />
        /
        <label for="element_5_2">DD</label>
        </span> <span>
        <input id="element_5_1" name="month2" class="element text" size="2" maxlength="2" value="" type="text" />
        /
        <label for="element_5_1">MM</label>
        </span> <span>
        <input id="element_5_3" name="year2" class="element text" size="4" maxlength="4" value="" type="text" />
        <label for="element_5_3">YYYY</label>
        &nbsp; 
          &nbsp;&nbsp;&nbsp;</span><span id="calendar_5"><img src="../images/calendar.png" alt="Pick a date." width="48" height="46" class="datepicker" id="cal_img_5" /></span>
        <script type="text/javascript">
                                            Calendar.setup({
                                                inputField: "element_5_3",
                                                baseField: "element_5",
                                                displayArea: "calendar_5",
                                                button: "cal_img_5",
                                                ifFormat: "%B %e, %Y",
                                                onSelect: selectDate
                                            });
                                        </script>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img  id="search_btn_last" src="../images/search-btn.png" width="190" height="40" alt="search" longdesc="search-btn.png" />&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp;<img id = "save_image"src="../images/Save-icon.png" width="69" height="64" alt="save2" longdesc="../reports participation/Save-icon.png" /></p>
      <p><em id="linkk">View&nbsp;Course List&nbsp;</em></p></td>
  </tr>
  <tr>
    <td height="24" colspan="2"><span class="colorx"><strong>Course Duration :</strong></span><span class="Topic2"><strong>&nbsp;</strong></span></td>
    <td height="24" colspan="2"><div id="courseType" right="70px"></div></td>
  </tr>

    
   
  <tr>
   <!-- <th width="70" height="27">&nbsp;</th>-->
    <th width="195"><span class="DetailsLable">Registration_Number</span></th>
    <th width="150"><span class="DetailsLable">NIC</span></th>
    <th width="348"><span class="DetailsLable">Address</span></th>   
    <th width="57"><span class="DetailsLable"> Gender</span><span class="DetailsLable"></span></th>
    <th width="343"><span class="DetailsLable"> Name</span></th>
    <th width="213" height="27"><span class="Topic2">Phone Number</span></th>                  
  </tr>
    

  <!-------------------------------//////////////////////////////////////////////////////------------------------------>
  
     <!--     
      <td id="records_table" width="276" height="12"><label>
      &nbsp;   
      <input type="radio" name="Particpating" value="Yes" id="Particpating_0" />
      &nbsp; 
      <span class="DetailsLable">Yes&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; 
      <input type="radio" name="Particpating" value="No" id="Particpating_1" />
&nbsp; No</span></label></td> -->     					
                                                              
</table>
    
    
    <p>&nbsp;</p>
    <table id="records_table2" width="1343" height="33" border="1">
      
  <tr>
    <!--<th width="70" height="27">&nbsp;</th>  -->
    <th width="195"><span class="DetailsLable"> Registration_Number</span></th>
    <th width="150"><span class="DetailsLable">NIC</span></th>
    <th width="348"><span class="DetailsLable">Address</span></th>    
    <th width="57"><span class="DetailsLable">Gender</span><span class="DetailsLable"></span></th>
    <th width="343"><span class="DetailsLable"> Name</span></th>
    <th width="210" height="27"><span class="Topic2">Phone Number</span></th>                  
  </tr>
    
    					                              
</table>
    
<script>
 
$(document).ready(function() {  
$('#save_image').click(function() {  
window.print();  
return false;  
});  
});   
</script>
    
      
</body>
</html>

 