<?php
	require_once('../includes/initialize.php');
	$necessity = new Necessity();
	$data_array = $necessity->view_condition_data();
	if (isset($_POST['donation_but1'])) {
	  if (isset($_POST['number'])) {
	    $idnum=$_POST['number'];
	    $_SESSION['no']=$idnum;
	  }
	  header("Location: donation_check_account.php");
	}
	if (isset($_POST['donation_but2'])) {
	  if (isset($_POST['number1'])) {
	    $idnum=$_POST['number1'];
	    $_SESSION['no']=$idnum;
	  }
	  header("Location: donation_check_account.php");
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
		$(document).ready(function(){
			$("#more-necessity").hide();
			$("#more-details").click(function(){
				$("#more-necessity").slideDown("normal");
				$("#read-more").hide();
			});
			$("#hide-more-details").click(function(){
				$("#more-necessity").slideUp("normal");
				$("#read-more").show();
			});
		});
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
		<article class="col-md-8 col-lg-8 ">
		<div class="containerii">
			<div class="row">
				<div class=" col-sm-12 col-md-12 col-lg-12">
					<div class="panel panel-info">
						<div class="panel-heading">
							<h3 class="panel-title">Material Donation</h3>
						</div>
						<div class="panel-body">
							<p>If would you like to help us. You can contribute for our needed things and taking our alm time</p>
						</div>
						<ul class="list-group">
							<?php foreach ($data_array as $key => $value) {?>
							<?php if($key<2) { ?>
							<form action="donation_list.php" method="post">
								<li class="list-group-item">Necessity Number : <?php $value->id;?>
									<div style="display: none;"><input type="number" name="number" required value=<?php echo htmlentities($value->id);?>></div>
									<p>we need the <?php echo $value->quantity;?> of <?php echo $value->necessity;?> <?php echo $value->description;?> </br>
                          				submited date : <?php echo $value->submited_date;?></p>
                          			<div class="row">
                          			<div class="col-md-3 col-md-offset-7 col-lg-3 col-lg-offset-7"><p>Do you like Donation</p></div>
									<div class="col-md-1 col-lg-1"><input class="btn btn-default btn-sm" type="submit" value="Donate" name="donation_but1"></div>
									</div>
								</li>
							</form>
							<?php } if($key==1) {?>
							<div id="read-more" style="display: block;"><li class="list-group-item"><a id="more-details">Read more>></a></li></div>
							<?php } if($key>1&&$key<6) {?>
							<div id="more-necessity" style="display: block;">
								<form action="donation_list.php" method="post">
								<li class="list-group-item">Necessity Number : <?php $value->id;?>
									<div style="display: none;"><input type="number" name="number1" required value=<?php echo htmlentities($value->id)?>></div>
									<p>we need the <?php echo $value->quantity;?> of <?php echo $value->necessity;?> <?php echo $value->description;?> </br>
                          				submited date : <?php echo $value->submited_date;?></p>
                          			<div class="row">
                          			<div class="col-md-3 col-md-offset-7 col-lg-3 col-lg-offset-7"><p>Do you like Donation</p></div>
									<div class="col-md-1 col-lg-1"><input class="btn btn-default btn-sm" type="submit" value="Donate" name="donation_but2"></div>
									</div>
								</li> 
								</form> <?php } }?>
								<li class="list-group-item"><a id="hide-more-details"> << Hide</a></li>
							</div>
						</ul>
						<div class="panel-heading"><h3 class="panel-title">Bill Payment</h3></div>
						<div class="panel-body">
							<p>you can support us for paying our last month Electricity bill because of .......</p>
							<div class="row">
								<div class="col-md-5 col-md-offset-1 col-lg-5 col-lg-offset-1">
									<div class="panel panel-primary">
										<div class="panel-heading">Last Month Electricity details</div>
										<div class="panel-body">
											<form class="form-horizontal">
												<div class="form-group">
													<label class="col-md-5 control-label">Last Bill</label>
													<div class="col-md-5"><p class="form-control-static">Rs 234.00</p></div>
												</div>
												<div class="form-group">
													<label class="col-md-5 control-label">Remaining </label>
													<div class="col-md-5"><p class="form-control-static">Rs 190.00</p></div>
												</div>
											</form>
											<span>Above details was updated on 2016-01-04</span>
										</div>
									</div>
								</div>
							</div>
						</div>
						<ul class="list-group">
							<li class="list-group-item">
								<p>donation form part</p>
							</li>
						</ul>
						<div class="panel-heading"><h3 class="panel-title">Cash Donation</h3></div>
						<div class="panel-body">donation part</div>
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