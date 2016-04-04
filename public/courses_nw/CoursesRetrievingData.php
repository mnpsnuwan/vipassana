<html>
<head>
</head>
<body>
	<?php
	//Perform Database Quary
	include('database.php');
	include('quary.php');
	include('indexA.php');
	?>

</body>
</html>
<?php
	//close database connection
	mysqli_close($Database);
?>