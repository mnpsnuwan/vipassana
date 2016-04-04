<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Instructor List</title> 
<script type="text/javascript" src="jquery-1.11.3.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script src="jquery.PrintArea.js" type="text/JavaScript" language="javascript"></script>

    
    
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

    
    
<div  id = "table">
<table  id = "table1" width="1356" height="261" border="1">
    
    
    <!-- ............................................save image.........................................................-->
    
  <tr>
  
  <?php
	echo '<a href="../admin/index.php"><h3><b>Back to Home<<<</b></h3></a>';
    ?>
  
    <td height="18" colspan="7"><span class="TopicFontSize">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Registered Teachers&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;  <img id = "save_image" src="../images/Save-icon.png" width="72" height="66" alt="save2" longdesc="../reports participation/Save-icon.png" /></span></td>
  </tr>
    
       
  <tr>
    <td width="69" height="27">&nbsp;&nbsp; &nbsp;<span class="DetailsLable"> NO</span></td>
    <td width="146"><span class="DetailsLable"> Register Number</span></td>
    <td width="113"><span class="DetailsLable">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; NIC</span></td>
    <td width="448">&nbsp;&nbsp; &nbsp; <span class="DetailsLable">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Address&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></td>
    <td width="65"><span class="DetailsLable">  Gender</span></td>
    <td width="264"><span class="DetailsLable">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Name</span></td>
    <td width="231" height="27"><span class="Topic2">&nbsp;&nbsp;&nbsp;<span class="DetailsLable">Phone number</span></span></td>
  </tr>
<!-------------------------------//////////////////////////////////////////////////////------------------------------>
 
  <?php
	        include "database.php"; 
                $database = new MySQLDatabase();
                 
                $qre = "select * from confermedapplication where personType = 'teacher'" ;
                $h = $database->query($qre);
                
                $count = 1;
           
                while ($tr = mysqli_fetch_array($h)) {
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
                    </tr>
                    <?php 
                    $count =  $count + $j; 
                }
                ?>




</table>
</div>  
    
    
<script src="http://code.jquery.com/jquery-1.10.2.min.js" > </script>
    <script src="js/global.js"> </script>  
    
    
    <script  src="jquery-printme.js"></script>
<script  src="jquery.min.js"></script>
<script type="text/javascript" src="jquery-1.11.3.js"></script>



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

 