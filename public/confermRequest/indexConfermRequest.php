<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../stylesheet/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../stylesheet/main.css">
	<link rel="stylesheet" type="text/css" href="../stylesheet/mycssfile.css">
	<link rel="shortcut icon"  type="png/ico" href="../images/ICO/Capture.ico"/>

	<script type="text/javascript" src="../javaScripts/jquery-1.9.1.min.js"></script>
	<script type="text/javascript" src="../javaScripts/bootstrap.min.js"></script>
	<script type="text/javascript">
	$('.dropdown-toggle').dropdown()
	</script>
	<title>Vipassana Administrater</title>
        
      <!--================================================================================================================-->  
        
           
      
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title></title>
    <style type="text/css">
        .formOne {
            height: 650px;
            width: 867px;
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
        
 <!--========================================================================================================================-->     
        
</head>
<body>
	<div class="page-header">
		<h3>Vipassana Administrator  <small>Sri Lanka</small></h3>
	</div>
	<div>  <!-- navigation bar -->
		<ul class="nav nav-tabs">
			<li role="presentation" class="active"><a href="#">Home</a></li>
			<li role="presentation" class="dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown" type="button" aria-haspopup="true" aria-expanded="true">
					Registration <span class="caret"></span>
				</a>
				<ul class="dropdown-menu">
					<li><a href="../RegisterTest2/indexRegFormNewStudent.php">New Students</a></li>
                                        <li><a href="../RegisterTest2/indexRegisterOldStudent.php">Old Students</a></li>
                                        <li><a href="../RegisterTest2/indexRegisteeTeen.php">Children/Teen</a></li>
                                        <li><a href="../RegisterTest2/indexRegFormInstroctor.php">Instructores</a></li>						
				</ul>
			</li>
                        
                        
			<li role="presentation" class="dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown" type="button" aria-haspopup="true" aria-expanded="true">
					Course <span class="caret"></span>
				</a>
				<ul class="dropdown-menu">
					<li><a href="../updateCourseSchedule/indexUpdateCourseSchedule.php">Update Course Schedule</a></li>
                                        <li><a href="../CourseAttends/CourseAttends.php" class="list-group-item ">Course Attendance</a></li>
				</ul>
			</li>
                        
                        
			<li role="presentation" class="dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown" type="button" aria-haspopup="true" aria-expanded="true">
					Report <span class="caret"></span>
				</a>
				<ul class="dropdown-menu">
					<li><a href="../Reports/reportParticipation.php">Course Participation</a></li>
					<li><a href="../Reports/telephoneList.php">Telephone List</a></li>
					<li><a href="../Reports/TeacherList.php">Registered Teachers</a></li>
				</ul>
			</li>
                        
                        
			<li role="presentation"><a href="donation_notification.php">Donation</a></li>
			<li role="presentation"><a href="#">Finace</a></li>
			<li role="presentation"><a href="#">Setting</a></li>
		</ul>
	</div>
    
    
	<div class="row">
            
            
            
	  <div class="col-md-4 col-lg-4 panel panel-default">  <!-- side panel -->
			<div class="panel-body">
				<div class="row">
                                    
					<div class="col-md-6 col-lg-6">
						<img src="../images/admin.jpg" alt="admin_pic" class="img-thumbnail">
					</div>
                                    
					<div class="col-md-4 col-lg-4">
						<p><h4>Administrator</h4><hr>
							<a href="view_profile.php" class="btn btn-default" role="button">Setting</a> <hr>
							<div>
								<form action="logout.php" method="post">
								<input class="btn btn-default" type="submit" value="Log Out" name="log_out">
								</form>
							</div>
						</p>
					</div>
				</div>
                            
                            
                            
				<div class="panel-body">
					<hr>
					<h4>Information</h4>
					<p>This is information about current loged admin</p>
					<div class="list-group">
						  <a href="../updateCourseSchedule/indexUpdateCourseSchedule.php" class="list-group-item ">Update Course Schedule</a>                             
						<a href="../CourseAttends/CourseAttends.php" class="list-group-item ">Course Attendance</a>
                                                <a href="../confermRequest/indexConfermRequest.php" class="list-group-item active" >Registration Request</a>
					</div>
				</div>
                            
                            
                            
                            
			</div>
		</div>
            
            
 <!-- =============================================End=============================================================== -->            
            
            
		<div class="col-md-8 col-lg-8 panel panel-default">
		  <div class="panel-body">
                      
   <!--==========================================Start=====================================================-->
		   
   
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
        //    echo "total" . $total . "\n\n///";
        //    echo "totalNum" . $totalNum . "\n\n///";
            $getData1 = $clsQery->Query_connection($qre1);
            $array = mysqli_fetch_array($getData1);

            if ($_SESSION['total'] < $max[0] ) {
                $_SESSION['total'] ++;
            }
        //    echo "session" . $_SESSION['total'];
        }

        /* this is the back button function */ 
        else if (isset($_POST['back'])) {

            if ($total >= $min[0] - 1) {
                $qre2 = "SELECT * FROM registerform WHERE RegNo > $totalNum ORDER BY RegNo ASC LIMIT 1 ";
            }
         //   echo "total" . $total . "\n\n///";
         //   echo "totalNum" . $totalNum . "\n\n///";
            $getData2 = $clsQery->Query_connection($qre2);
            $array = mysqli_fetch_array($getData2);

            if ($_SESSION['total'] > $min[0]) {
                $_SESSION['total'] --;
            }
         //   echo "session" . $_SESSION['total'];
            
            /*.......................this is the conferm button.......................*/
        } else if (isset($_POST['conferm'])) {
            
            $copyQuery = $clsQery->copyQuery($total);
            $deleteQueryRegfm = $clsQery->deleteQueryRegfm($total);

            $clsQery->Query_connection($copyQuery);
            $clsQery->Query_connection($deleteQueryRegfm);
            
            
//////////////////////////////////////(there is a next button part in conferm buton)////////////
        if ($total <= $max[0]) {
                $qre1 = "SELECT * FROM registerform WHERE RegNo >  $totalNum ORDER BY RegNo ASC LIMIT 1 ";
        }
           // echo "total" . $total . "\n\n///";
          //  echo "totalNum" . $totalNum . "\n\n///";

            $getData1 = $clsQery->Query_connection($qre1);
            $array = mysqli_fetch_array($getData1);

            if ($_SESSION['total'] < $max[0]) {
                $_SESSION['total'] ++;
            }
        //    echo "session" . $_SESSION['total'];
        
        /*.......................this is the reject button button.......................*/     
    }
    else if (isset($_POST['Submit'])) {
                                               
            $deleteQueryRegfm = $clsQery->deleteQueryRegfm($total);           
            $clsQery->Query_connection($deleteQueryRegfm);
           
    
    //////////////////////////////////////(there is a back button part in reject buton)////////////////
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
         //   echo "session" . $_SESSION['total'];                
   } 
   else { /* this query will run when start the table */
            $qre2 = "SELECT * FROM registerform WHERE RegNo = $min[0]";
            $getData2 = $clsQery->Query_connection($qre2);
            $array = mysqli_fetch_array($getData2);
            $_SESSION['total'] = $min[0];
          //  echo $_SESSION['total'];
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
        <form action="indexConfermRequest.php" method="POST">
            <table width="873" border="1" align="right" cellpadding="9" cellspacing="1" id="ContactForm">
                <tr>
                    <td height="14" colspan="2">&nbsp;1. Course Date<strong> :</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span>
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
                            <label for="element_6_3">&nbsp;</label>2. Before registered<strong>...</strong>...?&nbsp;&nbsp; <strong>&nbsp; &nbsp;&nbsp;  </strong></span><?php echo $array[8] ?>  </td>
                </tr>

                <tr>
                    <td height="7" colspan="2">&nbsp;3. Name<strong> :</strong><?php echo $array[7] . "  " . $array[8]; ?> </td>
                </tr>


                <tr>
                    <td width="418" height="10"><strong>&nbsp;</strong>4. Birthday <strong>:</strong><span>&nbsp; &nbsp;&nbsp;

                            &nbsp;<?php echo $array[9] ?>   &nbsp;/D &nbsp; &nbsp; <?php echo $array[10] ?>  &nbsp; 

                            &nbsp; /M&nbsp; &nbsp; &nbsp; <?php echo $array[11] ?>  &nbsp; &nbsp; 

                            &nbsp;&nbsp; /Y
                    &nbsp;</span></td>
                    <td width="410" height="10">5. Gender<strong> :&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $array[12] ?>  &nbsp;&nbsp;</strong></td>
                </tr>

                <tr>
                    <td height="34">&nbsp;6. Email : 
                            <strong>&nbsp; 
                            &nbsp;<?php echo $array[8] ?>   
                        </strong></td>
                    <td height="34">7. NIC<strong><strong> :&nbsp; <?php echo $array[13] ?>  </strong></strong></td>
                </tr>

                <tr>
                    <td height="18" colspan="2">&nbsp;8. Postal Address<strong> :&nbsp;<?php echo $array[15] . "  " . $array[16]; ?> </strong></td>
                </tr>

                <tr>
                    <td height="16" colspan="2">&nbsp;9. Country :<strong> &nbsp; <?php echo $array[17] ?>  &nbsp;&nbsp;</strong></td>
                </tr>

                <tr>
                    <td height="48"> &nbsp;10. Phone :&nbsp; &nbsp;<?php echo $array[8] ?>  &nbsp; &nbsp;</td>
                    <td height="48">&nbsp;11. Fax:<strong>&nbsp; <?php echo $array[18] ?>  </strong></td>
                </tr>


                <tr>
                    <td><strong> &nbsp;</strong>12. Mother Tounge:&nbsp;<strong> &nbsp;<?php echo $array[20] ?>   &nbsp; </strong></td>
                    <td>13.Other Languages Known :<strong>&nbsp;  <?php echo $array[21] ?>  </strong></td>
                </tr>


                <tr>
                    <td colspan="2"><strong>&nbsp;</strong>14. Your job and title within your firm :<strong>&nbsp;&nbsp;<?php echo $array[22] ?>  </strong></td>
                </tr>

                <tr>
                    <td colspan="2">&nbsp;15. Any physical or mental health problems (if yes please give details/ if pregnant, mention about that) :<strong>&nbsp; <?php echo $array[23] ?>  </strong></td>
                </tr>

                <tr>
                    <td height="82" colspan="2"><p> 16. Are you practicing / have been practicing any other form of meditation technique(if yes please give&nbsp;&nbsp;&nbsp; details)  :&nbsp; &nbsp;<?php echo $array[24] ?>  </p></td>
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
            
    <!----===========================================================================================================-->       
		  </div>
		</div>
            
            
            
            
	</div>
</body>
</html>
<?php if(isset($database)){$database->close_connection();} ?>