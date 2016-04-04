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
	<link rel="shortcut icon" href="../Vipassana Meditation files/bleaf.gif" type="image/x-icon">

    <link href="../Vipassana Meditation files/application.css" media="all" rel="stylesheet">
	<link rel = "stylesheet" type = "text/css" href = "../Vipassana Meditation files/header.css"></link>
    <link rel = "stylesheet" type = "text/css" href = "../Vipassana Meditation files/footer.css"></link>

	
	<link href="../Vipassana Meditation files/coursescss.css" rel="stylesheet" type="text/css" />
	
	<link rel="stylesheet" type="text/css" href="../navicss/NavihomePageTestCSS.css">
	<link rel="stylesheet" type="text/css" href="../navicss/NaviHomePageTestCSS33.css">
	<link href="../navicss/sideNavigation.css" rel="stylesheet" type="text/css" />
	
	<style type="text/css">
            .Courses {
	position: absolute;
	left: 260px;
	top: 170px;
	width: 797px;
	height: 339px;
	background-color: #99CCFF;
	z-index: 1000;
}

#coursebtn{
	height:50px;
	width:200px;
	padding:5px;
	margin-top:100px;
	margin:auto;
	border:1px solid #029;
	border-radius:1px;
	
}


div[id=retudata]:hover{
	cursor:pointer;
	border-left: 3px solid #04e50a !important;
	background-color:#ffffff;
}
div[id=retudata]:active{
	cursor:pointer;
	background-color:#ccc;
}
        </style>
	
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
					<li><a href="./Vipassana Meditation Courses.php">New Students Courses</a></li>
					<li><a href="./Vipassana Meditation Courses.php">Old Students Courses</a></li>
					<li><a href="./Vipassana Meditation Courses.php">Children/Teens Courses </a></li>
					<li><a href="./Vipassana Meditation Courses.php">Executives Courses</a></li>
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
					<li><a href="../donation/donation_step1.php">Cash donations </a></li>
					<li><a href="../donation/donation_step1.php">Material donations </a></li>
					<li><a href="../donation/donation_step1.php">Bill payments </a></li> 
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
			<div class="body-content-detail">
				<h2>Courses</h2>
				
				<!--form action="retrieving_data.php" method="post">
				<?php
				
						//echo '<button id="coursebtn" title="Click here to view Course Shedule" value="Course Shedule" for="courseShedule">Search Courses</button>';
				?>
				</form-->
				
				
				<div id="tab-group">
	<h2 class="tab-header active" id="tab-header-1">New Student</h2>
	<div class="tab-content active" id="tab-content-1">
		<form action="CoursesRetrievingData.php" method="post">
			<button style="margin:auto; padding:10px 20px 10px 20px;" name="newcoursebtn" id="newcoursebtn" title="Click here to view Course Shedule" value="Course Shedule" for="courseShedule">Search</button>
		</form>
	</div>
	<h2 class="tab-header" id="tab-header-2">Old Student</h2>
	<div class="tab-content" id="tab-content-2">
		<form action="CoursesRetrievingData.php" method="post">
			<select style="margin:auto; padding:10px 20px 10px 20px;" name="gender" id="course" required>
				<option value="Male">Male</option>
				<option value="Female">Female</option>
				<option value="Male/Female">Male/Female</option>
			</select>
			
			<select style="margin:auto; padding:10px 20px 10px 20px;" name="cname" id="course" required>
				<option value="10 days">10 days courses</option>
				<option value="Special 10 days">Special 10 days courses</option>
				<option value="20 days">20 days courses</option>
				<option value="Advanced 20 days">20 days Advanced courses</option>
				<option value="Children">Children courses</option>
				<option value="Teen">Teen courses</option>
				<option value="Children/Teen">Children/Teen courses</option>
				<option value="1 day">1 day courses</option>
				<option value="2 days">2 days courses</option>
				<option value="3 days">4 days courses</option>
			</select>
			
			<button style="margin:auto; padding:10px 20px 10px 20px;" name="oldcoursebtn" id="oldcoursebtn" title="Click here to view Course Shedule" value="Course Shedule" for="courseShedule">Search</button>
		</form>
	</div>
	<h2 class="tab-header" id="tab-header-3">Children/Teen</h2>
	<div class="tab-content" id="tab-content-3">
	<form action="CoursesRetrievingData.php" method="post">
		<select style="margin:auto; padding:10px 20px 10px 20px;" name="gender" id="course" required>
				<option value="Male">Male</option>
				<option value="Female">Female</option>
				<option value="Male/Female">Male/Female</option>
			</select>
			
			<select style="margin:auto; padding:10px 20px 10px 20px;" name="cname" id="course" required>
				<option value="Children">Children courses</option>
				<option value="Teen">Teen courses</option>
				<option value="Children/Teen">Children/Teen courses</option>
			</select>
		
		
		<button style="margin:auto; padding:10px 20px 10px 20px;" name="teencoursebtn" id="teencoursebtn" title="Click here to view Course Shedule" value="Course Shedule" for="courseShedule">Search</button>
	</form>
	</div>
	<h2 class="tab-header" id="tab-header-4">Executive</h2>
	<div class="tab-content" id="tab-content-4">
		<form action="CoursesRetrievingData.php" method="post">
			<button style="margin:auto; padding:10px 20px 10px 20px;" name="execoursebtn" id="execoursebtn" title="Click here to view Course Shedule" value="Course Shedule" for="courseShedule">Search</button>
		</form>
	</div>
	</div>
  <!--/div-->
<script src="jquary.js">
"use strict";

</script>	

<?php

class Courses {
    
	public static function newret($row){
		$newDate = date('Y-m-d');
            if ($newDate < $row["startingDate"]) {
                echo "<hr/>";
                echo '<div style="font-size:16px;" class="retdata" id="retudata">';
                echo '<div style="margin:auto; padding:10px;">
				<form action="../registrationform/RegisterWEB/RegFormNewStudent.php" method="get">
					<input type=submit style="margin:auto; padding:10px 20px 10px 20px;" value="Apply">';
					?>
					<input type="text" name="courseID" value="<?php echo $row["courseID"];?>" hidden="true"/></form>
				</div>
				<?php
                echo "<b>Course Name: </b>" . $row["courseName"];
                echo "&nbsp; &nbsp; &nbsp; For " . $row["gender"] . "<br/>";
                echo "<b>Courses Instructor: </b>" . $row["conduct"] . "</br>";
                echo "<b>Course Content: </b>" . $row["content"] . "<br/>";
                echo "<b>Starting Date: </b>" . $row["startingDate"];
				
                //echo "&nbsp; &nbsp; &nbsp; <b>Finishing Date: </b>".$row["startingDate"]."<br/>";
                $date = date_create($row["startingDate"]);

                if ($row["courseName"] == "10 days" or $row["courseName"] == "Special 10 days" or $row["courseName"] == "Advanced 10 days") {
                    date_add($date, date_interval_create_from_date_string("9 days"));
                    echo "&nbsp; &nbsp; &nbsp; <b>Finishing Date: </b>" . date_format($date, "Y-m-d") . "<br/>";
                }
                if ($row["courseName"] == "20 days" or $row["courseName"] == "Special 20 days" or $row["courseName"] == "Advanced 20 days") {
                    date_add($date, date_interval_create_from_date_string("19 days"));
                    echo "&nbsp; &nbsp; &nbsp; <b>Finishing Date: </b>" . date_format($date, "Y-m-d") . "<br/>";
                }

                if ($row["courseName"] == "1 days" or $row["courseName"] == "Children" or $row["courseName"] == "Children/Teen" or $row["courseName"] == "Teen") {
                    date_add($date, date_interval_create_from_date_string("0 days"));
                    echo "&nbsp; &nbsp; &nbsp; <b>Finishing Date: </b>" . date_format($date, "Y-m-d") . "<br/>";
                }

                if ($row["courseName"] == "2 days") {
                    date_add($date, date_interval_create_from_date_string("1 days"));
                    echo "&nbsp; &nbsp; &nbsp; <b>Finishing Date: </b>" . date_format($date, "Y-m-d") . "<br/>";
                }
                if ($row["courseName"] == "3 days") {
                    date_add($date, date_interval_create_from_date_string("2 days"));
                    echo "&nbsp; &nbsp; &nbsp; <b>Finishing Date: </b>" . date_format($date, "Y-m-d") . "<br/>";
                }
                if ($row["courseName"] == "4 days") {
                    date_add($date, date_interval_create_from_date_string("3 days"));
                    echo "&nbsp; &nbsp; &nbsp; <b>Finishing Date: </b>" . date_format($date, "Y-m-d") . "<br/>";
                }
                if ($row["courseName"] == "5 days") {
                    date_add($date, date_interval_create_from_date_string("4 days"));
                    echo "&nbsp; &nbsp; &nbsp; <b>Finishing Date: </b>" . date_format($date, "Y-m-d") . "<br/>";
                }

                echo "<b>Location : </b>" . $row["location"] . "<br/>";
                echo "<b>Members : </b>" . $row["members"] . "<br/><br/>";

                if ($row["location"] == "Peradeniya") {
                    echo '<img src="../Vipassana Meditation files/Location/kuta.jpg">';
                }
                if ($row["location"] == "Kosgama") {
                    echo '<img style="text-align:center;" src="../Vipassana Meditation files/Location/sobha.jpg">';
                }
                if ($row["location"] == "Anuradhapura") {
                    echo '<img src="../Vipassana Meditation files/Location/anuradha.jpg">';
                }

                echo '</div>';
                echo "<hr/>";
                        
                        //@$addDate = new Courses();
                        //@$addDate::addDate($row);
           }
	}
	
	
	
	public static function oldret($row){
		$newDate = date('Y-m-d');
            if ($newDate < $row["startingDate"]) {
                echo "<hr/>";
                echo '<div style="font-size:16px;" class="retdata" id="retudata">';
                echo '<div style="margin:auto; padding:10px;">
				<form action="../registrationform/RegisterWEB/RegFormMainT.php" method="get">
					<input type=submit style="margin:auto; padding:10px 20px 10px 20px;" value="Apply">';
					?>
					<input type="text" name="courseID" value="<?php echo $row["courseID"];?>" hidden="true"/></form>
				</div>
				<?php
                echo "<b>Course Name: </b>" . $row["courseName"];
                echo "&nbsp; &nbsp; &nbsp; For " . $row["gender"] . "<br/>";
                echo "<b>Courses Instructor: </b>" . $row["conduct"] . "</br>";
                echo "<b>Course Content: </b>" . $row["content"] . "<br/>";
                echo "<b>Starting Date: </b>" . $row["startingDate"];
				
                //echo "&nbsp; &nbsp; &nbsp; <b>Finishing Date: </b>".$row["startingDate"]."<br/>";
                $date = date_create($row["startingDate"]);

                if ($row["courseName"] == "10 days" or $row["courseName"] == "Special 10 days" or $row["courseName"] == "Advanced 10 days") {
                    date_add($date, date_interval_create_from_date_string("9 days"));
                    echo "&nbsp; &nbsp; &nbsp; <b>Finishing Date: </b>" . date_format($date, "Y-m-d") . "<br/>";
                }
                if ($row["courseName"] == "20 days" or $row["courseName"] == "Special 20 days" or $row["courseName"] == "Advanced 20 days") {
                    date_add($date, date_interval_create_from_date_string("19 days"));
                    echo "&nbsp; &nbsp; &nbsp; <b>Finishing Date: </b>" . date_format($date, "Y-m-d") . "<br/>";
                }

                if ($row["courseName"] == "1 days" or $row["courseName"] == "Children" or $row["courseName"] == "Children/Teen" or $row["courseName"] == "Teen") {
                    date_add($date, date_interval_create_from_date_string("0 days"));
                    echo "&nbsp; &nbsp; &nbsp; <b>Finishing Date: </b>" . date_format($date, "Y-m-d") . "<br/>";
                }

                if ($row["courseName"] == "2 days") {
                    date_add($date, date_interval_create_from_date_string("1 days"));
                    echo "&nbsp; &nbsp; &nbsp; <b>Finishing Date: </b>" . date_format($date, "Y-m-d") . "<br/>";
                }
                if ($row["courseName"] == "3 days") {
                    date_add($date, date_interval_create_from_date_string("2 days"));
                    echo "&nbsp; &nbsp; &nbsp; <b>Finishing Date: </b>" . date_format($date, "Y-m-d") . "<br/>";
                }
                if ($row["courseName"] == "4 days") {
                    date_add($date, date_interval_create_from_date_string("3 days"));
                    echo "&nbsp; &nbsp; &nbsp; <b>Finishing Date: </b>" . date_format($date, "Y-m-d") . "<br/>";
                }
                if ($row["courseName"] == "5 days") {
                    date_add($date, date_interval_create_from_date_string("4 days"));
                    echo "&nbsp; &nbsp; &nbsp; <b>Finishing Date: </b>" . date_format($date, "Y-m-d") . "<br/>";
                }

                echo "<b>Location : </b>" . $row["location"] . "<br/>";
                echo "<b>Members : </b>" . $row["members"] . "<br/><br/>";

                if ($row["location"] == "Peradeniya") {
                    echo '<img src="../Vipassana Meditation files/Location/kuta.jpg">';
                }
                if ($row["location"] == "Kosgama") {
                    echo '<img style="text-align:center;" src="../Vipassana Meditation files/Location/sobha.jpg">';
                }
                if ($row["location"] == "Anuradhapura") {
                    echo '<img src="../Vipassana Meditation files/Location/anuradha.jpg">';
                }

                echo '</div>';
                echo "<hr/>";
                        
                        //@$addDate = new Courses();
                        //@$addDate::addDate($row);
           }
	}
	
	
	public static function teenret($row){
		$newDate = date('Y-m-d');
            if ($newDate < $row["startingDate"]) {
                echo "<hr/>";
                echo '<div style="font-size:16px;" class="retdata" id="retudata">';
                echo '<div style="margin:auto; padding:10px;">
				<form action="../registrationform/RegisterWEB/RegFormTeen.php" method="get">
					<input type=submit style="margin:auto; padding:10px 20px 10px 20px;" value="Apply">';
					?>
					<input type="text" name="courseID" value="<?php echo $row["courseID"];?>" hidden="true"/></form>
				</div>
				<?php
                echo "<b>Course Name: </b>" . $row["courseName"];
                echo "&nbsp; &nbsp; &nbsp; For " . $row["gender"] . "<br/>";
                echo "<b>Courses Instructor: </b>" . $row["conduct"] . "</br>";
                echo "<b>Course Content: </b>" . $row["content"] . "<br/>";
                echo "<b>Starting Date: </b>" . $row["startingDate"];
				
                //echo "&nbsp; &nbsp; &nbsp; <b>Finishing Date: </b>".$row["startingDate"]."<br/>";
                $date = date_create($row["startingDate"]);

                if ($row["courseName"] == "10 days" or $row["courseName"] == "Special 10 days" or $row["courseName"] == "Advanced 10 days") {
                    date_add($date, date_interval_create_from_date_string("9 days"));
                    echo "&nbsp; &nbsp; &nbsp; <b>Finishing Date: </b>" . date_format($date, "Y-m-d") . "<br/>";
                }
                if ($row["courseName"] == "20 days" or $row["courseName"] == "Special 20 days" or $row["courseName"] == "Advanced 20 days") {
                    date_add($date, date_interval_create_from_date_string("19 days"));
                    echo "&nbsp; &nbsp; &nbsp; <b>Finishing Date: </b>" . date_format($date, "Y-m-d") . "<br/>";
                }

                if ($row["courseName"] == "1 days" or $row["courseName"] == "Children" or $row["courseName"] == "Children/Teen" or $row["courseName"] == "Teen") {
                    date_add($date, date_interval_create_from_date_string("0 days"));
                    echo "&nbsp; &nbsp; &nbsp; <b>Finishing Date: </b>" . date_format($date, "Y-m-d") . "<br/>";
                }

                if ($row["courseName"] == "2 days") {
                    date_add($date, date_interval_create_from_date_string("1 days"));
                    echo "&nbsp; &nbsp; &nbsp; <b>Finishing Date: </b>" . date_format($date, "Y-m-d") . "<br/>";
                }
                if ($row["courseName"] == "3 days") {
                    date_add($date, date_interval_create_from_date_string("2 days"));
                    echo "&nbsp; &nbsp; &nbsp; <b>Finishing Date: </b>" . date_format($date, "Y-m-d") . "<br/>";
                }
                if ($row["courseName"] == "4 days") {
                    date_add($date, date_interval_create_from_date_string("3 days"));
                    echo "&nbsp; &nbsp; &nbsp; <b>Finishing Date: </b>" . date_format($date, "Y-m-d") . "<br/>";
                }
                if ($row["courseName"] == "5 days") {
                    date_add($date, date_interval_create_from_date_string("4 days"));
                    echo "&nbsp; &nbsp; &nbsp; <b>Finishing Date: </b>" . date_format($date, "Y-m-d") . "<br/>";
                }

                echo "<b>Location : </b>" . $row["location"] . "<br/>";
                echo "<b>Members : </b>" . $row["members"] . "<br/><br/>";

                if ($row["location"] == "Peradeniya") {
                    echo '<img src="../Vipassana Meditation files/Location/kuta.jpg">';
                }
                if ($row["location"] == "Kosgama") {
                    echo '<img style="text-align:center;" src="../Vipassana Meditation files/Location/sobha.jpg">';
                }
                if ($row["location"] == "Anuradhapura") {
                    echo '<img src="../Vipassana Meditation files/Location/anuradha.jpg">';
                }

                echo '</div>';
                echo "<hr/>";
                        
                        //@$addDate = new Courses();
                        //@$addDate::addDate($row);
           }
	}
	
	
	
	public static function insret($row){
		$newDate = date('Y-m-d');
            if ($newDate < $row["startingDate"]) {
                echo "<hr/>";
                echo '<div style="font-size:16px;" class="retdata" id="retudata">';
                echo '<div style="margin:auto; padding:10px;">
				<form action="../registrationform/RegisterWEB/RegFormInstructor.php" method="get">
					<input type=submit style="margin:auto; padding:10px 20px 10px 20px;" value="Apply">';
					?>
					<input type="text" name="courseID" value="<?php echo $row["courseID"];?>" hidden="true"/></form>
				</div>
				<?php
                echo "<b>Course Name: </b>" . $row["courseName"];
                echo "&nbsp; &nbsp; &nbsp; For " . $row["gender"] . "<br/>";
                echo "<b>Courses Instructor: </b>" . $row["conduct"] . "</br>";
                echo "<b>Course Content: </b>" . $row["content"] . "<br/>";
                echo "<b>Starting Date: </b>" . $row["startingDate"];
				
                //echo "&nbsp; &nbsp; &nbsp; <b>Finishing Date: </b>".$row["startingDate"]."<br/>";
                $date = date_create($row["startingDate"]);

                if ($row["courseName"] == "10 days" or $row["courseName"] == "Special 10 days" or $row["courseName"] == "Advanced 10 days") {
                    date_add($date, date_interval_create_from_date_string("9 days"));
                    echo "&nbsp; &nbsp; &nbsp; <b>Finishing Date: </b>" . date_format($date, "Y-m-d") . "<br/>";
                }
                if ($row["courseName"] == "20 days" or $row["courseName"] == "Special 20 days" or $row["courseName"] == "Advanced 20 days") {
                    date_add($date, date_interval_create_from_date_string("19 days"));
                    echo "&nbsp; &nbsp; &nbsp; <b>Finishing Date: </b>" . date_format($date, "Y-m-d") . "<br/>";
                }

                if ($row["courseName"] == "1 days" or $row["courseName"] == "Children" or $row["courseName"] == "Children/Teen" or $row["courseName"] == "Teen") {
                    date_add($date, date_interval_create_from_date_string("0 days"));
                    echo "&nbsp; &nbsp; &nbsp; <b>Finishing Date: </b>" . date_format($date, "Y-m-d") . "<br/>";
                }

                if ($row["courseName"] == "2 days") {
                    date_add($date, date_interval_create_from_date_string("1 days"));
                    echo "&nbsp; &nbsp; &nbsp; <b>Finishing Date: </b>" . date_format($date, "Y-m-d") . "<br/>";
                }
                if ($row["courseName"] == "3 days") {
                    date_add($date, date_interval_create_from_date_string("2 days"));
                    echo "&nbsp; &nbsp; &nbsp; <b>Finishing Date: </b>" . date_format($date, "Y-m-d") . "<br/>";
                }
                if ($row["courseName"] == "4 days") {
                    date_add($date, date_interval_create_from_date_string("3 days"));
                    echo "&nbsp; &nbsp; &nbsp; <b>Finishing Date: </b>" . date_format($date, "Y-m-d") . "<br/>";
                }
                if ($row["courseName"] == "5 days") {
                    date_add($date, date_interval_create_from_date_string("4 days"));
                    echo "&nbsp; &nbsp; &nbsp; <b>Finishing Date: </b>" . date_format($date, "Y-m-d") . "<br/>";
                }

                echo "<b>Location : </b>" . $row["location"] . "<br/>";
                echo "<b>Members : </b>" . $row["members"] . "<br/><br/>";

                if ($row["location"] == "Peradeniya") {
                    echo '<img src="../Vipassana Meditation files/Location/kuta.jpg">';
                }
                if ($row["location"] == "Kosgama") {
                    echo '<img style="text-align:center;" src="../Vipassana Meditation files/Location/sobha.jpg">';
                }
                if ($row["location"] == "Anuradhapura") {
                    echo '<img src="../Vipassana Meditation files/Location/anuradha.jpg">';
                }

                echo '</div>';
                echo "<hr/>";
                        
                        //@$addDate = new Courses();
                        //@$addDate::addDate($row);
           }
	}

}

/*-------------------------------------------begin new courses--------------------------------------------------------*/
if(isset($_POST['newcoursebtn'])) {
    //echo date('Y-m-d');
    while ($row = mysqli_fetch_assoc($result)) {
        //Output data from each row

        if ($row["courseName"] == "10 days") {
            @$addDate = new Courses();
            @$addDate::newret($row);
        }
    }
}
/*-------------------------------------------end new courses--------------------------------------------------------*/

/*-------------------------------------------begin old courses--------------------------------------------------------*/
//Use Returned Data(if any)
if (isset($_POST['oldcoursebtn'])) {
    $gender = trim($_POST['gender']);

    $cname = trim($_POST['cname']);

/*------------------------------male courses------------------------------------*/
    if ($gender == "Male") {
        if ($cname == "20 days") {

            while ($row = mysqli_fetch_assoc($result)) {
                //Output data from each row
                if ($row["gender"] == "Male" or $row["gender"] == "Male/Female") {
                    if ($row["courseName"] == "20 days") {
						@$addDate = new Courses();
						@$addDate::oldret($row);
                }
				}
            }
        } else if ($cname == "10 days") {

            while ($row = mysqli_fetch_assoc($result)) {
                //Output data from each row
                if ($row["gender"] == "Male" or $row["gender"] == "Male/Female") {
                    if ($row["courseName"] == "10 days") {
                        @$addDate = new Courses();
						@$addDate::oldret($row);
                    }
                }
            }
        }else if ($cname == "Advanced 20 days") {

            while ($row = mysqli_fetch_assoc($result)) {
                //Output data from each row
                if ($row["gender"] == "Male" or $row["gender"] == "Male/Female") {
                    if ($row["courseName"] == "Advanced 20 days") {
						@$addDate = new Courses();
						@$addDate::oldret($row);
                }
				}
            }
        } else if ($cname == "Special 10 days") {

            while ($row = mysqli_fetch_assoc($result)) {
                //Output data from each row
                if ($row["gender"] == "Male" or $row["gender"] == "Male/Female") {
                    if ($row["courseName"] == "Special 10 days") {
                        @$addDate = new Courses();
						@$addDate::oldret($row);
                    }
                }
            }
        }else if ($cname == "Children") {

            while ($row = mysqli_fetch_assoc($result)) {
                //Output data from each row
                if ($row["gender"] == "Male" or $row["gender"] == "Male/Female") {
                    if ($row["courseName"] == "Children") {
						@$addDate = new Courses();
						@$addDate::oldret($row);
                }
				}
            }
        } else if ($cname == "Teen") {

            while ($row = mysqli_fetch_assoc($result)) {
                //Output data from each row
                if ($row["gender"] == "Male" or $row["gender"] == "Male/Female") {
                    if ($row["courseName"] == "Teen") {
                        @$addDate = new Courses();
						@$addDate::oldret($row);
                    }
                }
            }
        }else if ($cname == "Children/Teen") {

            while ($row = mysqli_fetch_assoc($result)) {
                //Output data from each row
                if ($row["gender"] == "Male" or $row["gender"] == "Male/Female") {
                    if ($row["courseName"] == "Children/Teen") {
						@$addDate = new Courses();
						@$addDate::oldret($row);
                }
				}
            }
        } else if ($cname == "1 day") {

            while ($row = mysqli_fetch_assoc($result)) {
                //Output data from each row
                if ($row["gender"] == "Male" or $row["gender"] == "Male/Female") {
                    if ($row["courseName"] == "1 day") {
                        @$addDate = new Courses();
						@$addDate::oldret($row);
                    }
                }
            }
        }else if ($cname == "2 day") {

            while ($row = mysqli_fetch_assoc($result)) {
                //Output data from each row
                if ($row["gender"] == "Male" or $row["gender"] == "Male/Female") {
                    if ($row["courseName"] == "2 day") {
                        @$addDate = new Courses();
						@$addDate::oldret($row);
                    }
                }
            }
        }else if ($cname == "3 day") {

            while ($row = mysqli_fetch_assoc($result)) {
                //Output data from each row
                if ($row["gender"] == "Male" or $row["gender"] == "Male/Female") {
                    if ($row["courseName"] == "3 day") {
                        @$addDate = new Courses();
						@$addDate::oldret($row);
                    }
                }
            }
        }
		
    }
		
	/*------------------------------female courses------------------------------------*/
    if ($gender == "Female") {
        if ($cname == "20 days") {

            while ($row = mysqli_fetch_assoc($result)) {
                //Output data from each row
                if ($row["gender"] == "Female" or $row["gender"] == "Male/Female") {
                    if ($row["courseName"] == "20 days") {
						@$addDate = new Courses();
						@$addDate::oldret($row);
                }
				}
            }
        } else if ($cname == "10 days") {

            while ($row = mysqli_fetch_assoc($result)) {
                //Output data from each row
                if ($row["gender"] == "Female" or $row["gender"] == "Male/Female") {
                    if ($row["courseName"] == "10 days") {
                        @$addDate = new Courses();
						@$addDate::oldret($row);
                    }
                }
            }
        }else if ($cname == "Advanced 20 days") {

            while ($row = mysqli_fetch_assoc($result)) {
                //Output data from each row
                if ($row["gender"] == "Female" or $row["gender"] == "Male/Female") {
                    if ($row["courseName"] == "Advanced 20 days") {
						@$addDate = new Courses();
						@$addDate::oldret($row);
                }
				}
            }
        } else if ($cname == "Special 10 days") {

            while ($row = mysqli_fetch_assoc($result)) {
                //Output data from each row
                if ($row["gender"] == "Female" or $row["gender"] == "Male/Female") {
                    if ($row["courseName"] == "Special 10 days") {
                        @$addDate = new Courses();
						@$addDate::oldret($row);
                    }
                }
            }
        }else if ($cname == "Children") {

            while ($row = mysqli_fetch_assoc($result)) {
                //Output data from each row
                if ($row["gender"] == "Male" or $row["gender"] == "Male/Female") {
                    if ($row["courseName"] == "Children") {
						@$addDate = new Courses();
						@$addDate::oldret($row);
                }
				}
            }
        } else if ($cname == "Teen") {

            while ($row = mysqli_fetch_assoc($result)) {
                //Output data from each row
                if ($row["gender"] == "Female" or $row["gender"] == "Male/Female") {
                    if ($row["courseName"] == "Teen") {
                        @$addDate = new Courses();
						@$addDate::oldret($row);
                    }
                }
            }
        }else if ($cname == "Children/Teen") {

            while ($row = mysqli_fetch_assoc($result)) {
                //Output data from each row
                if ($row["gender"] == "Female" or $row["gender"] == "Male/Female") {
                    if ($row["courseName"] == "Children/Teen") {
						@$addDate = new Courses();
						@$addDate::oldret($row);
                }
				}
            }
        } else if ($cname == "1 day") {

            while ($row = mysqli_fetch_assoc($result)) {
                //Output data from each row
                if ($row["gender"] == "Female" or $row["gender"] == "Male/Female") {
                    if ($row["courseName"] == "1 day") {
                        @$addDate = new Courses();
						@$addDate::oldret($row);
                    }
                }
            }
        }else if ($cname == "2 day") {

            while ($row = mysqli_fetch_assoc($result)) {
                //Output data from each row
                if ($row["gender"] == "Female" or $row["gender"] == "Male/Female") {
                    if ($row["courseName"] == "2 day") {
                        @$addDate = new Courses();
						@$addDate::oldret($row);
                    }
                }
            }
        }else if ($cname == "3 day") {

            while ($row = mysqli_fetch_assoc($result)) {
                //Output data from each row
                if ($row["gender"] == "Female" or $row["gender"] == "Male/Female") {
                    if ($row["courseName"] == "3 day") {
                        @$addDate = new Courses();
						@$addDate::oldret($row);
                    }
                }
            }
        }
    }
	
	/*------------------------------male/female courses------------------------------------*/
    if ($gender == "Male/Female") {
        if ($cname == "20 days") {

            while ($row = mysqli_fetch_assoc($result)) {
                //Output data from each row
                if ($row["gender"] == "Male" or $row["gender"] == "Female" or $row["gender"] == "Male/Female") {
                    if ($row["courseName"] == "20 days") {
						@$addDate = new Courses();
						@$addDate::oldret($row);
                }
				}
            }
        } else if ($cname == "10 days") {

            while ($row = mysqli_fetch_assoc($result)) {
                //Output data from each row
                if ($row["gender"] == "Male" or $row["gender"] == "Female" or $row["gender"] == "Male/Female") {
                    if ($row["courseName"] == "10 days") {
                        @$addDate = new Courses();
						@$addDate::oldret($row);
                    }
                }
            }
        }else if ($cname == "Advanced 20 days") {

            while ($row = mysqli_fetch_assoc($result)) {
                //Output data from each row
                if ($row["gender"] == "Male" or $row["gender"] == "Female" or $row["gender"] == "Male/Female") {
                    if ($row["courseName"] == "Advanced 20 days") {
						@$addDate = new Courses();
						@$addDate::oldret($row);
                }
				}
            }
        } else if ($cname == "Special 10 days") {

            while ($row = mysqli_fetch_assoc($result)) {
                //Output data from each row
                if ($row["gender"] == "Male" or $row["gender"] == "Female" or $row["gender"] == "Male/Female") {
                    if ($row["courseName"] == "Special 10 days") {
                        @$addDate = new Courses();
						@$addDate::oldret($row);
                    }
                }
            }
        }else if ($cname == "Children") {

            while ($row = mysqli_fetch_assoc($result)) {
                //Output data from each row
                if ($row["gender"] == "Male" or $row["gender"] == "Male" or $row["gender"] == "Male/Female") {
                    if ($row["courseName"] == "Children") {
						@$addDate = new Courses();
						@$addDate::oldret($row);
                }
				}
            }
        } else if ($cname == "Teen") {

            while ($row = mysqli_fetch_assoc($result)) {
                //Output data from each row
                if ($row["gender"] == "Male" or $row["gender"] == "Female" or $row["gender"] == "Male/Female") {
                    if ($row["courseName"] == "Teen") {
                        @$addDate = new Courses();
						@$addDate::oldret($row);
                    }
                }
            }
        }else if ($cname == "Children/Teen") {

            while ($row = mysqli_fetch_assoc($result)) {
                //Output data from each row
                if ($row["gender"] == "Male" or $row["gender"] == "Female" or $row["gender"] == "Male/Female") {
                    if ($row["courseName"] == "Children/Teen") {
						@$addDate = new Courses();
						@$addDate::oldret($row);
                }
				}
            }
        } else if ($cname == "1 day") {

            while ($row = mysqli_fetch_assoc($result)) {
                //Output data from each row
                if ($row["gender"] == "Male" or $row["gender"] == "Female" or $row["gender"] == "Male/Female") {
                    if ($row["courseName"] == "1 day") {
                        @$addDate = new Courses();
						@$addDate::oldret($row);
                    }
                }
            }
        }else if ($cname == "2 day") {

            while ($row = mysqli_fetch_assoc($result)) {
                //Output data from each row
                if ($row["gender"] == "Male" or $row["gender"] == "Female" or $row["gender"] == "Male/Female") {
                    if ($row["courseName"] == "2 day") {
                        @$addDate = new Courses();
						@$addDate::oldret($row);
                    }
                }
            }
        }else if ($cname == "3 day") {

            while ($row = mysqli_fetch_assoc($result)) {
                //Output data from each row
                if ($row["gender"] == "Male" or $row["gender"] == "Female" or $row["gender"] == "Male/Female") {
                    if ($row["courseName"] == "3 day") {
                        @$addDate = new Courses();
						@$addDate::oldret($row);
                    }
                }
            }
        }
    }
	
}
/*-------------------------------------------end old courses--------------------------------------------------------*/


/*-------------------------------------------begin children/teen courses--------------------------------------------------------*/
if (isset($_POST['teencoursebtn'])) {
    $gender = trim($_POST['gender']);

    $cname = trim($_POST['cname']);
/*------------------------------male courses------------------------------------*/
	if ($gender == "Male") {
		if ($cname == "Children") {

            while ($row = mysqli_fetch_assoc($result)) {
                //Output data from each row
                if ($row["gender"] == "Male" or $row["gender"] == "Male/Female") {
                    if ($row["courseName"] == "Children") {
						@$addDate = new Courses();
						@$addDate::teenret($row);
                }
				}
            }
        } else if ($cname == "Teen") {

            while ($row = mysqli_fetch_assoc($result)) {
                //Output data from each row
                if ($row["gender"] == "Male" or $row["gender"] == "Male/Female") {
                    if ($row["courseName"] == "Teen") {
                        @$addDate = new Courses();
						@$addDate::teenret($row);
                    }
                }
            }
        }else if ($cname == "Children/Teen") {

            while ($row = mysqli_fetch_assoc($result)) {
                //Output data from each row
                if ($row["gender"] == "Male" or $row["gender"] == "Male/Female") {
                    if ($row["courseName"] == "Children/Teen") {
						@$addDate = new Courses();
						@$addDate::teenret($row);
                }
				}
            }
        }
	}
/*------------------------------female courses------------------------------------*/	
	else if ($gender == "Female") {
		if ($cname == "Children") {

            while ($row = mysqli_fetch_assoc($result)) {
                //Output data from each row
                if ($row["gender"] == "Male" or $row["gender"] == "Male/Female") {
                    if ($row["courseName"] == "Children") {
						@$addDate = new Courses();
						@$addDate::teenret($row);
                }
				}
            }
        } else if ($cname == "Teen") {

            while ($row = mysqli_fetch_assoc($result)) {
                //Output data from each row
                if ($row["gender"] == "Female" or $row["gender"] == "Male/Female") {
                    if ($row["courseName"] == "Teen") {
                        @$addDate = new Courses();
						@$addDate::teenret($row);
                    }
                }
            }
        }else if ($cname == "Children/Teen") {

            while ($row = mysqli_fetch_assoc($result)) {
                //Output data from each row
                if ($row["gender"] == "Female" or $row["gender"] == "Male/Female") {
                    if ($row["courseName"] == "Children/Teen") {
						@$addDate = new Courses();
						@$addDate::teenret($row);
                }
				}
            }
        }
	}
/*------------------------------male/female courses------------------------------------*/	
	else if ($gender == "Male/Female") {
		if ($cname == "Children") {

            while ($row = mysqli_fetch_assoc($result)) {
                //Output data from each row
                if ($row["gender"] == "Male" or $row["gender"] == "Male" or $row["gender"] == "Male/Female") {
                    if ($row["courseName"] == "Children") {
						@$addDate = new Courses();
						@$addDate::teenret($row);
                }
				}
            }
        } else if ($cname == "Teen") {

            while ($row = mysqli_fetch_assoc($result)) {
                //Output data from each row
                if ($row["gender"] == "Male" or $row["gender"] == "Female" or $row["gender"] == "Male/Female") {
                    if ($row["courseName"] == "Teen") {
                        @$addDate = new Courses();
						@$addDate::teenret($row);
                    }
                }
            }
        }else if ($cname == "Children/Teen") {

            while ($row = mysqli_fetch_assoc($result)) {
                //Output data from each row
                if ($row["gender"] == "Male" or $row["gender"] == "Female" or $row["gender"] == "Male/Female") {
                    if ($row["courseName"] == "Children/Teen") {
						@$addDate = new Courses();
						@$addDate::teenret($row);
                }
				}
            }
        }
	}
}
/*-------------------------------------------end children/teen courses--------------------------------------------------------*/


/*-------------------------------------------begin executive courses--------------------------------------------------------*/
if (isset($_POST['execoursebtn'])) {
    while ($row = mysqli_fetch_assoc($result)) {
        //Output data from each row
			@$addDate = new Courses();
            @$addDate::insret($row);
        }
    }
	/*-------------------------------------------end executive courses--------------------------------------------------------*/
?>
<?php
	//Release returned data
	mysqli_free_result($result);
?>
				
 </div>

</div></div>
<footer>
	<?php
require_once("../footer.php");
?>
</footer>
</div>
  
</body>
</html>
