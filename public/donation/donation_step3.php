<?php
	require_once('../../includes/initialize.php');
  $necessity = new Necessity();
  if (isset($_POST['donation_but1'])) {
    if (isset($_POST['number'])) {
      $idnum=$_POST['number'];
      $_SESSION['no']=$idnum;
    }
    header("Location: donation_step4.php");
  }
  if (isset($_POST['donation_but2'])) {
    if (isset($_POST['number1'])) {
      $idnum=$_POST['number1'];
      $_SESSION['no']=$idnum;
    }
    header("Location: donation_step4.php");
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
    
    <link rel="shortcut icon" href="./Vipassana Meditation files/bleaf.gif" type="image/x-icon">
  
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
    <script type="text/javascript" src="./javaScripts/jquery-1.9.1.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function(){
      if ($("#donation_type").val() == "special-donation") {
        $("#project_type").val('');
        $("#project").slideDown("normal");
      }else{
        $("#project").slideUp("normal");
      }

      });

    
    $(document).ready(function(){
      $("#more-necessity").hide();
      $("#more_details").click(function(){
        $("#more-necessity").slideDown("normal");
      });
      $("#hide-more-details").click(function(){
        $("#more-necessity").slideUp("normal");
      });
    });
  </script>
     
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
				<?php// header('Location: donation_step4.php');?>	
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
        <div class="panel panel-primary">
          <div class="panel-heading">
            <h3 class="panel-title">
              Material Donation
            </h3>
          </div>
          <div class="panel-body">
            <div>
              <?php
                $data_array = $necessity->view_condition_data();
                foreach ($data_array as $key => $value) {
                  ?>
                    <?php if ($key<2) { ?>
                    <form action="donation_step3.php" method="post">
                      <p>Necessity Number : <?php echo $value->id;?></br>
                        <div style="display: none;"><input type="number" name="number" required value=<?php echo htmlentities($value->id)?>></div>
                          we need the <?php echo $value->quantity;?> of <?php echo $value->necessity;?> <?php $value->description;?> </br>
                          submited date : <?php echo $value->submited_date;?>
                      </p>
                      <p>Do you like Donation: <input type="submit" name="donation_but1" value="Donation"></p>
                      <?php echo '<hr>'; ?>
                    </form>
                    <?php } if ($key==1) { ?>
                    <a id="more_details">More Neccessity>></a> <?php } ?>
                    <?php if ($key>1&&$key<6) { ?>
                    <div id="more-necessity" style="display: block;">
                    <form action="donation_step3.php" method="post">
                      <p>Necessity Number : <?php echo $value->id;?></br>
                        <div style="display: none;"><input type="number" name="number1" required value=<?php echo htmlentities($value->id)?>></div>
                          we need the <?php echo $value->quantity;?> of <?php echo $value->necessity;?> <?php $value->description;?> </br>
                          submited date : <?php echo $value->submited_date;?>
                      </p>
                      <p>Do you like Donation: <input type="submit" name="donation_but2" value="Donation"></p>
                      <?php echo '<hr>'; ?>
                    </form>
                <?php
                } 
             }?>
                <br/><a href="#">More Necessity >> </a>
                <br/>
                <a id="hide-more-details"> << Hide</a>
              </div>
            </div>
          </div>
        </div>
        <div class="panel panel-primary">
          <div class="panel-heading">
            <h3 class="panel-title">
              Cash Donation
            </h3>
          </div>
          <div class="panel-body">
            <div>
              <label>Donation for</label>
              <select name="donation-type" id="donation_type" onchange="show_hide_project_text();">
                <option value="generai-donation" selected>General Donation for course running</option><option value="special-donation">Specific Project Donation</option>
              </select>
            </div>
            <div id="project" style="display:none;">
              <label>Enter Project type</label>
              <select value="project-type" id="project_type">
                <option value="bill-payment" selected>Bill payment</option>
                <option value="Repair">Repair</option>
                <option value="Other">Other</option>
              </select>
            </div>  
          </div>
        </div>
        <input type="button" value="Back" onclick="window.location.href='donation_step2.php';">
      </div>
      <script type="text/javascript">
        function show_hide_project_text(){
          if ($("#donation_type").val() == "special-donation") {
            $("#project").slideDown("normal");
          }else{
            $("#project").slideUp("normal");
          }
        }
      </script>
      </div> 
      <footer>
                <?php
                require_once("../footer.php");
                ?>
      </footer>
  
</body>
</html>
<?php if(isset($database)){$database->close_connection();} 
?>