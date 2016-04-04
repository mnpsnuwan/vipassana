<?php
require_once('../includes/initialize.php');
$message="";
  if (isset($_POST['submit'])) {
  	if (!empty($_POST['email1'])) {
  		$email = $_POST['email1'];
  		$_SESSION['email'] = $email;
  		redirect_to('donation_registration.php');
  	}else{
  		$message="Plaese Enter your Email Address, otherwise can not continue!";
  	}
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>vipassana-donation</title>
	<link rel="stylesheet" type="text/css" href="./stylesheet/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="./stylesheet/main.css">
	<link rel="stylesheet" type="text/css" href="./stylesheet/donation.css">
	<link rel="shortcut icon" href="./images/bleaf.gif" type="image/x-icon">

	<script type="text/javascript" src="./javaScripts/jquery-1.9.1.min.js"></script>
	<script type="text/javascript" src="./javaScripts/myjavascript.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$("#login_section1").hide();
			$("#login-type-login").click(function(){
				$("#login_section1").hide('slow');
			});
			$("#login-type-guest").click(function(){
				$("#login_section1").show('slow');
			});
		});
		$(document).ready(function(){
			$("#login_section2").hide();
			$("#login-type-guest").click(function(){
				$("#login_section2").hide('slow');
			});
			$("#login-type-login").click(function(){
				$("#login_section2").show('slow');
			});
		});
	</script>
	<script type="text/javascript">
		$("document").load(function(){
			alert('working here...');
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
		<article class="col-md-8 col-lg-8">
		<div class="containerii">
			<div class="row">
				<div class="col-md-12 col-lg-12">
					<div class="panel panel-primary">
						<div class="panel-heading"><h2 class="panel-title">log-in account</h2></div>
						<div class="panel-body">
							<p>if you have an account you can donate directly. otherwise you have to create an account for verifying your ....</p>
							<div>
								<form action="donation_check_account.php" method="post">
						          <table>
						            <div>
						            <tr>
						              <td>
						                <div  class="fix_section1"><input type="radio" name="account" value="guest" id="login-type-guest">I'm new donor.
						                  <div id="login_section1" style="display: block;">
						                    <label><small>Email address :</small></label><input type="email" name="email1" id="email" onchange="validateEmail();">
						                  </div>
						                </div>
						              </td>
						              <td>
						                <div  class="fix_section1"><input type="radio" name="account" value="login" id="login-type-login">I have an account.
						                  <div id="login_section2" style="display: block;">
						                    <table>
						                      <tr>
						                        <td><label><small>Email address :</small></label></td>
						                        <td><div><input type="email" name="email" id="email2" ><br/></div></td>
						                      </tr>
						                      <tr>
						                        <td><label><small>Password :</small></label></td>
						                        <td><div><input type="password" name="passwd" id="password"><br/>
						                          <a href="#">forget password.</a></div></td>
						                      </tr>
						                    </table>
						                  </div>
						                </div>
						              </td>
						            </tr>
						            <tr><td>
						            <input class="btn btn-primary btn-sm" type="submit" name="submit" value="Continue">
						            <input class="btn btn-primary btn-sm" value="Close" type="button" onclick="window.location.href='./donation_list.php';">
						        	</td>
						        	<td><p><?php echo output_massage($message);?>
						        		<span id="myhint" class="hint"></span>
						        		</p></td>
						        </tr>
						          </table>
						         </form>
							</div>
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
<script type="text/javascript" src="./javaScripts/validation.js"></script>
<script type="text/javascript"> 
	$("#formoid").submit(function(event){
		event.preventDefault();

		var $form = $(this),
			url = $form.attr('action');

		var posting = $.post(url, { email: $('#email1').val() } );

		posting.done(function(data){
			alert('success');
		});
	}); 
	</script>
<script type="text/javascript" src="./javaScripts/jquery.js"></script>
<script type="text/javascript" src="./javaScripts/myjavascript.js"></script>
</html>