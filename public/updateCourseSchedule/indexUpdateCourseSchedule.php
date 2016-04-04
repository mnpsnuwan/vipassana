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
			
                    <li role="presentation" class="active"><a href="../admin/index.php">Home</a></li>
			
                        <li role="presentation" class="dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown" type="button" aria-haspopup="true" aria-expanded="true">
					Registration <span class="caret"></span>
				</a>
				<ul class="dropdown-menu">
					<li><a href="../RegisterTest2/indexRegFormNewStudent.php">New Students</a></li>
                                        <li><a href="../RegisterTest2/indexRegisterOldStudent.php">Old Students</a></li>
                                        <li><a href="../RegisterTest2/indexRegisteeTeen.php">Children/Teen</a></li>
                                        <li><a href="../RegisterTest2/indexRegFormInstroctor.php">Instructores</a></li>					
				</ul>
			</li>
                        
                        
			<li role="presentation" class="dropdown active">
				<a class="dropdown-toggle" data-toggle="dropdown" type="button" aria-haspopup="true" aria-expanded="true">
					Course <span class="caret"></span>
				</a>
				<ul class="dropdown-menu">
					<li><a href="../updateCourseSchedule/indexUpdateCourseSchedule.php" active>Update Course Schedule</a></li>
                                        <li><a href="../courses_nw/indexCoursess.php">Delete Course</a></li> 
                                        <li><a href="../CourseAttends/CourseAttends.php" class="list-group-item ">Course Attendance</a></li> 
				</ul>
			</li>
                        
                        
			<li role="presentation" class="dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown" type="button" aria-haspopup="true" aria-expanded="true">
					Report <span class="caret"></span>
				</a>
				<ul class="dropdown-menu">
					<li><a href="../Reports/reportParticipation.php">Course Participation</a></li>
					<li><a href="../Reports/telephoneList.php">Telephone List</a></li>
					<li><a href="../Reports/TeacherList.php">Registered Teachers</a></li>
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
						
					</div>
				</div>
                            
                            
                            
				<div class="panel-body">
					<hr>
					<h4>Information</h4>
					<p>This is information about current loged admin</p>
					<div class="list-group">
						
                                            <a href="../updateCourseSchedule/indexUpdateCourseSchedule.php" class="list-group-item active">Update Course Schedule</a>                             
                                            <a href="../courses_nw/indexCoursess.php" class="list-group-item ">Delete Course</a>
                                            <a href="../CourseAttends/CourseAttends.php" class="list-group-item ">Course Attendance</a>
                                            <a href="../confermRequest/indexConfermRequest.php" class="list-group-item " >Registration Request</a>
                                                
					</div>
				</div>
                                                                                                         
			</div>
		</div>
            
            
 <!-- ================================================================================================================== -->            
            
            
		<div class="col-md-8 col-lg-8 panel panel-default">  <!-- content panel -->
			<div class="panel-body"
                    <?php   include_once ('Update Course Schedule.php');  ?>
				<div class="row"></div>
			</div>
		</div>
            
            
            
            
	</div>
</body>
</html>
<?php if(isset($database)){$database->close_connection();} ?>