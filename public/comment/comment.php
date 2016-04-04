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

        <link href="../Vipassana Meditation files/application.css" media="all" rel="stylesheet">
        <link rel = "stylesheet" type = "text/css" href = "../Vipassana Meditation files/header.css"></link>
        <link rel = "stylesheet" type = "text/css" href = "../Vipassana Meditation files/footer.css"></link>

        <link href="css.css" rel="stylesheet" type="text/css" />

        <link href="css/layout.css" rel="stylesheet"/>
        <script type="text/javascript" src="js/jquery.js"></script>
		<script type="text/javascript" src="js/jquerymy.js"></script>

        <link rel="stylesheet" type="text/css" href="../navicss/NavihomePageTestCSS.css">
        <link rel="stylesheet" type="text/css" href="../navicss/NaviHomePageTestCSS33.css">
        <link href="../navicss/sideNavigation.css" rel="stylesheet" type="text/css" />
        <style type="text/css">
            .Courses {
                position: absolute;
                left: 260px;
                top: 150px;
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
        </style>


        <script>
            $(document).ready(function () {
                $("button").click(function () {

                    $("#comment-list").fadeToggle(1000);
                    //$("#div2").fadeToggle("slow");
                    //$("#div3").fadeToggle(3000);
                });
            });
        </script>

    </head>

    <body >
<div class="page">
            <header>
                <?php
                require_once("../header.php");
                ?>
            </header>
<ul id="menu">
            <div class="menu-wrap" >


                <!--...........................navigation bar...........................................-->
                <nav class="menu">

                    <ul class="clearfix">

                        <!-- /////////////////////Home////////////////////////////////////////////////////////////////////////////////////// -->

                        <li><a href="../index.php"><img src="./Vipassana Meditation files/home.png" style="width:30px;height:30px;"></a></li>


                        <!-- /////////////////////Couses//////////////////////////////////////////////////////////////////////////////////// -->
                        <li>
                            <a href="#">Courses <span class="arrow">&#9660;</span></a>

                            <div class="dropdown_4columns"><!-- Begin 4 columns container -->

                                <div class="col_4">
                                    <h2>You can register for following Courses </h2>
                                </div>

                                <ul class="sub-menu">
                                    <li><a href="../courses/Vipassana Meditation Courses.php">New Students Courses</a></li>
                                    <li><a href="../courses/Vipassana Meditation Courses.php">Old Students Courses</a></li>
                                    <li><a href="../courses/Vipassana Meditation Courses.php">Children/Teens Courses </a></li>
                                    <li><a href="../courses/Vipassana Meditation Courses.php">Executives Courses</a></li>
                                </ul>

                            </div>
                        </li>

                        <!--/////////////////////Donations/////////////////////////////////////////////////////////////////////////////////-->  
                        <li>
                            <a href="#">Donations <span class="arrow">&#9660;</span></a>

                            <div class="dropdown_4columns"><!-- Begin 4 columns container -->

                                <div class="col_3">
                                    <h2>You can donate using this types</h2>
                                </div>

                                <ul class="sub-menu">
                                    <li><a href="../donation/donation_step1.php">Cash donations </a></li>
                                    <li><a href="../donation/donation_step1.php">Material donations </a></li>
                                    <li><a href="../donation/donation_step1.php">Bill payments </a></li> 
                                </ul>

                            </div>
                        </li>

                        <!-- /////////////////////Photos/////////////////////////////////////////////////////////////////////////////////////-->
                        <!-- <li class="current-item"><a href="#">News forum</a></li>  -->
                        <li><a href="./index.php">News forum</a></li>

                        <!--/////////////////////Site Help//////////////////////////////////////////////////////////////////////////////////-->         
                        <li><a href="#">Gallery</a></li>

                    </ul>

                </nav>
            </div>
        </ul>

    
    
        <div class="top-content">
            <div class = "Nav-left">
                            <ul>
                                <li><a href="../sidebar/What is vipassana.php">What is Vipassana ? </a></li>
                                <li><a href="../sidebar/Mr S.N Goyanka.php">Mr S.N Goenka</a></li>
                                <li><a href="../sidebar/The Art of Living.php">The Art of Living: Vipassana Meditation.</a></li>
                                <li><a href="../sidebar/The code of discipling.php">The Code of Discipline.</a></li>
                                <li><a href="../sidebar/Technique of vipassana.php">Technique of Vipassana Meditation.</a></li>
                                <li><a href="../sidebar/Locations in Sri Lanka.php">Locations in Srilanka.</a></li>
                                <li><a href="../sidebar/Contacts us.php">Contacts us</a></li>

                            </ul>
                        </div>



                        <div class="body-content" >
                            <h2>News Forum</h2>

                            <div class="wrapper">
                                <div class="comment-wrapper">

                                    <h3 class="comment-title">User feedback.....</h3>
                                    <div id="comment-fade-btn" class="comment-fade-btn-wrapper">
                                        <button>Hide/Show Comments</button>
                                    </div>
									<?php
									@session_start();
									$name = $_SESSION['user_name'];
									?>
                                    <form action="comment.php" method="POST">
                                        
                                        <?php
                                        if (isset($_POST['submit'])) {
                                            include('connect.php');
                                            $comment = trim($_POST['comment']);
											@session_start();
											@require_once("./login.php");
	
                                            if ($name && $comment) {
                                                $query = "INSERT INTO comment(name,comment) VALUES('$name','$comment')";
                                                $insert = mysqli_query($Database, $query);
                                                //header("Location: success.php");
                                            } else {
                                                echo '<p style="color:red; text-align:center;">please fill out the all the fields<p>';
                                            }
                                        }
                                        ?>
										
                                        <div class="comment-insert">
                                            <!--h3 class="who-says"><span>Says By:</span> 
                                                <input type="text" name="name"/></h3-->
                                            <div class="comment-insert-container">
                                                <textarea name="comment" id="comment-post-text" class="comment-insert-text"></textarea>
                                            </div>
                                            <div name="submit" id="comment-post-btn" class="comment-post-btn-wrapper">
                                                <input style="background:#005fff; width:50px; height:20px" type="submit" name="submit" value="Post">
                                            </div>
                                        </div>
                                        <div id="comment-list" class="comment-list">
                                            <ul class="comment-holder-ul">

                                                <!--div class="user-img">
                                                        <img src="./images/user.png" class="user-img-pic"/>
                                                </div-->
                                                <?php
												//$userquery = ""
                                                require_once('connect.php');
                                                require_once ('query.php');
                                                while ($rows = mysqli_fetch_assoc($result)) {
                                                    $id = $rows['id'];
                                                    $name = $rows['name'];
                                                    $comment = $rows['comment'];
														$dellink = "<a href=\"delete.php?id=" . $id . "\"><span>X</span></a>";

                                                    echo '<li class="comment-holder"><div class="user-img"><img src="./images/user.png" class="user-img-pic"/></div><div class="comment-body"><h3 class="username-field">' . $name . '</h3><div class="comment-text">' . $comment . '</div><div class="comment-button-holder"><ul><li class="delete-btn">' . $dellink . '</li></ul></div></li>';
                                                }
                                                ?>
                                            </ul>
                                        </div>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <footer>
                <?php
                require_once("../footer.php");
                ?>
                </footer>
            </div>


    </body>
</html>