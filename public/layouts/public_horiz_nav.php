<div>
<style type="text/css">
/*body {
    background:#FFFFFF url('body-bg.jpg');
} */
 
.clearfix:after {
    display:block;
    clear:both;
}
 
/*----- Menu Outline -----*/
.menu-wrapa {
    width:100%;
   /* box-shadow:0px 1px 3px rgba(0,0,0,0.2);
    background:#0059B2; */
}
 
.menua {
    width:1000px;
    margin:0px auto;
}
 
.menua li {
    margin:0px;
    list-style:none;
    font-family:'Ek Mukta';
    font-size:50px;
}
 
.menua a {
    transition:all linear 0.15s;
    color: #0000D9 /* navigation bar font color */
}
 
.menua li:hover > a, .menua .current-item > a {
    text-decoration:none;
    color: #67B545;   /* navigation bar font hide  color(2nd color) */
}

 /*change the arrow size*/
.menua .arrow {
    font-size:12px;
    line-height:0%;
}
 
/*----- Top Level -----*/
.menua > ul > li {
    float:left;
    display:inline-block;
    position:relative;
    font-size:50px;
}
 /*navigation bar ake background size*/
.menua > ul > li > a {
    padding:10px 40px;
    display:inline-block;
    text-shadow:0px 1px 0px rgba(0,0,0,0.4);
}
 
.menua > ul > li:hover > a, .menua > ul > .current-item > a {
    background:#F6F6F6;  /* navigation bar background color #DBDBEA */
}
 
/*----- Bottom Level -----*/
.menua li:hover .sub-menua {
    z-index:1;
    opacity:1;
}
 
.sub-menua {
    width:100%;   /*  you can change width of */
    padding:2px 0px;
    position:absolute;
    top:100%;
    left:0px;
    z-index:-1;
    opacity:0;
    transition:opacity linear 0.15s;
  /*  box-shadow:0px 2px 3px rgba(0,0,0,0.2);*/
    background:#F6F6F6;  /* sub manu background color #EEEEEE */
    font-size:50px;
}
 
.sub-menua li {
    display:block;
    font-size:50px;
}


 
.sub-menua li a {
    padding:10px 30px;
    display:block;
    font-size:25px;     /*change sub manu font size..*/
}
 /*edit */
.sub-menua li a:hover, .sub-menua .current-item a {
    background: #73DCFF ;  /*#8AC007 #73DCFFsub manu tabs background color*/
}
/* ---------------------------2nd css file------------------------------------------ */
 #menua {
    list-style:none;

    /*width:940px;
    margin:30px auto 0px auto;
    height:43px;
    padding:0px 20px 0px 20px; */

/*you can change top and navigation bar gap*/

   width:1000px;
    margin:0px auto;


 
    /* Rounded Corners */
   ////////////////////////////////////////////////  
   /* -moz-border-radius: 10px;
    -webkit-border-radius: 10px;
    border-radius: 10px;*/
 
    /* Background color and gradients */
 /////////////////////////////////////////////////////    

   /* background: #014464;
    background: -moz-linear-gradient(top, #0272a7, #013953);
    background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#0272a7), to(#013953));*/
     
    /* Borders */
 ////////////////////////////////////////////    
 /*   border: 1px solid #002232;
    -moz-box-shadow:inset 0px 0px 1px #edf9ff;
    -webkit-box-shadow:inset 0px 0px 1px #edf9ff;
    box-shadow:inset 0px 0px 1px #edf9ff;*/
}
 /*dont change, navigation bar will totally change */
#menua li {
 /*   float:left;
    text-align:center;
    position:relative;
    padding: 4px 10px 4px 10px;
    margin-right:30px;
    margin-top:7px;
    border:none;*/
}
 
#menua li:hover {

    /*   remove the line of buttons */
 /*   border: 1px solid #777777;
   padding: 4px 20px 2px 20px;*/
      
     
    /* Background color and gradients */
     
  /* background: #F4F4F4;
    background: -moz-linear-gradient(top, #F4F4F4, #EEEEEE);
    background: -webkit-gradient(linear, 0% 0%, 0% ,100%, from(#F4F4F4), to(#EEEEEE));*/
     
    /* Rounded corners */
     
   /* -moz-border-radius: 5px 5px 0px 0px;
    -webkit-border-radius: 5px 5px 0px 0px;
    border-radius: 5px 5px 0px 0px;*/
}
/* change navigation button apprience*/ 
#menua li a {
    text-decoration:none;
    display:block;
    outline:0;
  /*  text-shadow: 1px 1px 1px #000;*/
  /*  font-family:Arial, Helvetica, sans-serif;  
    color: #EEEEEE;
    
    */
}
 
#menua li:hover a {
  /*  color:#161616;
    text-shadow: 1px 1px 1px #FFFFFF;*/
}
#menua li .drop {
  /*  padding-right:21px;
    background:url("img/drop.png") no-repeat right 8px;*/
}
#menua li:hover .drop {
  /*  background:url("img/drop.png") no-repeat right 7px;*/
}
 
/* Drop Down */
 
.dropdown_1column, 
.dropdown_2columns, 
.dropdown_3columns, 
.dropdown_4columns,
.dropdown_5columns {

    margin:0x auto;
    float:left;
    position:absolute;
    left:-1005em; /* Hides the drop down */
    text-align:left;
    padding:5px 3px 2px 2px;  /*change h2 to  top, botom, left ,right*/
    border:0px solid #777777;
    border-top:none;
     
    /* Gradient background */
    background:#F6F6F6; /*navigation bar ake heading title ake background colors */
    /*background: -moz-linear-gradient(top, #EEEEEE, #BBBBBB);
    background: -webkit-gradient(linear, 0% 0%, 0% ,100%, from(#EEEEEE), to(#BBBBBB)); */ 
    
    
 ///////////////////////////////////////////////
  /*drop down ake hadaya wenas kirima*/
    /* Rounded Corners */
  /*  -moz-border-radius: 0px 5px 5px 5px;
    -webkit-border-radius: 0px 5px 5px 5px;
    border-radius: 0px 5px 5px 5px;*/
}
////////////////////////////////////////////////////
 /*  change drop down list size (to right side)  */
.dropdown_1column {width: 140px;}
.dropdown_2columns {width: 280px;}
.dropdown_3columns {width: 380px;}
.dropdown_4columns {width: 330px;}
.dropdown_5columns {width: 700px;}
 
#menua li:hover .dropdown_1column, 
#menua li:hover .dropdown_2columns, 
#menua li:hover .dropdown_3columns,
#menua li:hover .dropdown_4columns,
#menua li:hover .dropdown_5columns {
    left:0px;    /* you can change the manu tab and dropdown tab gap*/
    top:auto;
}
 
/* Columns */
 
.col_1,
.col_2,
.col_3,
.col_4,
.col_5 {
  display:inline;
    float: left;
    position: relative;
    margin-left: 10px;  /*change h2 topic to left */
    margin-right: 1px;
    
}

/* change topic underline  width*/
///////////////////////////////////////////////////////////////////////////////////////////////////
.col_1 {width:130px;}
.col_2 {width:270px;}
.col_3 {width:260px;}
.col_4 {width:310px;}
.col_5 {width:690px;}
 
/* Right alignment */
 
#menua .menu_right {
  /*  float:right;
    margin-right:0px;*/
}
#menua li .align_right {

    /* Rounded Corners */
  /*  -moz-border-radius: 5px 0px 5px 5px;
    -webkit-border-radius: 5px 0px 5px 5px;
    border-radius: 5px 0px 5px 5px;*/
}
#menua li:hover .align_right {
    left:auto;
    right:-1px;
    top:auto;
}
 
/* Drop Down Content Stylings */
 
#menua p, #menua h2, #menua h3, #menua ul li {

    font-family:Arial, Helvetica, sans-serif;
    line-height:20px;   /*change sub manu button size*/
    font-size:20px;   /*change navigation bar font size*/
    text-align:left;
    text-shadow: 1px 1px 1px #FFFFFF;
}
#menua h2 {
    font-family: "BenguiatGot Bk BT", Times, h2;  /*Times New Roman */
    font-size:20px;
    font-weight:300;
    letter-spacing:-1px;
    margin:10px 0 5px 0;
    padding-bottom:-6px;
    border-bottom:1px solid #666666;
     color:  #00B200;
}
#menua h3 {
    font-size:14px;
    margin:7px 0 14px 0;
    padding-bottom:7px;
    border-bottom:1px solid #888888;
}
#menua p {
    line-height:180px;
    margin:0 0 1000px 0;
}


#menua li:hover div a {
    font-size:17px;  /*navigation bar ake sub menua ake font size2*/
    color:#646473;   /*navigation bar ake sub menua ake font color*/
}
#menua li:hover div a:hover {
    color:#0000D9;  /*navigation bar ake sub menua ake hide 2 nd font color*/
}
.strong {
    font-weight:300px;
}
.italic {
    font-style:italic;
}
 /*.imgshadow {
    background:#FFFFFF;
    padding:4px;
    border:1px solid #777777;
    margin-top:5px;
    -moz-box-shadow:0px 0px 5px #666666;
    -webkit-box-shadow:0px 0px 5px #666666;
    box-shadow:0px 0px 5px #666666;
}*/
.img_left { /* Image sticks to the left */
    width:auto;
    float:left;
    margin:5px 15px 5px 5px;
}
 
 /*  change the sub manu formats*/
 ////////////////////////////////////////////////////////////////
#menua li ul li {
    font-size:15px;
    line-height:26px;
    position:relative;
    text-shadow: 1px 1px 1px #ffffff;
    padding:10;
    margin:10;
    float:none;
    text-align:center;  /* left  */
    width:255px;
}
#menua li ul li:hover {
    background:none;
    border:none;
    padding:0;
    margin:0;
} 
</style>
<body>
    <ul id="menua">
<div class="menu-wrapa" >
<nav class="menua">
           
        <ul class="clearfix">
 
<!-- /////////////////////Home////////////////////////////////////////////////////////////////////////////////////// -->
              
        <li><a href="index.php"><img src="./images/home.png" style="width:50px;height:50px;"></a></li>
         
         
<!-- /////////////////////Couses//////////////////////////////////////////////////////////////////////////////////// -->
            <li>
                <a href="#">Courses <span class="arrow">&#9660;</span></a>
 
                 <div class="dropdown_4columns"><!-- Begin 4 columns container -->
         
                    <div class="col_4">
                        <h2>You can register for following Courses </h2>
                    </div>

                <ul class="sub-menua">
                    <li><a href="#">New Students Courses</a></li>
                    <li><a href="#">Old Students Courses</a></li>
                    <li><a href="#">Children/Teens Courses </a></li>
                    <li><a href="#">Executives Courses</a></li>
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

                <ul class="sub-menua">
                    <li><a href="#">Cash donations </a></li>
                    <li><a href="#">Material donations </a></li>
                    <li><a href="#">Bill payments </a></li> 
                </ul>

                </div>
            </li>

<!-- /////////////////////Photos/////////////////////////////////////////////////////////////////////////////////////-->
            <!-- <li class="current-item"><a href="#">News forum</a></li>  -->
                    <li><a href="#">News forum</a></li>
                    
<!--/////////////////////Site Help//////////////////////////////////////////////////////////////////////////////////-->         
            <li><a href="#">Gallery</a></li>

        </ul>
         
    </nav>
    </div>
</ul>
</body>
</div>