<?php
require_once("../../includes/initialize.php");
if(!$session->is_logged_in()){redirect_to("login.php");}
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
			<li role="presentation"><a href="index.php">Home</a></li>
			<li role="presentation" class="dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown" type="button" aria-haspopup="true" aria-expanded="true">
					Registration <span class="caret"></span>
				</a>
				<ul class="dropdown-menu">
					<li><a href="#">1....</a></li>
					<li><a href="#">2...</a></li>
					<li><a href="#">3....</a></li>
					<li><a href="#">4...</a></li>
					<li><a href="#">5....</a></li>
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
					<li><a href="#">1....</a></li>
					<li><a href="#">2...</a></li>
					<li><a href="#">3....</a></li>
				</ul>
			</li>
			<li role="presentation" class="active"><a href="donation_notification.php">Donation</a></li>
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
						<a href="donation_notification.php" class="list-group-item">Donation Notification</a>
						<a href="donar_list.php" class="list-group-item active">Donation List</a>
						<a href="donar_details.php" class="list-group-item">Donar Details</a>
						<a href="request_view.php" class="list-group-item">Request View</a>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-8 col-lg-8 panel panel-default">  <!-- content panel -->
			<div class="panel-body">
				<h3>Donation</h3><hr>
				<div class="row">
					<div class="col-md-12 col-lg-12">
						<div class="well well-sm">Registered donar List</div>
						<div class="row">
							<div class="col-md-6 col-lg-6">
								<div class="input-group">
									<input type="text" class="form-control" placeholder="give time range">
									<span class="input-group-btn">
										<button class="btn btn-default" type="button">Search</button>
									</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="well well-sm"><b>Recent Donar List</b></div>
		<div class="col-md-8 col-lg-8 panel panel-default">
			<div class="panel-body">
				<ul class="list-group">
					<li class="list-group-item">
						<div class="row">
							<div class="col-md-6 col-lg-6">Donar 1</div>
							<div class="col-md-6 col-lg-6">
								<input class="btn btn-primary btn-sm" value="view">
								<input class="btn btn-primary btn-sm" value="Remove">
							</div>
						</div>
					</li>
					<li class="list-group-item">donar 2</li>
				</ul>
			</div>
		</div>
	</div>
</body>
</html>