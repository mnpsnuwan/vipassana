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


        <link href="../Vipassana Meditation files/coursescss.css" rel="stylesheet" type="text/css" />

        <link rel="stylesheet" type="text/css" href="../navicss/NavihomePageTestCSS.css">
        <link rel="stylesheet" type="text/css" href="../navicss/NaviHomePageTestCSS33.css">
        <link href="../navicss/sideNavigation.css" rel="stylesheet" type="text/css" />
        <style type="text/css">
            .Courses {
	position: absolute;
	left: 260px;
	top: 170px;
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

                        <li><a href="../index.php"><img src="../Vipassana Meditation files/home.png" style="width:30px;height:30px;"></a></li>


                        <!-- /////////////////////Couses//////////////////////////////////////////////////////////////////////////////////// -->
                        <li>
                            <a href="#">Courses <span class="arrow">&#9660;</span></a>

                            <div class="dropdown_4columns"><!-- Begin 4 columns container -->

                                <div class="col_4">
                                    <h2>You can register for following Courses </h2>
                                </div>

                                <ul class="sub-menu">
                                    <li><a href="./Vipassana Meditation Courses.php">New Students Courses</a></li>
                                    <li><a href="./Vipassana Meditation Courses.php">Old Students Courses</a></li>
                                    <li><a href="./Vipassana Meditation Courses.php">Children/Teens Courses </a></li>
                                    <li><a href="./Vipassana Meditation Courses.php">Executives Courses</a></li>
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
                        <li><a href="../comment/index.php">News forum</a></li>

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
                <div class="body-content-detail">
                    <h2>Courses</h2>

                    <!--form action="retrieving_data.php" method="post">
                    <?php
                    //echo '<button id="coursebtn" title="Click here to view Course Shedule" value="Course Shedule" for="courseShedule">Search Courses</button>';
                    ?>
                    </form-->


                    <div id="tab-group">
                        <h2 class="tab-header active" id="tab-header-1">New Student</h2>
                        <div class="tab-content active" id="tab-content-1">
                            <form action="CoursesRetrievingData.php" method="post">
                                <button style="margin:auto; padding:10px 20px 10px 20px;" name="newcoursebtn" id="newcoursebtn" title="Click here to view Course Shedule" value="Course Shedule" for="courseShedule">Search</button>
                            </form>
                        </div>
                        <h2 class="tab-header" id="tab-header-2">Old Student</h2>
                        <div class="tab-content" id="tab-content-2">
                            <form action="CoursesRetrievingData.php" method="post">
                                <select style="margin:auto; padding:10px 20px 10px 20px;" name="gender" id="course" required>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                    <option value="Male/Female">Male/Female</option>
                                </select>

                                <select style="margin:auto; padding:10px 20px 10px 20px;" name="cname" id="course" required>
                                    <option value="10 days">10 days courses</option>
                                    <option value="Special 10 days">Special 10 days courses</option>
                                    <option value="Advanced 10 days">10 days Advanced courses</option>
                                    <option value="20 days">20 days courses</option>
                                    <option value="Special 20 days">Special 20 days courses</option>
                                    <option value="Advanced 20 days">20 days Advanced courses</option>
                                    <option value="Children">Children courses</option>
                                    <option value="Teen">Teen courses</option>
                                    <option value="Children/Teen">Children/Teen courses</option>
                                    <option value="1 days">1 days courses</option>
                                    <option value="2 days">2 days courses</option>
                                    <option value="4 days">4 days courses</option>
                                    <option value="5 days">5 days courses</option>
                                </select>

                                <button style="margin:auto; padding:10px 20px 10px 20px;" name="oldcoursebtn" id="oldcoursebtn" title="Click here to view Course Shedule" value="Course Shedule" for="courseShedule">Search</button>
                            </form>
                        </div>
                        <h2 class="tab-header" id="tab-header-3">Children/Teen</h2>
                        <div class="tab-content" id="tab-content-3">
                            <form action="CoursesRetrievingData.php" method="post">
                                <select style="margin:auto; padding:10px 20px 10px 20px;" name="gender" id="course" required>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                    <option value="Male/Female">Male/Female</option>
                                </select>

                                <select style="margin:auto; padding:10px 20px 10px 20px;" name="cname" id="course" required>
                                    <option value="Children">Children courses</option>
                                    <option value="Teen">Teen courses</option>
                                    <option value="Children/Teen">Children/Teen courses</option>
                                </select>


                                <button style="margin:auto; padding:10px 20px 10px 20px;" name="teencoursebtn" id="teencoursebtn" title="Click here to view Course Shedule" value="Course Shedule" for="courseShedule">Search</button>
                            </form>
                        </div>
                        <h2 class="tab-header" id="tab-header-4">Executive</h2>
                        <div class="tab-content" id="tab-content-4">
                            <form action="CoursesRetrievingData.php" method="post">
                                <button style="margin:auto; padding:10px 20px 10px 20px;" name="execoursebtn" id="execoursebtn" title="Click here to view Course Shedule" value="Course Shedule" for="courseShedule">Search</button>
                            </form>
                        </div>
                    </div>
                    <!--/div-->
                    <script src="jquary.js">
                        "use strict";

                    </script>			
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
