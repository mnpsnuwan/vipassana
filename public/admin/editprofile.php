<?php
require_once("../../includes/initialize.php");
if($session->is_logged_in()){
$user_no= $_SESSION['user_id'];
$details=User::find_by_id($user_no);
$message="";
$message1="";
$message2="";
$index_number=$details->Index_no;
if(isset($_POST['submit'])){
	$username = trim($_POST['username']);
	$password = trim($_POST['password']);
	$password1 = trim($_POST['password1']);
	$password2 = trim($_POST['password2']);
	$first_name = trim($_POST['first_name']);
	$secound_name = trim($_POST['secound_name']);
	$birthday = trim($_POST['birthday']);
	$gender = trim($_POST['gender']);
	$NIC = trim($_POST['nic']);
	$Email = trim($_POST['Email']);
	$mobile = trim($_POST['mobile']);
	$location = trim($_POST['location']);

	if(!empty($username) && !empty($password) && !empty($password1) && !empty($password2) && ($password1)==($password2)){
		$result=false;
		$name=$details->user_name;;
		if($username != $name){
			$result=User::find_by_username($username);
		if($result){$message2="An account already exists for this username. Please use a different address"; }}
		$result1=User::authenticate_p($index_number,$password);
		if(!$result && $result1){
			$input_data =array();
			global $database;
			if(isset($_POST['username'])){$input_data['username']=$database->escape_string($username);}
			if(isset($_POST['password1'])){$input_data['password']=$database->escape_string($password1);}
			if(isset($_POST['first_name'])){$input_data['first_name']=$database->escape_string($first_name);}
			if(isset($_POST['secound_name'])){$input_data['secound_name']=$database->escape_string($secound_name);}
			if(isset($_POST['birthday'])){$input_data['birthday']=$database->escape_string($birthday);}
			if(isset($_POST['gender'])){$input_data['gender']=$database->escape_string($gender);}
			if(isset($_POST['nic'])){$input_data['nic']=$database->escape_string($NIC);}
			if(isset($_POST['Email'])){$input_data['Email']=$database->escape_string($Email);}
			if(isset($_POST['mobile'])){$input_data['mobile']=$database->escape_string($mobile);}
			if(isset($_POST['location'])){$input_data['location']=$database->escape_string($location);}
			User::update_data($input_data,$index_number);
			$message="Your account has been successfully updated";
		}else{
			$message="Your current password is wrong";
		}
	}else{
		$message1="You must enter all of the sign-up data, including the desired password twice";
	}
	//if(!$session->is_logged_in()){redirect_to("login.php");}
}else{
	$username=$details->user_name;
	$password="";
	$password1="";
	$password2="";
	$first_name=$details->first_name;
	$secound_name=$details->secound_name;
	$birthday=$details->birthday;
    $gender=$details->gender;
    $NIC=$details->NIC;
    $Email=$details->E_mail;
    $mobile=$details->mobile;
    $location=$details->location;
}
?>
<html>
	<head>
		<title>Vipassana Meditation</title>
		<link rel="stylesheet" type="text/css" href="../stylesheet/main.css" media="all"/>
	</head>
	<body>
		<div id="header">
			<img src="../images/aniwheel.gif" class="image" width="70px" height="70px" alt="wheel">
		<h3>Vipassana Meditation Centre</h3>
		<h4>Sri lanka</h4>
		</div>
		<nav>
			<ul class="horiznal-navigation">
			<li id="x-axis"><a class="box" href="#">Home</a></li>
			<li id="x-axis"><a class="box" href="#">Registation</a></li>
			<li id="x-axis"><a class="box" href="#">Profile</a></li>
			<li id="x-axis"><a class="box" href="#">Services</a></li>
			<li id="x-axis"><a class="box" href="#">Setting</a></li>
			<li id="x-axis"><a class="box" href="#">About</a></li>	
			</ul>
		</nav
		<div>
			<h2> Edit Profile Details</h2>
			<p><?php echo output_massage($message); ?>
			<h4><?php echo output_massage($message2); ?></h4></p>
			<form action="editprofile.php" method="post">
				<table>
					<tr>
						<td>Username :</td>
						<td>
							<input type="text" name="username" maxlength="30" value=<?php echo htmlentities($username)?> />
						</td>
					</tr>
					<tr>
						<td>Current Password :</td>
						<td>
							<input type="password" name="password" maxlength="30" value=<?php echo htmlentities($password)?>/>
						</td>
					</tr>
					<tr>
						<td>New Password :</td>
						<td>
							<input type="password" name="password1" maxlength="30" value=<?php echo htmlentities($password1)?> />
						</td>
					</tr>
					<tr>
						<td>Confirm New Password :</td>
						<td>
							<input type="password" name="password2" maxlength="30" value=<?php echo htmlentities($password2)?> />
						</td>
						<td><p><?php  echo output_massage($message1); ?></p></td>
					</tr>
					<tr>
						<td>Name :</td>
						<td>
							<input type="text" name="first_name" value=<?php echo htmlentities($first_name)?> />
							<input type="text" name="secound_name" value=<?php echo htmlentities($secound_name)?> />
						</td>
					</tr>
					<tr>
						<td>Birthday :</td>
						<td>
							<input type="text" name="birthday" maxlength="12" value=<?php echo htmlentities($birthday)?> />
						</td>
					</tr>
					<tr>
						<td>Gender :</td>
						<td>
							<input type="text" name="gender" maxlength="12" value=<?php echo htmlentities($gender)?> />
						</td>
					</tr>
					<tr>
						<td>NIC Number :</td>
						<td>
							<input type="text" name="nic" maxlength="12" value=<?php echo htmlentities($NIC)?> />
						</td>
					</tr>
					<tr>
						<td>E-mail :</td>
						<td>
							<input type="text" name="Email" maxlength="12" value=<?php echo htmlentities($Email)?> />
						</td>
					</tr>
					<tr>
						<td>Mobile number :</td>
						<td>
							<input type="text" name="mobile" maxlength="12" value=<?php echo htmlentities($mobile)?> />
						</td>
					</tr>
					<tr>
						<td>Location :</td>
						<td>
							<input type="text" name="location" maxlength="12" value=<?php echo htmlentities($location)?> />
						</td>
					</tr>
					<tr>
						<td colspan="3">
								<input type="button" value="Back" onclick="window.location.href='index.php';"/>
								<input type="submit" name="submit" value="Submit"/>
							<form action="<?php if(isset($_POST['log_out'])){
				$session->logout(); if(!$session->is_logged_in()){redirect_to("login.php");}
				} ?>" method="post">
					<input type="submit" value="Log Out" name="log_out">
				</form>
						</td>
					</tr>
					<tr></tr>
				</table>
			</form>
		</div>
		<div id="footer">Copyright <?php echo date("Y",time());?>, kusal samith</div>
	</body>
	<?php }else{echo "not pass details";}?>
</html>
<?php if(isset($database)){$database->close_connection();} ?>