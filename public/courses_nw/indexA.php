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

	<link href="../Vipassana Meditation files/coursescss.css" rel="stylesheet" type="text/css" />
	
	
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
			<div class="body-content" >
			<div class="body-content-detail">
				<h2>Courses</h2>
				
				<!--form action="retrieving_data.php" method="post">
				<?php
				
						//echo '<button id="coursebtn" title="Click here to view Course Shedule" value="Course Shedule" for="courseShedule">Search Courses</button>';
				?>
				</form-->
				
				
				<div id="tab-group">
	<h2 class="tab-header active" id="tab-header-1">New Courses</h2>
	<div class="tab-content active" id="tab-content-1">
		<form action="CoursesRetrievingData.php" method="post">
			<button style="margin:auto; padding:10px 20px 10px 20px;" name="newcoursebtn" id="newcoursebtn" title="Click here to view Course Shedule" value="Course Shedule" for="courseShedule">Search</button>
		</form>
	</div>
	<h2 class="tab-header" id="tab-header-2">Old Courses</h2>
	<div class="tab-content" id="tab-content-2">
		<form action="CoursesRetrievingData.php" method="post">
			
			<button style="margin:auto; padding:10px 20px 10px 20px;" name="oldcoursebtn" id="oldcoursebtn" title="Click here to view Course Shedule" value="Course Shedule" for="courseShedule">Search</button>
		</form>
	</div>
	
  <!--/div-->
<script src="jquary.js">
"use strict";

</script>	

<?php

class Courses {
    
	public static function retnew($row){
		$newDate = date('Y-m-d');
            if ($newDate < $row["startingDate"]) {
                echo "<hr/>";
                echo '<div style="font-size:16px;" class="retdata" id="retudata">';
                $courseID = $row["courseID"];
				$dellink = "<a href=\"delete.php?courseID=" . $courseID . "\">
					<button>Delete</button></a>";
				echo $dellink."</br>";
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


	public static function retold($row){
		$newDate = date('Y-m-d');
            if ($newDate > $row["startingDate"]) {
                echo "<hr/>";
                echo '<div style="font-size:16px;" class="retdata" id="retudata">';
				$courseID = $row["courseID"];
				$dellink = "<a href=\"delete.php?courseID=" . $courseID . "\">
					<button>Delete</button></a>";
				echo $dellink."</br>";
				
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
                        
                if(isset($_POST['delete'])){
                	require ('database.php');
                	$deleteid = $_GET['id']; 
					$dequery = "DELETE FROM comment WHERE id = '$deleteid';";
					mysqli_query($Database, $dequery);
                	
                }
           }
	}


}

/*-------------------------------------------begin new courses--------------------------------------------------------*/
if(isset($_POST['newcoursebtn'])) {
    //echo date('Y-m-d');
    while ($row = mysqli_fetch_assoc($result)) {
        //Output data from each row

            @$addDate = new Courses();
            @$addDate::retnew($row);
    }
}
/*-------------------------------------------end new courses--------------------------------------------------------*/

/*-------------------------------------------begin old courses--------------------------------------------------------*/
//Use Returned Data(if any)
if (isset($_POST['oldcoursebtn'])) {
    
            while ($row = mysqli_fetch_assoc($result)) {
                //Output data from each row
						@$addDate = new Courses();
						@$addDate::retold($row);
                }
				}
            
/*-------------------------------------------end old courses--------------------------------------------------------*/
?>
<?php
	//Release returned data
	@mysqli_free_result($result);
?>
				
 </div>

</div></div>
</div>
  
</body>
</html>
