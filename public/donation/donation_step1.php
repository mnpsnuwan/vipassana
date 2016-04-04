<?php
	require_once('../../includes/initialize.php');
  $message="";
	if (isset($_POST['submit'])) {
    if (!empty($_POST['email1'])) {
      session_start();
      $_SESSION['email']=$_POST['email1'];
      redirect_to('new_donor_application.php');
    }else{
      $message="Plaese Enter your Email Address, Otherwise can not continue!";
    }
		
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
    <script type="text/javascript" src="./javaScripts/jquery-1.9.1.min.js"></script>

     
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
 
			<div class="body-content" >
				<h2>Cash Donation</h2>
        <div><?php echo output_massage($message);?></div>
          <div>
          <form action="donation_step1.php" method="post">
          <table>
            <div>
            <tr>
              <td>
                <div  class="fix_section1"><input type="radio" name="account" value="guest" id="login-type-guest">I'm new donor.
                  <div id="login_section1" style="display: block;">
                    <label>Email address :</label><input type="email" name="email1" id="email">
                  </div>
                </div>
              </td>
              <td>
                <div  class="fix_section1"><input type="radio" name="account" value="login" id="login-type-login">I have an account.
                  <div id="login_section2" style="display: block;">
                    <table>
                      <tr>
                        <td><label>Email address :</label></td>
                        <td><div><input type="email" name="email" id="email2" ><br/></div></td>
                      </tr>
                      <tr>
                        <td><label>Password :</label></td>
                        <td><div><input type="password" name="passwd" id="password"><br/>
                          <a href="#">forget password.</a></div></td>
                      </tr>
                    </table>
                  </div>
                </div>
              </td>
            </tr>
            <tr><td>
            <input type="submit" name="submit" value="Continue"></td></tr>
          </table>
          </form>
        </div>
        </div>
      </div>
      <footer>
                <?php
                require_once("../footer.php");
                ?>
      </footer>
    </div>
<script type="text/javascript">
  $(document).ready(function() 
  {
    $("#login_section1").hide();
    $("#login-type-login").click(function()
    {
      $("#login_section1").hide('slow');
    });
    $("#login-type-guest").click(function()
    {
      $("#login_section1").show('slow');
    });
  });
    $(document).ready(function() 
  {
    $("#login_section2").hide();
    $("#login-type-guest").click(function()
    {
      $("#login_section2").hide('slow');
    });
    $("#login-type-login").click(function()
    {
      $("#login_section2").show('slow');
    });
  });
  function login() { 
  if ($('#login-type-guest').is(':checked') ) {
  
    $email = $('#email').val();
    if (validateEmail($email)) {

    	window.location.href="new_donor_application.php";

    
    } else {
    
      alert("Please enter a valid email.");
    
    
    }
    
  
  
  } else {
  
    $email = $('#email').val();
    $password = $('#password').val();
    
    $.post(url+'/dologin',{email:$email,passowrd:$password}, function(data) {
        
        if (data == "1") {
        
          window.location = 'onlinedonate_details';
        
        } else {
        
        
          alert(data);
        }
    });
    
  
  
  }



}


function validateEmail(sEmail) {
    var filter = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
    if (filter.test(sEmail)) {
        return true;
    }
    else {
        return false;
    }
} 
</script>
 

</body>
</html>