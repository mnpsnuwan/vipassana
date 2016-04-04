<?php
require_once("../../includes/initialize.php");
if($session->is_logged_in()){
$user_no= $_SESSION['user_id'];
$details=User::find_by_id($user_no);
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
			<h2>Profile Details</h2>
				<table>
					<tr>
						<td>User Name :</td>
						<td>
							<label> <?php echo $details->user_name; ?></label>
						</td>
					</tr>
					<tr>
						<td>Name :</td>
						<td>
							<label> <?php echo $details->first_name." ".$details->secound_name; ?></label>
						</td>
					</tr>
					<tr>
						<td>Birthday :</td>
						<td>
							<label> <?php echo $details->birthday;?></label>
						</td>
					</tr>
					<tr>
						<td>Gender :</td>
						<td>
							<label> <?php echo $details->gender;?></label>
						</td>
						<td><p><?php //echo output_massage($message1); ?></p></td>
					</tr>
					<tr>
						<td>NIC :</td>
						<td>
							<label> <?php echo $details->NIC; ?></label>
						</td>
					</tr>
					<tr>
						<td>E-mail :</td>
						<td>
							<label> <?php echo $details->E_mail; ?></label>
						</td>
					</tr>
					<tr>
						<td>Mobile number :</td>
						<td>
							<label> <?php echo $details->mobile; ?></label>
						</td>
					</tr>
					<tr>
						<td>Location :</td>
						<td>
							<label> <?php echo $details->location; ?></label>
						</td>
					</tr>
					<tr>
						<td colspan="3">
							<form action="">
								<input type="button" value="Back" onclick="window.location.href='index.php';"/>
								<input type="button" value="Edit" onclick="window.location.href='editprofile.php';"/>
							</form>
							<form action="<?php if(isset($_POST['log_out'])){
				$session->logout(); if(!$session->is_logged_in()){redirect_to("login.php");}
				} ?>" method="post">
					<input type="submit" value="Log Out" name="log_out">
				</form>
						</td>
					</tr>
					<tr><p><?php //echo output_massage($message);?></p></tr>
				</table>
		</div>
		<div id="footer">Copyright <?php echo date("Y",time());?>, kusal samith</div>
	</body>
	<?php }else{echo "not pass details";}?>
</html>
<?php if(isset($database)){$database->close_connection();} ?>