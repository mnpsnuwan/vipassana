<?php
$connection = mysqli_connect('localhost','root','','vipassana');

if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}


session_start();

	if(isset($_POST['submit3'])){

		$pass1 = $_POST['n_pass'];
		$pass2 = $_POST['r_pass'];
		$id = $_SESSION['Index_no'];
		echo $id;
		$encrypt = md5($pass1);
		if($pass1==$pass2){


			$query1 = "UPDATE user_account SET password = '$encrypt' WHERE Index_no='$id'";
			$result = mysqli_query($connection,$query1);
		}

		else{
			echo "1";
		}


	}else{

		echo "2";
	}
	

?>