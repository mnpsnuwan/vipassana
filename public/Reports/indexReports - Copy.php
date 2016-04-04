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

	<script type="text/javascript" src="../javaScripts/jquery-1.9.1.min.js"></script>
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
                            
                            
                            
				<div class="panel-body">
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
            
            
 <!-- ================================================================================================================== -->            
            
            
		<div class="col-md-8 col-lg-8 panel panel-default">  <!-- content panel -->
			<div class="panel-body">
				<h3>Home</h3><hr>
				<div class="row">
					<div class="col-md-12 col-lg-12">
						<div class="well well-sm"><h4>Panel Shortcuts</h4></div>
						<div class="col-md-3 col-lg-3"><a href="#"><img src="../images/course.jpg" alt="ps1" style="height: 180px; width: 180px;"></a>
							<h3><span class="label label-primary">Course</span></h3>
						</div>
						<div class="col-md-3 col-lg-3"><a href="#"><img src="../images/registation.jpg" alt="ps2" style="height: 180px; width: 180px;"></a>
							<button class="btn btn-primary" type="button">Registration<span class="badge">4</span></button>
						</div>
						<div class="col-md-3 col-lg-3"><a href="donation_notification.php"><img src="../images/donation.png" alt="ps3" style="height: 180px; width: 180px;"></a>
							<button class="btn btn-primary" type="button">Donation<span class="badge">8</span></button>
						</div>
						<div class="col-md-3 col-lg-3"><a href="#"><img src="../images/inquery.jpg" alt="ps4" style="height: 180px; width: 180px;"></a>
							<button class="btn btn-primary" type="button">User Inquery<span class="badge">2</span></button>
						</div>
					</div>
				</div>
			</div>
		</div>
            
            
            
            
	</div>
</body>
</html>
<?php if(isset($database)){$database->close_connection();} ?>