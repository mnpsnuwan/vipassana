<?php
require_once("../../includes/initialize.php");

$massage="";

if($session->is_logged_in()){
	redirect_to("index.php");
}
if(isset($_POST['submit'])){ // form has been submitted.
	$username = trim($_POST['username']);
	$password = trim($_POST['password']);

	//check database to see if username/password exist.
	$found_user = User::authenticate($username, $password);

	if($found_user){
		$session->login($found_user);
		redirect_to("index.php");
	}else{
		$massage = "Username and password combination incorrect.";
		//echo $message;
	}
}else{// form has not been submitted.
	$username = "";
	$password = "";
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>DAMMA SOBA -Vipassana Meditation</title>

	<link rel="stylesheet" type="text/css" href="../stylesheet/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../stylesheet/mycssfile.css">
	<link rel="shortcut icon" type="png/ico" href="../images/ICO/Capture.ico">
	<!--<link rel="stylesheet" href="../stylesheet/StyleSheet.css" type="text/css"/> -->
</head>
<body>
	<div class="well well-lg">
		<div class="row">
			<div class="col-md-3 col-md-offset-2 col-lg-3 col-lg-offset-2" style="font-size:70px;">
				VIPASSANA
	 		</div>
	 		<div class="col-md-1 col-md-offset-1 col-lg-1 col-lg-offset-1">
				<img style="height:85px; width:50px" src="../images/aniwheel.gif">
			</div>
			<div class="col-md-3 col-lg-3" style="font-size:70px;">
				MEDITATION
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6 col-md-offset-4 col-lg-6 col-lg-offset-4" style="min-height:50px;">
			<p style="font-color:red;"><?php echo output_massage($massage);?></p>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6 col-md-offset-3 col-lg-6 col-lg-offset-3 panel panel-info">
			<div class="row"><div class="col-md-8 col-md-offset-3 col-lg-8 col-lg-offset-3">
				<h3><strong>Admimistrator Login</strong></h3>
			</div>
			<div>
				<form class="form-horizontal" action="login.php" method="post">
					<div class="form-group">
						<label class="col-md-2 control-label">User Name*</label>
						<div class="col-md-7">
							<input type="text" class="form-control" placeholder="userName" name="username" required>
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-2 control-label">Password*</label>
						<div class="col-md-7">
							<input type="password" class="form-control" placeholder="password" name="password" required>
						</div>
					</div>
					<div class="row">
						<div class="col-md-5 col-md-offset-1 col-lg-5 col-lg-offset-1"><small>* required</small></div>
						<div class="col-md-4 col-md-offset-6 col-lg-4 col-lg-offset-6">
							<input type="submit" class="btn btn-primary " value="Login" name="submit">
							<input type="reset" class="btn btn-primary " value="Cancle">
						</div>
					</div>
				</form>
			</div>
			<div class="row">
				<div class="col-md-4 col-md-offset-4 col-lg-4 col-lg-offset-4">
					<a href="signup.php" class="btn btn-success btn-lg" role="button">Sign up</a>
				</div>
			</div>
			<div style="min-height:30px;"></div>
		</div>
		</div>
	</div>
	<div style="min-height:55px;"></div>
	<div class="well well-lg"><p class="text-center"><small>UCSC learing project (A/Y-2012/2013)</small></p></div>
</body>
</html>
<?php if(isset($database)){$database->close_connection();} ?>