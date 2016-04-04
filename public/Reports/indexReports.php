<?php

?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../stylesheet/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../stylesheet/main.css">
	<link rel="stylesheet" type="text/css" href="../stylesheet/mycssfile.css">
	<link rel="shortcut icon"  type="png/ico" href="../images/ICO/Capture.ico"/>

	<script src="jquery.PrintArea.js" type="text/JavaScript" language="javascript"></script>
        <script type="text/javascript" src="jquery-1.11.3.js"></script>
	<script type="text/javascript" src="../javaScripts/bootstrap.min.js"></script>
	<script type="text/javascript">
	$('.dropdown-toggle').dropdown()
	</script>
	<title>Vipassana Administrater</title>
</head>


<body>
	<div class="page-header">
		<h3>Vipassana Administrator  <small>Sri Lanka</small></h3>
	</div>
	<div>  <!-- navigation bar -->
		&nbsp;&nbsp;  
		<input type="submit" name="print" id="print" value="Submit" />
<ul class="nav nav-tabs">
    <li role="presentation" class="active"><a href="#">Home</a></li>
			<li role="presentation" class="dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown" type="button" aria-haspopup="true" aria-expanded="true">
					Registration <span class="caret"></span>
				</a>
				<ul class="dropdown-menu">
					<li><a href="#">New Students</a></li>
					<li><a href="#">Old Students</a></li>
					<li><a href="#">Children/Teen</a></li>
					<li><a href="#">Instructores</a></li>					
				</ul>
			</li>
                        
                        
			<li role="presentation" class="dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown" type="button" aria-haspopup="true" aria-expanded="true">
					Course <span class="caret"></span>
				</a>
				<ul class="dropdown-menu">
					<li><a href="#">1....</a></li>
					<li><a href="#">2...</a></li>
					<li><a href="#">3....</a></li>
				</ul>
			</li>
                        
                        
			<li role="presentation" class="dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown" type="button" aria-haspopup="true" aria-expanded="true">
					Report <span class="caret"></span>
				</a>
				<ul class="dropdown-menu">
					<li><a href="#">Course Participation</a></li>
					<li><a href="#">Telephone List</a></li>
					<li><a href="#">Registered Teachers</a></li>
				</ul>
			</li>
                        
                        
			<li role="presentation"><a href="donation_notification.php">Donation</a></li>
			<li role="presentation"><a href="#">Finace</a></li>
			<li role="presentation"><a href="#">Setting</a></li>
		</ul>
	</div>
    
    
	<div class="row">
            
     <!--===========================================================================-->       
           <div id="content"> 
               
               
		<div class="col-md-4 col-lg-4 panel panel-default">  <!-- side panel -->
			<div class="panel-body">
                            
				<div class="row">
                                    
					<div class="col-md-6 col-lg-6">
						<img src="../images/admin.jpg" alt="admin_pic" class="img-thumbnail">
					</div>
                                    
					<div class="col-md-4 col-lg-4">
						<p><h4>Administrator</h4><hr>
							<a href="view_profile.php" class="btn btn-default" role="button">Setting</a> <hr>
							<div>
								<form action="logout.php" method="post">
								<input class="btn btn-default" type="submit" value="Log Out" name="log_out">
								</form>
							</div>
						</p>
					</div>
				</div>
                            
                            
                            
				<div class="panel-body1">
					<hr>
					<h4>Information</h4>
					<p>This is information about current loged admin</p>
					<div class="list-group">
						<a href="#" class="list-group-item active">Admin loging Details</a>
						<a href="#" class="list-group-item">1</a>
						<a href="#" class="list-group-item">2</a>
						<a href="#" class="list-group-item">3</a>
					</div>
				</div>
                            
                            
                            
                            
			</div>
		</div>
        </div>
     
     <a href="#" class="print" rel="content">Print</a> 
     
		<form id="form1" name="form1" method="post" action="">
</form>

 <!-- ================================================================================================================== -->            
            
            
		<div class="col-md-8 col-lg-8 panel panel-default">
		  <div class="panel-body">
		   
        <?php   include_once "reportParticipation.php";  ?>
		   
		  </div>
                 </div>
            
            
            
            
	</div>
 <!--   
<script>
 
$(document).ready(function() {  
$('#save_image').click(function() {  
window.print();  
return false;  
});  
});   
</script>
-->
<!--
<script>
    $("div#xx").click(function(){
    $("div.col-md-4").printArea( [OPTIONS] );
});

mode:"iframe","popup"  //printable window is either iframe or browser popup
popHt: 500   // popup window height
popWd: 400  // popup window width
popX: 500   // popup window screen X position
popY: 600  //popup window screen Y position
popTitle: // popup window title element
popClose: false,true  // popup window close after printing
strict: undefined,true,false // strict or looseTransitional html 4.01 document standard or undefined to not include at all only for popup option
</script>
-->

<script>
    $(function(){
        $('.print').click(function(){
            var container = $(this).attr('rel');
            $('#' + container).printArea();
            return false;
        });
    });
    
    
</script>
   

</body>
</html>
<?php if(isset($database)){$database->close_connection();} ?>