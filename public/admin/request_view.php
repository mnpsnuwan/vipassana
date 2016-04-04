<?php
	require_once("../../includes/initialize.php");
	if(!$session->is_logged_in()){redirect_to("login.php");}
	if (!isset($_SESSION['value'])) {
		$value = $_GET['value'];
		$_SESSION['value']=$value;
	} else {
		$value=$_SESSION['value'];
	}
	$donar = new Donation();
	$result = $donar->find_by_donor_by_id($value);
	$objcet = new Donationitem();
	$donation_details = $objcet->find_by_donor($value);
	//$latest_do = $donation_details[sizeof($donation_details)-1];
	$objcetii = new Necessity();
	$necessity_array = $objcetii->find_by_one($donation_details->necessity_id);
	$gate=0;
	if (isset($_POST['accept'])) {
		$objcet->update_state(0,$value);
		$gate=1;
	}
	if (isset($_POST['comfirm'])) {
		unset($_SESSION['value']);
		redirect_to("donation_notification.php");
	}
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
						<a href="donar_list.php" class="list-group-item">Donation List</a>
						<a href="donar_details.php" class="list-group-item">Donar Details</a>
						<a href="request_view.php" class="list-group-item  active">Request View</a>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-8 col-lg-8 panel panel-default">  <!-- content panel -->
			<div class="panel-body">
				<h3>Donation</h3><hr>
				<div class="row">
					<div class="col-md-12 col-lg-12">
						<div class="well well-sm">Donar Details</div>
						<div class="panel panel-default">
							<div class="panel-body">
								<dl class="dl-horizontal">
									<dt>Name :</dt>
									<dd><?php echo $result->Name; ?></dd>
									<dt>Address:</dt>
									<dd><?php echo $result->Address; ?></dd>
									<dt>Country :</dt>
									<dd><?php echo $result->Country; ?></dd>
									<dt>Phone :</dt>
									<dd>0<?php echo $result->Phone_no; ?></dd>
									<dt>Email :</dt>
									<dd><?php echo $result->Email; ?></dd>
									<hr>
									<dt>Donation Note :</dt>
									<dd><?php echo $donation_details->description; ?></dd>
								</dl>
							</div>
						</div>
						<div class="well well-sm">Donation Details</div>
						<div class="panel panel-default">
							<div class="panel-body">
								<div class="row">
									<div class="col-md-5 col-lg-5">
										<dl>
											<dt>Donation Request</dt>
											<dd> <?php echo $necessity_array->quantity; ?> of <?php echo $necessity_array->necessity; ?> for <?php echo $necessity_array->description; ?></dd>
											<dt>Donar Reply</dt>
											<dd><?php echo $donation_details->amount; ?> of <?php echo $donation_details->items; ?></dd>
										</dl>
									</div>
									<div class="col-md-6 col-lg-6">
										<?php if($gate==1) {?>
										<div class="panel panel-danger">
											<div class="panel-body">
												<form action="request_view.php" method="post">
													<label>Comfirmation successful &nbsp;.</label>
													<input class="btn btn-primary" type="submit" name="comfirm" value="OK">
												</form>
											</div>
										</div>
										<?php } ?>
									</div>
								</div>
							</div>
						</div>
						<div class="panel panel-primary">
							<div class="panel-heading">Previous Donation</div>
							<div class="panel-body">
								<dl class="dl-horizontal">
									<?php if (sizeof($donation_details)==1) { ?>
										<div><p class="text-center">Previous Donation is not found.</p></div>
									<?php }else{
										 foreach ($donation_details as $key => $value) {
										 	if ($key>0) { ?>
										<dt><?php echo $necessity_array->submited_date; ?></dt>
										<dd><?php //echo $value->items."    ".$value->amount; ?>(quntity/kg)</dd>
									<?php } } } ?>
								</dl>
							</div>
						</div>
						<div class="col-md-8 col-md-offset-3 col-lg-8 col-lg-offset-3">
							<form action="request_view.php" method="post">
								<input class="btn btn-primary btn-sm" type="submit" name="accept" value="Accept">
								<input class="btn btn-primary btn-sm" value="Send Email">
								<input class="btn btn-danger btn-sm" value="Reject">
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
<?php if(isset($database)){$database->close_connection();} ?>