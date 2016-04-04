<?php

 session_start();
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<a href="dataFromDB.php"></a>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script type="text/javascript" src="jquery-1.11.3.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>


<script type="text/javascript">
    // php file akata(load city) ajax call aka yanne methanin........
/*

    $(document).ready(function(){           
    $('#search_btn_last').click(function (){    
            // cal_img_5   ,  calendar_5 click
		 							
            var postdataD = $('#element_5_2').val(); 
            var postdataM = $('#element_5_1').val();
            var postdataY = $('#element_5_3').val();
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
			$.each(response, function (j, item){
                                                     
			 trHTML += '<tr><td>' + (j+1) + '</td><td>' + item.RegNo + '</td><td>' + item.nic2 + '</td><td>' + item.fname + " " + " " + item.lname + '</td><td>' ; // + item.#records_table + '</td></tr>'
                       });                                                      
				$('#records_table').append(trHTML);                                
	}				              						                                   			
        });
    }); 					
});
*/
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
</style>

  <link rel = "stylesheet" type = "text/css" href = "./test date/view.css"></link>
        <script type="text/javascript" src="./test date/view.js"></script>
        <script type="text/javascript" src="./test date/calendar.js"></script>

        <link href="../SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
        <link href="../SpryAssets/SpryValidationTextarea.css" rel="stylesheet" type="text/css" />
        <link href="../SpryAssets/SpryValidationCheckbox.css" rel="stylesheet" type="text/css" />

       
</head>

<body>
    
 <form action="latTry - Copy.php" method="POST">
     
     
<table id="records_table" width="1347" height="243" border="1">
    
    
  <tr>
    <td height="52" colspan="9">&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="TopicFontSize">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; Course Attendance</span></td>
  </tr>
  <tr>
    <td height="58" colspan="9"><strong> Course Date  :&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </strong><span>
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
          &nbsp;&nbsp;&nbsp;</span><span id="calendar_5"><img src="./test date/calendar.png" alt="Pick a date." width="48" height="46" class="datepicker" id="cal_img_5" /></span>
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
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
      <input name="button" type="submit" class="buttons" id="button" value="Search" />      &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;</td>
  </tr>
    
    
    
  <tr>
    <th width="51" height="32">&nbsp;&nbsp;</th>
    <th width="190"><span class="DetailsLable">&nbsp; Registration_Num</span></th>
    <th width="245"><span class="DetailsLable">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nic&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;</span></th>
    <th width="90"><span class="DetailsLable">Gender</span></th>
    <th width="264"><span class="DetailsLable">Name</span></th>
    <th width="128"><span class="DetailsLable">Phone</span></th>
    <th width="255"><span class="DetailsLable">Address</span></th>
    <th width="252" height="32"><span class="Topic2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Participating</span>
      <!--   
      <td id="records_table" width="276" height="12"><label>
      &nbsp;   
      <input type="radio" name="Particpating" value="Yes" id="Particpating_0" />
      &nbsp; 
      <span class="DetailsLable">Yes&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; 
      <input type="radio" name="Particpating" value="No" id="Particpating_1" />
&nbsp; No</span></label></td>
    
    -->
    </th>
    <th width="69">&nbsp;&nbsp;</th>
  </tr>
    
    
  
<!-------------------------------//////////////////////////////////////////////////////------------------------------>
        					                                                          
  <?php
  
 
                include_once "allQuery.php";               
	        include_once "database.php";
                
                $allQuery = new Querys();
                $database = new MySQLDatabase();
 
                if (isset($_POST['button'])) {
                    
     $_SESSION['$date2'] = trim($_POST['date2']);
     $_SESSION['$month2'] = trim($_POST['month2']);
     $_SESSION['$year2'] = trim($_POST['year2']);
     
     $date1 = $_SESSION['$date2'] ;
     $month1 = $_SESSION['$month2'] ;
     $year1 = $_SESSION['$year2']  ;
     
               
                $qre = "SELECT * FROM confermedapplication WHERE date1 = '$date1'  AND   month1 ='$month1' AND   year1 ='$year1'";
                $h = $database->query($qre);
                
                $count = 1;
                
              //  $_SESSION['Yes'] = "Yes" ;
              //  $_SESSION['No'] = "No" ;
           
                $ary = array();
                
                while ($tr = mysqli_fetch_array($h)) {
                    
                    echo "\n datee" + $date1;
                    
                    $j = 1 ; 
                                 
    ?>
                    <tr>                          
                        <td height="27"><?php echo $count  ?></td>
                        <td><?php echo $tr[0]; ?></td>  
                        <td><?php echo $tr[13]; ?></td> 
                        <td><?php echo $tr[15] . "  " . $tr[16];  ?></td>
                        <td><?php echo $tr[12]; ?></td>
                        <td><?php echo  $tr[7] . "  " . $tr[8]; ?></td>
                        <td><?php echo $tr[18]; ?></td>                        
                        <td>&nbsp;
                            <input type="submit" name="Yes"  value="Yes"    />
                             &nbsp; &nbsp; <input type="submit" name="No"   value="No"   />
                        </td>                                               
                        <td><?php echo $tr[1]; ?></td>
                    </tr>

 <?php                                             
            
                    $ary = $tr[0];
                    echo $ary;

//    $_SESSION['RegNo'] = $tr[0];
           //     $_SESSION['RegNo']++ ;                
                    $count =  $count + $j;                                                    
  ?>
<?php              
                    $x =  $_SESSION['RegNo'] ;
                /*                                                               
                    if (isset($_POST['Yes'])) {
                    $yesQuery = "UPDATE confermedapplication SET participating1 = 'Yes'  WHERE RegNo = '$tr[0]'";
                    $database->query($yesQuery);
                    echo "yeeeees";
                    //echo $x;
                }
                if (isset($_POST['No'])) {
                    $yesQuery = "UPDATE confermedapplication SET participating1 = 'No'  WHERE RegNo = '$tr[0]'";
                    $database->query($yesQuery);
                    echo "Nooo" ;
                }*/
                }}                   
            ?>


     
<tr>
    <td height="13" colspan="9">&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;</td>
  </tr>



</table>
 </form>
</body>
</html>

<?php
/*
include_once "database.php"; 
 $database = new MySQLDatabase();
  $database->open_connection();

if (isset($_POST['Yes'])) {
  $yesQuery =  "UPDATE confermedapplication SET participating1 = 'Yes'  WHERE RegNo = '20' " ;          
  $database->query($yesQuery) ;
  echo "aaaaa";
}

if (isset($_POST['No'])) {
  $yesQuery =  "UPDATE confermedapplication SET participating1 = 'No'  WHERE RegNo = '$tr[0]'" ;
  $database->query($yesQuery) ;   
}*/
?>