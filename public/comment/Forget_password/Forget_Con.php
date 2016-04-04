<?php
$connection = mysqli_connect('localhost','root','','vipassana');

if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}


if(isset($_POST['submit'])){

	 $email = $_POST['email'];
     
        echo $email;
        $query = "SELECT * FROM user_account WHERE email='$email'";
        $result = mysqli_query($connection,$query);
        $Results = mysqli_fetch_assoc($result);

        
        session_start();
        if($Results>=0){

        

        $password = $Results['password'];
        $Id = $Results['Index_no'];
        $_SESSION['password']=$password;
        $_SESSION['Index_no'] =$Id;
        
    
        require_once('libraries/PHPMailer.php');
        
        define("EMAIL_USE_SMTP", true);
        define("EMAIL_SMTP_HOST", "ssl://smtp.gmail.com");
        define("EMAIL_SMTP_AUTH", true);
        define("EMAIL_SMTP_USERNAME", "vipassana.ucsc@gmail.com");
        define("EMAIL_SMTP_PASSWORD", "ucsc@123");
        define("EMAIL_SMTP_PORT", 465);
        define("EMAIL_SMTP_ENCRYPTION", "ssl");

        define("EMAIL_VERIFICATION_URL", "");
        define("EMAIL_VERIFICATION_FROM", "vipassana.ucsc@gmail.com");
        define("EMAIL_VERIFICATION_FROM_NAME", "Vipassana");
        define("EMAIL_VERIFICATION_SUBJECT", "Account activation for asd");
        define("EMAIL_VERIFICATION_CONTENT", $password);//body content

        //$user_email="kd4mat@gmail.com";

        $mail = new PHPMailer;

        // please look into the config/config.php for much more info on how to use this!
        // use SMTP or use mail()
        if (EMAIL_USE_SMTP) {
            // Set mailer to use SMTP
            $mail->IsSMTP();
         
            $mail->SMTPAuth = EMAIL_SMTP_AUTH;
            // Enable encryption, usually SSL/TLS
            if (defined(EMAIL_SMTP_ENCRYPTION)) {
                $mail->SMTPSecure = EMAIL_SMTP_ENCRYPTION;
            }
            // Specify host server
            $mail->Host = EMAIL_SMTP_HOST;
            $mail->Username = EMAIL_SMTP_USERNAME;
            $mail->Password = EMAIL_SMTP_PASSWORD;
            $mail->Port = EMAIL_SMTP_PORT;
        } else {
            $mail->IsMail();
        }

        $mail->From = EMAIL_VERIFICATION_FROM;
        $mail->FromName = EMAIL_VERIFICATION_FROM_NAME;
        $mail->AddAddress($email);
        $mail->Subject = EMAIL_VERIFICATION_SUBJECT;

        $link = EMAIL_VERIFICATION_URL;

        $mail->Body = EMAIL_VERIFICATION_CONTENT.' '.$link;

        if(!$mail->Send()) {
            echo $mail->ErrorInfo;
        
        } else {
            echo "send";
        
        }

        ?>
        

        <html>
        <head>
<link rel="stylesheet" type="text/css" href="foget.css">
</head>
    <body>
<div class="foget-main">
<div class="foget">
    <form action="Forget_Con2.php" method="POST" >

    <table >
        <tr><td><h2>Enter Your Code</h2></td></tr>
        <tr><td><input type="text" id="code" name="code"></td></tr>
        <tr><td><input type="submit" id ="submit2" name="submit2"></td></tr>
    </table>

    </form>
</div>
</div>
    </body>
    </html>

    <?php 
}
          
    }
  
?>