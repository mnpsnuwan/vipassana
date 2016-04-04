<html>
<head>
<link rel="shortcut icon" href="../Vipassana Meditation files/bleaf.gif" type="image/x-icon">
	<link rel="shortcut icon" href="./Vipassana Meditation files/bleaf.gif" type="image/x-icon">
</head>
<body>
	<?php
	//Perform Database Quary
	include('database.php');
	include('quary.php');
	include('CoursesReturnedData.php');
	?>

</body>
</html>
<?php
	//close database connection
	mysqli_close($Database);
?>