<!DOCTYPE HTML>
<?php

    if(isset($_POST['submit'])){
		include('database.php');
        $cname = trim($_POST['cname']);
		$conduct = trim($_POST['conduct']);
        $massege = trim($_POST['massage']);
        $member = trim($_POST['member']);
		$startdate = ($_POST['date']);
		$location = trim($_POST['location']);
		$gender = trim($_POST['gender']);
		
		
        if($member<0){
			$member = -$member;
		}
		
        $sqlinsert = "INSERT INTO courses(courseName,conduct,content,startingDate,members,gender,location) VALUES('$cname','$conduct','$massege','$startdate','$member','$gender','$location')";
        $mysql = mysqli_query($Database, $sqlinsert);
        if(!$mysql){
            die('error inserting new record');
        }//End of nested if statement
        header('Location:success.php');

    }//End of main if statement
?>
<html>
<head>
	<meta charset="utf-8">
	<title>Update Course Schedule</title>
    <link rel="shortcut icon"  type="png/ico" href="ICO/Capture.ico"/>
	<link href="styles/input.css" rel="stylesheet" type="text/css">


</head>
<body dir="ltr" class="ss-base-body" style="background: #f5f6f9;">

    <div class="ss-row-padding">
    <div class="ss-form-container">
        <!--div class="ss-form-image-container">
            <img src="background.jpg" style="width:999px; height:200px;">
        </div>-->
		<div>
		
    <h1><div class="ss-image-container"><img src="Capture.jpg" style="width:100px; height:75px;"></div>
	Update Course Schedule</h1>
	</div>
	<form action="Update Course Schedule.php" method="POST" enctype="multipart/form-data" name="form1">
    <input type="hidden" name="submit" value="true">
		<h3>
            <table><tr>
            <td>Course Manner</td>
            <td style="width:675px"><hr/></td>
            </tr></table>
        </h3>

		<p>
			<label for="coursename">Course Name</label>
			<select name="cname" id="course" required>
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
			
		</p>
		
		<p>
			<label for="courseconduct">Course Conduct</label>
			<input type="text" name="conduct" id="conduct"></input>
		</p>
		
		<p>
			<label for="coursecontent">Message</label>
			<textarea type="textArea" rows="5" cols="32"  name="massage" id="content"></textarea>
		</p>

        <h3>
            <table><tr>
            <td>Time Duration</td>
            <td style="width:675px"><hr/></td>
            </tr></table>
        </h3>
        <p>
            <label for="date">Starting Date</label>
            <input type="date" name="date" id="date" placeholder="MM/DD/YYYY" pattern="(0[1-9]|[12][0-9]|3[01])\/(0[1-9]|1[0-2])\/\d{4}" required/>
        </p>

        <h3>
            <table><tr>
            <td>Member Details</td>
            <td style="width:680px"><hr/></td>
            </tr></table>
        </h3>
		<p>
			<label for="member">Number Of Members</label>
			<input title="enter no of members" type="number" name="member" id="member" required>
		</p>
		<label for="gender">Gender</label>
		<select name="gender" id="course" required>
			<option value="Male">Male</option>
			<option value="Female">Female</option>
			<option value="Male/Female">Male/Female</option>
		</select>
		
		<h3>
            <table><tr>
            <td>Location Details</td>
            <td style="width:680px"><hr/></td>
            </tr></table>
        </h3>
		
		<p>
			<label for="location">Location</label>
			<select name="location" id="course" required>
			<option value="Kosgama">Kosgama</option>
			<option value="Peradeniya">Peradeniya</option>
			<option value="Anuradhapura">Anuradhapura</option>
		</select>
		</p>
		
		<p>
            <form action="success.php">
			<input title="Click here to Submit Updates" name="submit" type="submit" value="Submit"/>
            </form>
        </p>
    </form>
    
</div>
</div>

</body>
</html>


<?php
    //Record added
    

    //close database connection
    if(isset($_POST['submit'])){
        include('database.php');
        mysqli_close($Database);
    }
?>