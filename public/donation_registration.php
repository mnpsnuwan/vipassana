<?php
	require_once('../includes/initialize.php');
	$email = $_SESSION['email'];
	$message="";
	if(isset($_POST['submit'])){
		if (isset($_POST['policy'])) {
			$donor_name = trim($_POST['name']);
			$donor_email = trim($_POST['email']);
			$donor_address = trim($_POST['address']);
			$donor_country = trim($_POST['country']);
			$donor_city = trim($_POST['city']);
			$donor_zipcode= trim($_POST['zipcode']);
			$donor_phone= trim($_POST['phone_no']);

			$new_donor = new Donation();
			global $database;

			if(isset($_POST['name'])){$new_donor->Name=$database->escape_string($donor_name);}
			if(isset($_POST['email'])){$new_donor->Email=$database->escape_string($donor_email);}
			if(isset($_POST['address'])){$new_donor->Address=$database->escape_string($donor_address);}
			if(isset($_POST['country'])){$new_donor->Country=$database->escape_string($donor_country);}
			if(isset($_POST['city'])){$new_donor->City=$database->escape_string($donor_city);}
			if(isset($_POST['zipcode'])){$new_donor->Zipcode=$database->escape_string($donor_zipcode);}
			if(isset($_POST['phone_no'])){$new_donor->Phone_no=$database->escape_string($donor_phone);}
			Donation::insert_data($new_donor);
			redirect_to('donation_necesity.php');
		}else{
			$message="If you like to donate you have to agree Vipassana centre policy";
			$donor_name = trim($_POST['name']);
			$donor_email = trim($_POST['email']);
			$donor_address = trim($_POST['address']);
			$donor_country = trim($_POST['country']);
			$donor_city = trim($_POST['city']);
			$donor_zipcode= trim($_POST['zipcode']);
			$donor_phone= trim($_POST['phone_no']);
		}	
	}else{
		$donor_name="";
		$donor_email=$email;
		$donor_address="";
		$donor_country="";
		$donor_city="";
		$donor_zipcode="";
		$donor_phone="";
	}	
?>
<!DOCTYPE html>
<html>
<head>
	<title>vipassana-donation</title>
	<link rel="stylesheet" type="text/css" href="./stylesheet/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="./stylesheet/main.css">
	<link rel="shortcut icon" href="./images/bleaf.gif" type="image/x-icon">

	<script type="text/javascript" src="./javaScripts/jquery-1.9.1.min.js"></script>
	<script type="text/javascript" src="./javaScripts/myjavascript.js"></script>
	<script type="text/javascript">
		
	</script>
</head>
<body>
	<div>
		<header id="header"><?php include_layout_template('public_header.php');?></header>
		<div class="col-md-12 col-lg-12"><?php include_layout_template('public_horiz_nav.php');?></div>
		<div class="row">
		<nav class="col-md-3 col-lg-3">
			<?php include_layout_template('public_nav.php');?>
		</nav>
		<article class="col-md-8 col-lg-8">
		<div class="containerii">
			<div class="row">
				<div class="col-md-12 col-lg-12"><div class="well well-sm">sign up for Donation</div></div>
				<div class="col-md-12 col-lg-12"><p>Now you register in our web site we can verify your identification and
					you can contribute with us for our next event.. <br>
					<strong style="font-color: #fff;"><?php echo output_massage($message);?></strong>
				</p>
				</div>
				<div class="col-md-12 col-lg-12">
					<div class="row">
						<form class="form-horizontal" action="donation_registration.php" method="post">
							<div class="col-md-5 col-md-offset-1 col-lg-5 col-lg-offset-1 panel panel-default">
								<div class="panel-body">
									<h5>Details</h5><hr>
									<div class="form-group">
										<label class="col-md-4 control-label"><small>Email*</small></label>
										<div class="col-md-8">
											<input type="email" class="form-control" required name="email" value=<?php echo htmlentities($donor_email);?>>
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-4 control-label"><small>Name*</small></label>
										<div class="col-md-8">
											<input type="text" class="form-control" name="name" id="name" required onchange="validateName();" value=<?php echo htmlentities($donor_name)?>>
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-4 control-label"><small>Phone no*</small></label>
										<div class="col-md-8">
											<input type="text" class="form-control" id="phone" name="phone_no" required onchange="validatePhone(this.id);" value=<?php echo htmlentities($donor_phone)?>>
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-4 control-label"><small>address*</small></label>
										<div class="col-md-8">
											<textarea class="form-control" type="text" rows="3" name="address" required placeholder="address"></textarea>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-5 col-lg-5 panel panel-default">
								<div class="panel-body">
									<h5>country details</h5><hr>
									<div class="form-group">
										<label class="col-md-4 control-label"><small>Country*</small></label>
										<div class="col-md-8">
											<input type="text" class="form-control" placeholder="country" name="country" required list="country" value=<?php echo htmlentities($donor_country)?>>
											<datalist id="country">
													<option value="Bangladesh">
													<option value="Belgium">
													<option value="Bezila">
													<option value="Canada">
													<option value="African">
													<option value="China">
													<option value="Denmark">
													<option value="France">
													<option value="Germany">
													<option value="Nepal">
													<option value="Sri lanka">
													<option value="India">
													<option value="America">
													<option value="Australia">
											</datalist>
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-4 control-label"><small>City*</small></label>
										<div class="col-md-8">
											<input type="text" class="form-control" placeholder="city" name="city" required value=<?php echo htmlentities($donor_city)?>>
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-4 control-label"><small>Pincode/ Zipcode*</small></label>
										<div class="col-md-8">
											<input type="text" class="form-control" placeholder="number" name="zipcode" required value=<?php echo htmlentities($donor_zipcode)?>>
										</div>
									</div>
									<div style="min-height:100px;"><span id="myhint" class="hint" style="color:red;"></span></div>
								</div>
							</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-10 col-md-offset-1 col-lg-10 col-lg-offset-1">
						<p class="text-center"><strong>Policy on accepting donation for Vipassana Centers</strong></p>
						<p>According to the tradition of pure Vipassana, courses are run solely on a donation basis. Donations are accepted only from those who have completed at least one ten-day course with S.N. Goenka or one of his assisting teachers.</p>
						<p>Donation is accepted from immediate family members of an old student whether or not the family members are old students. Dana may also be accepted from a company or business provided meditators are on the staff.</p>
					</div>
					<div class="col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2">
						<div class="checkbox">
							<label>
								<input type="checkbox" name="policy" value="on">
								<b>I agree and abide with the above Donation Policy</b>
							</label>
						</div>
					</div>
					<div class="col-md-6 col-md-offset-3 col-lg-6 col-lg-offset-3">
						<input class="btn btn-primary btn-sm" type="button" onclick="window.location.href='./donation_check_account.php';" value="Back">
						<input class="btn btn-primary btn-sm" type="submit" value="Continue" name="submit">
						<input class="btn btn-primary btn-sm" type="button" value="close" onclick="window.location.href='index.php';">
					</div>
				</div>
			</div>
			</form>
		</div>
		</article>
		</div>
		<footer id="footer"><?php include_layout_template('public_footer.php');?></footer>
	</div>
</body>
<script type="text/javascript" src="./javaScripts/validation.js"></script>
</html>
<?php if(isset($database)){$database->close_connection();} ?>