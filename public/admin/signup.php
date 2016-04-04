<?php
require_once('../../includes/initialize.php');
$message="";
$message1="";

if(isset($_POST['submit'])){
	$username = trim($_POST['username']);
	$password = trim($_POST['password1']);
	$password2 = trim($_POST['password2']);
	$first_name = trim($_POST['first_name']);
	$secound_name = trim($_POST['secound_name']);
	$gender = trim($_POST['gender']);
	$NIC = trim($_POST['nic']);
	$Email = trim($_POST['Email']);
	$mobile = trim($_POST['mobile']);
	$location = trim($_POST['location']);
    $create_birthday = ($_POST['date']);
    $birthday = $create_birthday[0].'-'.$create_birthday[1].'-'.$create_birthday[2];

	if(!empty($username) && !empty($password) && !empty($password2) && ($password)==($password2)){
		$result=User::find_by_username($username);
		if(!$result){
			$input_data =array();
			global $database;
			if(isset($_POST['username'])){$input_data['username']=$database->escape_string($username);}
			if(isset($_POST['password1'])){$input_data['password']=$database->escape_string($password);}
			if(isset($_POST['first_name'])){$input_data['first_name']=$database->escape_string($first_name);}
			if(isset($_POST['secound_name'])){$input_data['secound_name']=$database->escape_string($secound_name);}
			if(isset($_POST['date'])){$input_data['birthday']=$database->escape_string($birthday);}
			if(isset($_POST['gender'])){$input_data['gender']=$database->escape_string($gender);}
			if(isset($_POST['nic'])){$input_data['nic']=$database->escape_string($NIC);}
			if(isset($_POST['Email'])){$input_data['Email']=$database->escape_string($Email);}
			if(isset($_POST['mobile'])){$input_data['mobile']=$database->escape_string($mobile);}
			if(isset($_POST['location'])){$input_data['location']=$database->escape_string($location);}
			User::insert_data($input_data);
			$message="Your new account has been successfully created";
		}else{
			$message="An account already exists for this username. Please use a different address";
		}
	}else{
		$message1="You must enter all of the sign-up data, including the desired password twice";
	}
	//if(!$session->is_logged_in()){redirect_to("login.php");}
}else{
	 $username="";
	 $password="";
	 $password2="";
	 $first_name="";
	 $secound_name="";
     $gender="";
     $NIC="";
     $Email="";
     $mobile="";
}
?>
<html>
	<head>
		<title>Vipassana Meditation</title>
		<meta charset="utf-8">
		<title>Create an admin account</title>
    	<link rel="shortcut icon"  type="png/ico" href="../images/ICO/Capture.ico"/>
		<link href="../stylesheet/input.css" rel="stylesheet" type="text/css">
	</head>
	<body>
		<body dir="ltr" class="ss-base-body" style="background-image: bird.jpg;">
    <div class="ss-row-padding">
    <div class="ss-form-container">
        <!--div class="ss-form-image-container">
            <img src="background.jpg" style="width:999px; height:200px;">
        </div>-->
		<div>
		
    <h1><div class="ss-image-container"><img src="../images/Capture.jpg" style="width:100px; height:75px;"></div>
	Create an admin account</h1>
	</div>
	<form action="signup.php" method="post" name="form1">
        <h3>
            <p><?php echo output_massage($message);?></p>
            <table><tr>
            <td>Account Details</td>
            <td style="width:680px"><hr/></td>
            </tr></table>
        </h3>
        
	
		<p>
			<label for="username">Username</label>
			<input type="text" name="username" id="username"  required value=<?php echo htmlentities($username)?> >
		</p>
		<p>
			<label for="password">Create Password</label>
			<input type="password" name="password1" id="password" ontype="textChanged()" required value=<?php echo htmlentities($password)?> >
		</p>
		<p>
            <p><?php echo output_massage($message1); ?></p>
			<label for="password">Confirm Password</label>
			<input type="password" name="password2" ontype="textChanged()" id="confirmpassword" required value=<?php echo htmlentities($password2)?> >
		</p>

        <script type="text/javascript">
            function textChanged(){
            var pass = document.getElementById("pass");
            var text = document.getElementById("text");
 
            if(pass.value.length < 8){
                text.innerHTML = "bad";
                text.style.color = "red";
            }
            if(8 <= pass.value.length < 12){
                text.innerHTML = "good";
                text.style.color = "orange";
            }
            else{
                text.innerHTML = "virgio";
                text.style.color = "green";
                }
            }
        </script>

        <h3>
            <table><tr>
            <td>Personal Details</td>
            <td style="width:675px"><hr/></td>
            </tr></table>
        </h3>

		<p>
            <label for="name">Name</label>
            <input type="text" name="first_name" id="firstname" placeholder="First Name" required value=<?php echo htmlentities($first_name)?> >
            <input type="text" name="secound_name" id="lastname" placeholder="Last Name" required value=<?php echo htmlentities($secound_name)?> >
        </p>
        <p>
            <label for="date">Birthday</label>
            <!--input type="date" name="date" id="date" placeholder="DD/MM/YYYY" pattern="(0[1-9]|[12][0-9]|3[01])\/(0[1-9]|1[0-2])\/\d{4}" required/-->
            <select name="date[]" id="Year">
                <option value="--Year--">--Year--</option>
                <option value="1995">1995</option>
                <option value="1994">1994</option>
                <option value="1993">1993</option>
                <option value="1992">1992</option>
                <option value="1991">1991</option>
                <option value="1990">1990</option>
                <option value="1989">1989</option>
                <option value="1988">1988</option>
                <option value="1987">1987</option>
                <option value="1986">1986</option>
                <option value="1985">1985</option>
                <option value="1984">1984</option>
                <option value="1983">1983</option>
                <option value="1982">1982</option>
                <option value="1981">1981</option>
                <option value="1980">1980</option>
                <option value="1979">1979</option>
                <option value="1978">1978</option>
                <option value="1977">1977</option>
                <option value="1976">1976</option>
                <option value="1975">1975</option>
                <option value="1974">1974</option>
                <option value="1973">1973</option>
                <option value="1972">1972</option>
                <option value="1971">1971</option>
                <option value="1970">1970</option>
                <option value="1969">1969</option>
                <option value="1968">1968</option>
                <option value="1967">1967</option>
                <option value="1966">1966</option>
                <option value="1965">1965</option>
                <option value="1964">1964</option>
                <option value="1963">1963</option>
                <option value="1962">1962</option>
                <option value="1961">1961</option>
                <option value="1960">1960</option>
                <option value="1959">1959</option>
                <option value="1958">1958</option>
                <option value="1957">1957</option>
                <option value="1956">1956</option>
                <option value="1955">1955</option>
                <option value="1954">1954</option>
                <option value="1953">1953</option>
                <option value="1952">1952</option>
                <option value="1951">1951</option>
                <option value="1950">1950</option>
                <option value="1949">1949</option>
                <option value="1948">1948</option>
                <option value="1947">1947</option>
                <option value="1946">1946</option>
                <option value="1945">1945</option>
                <option value="1944">1944</option>
                <option value="1943">1943</option>
                <option value="1942">1942</option>
                <option value="1941">1941</option>
                <option value="1940">1940</option>
                <option value="1939">1939</option>
                <option value="1938">1938</option>
                <option value="1937">1937</option>
                <option value="1936">1936</option>
                <option value="1935">1935</option>
                <option value="1934">1934</option>
                <option value="1933">1933</option>
                <option value="1932">1932</option>
                <option value="1931">1931</option>
                <option value="1930">1930</option>
                <option value="1929">1929</option>
                <option value="1928">1928</option>
                <option value="1927">1927</option>
                <option value="1926">1926</option>
                <option value="1925">1925</option>
            </select>
            <select name="date[]" id="Month">
                <option value="--Month--">--Month--</option>
                <option value="01">January</option>
                <option value="02">February</option>
                <option value="03">March</option>
                <option value="04">April</option>
                <option value="05">May</option>
                <option value="06">June</option>
                <option value="07">July</option>
                <option value="08">August</option>
                <option value="09">September</option>
                <option value="10">October</option>
                <option value="11">November</option>
                <option value="12">December</option>
            </select>
            <select name="date[]" id="Date">
                <option value="--Date--">--Date--</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
                <option value="13">13</option>
                <option value="14">14</option>
                <option value="15">15</option>
                <option value="16">16</option>
                <option value="17">17</option>
                <option value="18">18</option>
                <option value="19">19</option>
                <option value="20">20</option>
                <option value="21">21</option>
                <option value="22">22</option>
                <option value="23">23</option>
                <option value="24">24</option>
                <option value="25">25</option>
                <option value="26">26</option>
                <option value="27">27</option>
                <option value="28">28</option>
                <option value="29">29</option>
                <option value="30">30</option>
                <option value="31">31</option>
            </select>

        </p>
        <p>
            <label for="gender">Gender</label>
            <input type="radio" name="gender" id="male" value="male">
            <label for="male">Male</label>
            <input type="radio" name="gender" id="female" value="female">
            <label for="female">Female</label>
        </p>
        <p>
			<label for="nic">NIC</label>
			<input title="Example: xxxxxxxxxxV" type="text" name="nic" id="nic" value=<?php echo htmlentities($NIC)?>>
		</p>

        <h3>
            <table><tr>
            <td>Contact Details</td>
            <td style="width:680px"><hr/></td>
            </tr></table>
        </h3>
		<p>
			<label for="email">Email</label>
			<input title="Example: user@example.com" type="email" name="Email" id="email" required value=<?php echo htmlentities($Email)?> >
		</p>
		<p>
			<label for="mobile">Mobile</label>
			<select name="mobile" id="mobile">
				<option value="+94">+94</option>
				<option value="+66">+66</option>
                <option value="+54">+54</option>
                <option value="+50">+50</option>
                <option value="+47">+47</option>
                <option value="+00">+00</option>
			</select>
			<input title="Example: 71xxxxxxx" type="tel" name="mobile" id="mobile" required value=<?php echo htmlentities($mobile)?> >
		</p><br/>
		
		<p>
			<label for="location">Location</label>
			<select name="location" id="location">
				<option>--Select Location--</option>
				<option value="Kosgama">Kosgama</option>
				<option value="Peradeniya">Peradeniya</option>
				<option value="Anuradhapura">Anuradhapura</option>
			</select>
		</p>
		<p>
			<input type="checkbox" name="approval" id="approval">
			<label for="approval">Get for Admin approval
		</p>
		<p>
			<input type="checkbox" name="terms" id="terms">
			<label for="terms">I agree to the Meditation Centre terms of services and privacy policy
		</p>
		<p>
			<input type="submit" name="submit" value="Submit"/>
            <a href="login.php"><input type="button" name="back-button" value="Back"></a>
            <button title="Click here to reset an form details" type="reset" value="Reset" for="reset">Reset</button>
            <a href="#">
            <button title="Click here to cancel the account creation" type="cancel" value="Cancel" for="cancel">Cancel</button>
            <a>
            
        </p>
    </form>
</div>
</div>
	</body>
</html>
<?php if(isset($database)){$database->close_connection();} ?>