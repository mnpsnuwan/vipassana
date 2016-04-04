<?php
@session_start();
$username = $_POST['name'];
$password =($_POST['pwd']);
$mysqli=mysqli_connect('localhost','root','','vipassana');

$query = "SELECT * FROM user_account WHERE user_name='$username' AND password='$password'";
$result = mysqli_query($mysqli,$query)or die(mysqli_error());
$num_row = mysqli_num_rows($result);
		$row=mysqli_fetch_array($result);
		$usernam = $row['user_name'];
		if( $num_row >=1 ) {
			echo 'true';
			$_SESSION['user_name']=$username;
		}
		else{
			//echo 'false';
		}
		$_SESSION['user_name']=$username;
?>