<?php
	require_once('../../includes/initialize.php');
	//session_start();
	$email=$_SESSION['email'];
	$details=Donation::find_by_donor($email);
	$message="";
	if(isset($_POST['submit'])){
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
		Donation::update_data($new_donor,$email);
		$_SESSION['email']=$donor_email;
		redirect_to('donation_step2.php');	
	}else{
		$donor_name=$details->Name;
		$donor_email=$details->Email;
		$donor_address=$details->Address;
		$donor_country=$details->Country;
		$donor_city=$details->City;
		$donor_zipcode=$details->Zipcode;
		$donor_phone=$details->Phone_no;
	}	
?>
<!DOCTYPE html>
<!-- saved from url=(0043)https://www.dhamma.org/en-US/courses/search -->
<html lang="en-US"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1, maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Vipassana Meditation</title>
    <meta name="Description" content="Homepage of Vipassana Meditation for Public Users">
    <meta name="Keywords" content="vipassana,meditation,mindfulness,meditate,goenka,buddha,buddhism,dharma,dhamma,silent retreat,silence,tranquility,insight,stress,mind,religion,spirituality,concentration,samadhi,art of living,compassion,peace,harmony,well-being,mental purification,kindness,empathy,sila,panna,metta"> 
    
    <link rel="shortcut icon" href="../Vipassana Meditation files/bleaf.gif" type="image/x-icon">
  
    <link href="../Vipassana Meditation files/application.css" media="all" rel="stylesheet">
    <link rel = "stylesheet" type = "text/css" href = "../Vipassana Meditation files/header.css"></link>
    <link rel = "stylesheet" type = "text/css" href = "../Vipassana Meditation files/footer.css"></link>
	
	<link rel="stylesheet" type="text/css" href="../navicss/NavihomePageTestCSS.css">
	<link rel="stylesheet" type="text/css" href="../navicss/NaviHomePageTestCSS33.css">
	<link href="../navicss/sideNavigation.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" type="text/css" href="./stylesheet/donation.css">

  <script type="text/javascript" src="./javaScripts/myjavascript.js"></script>
     
  </head>
  <body >
  <div class="page">
            <header>
                <?php
                require_once("../header.php");
                ?>
            </header>
 <ul id="menu">
<div class="menu-wrap" >

	
				<!--...........................navigation bar...........................................-->
	<nav class="menu">
		   
		<ul class="clearfix">
 
<!-- /////////////////////Home////////////////////////////////////////////////////////////////////////////////////// -->
			  
		<li><a href="index.php"><img src="../Vipassana Meditation files/home.png" style="width:30px;height:30px;"></a></li>
         
		 
<!-- /////////////////////Couses//////////////////////////////////////////////////////////////////////////////////// -->
			<li>
				<a href="#">Courses <span class="arrow">&#9660;</span></a>
 
 				 <div class="dropdown_4columns"><!-- Begin 4 columns container -->
         
            		<div class="col_4">
                		<h2>You can register for following Courses </h2>
            		</div>

				<ul class="sub-menu">
					<li><a href="#">New Students Courses</a></li>
					<li><a href="#">Old Students Courses</a></li>
					<li><a href="#">Children/Teens Courses </a></li>
					<li><a href="#">Executives Courses</a></li>
				</ul>

				</div>
			</li>

<!--/////////////////////Donations/////////////////////////////////////////////////////////////////////////////////-->	
				<li>
				<a href="#">Donations <span class="arrow">&#9660;</span></a>
 
 				 <div class="dropdown_4columns"><!-- Begin 4 columns container -->
         
            		<div class="col_3">
                		<h2>You can donate using this types</h2>
            		</div>

				<ul class="sub-menu">
					<li><a href="#">Cash donations </a></li>
					<li><a href="#">Material donations </a></li>
					<li><a href="#">Bill payments </a></li> 
				</ul>

				</div>
			</li>

<!-- /////////////////////Photos/////////////////////////////////////////////////////////////////////////////////////-->
			<!-- <li class="current-item"><a href="#">News forum</a></li>  -->
					<li><a href="#">News forum</a></li>
					
<!--/////////////////////Site Help//////////////////////////////////////////////////////////////////////////////////-->			
			<li><a href="#">Gallery</a></li>

		</ul>
		 
	</nav>
</div>
</ul>


  
 <div class="top-content">
   <div class = "Nav-left">
<ul>
  <li><a href="./Vipassana Meditation_what is wipassana.html">What is Vipassana ? </a></li>
  <li><a href="./Vipassana Meditation_Mr S.N Goyanka.html">Mr S.N Goenka</a></li>
  <li><a href="./Vipassana Meditation_the Art of Living.html">The Art of Living: Vipassana Meditation.</a></li>
  <li><a href="./Vipassana Meditation_the code of discipling.html">The Code of Discipline.</a></li>
  <li><a href="./Vipassana Meditation_Technique of vipassana.html">Technique of Vipassana Meditation.</a></li>
  <li><a href="./Vipassana Meditation_location in srilanka.html">Locations in Srilanka.</a></li>
  <li><a href="./Vipassana Meditation_contacts us.html">Contacts us</a></li>
  
</ul>
 </div> 
			<div class="body-content" >
				<h2>Edit your donation details</h2>
				<div>(<span>*</span>Required fileds.)</div>
				<div><?php echo output_massage($message);?></div>
	<form action="donation_edit.php" method="post">
		<div>
			<table>
				<tr><td><label>Name<span>*</span></label></td>
					<td><input type="text" required name="name" value=<?php echo htmlentities($donor_name)?>></td>
				</tr>
				<tr><td><label>Email<span>*</span></label></td>
					<td><input type="text" required name="email" value=<?php echo htmlentities($donor_email)?>></td>
				</tr>
				<tr><td><label>Address<span>*</span></label></td>
					<td><textarea rows="5" cols="18" name="address" value=<?php echo htmlentities($donor_address)?>></textarea></td>
				</tr>
				<tr>
					<li>
						<td><label>Country<span>*</span></label></td>
						<td><input type="text" name="country" required list="country">
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
						</td>
					</li>
				</tr>
				<tr><td><label>City<span>*</span></label></td>
					<td><input type="text" name="city" required value=<?php echo htmlentities($donor_city)?>></td>
				</tr>
				<tr><td><label>Pincode/Zipcode<span>*</span></label></td>
					<td><input type="text" name="zipcode" required value=<?php echo htmlentities($donor_zipcode)?>></td>
				</tr>
				<tr><td><label>Phone no<span>*</span></label></td>
					<td><input type="text" name="phone_no" required value=<?php echo htmlentities($donor_phone)?>><span id="myhint"></span></td>
				</tr>
			</table>
		</div>
		<div>
			<input type="button" value="Back" onclick="window.location.href='donation_step2.php';">
			<input type="submit" name="submit" value="submit">
		</div>
	</form>
          

 
			</div>
		 </div>
		 <footer>
                <?php
                require_once("../footer.php");
                ?>
		 </footer>
		</div>
  
</body>
</html>
<?php 
if(isset($database)){$database->close_connection();} 
?>