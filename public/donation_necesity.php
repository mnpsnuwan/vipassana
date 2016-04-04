<?php
	require_once('../includes/initialize.php');
  $number = $_SESSION['no'];
  $email=$_SESSION['email'];
  $necessity = new Necessity();
  $result = $necessity->find_by_one($number);
  if (isset($_POST['submit'])) {
  	if (isset($_POST['amount'])) {
	    global $database;
	    $amount=$database->escape_string(trim($_POST['amount']));
	    $message=$database->escape_string(trim($_POST['message']));
	    $donatin = new Donationitem();
	    $donatin->items=$result->necessity;
	    $donatin->amount=$amount;
	    $donatin->description=$message;
	    $donatin->state=1;
	    $donatin->necessity_id=$number;
	    $donatin->insert_data($donatin,$email);
	    if (isset($_SESSION['no'])) {unset($_SESSION['no']);}
	    if (isset($_SESSION['email'])) {unset($_SESSION['email']);}
	  }
  } else {
  	$amount="";
  	$message="";
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
				<div class="col-md-12 col-lg-12">
					<div class="panel panel-primary">
						<div class="panel-heading"><h3 class="panel-title">Necessity Discription</h3></div>
						<div class="panel-body">
							<p>we need the <?php echo $result->quantity;?> of <?php echo $result->necessity;?>
              					submited date : <?php echo $result->submited_date;?></p>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 col-lg-12">
					<?php if($amount) { ?>
					<div class="panel panel-default">
						<div class="panel-body">
							<p class="text-center"><h4>Thank you for your Donation</h4></p>
							<div class="row">
								<div class="col-md-2 col-md-offset-1 col-lg-2 col-lg-offset-1">Like More</div>
								<div class="col-md-1 col-lg-1"><input type="button" class="btn btn-primary bt-sm" value="Again" onclick="window.location.href='donation_list.php';"></div>
								<div class="col-md-2 col-lg-2">go to home</div>
								<div class="col-md-1 col-lg-1"><input type="button" class="btn btn-primary bt-sm" value="home" onclick="window.location.href='index.php';"></div>
							</div>
						</div>
					</div>
					<?php } ?>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 col-lg-12">
					<div id="" style="display: none;">
						this reposevie message
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 col-lg-12">
					<div class="panel panel-default">
						<div class="panel-body">
							<form class="form-horizontal" action="donation_necesity.php" method="post">
								<div class="form-group">
									<label class="col-md-3 col-lg-3 control-label"><small>Item</small></label>
									<div class="col-md-8 col-lg-8">
										<p class="form-control-static"><?php echo $result->necessity;?></p>
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-3 col-lg-3 control-label"><small>Quntity/ Amount</small></label>
									<div class="col-md-8 col-lg-8">
										<input type="text" class="form-control" placeholder="number" name="amount" value=<?php echo htmlentities($amount);?>>
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-3 col-lg-3 control-label"><small>message / sender_Descrirtion</small></label>
									<div class="col-md-8 col-lg-8">
										<textarea class="form-control" rows="3" type="text" name="message" placeholder="your discription.." value=<?php echo htmlentities($message);?>></textarea>
									</div>
								</div>
								<div class="row">
									<div class="col-md-4 col-md-offset-3 col-lg-4 col-lg-offset-3">
										<input class="btn btn-primary btn-sm" type="button" value="Cancle" onclick="window.location.href='index.php';">
										<input class="btn btn-primary btn-sm" type="submit" name="submit" value="Submit">
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		</article>
		</div>
		<footer id="footer"><?php include_layout_template('public_footer.php');?></footer>
	</div>
</body>
</html>
<?php if(isset($database)){$database->close_connection();} ?>