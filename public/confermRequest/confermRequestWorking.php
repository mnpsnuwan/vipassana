<?php
session_start();
?>
<head>
    
    
    
    
    
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title></title>
    <style type="text/css">
        .formOne {
            height: 750px;
            width: 860px;
            margin-top: 0px;
            
            margin-bottom: auto;
            margin-left: 0px;
			margin-right: 0px;
            background-color: #F3F3F3;
             /*border: thick solid #FFFFFF;-->*/
        }
    </style>


    <link rel = "stylesheet" type = "text/css" href = "./test date/view.css"></link>
    <script type="text/javascript" src="./test date/view.js"></script>
<script type="text/javascript" src="./test date/calendar.js"></script>
    <style type="text/css">
        body,td,th {
            font-size: 18px;
            border: 1px ridge #BFDFFF;
        }
        .head1 {
            color: #0033CC;
            font-size: 30px;
        }
        .fontSize {
            font-size: 24px;
            color: #00CC33;
        }
        .star {
            color: #F00;
        }
        input[type="text"]{ line-height: 22px; }
        .iterlic {
            font-style: italic;
        }
        .formOne #form1 table tr td p #sprytextfield6 .textfieldRequiredMsg strong {
            font-weight: bold;
        }
        .formOne #form1 table tr td p #sprytextfield6 .textfieldRequiredMsg strong {
            font-weight: normal;
        }
        .formOne #form1 table tr td p #sprytextarea1 .textareaRequiredMsg em {
            color: #FF0000;
        }
        .formOne #form1 table tr td #sprycheckbox1 .checkboxRequiredMsg em {
            color: #FF0000;
        }
        .formOne #form1 table tr td p label #spryradio1 .radioRequiredMsg {
            color: #FF0000;
        }
        .heading2 {
            font-size: 22px;
            color: #0C3;
        }
        .formOne #form1 #ContactForm tr td p #back {
            color: #18B4E7;
        }
        .formOne #form1 #ContactForm tr td p #next {
            color: #2788D8;
        }
        .formOne #form1 #ContactForm tr td span label {
            color: #00F;
        }
        .formOne #form1 #ContactForm tr td strong label {
            color: #00F;
        }
        .formOne #form1 #ContactForm tr td p label {
            color: #00F;
        }
        .formOne #form1 #ContactForm tr td label {
            color: #00F;
        }
        .kk {
            color: #000;
        }
    tr td {
	color: #008000;
}
    .formOne form #ContactForm tr td {
	color: #004080;
}
    </style>
    
    
    
    
    
</head>

<body>
    
    
    
    
    
    <div class="formOne">
        <p>&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;  &nbsp;&nbsp;  &nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;<strong class="head1"><span class="fontSize">Registration Request</span></strong></p>




        <?php
        include_once "database.php";
        include_once "allQuery.php";

        $database = new MySQLDatabase();
        $clsQery = new Querys();
        $database->open_connection();

        //$query = "SELECT * FROM registerform where RegNo = ( SELECT MIN(RegNo) FROM registerform )  ";    //   you can use this query to get minimum valuf of row                            
        $queryB = "SELECT max(RegNo) FROM registerform";
        $resultB = $clsQery->Query_connection($queryB);
        $max = mysqli_fetch_row($resultB);

        $queryA = "SELECT min(RegNo) FROM registerform";
        $resultA = $clsQery->Query_connection($queryA);
        $min = mysqli_fetch_row($resultA);

        if ($_SESSION['total'] == 0) {
            $_SESSION['total'] = $min[0];
        }
        $total = $_SESSION['total'];
        $totalNum = $total - 1;

        /* this is the next button function */

        if (isset($_POST['next'])) {

            if ($total <= $max[0]  ) {
                $qre1 = "SELECT * FROM registerform WHERE RegNo >  $totalNum ORDER BY RegNo ASC LIMIT 1 ";
            }
            echo "total" . $total . "\n\n///";
            echo "totalNum" . $totalNum . "\n\n///";
            $getData1 = $clsQery->Query_connection($qre1);
            $array = mysqli_fetch_array($getData1);

            if ($_SESSION['total'] < $max[0] ) {
                $_SESSION['total'] ++;
            }
            echo "session" . $_SESSION['total'];
        }

        /* this is the back button function */ 
        else if (isset($_POST['back'])) {

            if ($total >= $min[0] - 1) {
                $qre2 = "SELECT * FROM registerform WHERE RegNo > $totalNum ORDER BY RegNo ASC LIMIT 1 ";
            }
            echo "total" . $total . "\n\n///";
            echo "totalNum" . $totalNum . "\n\n///";
            $getData2 = $clsQery->Query_connection($qre2);
            $array = mysqli_fetch_array($getData2);

            if ($_SESSION['total'] > $min[0]) {
                $_SESSION['total'] --;
            }
            echo "session" . $_SESSION['total'];
            
            /*.......................this is the conferm button.......................*/
        } else if (isset($_POST['conferm'])) {
            
            $copyQuery = $clsQery->copyQuery($total);
            $deleteQueryRegfm = $clsQery->deleteQueryRegfm($total);

            $clsQery->Query_connection($copyQuery);
            $clsQery->Query_connection($deleteQueryRegfm);
            
            
            /*...................There is the email  part for conferm request............*/
            
            
            
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
        define("EMAIL_VERIFICATION_FROM_NAME", "VMP");
        define("EMAIL_VERIFICATION_SUBJECT", "Account activation for asd");
        define("EMAIL_VERIFICATION_CONTENT", "We Conserned about your Meditation Request,You have selected you to the Meditation Course.");//body content

        $user_email="vipassana.ucsc@gmail.com";

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
        $mail->AddAddress("dusman.nalin@gmail.com");
        $mail->Subject = EMAIL_VERIFICATION_SUBJECT;

        $link = EMAIL_VERIFICATION_URL;

        $mail->Body = EMAIL_VERIFICATION_CONTENT.' '.$link;

        if(!$mail->Send()) {
            echo $mail->ErrorInfo;
        
        } else {
            echo "send";
        
        }

            
            
//////////////////////////////////////(there is a next button part in conferm buton)////////////
        if ($total <= $max[0]) {
                $qre1 = "SELECT * FROM registerform WHERE RegNo >  $totalNum ORDER BY RegNo ASC LIMIT 1 ";
        }
            echo "total" . $total . "\n\n///";
            echo "totalNum" . $totalNum . "\n\n///";

            $getData1 = $clsQery->Query_connection($qre1);
            $array = mysqli_fetch_array($getData1);

            if ($_SESSION['total'] < $max[0]) {
                $_SESSION['total'] ++;
            }
            echo "session" . $_SESSION['total'];
        
           
    }
    
    
    /*.......................this is the reject button button.......................*/  
    else if (isset($_POST['Submit'])) {
                                               
            $deleteQueryRegfm = $clsQery->deleteQueryRegfm($total);           
            $clsQery->Query_connection($deleteQueryRegfm);
           
    
    //////////////////////////////////////(there is a next button part in reject buton)////////////////
        if ($total <= $max[0]  ) {
                $qre1 = "SELECT * FROM registerform WHERE RegNo >  $totalNum ORDER BY RegNo ASC LIMIT 1 ";
            }
            echo "total" . $total . "\n\n///";
            echo "totalNum" . $totalNum . "\n\n///";
            $getData1 = $clsQery->Query_connection($qre1);
            $array = mysqli_fetch_array($getData1);

            if ($_SESSION['total'] < $max[0] ) {
                $_SESSION['total'] ++;
            }
            echo "session" . $_SESSION['total'];             
   } 
   else { /* this query will run when start the table */
            $qre2 = "SELECT * FROM registerform WHERE RegNo = $min[0]";
            $getData2 = $clsQery->Query_connection($qre2);
            $array = mysqli_fetch_array($getData2);
            $_SESSION['total'] = $min[0];
            echo $_SESSION['total'];
        }
        
        
   /*..................................  reject btn...............*/     
    /*  
        if (isset($_POST['Submit'])) {
                                               
            $deleteQueryRegfm = $clsQery->deleteQueryRegfm($total);           
            $clsQery->Query_connection($deleteQueryRegfm);

            
        if ($total <= $max[0]) {
                $qre1 = "SELECT * FROM registerform WHERE RegNo >  $totalNum ORDER BY RegNo ASC LIMIT 1 ";
            }
            echo "total" . $total . "\n\n///";
            echo "totalNum" . $totalNum . "\n\n///";

            $getData1 = $clsQery->Query_connection($qre1);
            $array = mysqli_fetch_array($getData1);

            if ($_SESSION['total'] < $max[0]) {
                $_SESSION['total'] ++;
            }
            echo "session" . $_SESSION['total'];
            
        } else { /* this query will run when start the table *//*
            $qre2 = "SELECT * FROM registerform WHERE RegNo = $min[0]";
            $getData2 = $clsQery->Query_connection($qre2);
            $array = mysqli_fetch_array($getData2);
            $_SESSION['total'] = $min[0];
            echo $_SESSION['total'];
        }
        */   
        
        ?>
        <form action="confermRequestWorking.php" method="POST">
            <table width="873" border="1" align="right" cellpadding="9" cellspacing="1" id="ContactForm">
                <tr>
                    <td height="14" colspan="2">&nbsp;1.<strong> Course Date
                            :</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span>
                            <label for="element_6_2">  <?php echo $array[4] ?> /<span class="kk">D</span>&nbsp; &nbsp; &nbsp;  </label>  

                        </span>

                        <span>&nbsp;              
                            <label for="element_6_1"><?php echo $array[5] ?>/<span class="kk">M</span>&nbsp;&nbsp;&nbsp;&nbsp;</label>
                        </span><span>
                            <label for="element_6_3">&nbsp;&nbsp;<?php echo $array[6] ?>  /<span class="kk">Y</span></label>
                  </span></td>
                </tr>

                <tr>
                    <td height="7" colspan="2"><span>
                            <label for="element_6_3">&nbsp;</label>2.<strong> Before registered......?&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;  </strong></span><?php echo $array[8] ?>  </td>
                </tr>

                <tr>
                    <td height="7" colspan="2">&nbsp;3. <strong>Name :</strong><?php echo $array[7] . "  " . $array[8]; ?> </td>
                </tr>


                <tr>
                    <td width="451" height="10"><strong>&nbsp;4. Birthday :</strong><span>&nbsp; &nbsp;&nbsp;

                            &nbsp;<?php echo $array[9] ?>   &nbsp;/D &nbsp; &nbsp; <?php echo $array[10] ?>  &nbsp; 

                            &nbsp; /M&nbsp; &nbsp; &nbsp; <?php echo $array[11] ?>  &nbsp; &nbsp; 

                            &nbsp;&nbsp; /</span><span>Y
                            &nbsp;</span></td>
                    <td width="377" height="10"><strong>5. Gender :&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $array[12] ?>  &nbsp;&nbsp;</strong></td>
                </tr>

                <tr>
                    <td height="34"><strong>&nbsp;6. Email : 
                            &nbsp; 
                            &nbsp;<?php echo $array[8] ?>   
                        </strong></td>
                    <td height="34"><strong><strong>7. NIC :&nbsp; <?php echo $array[13] ?>  </strong></strong></td>
                </tr>

                <tr>
                    <td height="18" colspan="2"><strong>&nbsp;8. Postal Address
                            :&nbsp;<?php echo $array[15] . "  " . $array[16]; ?> </strong></td>
                </tr>

                <tr>
                    <td height="16" colspan="2"><strong>&nbsp;9. Country :
                            <label for="country"></label>
                            &nbsp; <?php echo $array[17] ?>  &nbsp;&nbsp;</strong></td>
                </tr>

                <tr>
                    <td height="48"> &nbsp;10. <strong>Phone :</strong>&nbsp; &nbsp;<?php echo $array[8] ?>  &nbsp; &nbsp;</td>
                    <td height="48">&nbsp;<strong>11. Fax:&nbsp; <?php echo $array[18] ?>  </strong></td>
                </tr>


                <tr>
                    <td><strong> &nbsp;12. Mother Tounge:&nbsp; &nbsp;<?php echo $array[20] ?>   &nbsp; </strong></td>
                    <td><strong>13.Other Languages Known :&nbsp;  <?php echo $array[21] ?>  </strong></td>
                </tr>


                <tr>
                    <td colspan="2"><strong>&nbsp;14. Your job and title within your firm :&nbsp;&nbsp;<?php echo $array[22] ?>  </strong></td>
                </tr>

                <tr>
                    <td colspan="2"><strong>&nbsp;15. Any physical or mental health problems (if yes please give details/ if pregnant, mention about that) :&nbsp; <?php echo $array[23] ?>  </strong></td>
                </tr>

                <tr>
                    <td height="82" colspan="2"><p><strong>  16. Are you practicing / have been practicing any other form of meditation technique(if yes please give</strong><strong>&nbsp;&nbsp;&nbsp; details)  :</strong>&nbsp; &nbsp;<?php echo $array[24] ?>  </p></td>
                </tr>

                <tr>
                    <td height="113" colspan="2">&nbsp;&nbsp; &nbsp;
                        &nbsp;&nbsp; &nbsp;
                        <input name="back" type="submit" class="fontSize" id="back" value="Back">
&nbsp; &nbsp;
<input name="next" type="submit" class="fontSize" id="next" value="Next">
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp; <input name="conferm" type="submit" class="fontSize" id="create" value="Conferm" />                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input name="Submit" type="submit" class="fontSize" id="reset" value="Reject" />
                     </td>
              </tr>

<?php
//}}
?>

            </table>
            &nbsp;        
        </form>
    </div> 
    
    
    
    
    
</body>
</html>

