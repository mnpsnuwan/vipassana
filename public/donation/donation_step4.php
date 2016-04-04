<?php
	require_once('../../includes/initialize.php');
  $number = $_SESSION['no'];
  $email=$_SESSION['email'];
  $necessity = new Necessity();
  $result = $necessity->find_by_one($number);
  if (isset($_POST['donor_discription'])) {
    global $database;
    $discription=$database->escape_string(trim($_POST['donor_discription']));
    $donor = new Donation();
    $donor->add_discription($discription,$email);
    $donor->update_state(1,$email);
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
    <link rel="stylesheet" type="text/css" href="./stylesheet/change_labal.css">

    <link rel="stylesheet" type="text/css" href="./stylesheet/bootstrap.min.css">

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
<div>

	
				<!--...........................navigation bar...........................................-->
	<nav class="menu">
		   
		<ul class="clearfix">
 
<!-- /////////////////////Home////////////////////////////////////////////////////////////////////////////////////// -->
			  
		<li><a href="../index.php"><img src="../Vipassana Meditation files/home.png" style="width:30px;height:30px;"></a></li>
         
		 
<!-- /////////////////////Couses//////////////////////////////////////////////////////////////////////////////////// -->
			<li>
				<a href="#">Courses <span class="arrow">&#9660;</span></a>
 
 				 <div class="dropdown_4columns"><!-- Begin 4 columns container -->
         
            		<div class="col_4">
                		<h2>You can register for following Courses </h2>
            		</div>

				<ul class="sub-menu">
					<li><a href="../courses/Vipassana Meditation Courses.php">New Students Courses</a></li>
          <li><a href="../courses/Vipassana Meditation Courses.php">Old Students Courses</a></li>
          <li><a href="../courses/Vipassana Meditation Courses.php">Children/Teens Courses </a></li>
          <li><a href="../courses/Vipassana Meditation Courses.php">Executives Courses</a></li>
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
					<li><a href="./donation_step1.php">Cash donations </a></li>
          <li><a href="./donation_step1.php">Material donations </a></li>
          <li><a href="./donation_step1.php">Bill payments </a></li> 
				</ul>

				</div>
			</li>

<!-- /////////////////////Photos/////////////////////////////////////////////////////////////////////////////////////-->
			<!-- <li class="current-item"><a href="#">News forum</a></li>  -->
					<li><a href="../comment/index.php">News forum</a></li>
					
<!--/////////////////////Site Help//////////////////////////////////////////////////////////////////////////////////-->			
			<li><a href="#">Gallery</a></li>

		</ul>
		 
	</nav>
</div>
</ul>


  
 <div class="top-content">
<div class = "Nav-left">
<ul>
  <li><a href="../sidebar/What is vipassana.php">What is Vipassana ? </a></li>
  <li><a href="../sidebar/Mr S.N Goyanka.php">Mr S.N Goenka</a></li>
  <li><a href="../sidebar/The Art of Living.php">The Art of Living: Vipassana Meditation.</a></li>
  <li><a href="../sidebar/The code of discipling.php">The Code of Discipline.</a></li>
  <li><a href="../sidebar/Technique of vipassana.php">Technique of Vipassana Meditation.</a></li>
  <li><a href="../sidebar/Locations in Sri Lanka.php">Locations in Srilanka.</a></li>
  <li><a href="../sidebar/Contacts us.php">Contacts us</a></li>
  
</ul>
 </div> 
 </td>
          <td id="first-content">
			<div class="body-content" >
				<div class="panel panel-primary">
            <div class="panel-heading">
              <h3 class="panel-title">Necessity Discription</h3>
            </div>
            <div class="panel-body">
              <p>we need the <?php echo $result->quantity;?> of <?php echo $result->necessity;?>
              submited date : <?php echo $result->submited_date;?></p>
              <p>Thank you for danated us.. you will be able to meet..</p>
              <hr/>
              <form action="donation_step4.php" method="post">
                <h4>Your donation.</h4>
                <textarea rows="8" cols="60" name="donor_discription" value=""></textarea>
                <div>
                  <input type="button" value="Back" onclick="window.location.href='donation_step3.php';">
                  <input type="submit" name="submit" value="submit">
                </div>
              </form>
            </div>
        </div>
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
<?php if(isset($database)){$database->close_connection();} 
?>