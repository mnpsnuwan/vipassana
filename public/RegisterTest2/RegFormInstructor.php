<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        
         <!--   =============================Java script file========================-  *-->
         <script type="text/javascript" src="jquery-1.11.3.js"></script>
        <script src="validation.js" type="text/javascript"></script>  
         <script src="register.js" type="text/javascript">  </script>  
         
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title></title>
        <style type="text/css">
            .formOne {
                height: 900px;
                width: 840px;
                margin-top: 35px;
                margin-right: auto;
                margin-bottom: auto;
                margin-left: 0px;
                background-color: #F3F3F3;
                border-top-style: solid;
                border-right-style: solid;
                border-bottom-style: solid;
                border-left-style: solid;
                border-top-color: #FFFFFF;
                border-right-color: #FFFFFF;
                border-bottom-color: #FFFFFF;
                border-left-color: #FFFFFF;

            }
        </style>


        <link rel = "stylesheet" type = "text/css" href = "./test date/view.css"></link>
        <script type="text/javascript" src="./test date/view.js"></script>
        <script type="text/javascript" src="./test date/calendar.js"></script>

        <link href="../SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
        <style type="text/css">
            body,td,th {
                font-size: 18px;
            }
            .head1 {
                color: #0033CC;
                font-size: 30px;
            }
            .fontSize {
                font-size: 24px;
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
        .formOne #form1 table tr td p .star strong {
	color: #000;
}
        .formOne #form1 table tr td p .star {
	color: #000;
}
        .formOne #form1 table tr td p .star {
	color: #F00;
}
        </style>
        <link href="../SpryAssets/SpryValidationRadio.css" rel="stylesheet" type="text/css" />
        <script src="../SpryAssets/SpryValidationTextField.js" type="text/javascript"></script><script src="../SpryAssets/SpryValidationRadio.js" type="text/javascript"></script>
    </head>

    <body>
        <div class="formOne">
            <p>&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;  &nbsp;&nbsp;  &nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp; <strong class="head1"><span class="fontSize">Instructor Registration </span></strong></p>
            
            
            
            
            
            <form id="form1" name="form1" method="post" action="indexRegFormInstroctor.php" onsubmit="return courseDate() && validateName() && birthDay()  && Gender() && validateEmail() && nic(nic2) && valiDateAddress() && valiDateMotherTounge() &&  validatePhone(phone) && validateFax(fax)  && discipline() " >
        <!--      <form id="form1" name="form1" method="post" action="RegFormMainT.php" onsubmit="return  validateEmail()  " >  -->
               
        
        
        <table width="818"   id="reg_table">

                    <tr>
                        <td height="50" colspan="2"><p>&nbsp;</p>
                          <p><strong> &nbsp; Registration Date
                            :</strong><span>
                            <input id="element_6_2" name="date1" class="element text" size="3" maxlength="2" value="" type="text"> 
                            /
                            <label for="element_6_2">DD</label>
                            </span>
                            
                            <span>
                              <input id="element_6_1" name="month1" class="element text" size="3" maxlength="2" value="" type="text"> /
                              <label for="element_6_1">MM</label>
                            </span>
                            
                            <span>
                              <input id="element_6_3" name="year1" class="element text" size="5" maxlength="4" value="" type="text">
                              /
                              <label for="element_6_3">YYYY&nbsp; &nbsp;&nbsp; </label>
                            </span>
                            
                            <span id="calendar_6">
                              <img src="./test date/calendar.png" alt="Pick a date." width="34" height="38" class="datepicker" id="cal_img_6">	
                            </span>
                            
                            
                            <script type="text/javascript">
                                    Calendar.setup({
                                        inputField: "element_6_3",
                                        baseField: "element_6",
                                        displayArea: "calendar_6",
                                        button: "cal_img_6",
                                        ifFormat: "%B %e, %Y",
                                        onSelect: selectDate
                                    });
                                    </script>
                          </p>
                        </td>
                    </tr>


 <!--......................................you have to fill this table...................................-->           
            
            
            
                    <tr>
                        <td width="504" height="9"><p><strong>&nbsp;</strong></p>
                          <p><strong> &nbsp; Name :</strong>
                            <span class="star">*</span> &nbsp;<span id="sprytextfield1">
                              <input name="fnameA" type="text" id="fnameA" size="25" placeholder="First Name" />
                              
                              <span class="textfieldRequiredMsg">&nbsp;&nbsp;&nbsp;</span><span class="textfieldRequiredMsg"> <span class="iterlic">Name is required</span></span></span>                                                        
                          </p>
                        </td>
                        <td width="302" height="15">        
                          <p>
                            <label for="lnameA"></label>
                          </p>
                          <p>                            <span id="sprytextfield2">
                          <input name="lnameA" type="text" id="lnameA" size="24" placeholder="Last Name" />		  
                              
                          </span>
                          </p>
                        </td>
                    </tr>

                  
                  
                  
                    <tr>


                        <td height="76"><p><strong> &nbsp;</strong></p>
                          <p><strong>  &nbsp; Birthday :</strong><span>
                          <input id="element_5_2" name="date2" class="element text" size="2" maxlength="2" value="" type="text" />
                          /
<label for="element_5_2">DD</label>
                          </span> <span>
                          <input id="element_5_1" name="month2" class="element text" size="2" maxlength="2" value="" type="text" />
                          /
<label for="element_5_1">MM</label>
                          </span> <span>
                          <input id="element_5_3" name="year2" class="element text" size="4" maxlength="4" value="" type="text" />
                          <label for="element_5_3">YYYY</label>
                          <img src="./test date/calendar.png" alt="Pick a date." width="30" height="35" class="datepicker" id="cal_img_5" />&nbsp; 
                                &nbsp;&nbsp;&nbsp;</span>
                            <script type="text/javascript">
                                            Calendar.setup({
                                                inputField: "element_5_3",
                                                baseField: "element_5",
                                                displayArea: "calendar_5",
                                                button: "cal_img_5",
                                                ifFormat: "%B %e, %Y",
                                                onSelect: selectDate
                                            });
                                        </script>
                          </p>
                                  </li>
                                  </script>
                                 

                        </td>


                        <td><label for="element_2"><strong><br />
                        Gender</strong></label>
:<span class="star">*</span><span id="spryradio2">
<input type="radio" name="gender" value="Male" id="Male" />
Male
<input type="radio" name="gender" value="Female" id="Female" />
Female&nbsp; <span class="radioRequiredMsg">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Please make a selection.</span></span>	
                      </td>


                    </tr>





                    <tr>
                        <td height="45">
                            <p>
                                <label for="nnic"></label>
                          <strong>&nbsp;</strong></p>
                            <p><strong>  &nbsp; Email :</strong> <span class="star">*</span>                          
                              <input name="email2" type="text" id="email3" size="30" />
                            </p>
                        
                        </td>
                      
                        
                        
                        
                        <td><p><strong></strong><strong>&nbsp;&nbsp;&nbsp; </strong></p>
                          <p><strong>NIC :</strong> <span class="star">*</span>&nbsp;
                            <input name="nic2" type="text" id="nic2" size="15" />
                          </p>
<label for="nic2"></label>

                      </td>
                        
                    </tr>
                  
                  
                  
                  
                    <tr>
                        <td height="36" colspan="2">&nbsp;<strong> Postal Address
                            : <span class="star">*</span></strong>
                          <p>&nbsp;<span id="sprytextfield6">
                                  <input name="address1" type="text" id="address1" size="80" />
                          <span class="textfieldRequiredMsg"><span class="iterlic"><strong>Address </strong>is required</span>.</span></span></p>
                            <p>
                                &nbsp; <span id="sprytextfield7">
                                    <input name="address2" type="text" id="address2" size="80" />
                      </span></p></td>
                    </tr>
 
 
                    <tr>
                      <td height="32" colspan="5">
                        <p><strong> &nbsp; </strong></p>
                        <p><strong> &nbsp; Country :
                            <label for="country"></label>
                          <select name="country" id="country">
                            <option value=""></option>
                            <option value="Sri Lanka" selected="selected" >Sri Lanka</option>
                            <option value="Afghanistan" >Afghanistan</option>
                            <option value="Albania" >Albania</option>
                            <option value="Algeria" >Algeria</option>
                            <option value="Andorra" >Andorra</option>
                            <option value="Antigua and Barbuda" >Antigua and Barbuda</option>
                            <option value="Argentina" >Argentina</option>
                            <option value="Armenia" >Armenia</option>
                            <option value="Australia" >Australia</option>
                            <option value="Austria" >Austria</option>
                            <option value="Azerbaijan" >Azerbaijan</option>
                            <option value="Bahamas" >Bahamas</option>
                            <option value="Bahrain" >Bahrain</option>
                            <option value="Bangladesh" >Bangladesh</option>
                            <option value="Barbados" >Barbados</option>
                            <option value="Belarus" >Belarus</option>
                            <option value="Belgium" >Belgium</option>
                            <option value="Belize" >Belize</option>
                            <option value="Benin" >Benin</option>
                            <option value="Bhutan" >Bhutan</option>
                            <option value="Bolivia" >Bolivia</option>
                            <option value="Bosnia and Herzegovina" >Bosnia and Herzegovina</option>
                            <option value="Botswana" >Botswana</option>
                            <option value="Brazil" >Brazil</option>
                            <option value="Brunei" >Brunei</option>
                            <option value="Bulgaria" >Bulgaria</option>
                            <option value="Burkina Faso" >Burkina Faso</option>
                            <option value="Burundi" >Burundi</option>
                            <option value="Cambodia" >Cambodia</option>
                            <option value="Cameroon" >Cameroon</option>
                            <option value="Canada" >Canada</option>
                            <option value="Cape Verde" >Cape Verde</option>
                            <option value="Central African Republic" >Central African Republic</option>
                            <option value="Chad" >Chad</option>
                            <option value="Chile" >Chile</option>
                            <option value="China" >China</option>
                            <option value="Colombia" >Colombia</option>
                            <option value="Comoros" >Comoros</option>
                            <option value="Congo" >Congo</option>
                            <option value="Cook Islands and Niue" >Cook Islands and Niue</option>
                            <option value="Costa Rica" >Costa Rica</option>
                            <option value="Côte d'Ivoire" >Côte d'Ivoire</option>
                            <option value="Croatia" >Croatia</option>
                            <option value="Cuba" >Cuba</option>
                            <option value="Cyprus" >Cyprus</option>
                            <option value="Czech Republic" >Czech Republic</option>
                            <option value="Denmark" >Denmark</option>
                            <option value="Djibouti" >Djibouti</option>
                            <option value="Dominica" >Dominica</option>
                            <option value="Dominican Republic" >Dominican Republic</option>
                            <option value="East Timor" >East Timor</option>
                            <option value="Ecuador" >Ecuador</option>
                            <option value="Egypt" >Egypt</option>
                            <option value="El Salvador" >El Salvador</option>
                            <option value="Equatorial Guinea" >Equatorial Guinea</option>
                            <option value="Eritrea" >Eritrea</option>
                            <option value="Estonia" >Estonia</option>
                            <option value="Ethiopia" >Ethiopia</option>
                            <option value="Fiji" >Fiji</option>
                            <option value="Finland" >Finland</option>
                            <option value="France" >France</option>
                            <option value="Gabon" >Gabon</option>
                            <option value="Gambia" >Gambia</option>
                            <option value="Georgia" >Georgia</option>
                            <option value="Germany" >Germany</option>
                            <option value="Ghana" >Ghana</option>
                            <option value="Greece" >Greece</option>
                            <option value="Grenada" >Grenada</option>
                            <option value="Guatemala" >Guatemala</option>
                            <option value="Guinea" >Guinea</option>
                            <option value="Guinea-Bissau" >Guinea-Bissau</option>
                            <option value="Guyana" >Guyana</option>
                            <option value="Haiti" >Haiti</option>
                            <option value="Honduras" >Honduras</option>
                            <option value="Hong Kong" >Hong Kong</option>
                            <option value="Hungary" >Hungary</option>
                            <option value="Iceland" >Iceland</option>
                            <option value="India" >India</option>
                            <option value="Indonesia" >Indonesia</option>
                            <option value="Iran" >Iran</option>
                            <option value="Iraq" >Iraq</option>
                            <option value="Ireland" >Ireland</option>
                            <option value="Israel" >Israel</option>
                            <option value="Italy" >Italy</option>
                            <option value="Jamaica" >Jamaica</option>
                            <option value="Japan" >Japan</option>
                            <option value="Jordan" >Jordan</option>
                            <option value="Kazakhstan" >Kazakhstan</option>
                            <option value="Kenya" >Kenya</option>
                            <option value="Kiribati" >Kiribati</option>
                            <option value="North Korea" >North Korea</option>
                            <option value="South Korea" >South Korea</option>
                            <option value="Kuwait" >Kuwait</option>
                            <option value="Kyrgyzstan" >Kyrgyzstan</option>
                            <option value="Laos" >Laos</option>
                            <option value="Latvia" >Latvia</option>
                            <option value="Lebanon" >Lebanon</option>
                            <option value="Lesotho" >Lesotho</option>
                            <option value="Liberia" >Liberia</option>
                            <option value="Libya" >Libya</option>
                            <option value="Liechtenstein" >Liechtenstein</option>
                            <option value="Lithuania" >Lithuania</option>
                            <option value="Luxembourg" >Luxembourg</option>
                            <option value="Macedonia" >Macedonia</option>
                            <option value="Madagascar" >Madagascar</option>
                            <option value="Malawi" >Malawi</option>
                            <option value="Malaysia" >Malaysia</option>
                            <option value="Maldives" >Maldives</option>
                            <option value="Mali" >Mali</option>
                            <option value="Malta" >Malta</option>
                            <option value="Marshall Islands" >Marshall Islands</option>
                            <option value="Mauritania" >Mauritania</option>
                            <option value="Mauritius" >Mauritius</option>
                            <option value="Mexico" >Mexico</option>
                            <option value="Micronesia" >Micronesia</option>
                            <option value="Moldova" >Moldova</option>
                            <option value="Monaco" >Monaco</option>
                            <option value="Mongolia" >Mongolia</option>
                            <option value="Montenegro" >Montenegro</option>
                            <option value="Morocco" >Morocco</option>
                            <option value="Mozambique" >Mozambique</option>
                            <option value="Myanmar" >Myanmar</option>
                            <option value="Namibia" >Namibia</option>
                            <option value="Nauru" >Nauru</option>
                            <option value="Nepal" >Nepal</option>
                            <option value="Netherlands" >Netherlands</option>
                            <option value="New Zealand" >New Zealand</option>
                            <option value="Nicaragua" >Nicaragua</option>
                            <option value="Niger" >Niger</option>
                            <option value="Nigeria" >Nigeria</option>
                            <option value="Norway" >Norway</option>
                            <option value="Oman" >Oman</option>
                            <option value="Pakistan" >Pakistan</option>
                            <option value="Palau" >Palau</option>
                            <option value="Panama" >Panama</option>
                            <option value="Papua New Guinea" >Papua New Guinea</option>
                            <option value="Paraguay" >Paraguay</option>
                            <option value="Peru" >Peru</option>
                            <option value="Philippines" >Philippines</option>
                            <option value="Poland" >Poland</option>
                            <option value="Portugal" >Portugal</option>
                            <option value="Puerto Rico" >Puerto Rico</option>
                            <option value="Qatar" >Qatar</option>
                            <option value="Romania" >Romania</option>
                            <option value="Russia" >Russia</option>
                            <option value="Rwanda" >Rwanda</option>
                            <option value="Saint Kitts and Nevis" >Saint Kitts and Nevis</option>
                            <option value="Saint Lucia" >Saint Lucia</option>
                            <option value="Saint Vincent and the Grenadines" >Saint Vincent and the Grenadines</option>
                            <option value="Samoa" >Samoa</option>
                            <option value="San Marino" >San Marino</option>
                            <option value="Sao Tome and Principe" >Sao Tome and Principe</option>
                            <option value="Saudi Arabia" >Saudi Arabia</option>
                            <option value="Senegal" >Senegal</option>
                            <option value="Serbia and Montenegro" >Serbia and Montenegro</option>
                            <option value="Seychelles" >Seychelles</option>
                            <option value="Sierra Leone" >Sierra Leone</option>
                            <option value="Singapore" >Singapore</option>
                            <option value="Slovakia" >Slovakia</option>
                            <option value="Slovenia" >Slovenia</option>
                            <option value="Solomon Islands" >Solomon Islands</option>
                            <option value="Somalia" >Somalia</option>
                            <option value="South Africa" >South Africa</option>
                            <option value="Spain" >Spain</option>
                            <option value="Sudan" >Sudan</option>
                            <option value="Suriname" >Suriname</option>
                            <option value="Swaziland" >Swaziland</option>
                            <option value="Sweden" >Sweden</option>
                            <option value="Switzerland" >Switzerland</option>
                            <option value="Syria" >Syria</option>
                            <option value="Taiwan" >Taiwan</option>
                            <option value="Tajikistan" >Tajikistan</option>
                            <option value="Tanzania" >Tanzania</option>
                            <option value="Thailand" >Thailand</option>
                            <option value="Togo" >Togo</option>
                            <option value="Tonga" >Tonga</option>
                            <option value="Trinidad and Tobago" >Trinidad and Tobago</option>
                            <option value="Tunisia" >Tunisia</option>
                            <option value="Turkey" >Turkey</option>
                            <option value="Turkmenistan" >Turkmenistan</option>
                            <option value="Tuvalu" >Tuvalu</option>
                            <option value="Uganda" >Uganda</option>
                            <option value="Ukraine" >Ukraine</option>
                            <option value="United Arab Emirates" >United Arab Emirates</option>
                            <option value="United Kingdom" >United Kingdom</option>
                            <option value="United States" >United States</option>
                            <option value="Uruguay" >Uruguay</option>
                            <option value="Uzbekistan" >Uzbekistan</option>
                            <option value="Vanuatu" >Vanuatu</option>
                            <option value="Vatican City" >Vatican City</option>
                            <option value="Venezuela" >Venezuela</option>
                            <option value="Vietnam" >Vietnam</option>
                            <option value="Yemen" >Yemen</option>
                            <option value="Zambia" >Zambia</option>
                            <option value="Zimbabwe" >Zimbabwe</option>
                          </select>
                      </strong><strong></strong><strong></strong></p></td>
                    </tr>
 
 
                    <tr>
                      <td height="28" colspan="5"><p><strong>&nbsp; </strong></p>
                        <p><strong> &nbsp; Mother Tounge</strong>:<span class="star">*&nbsp;  
                            <input name="motherTounge" type="text"  id="motherTounge" size="15" />
                      <span class="textfieldRequiredMsg"><em> required.</em></span>&nbsp; &nbsp;&nbsp;&nbsp; <strong>Other Languages Known:</strong></span>
                          <input name="languagesKnown" type="text" id="languagesKnown2" size="15" />
                      </p></td>
                    </tr>
                    
                                                                    
                    <tr>
                        <td height="15"><p>
                                <label for="phone"></label>
                                <strong>&nbsp; Phone :</strong> <span class="star">*</span>&nbsp;<span id="sprytextfield9">
                              <input name="phone" type="text" id="phone" size="15" />
                          <span class="textfieldRequiredMsg">required.</span><em></em></span></p>
                        
                        </td>
                       
                        
                        
                        
                        <td height="15">
                          
                          <p><strong>&nbsp;&nbsp;&nbsp;&nbsp;</strong></p>
                          <p><strong> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; Fax:</strong><span id="sprytextfield10">
                          <input name="fax" type="text" id="fax" size="15" />
                          </span>
                          </p>
                            <p>
                              <label for="fax"></label> 
                            </p>
                        </td>
                    </tr>
 
 
                    <tr>
                        <td colspan="2"><p>
                                <label for="job"></label>
                                <strong> &nbsp; Your job and title within your firm:&nbsp;&nbsp;</strong><span id="sprytextfield12">
                                    <input name="job" type="text" id="job" size="46" />
                      </span></p></td>
                    </tr>
 
 
                    <tr>
                        <td height="117" colspan="2">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;
                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; 
                            &nbsp; 
                            &nbsp; 
                            &nbsp; 
                            &nbsp; 

                          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;  <input name="register" type="submit" class="fontSize" id="create" value="Register" />
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                    </tr>
            
            
 
                </table>
        
        
            </form>
        </div>
        <script type="text/javascript">
            var sprytextfield9 = new Spry.Widget.ValidationTextField("sprytextfield9", "none", {validateOn:["blur", "change"]});
            var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1", "none", {validateOn: ["change"]});
            var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2", "none", {isRequired: false, validateOn: ["change"]});
            var sprytextfield6 = new Spry.Widget.ValidationTextField("sprytextfield6", "none", {validateOn: ["blur", "change"]});
            var sprytextfield7 = new Spry.Widget.ValidationTextField("sprytextfield7", "none", {validateOn: ["change"], isRequired: false});
            var sprytextfield12 = new Spry.Widget.ValidationTextField("sprytextfield12", "none", {isRequired: false, validateOn: ["change"]});
var sprytextfield10 = new Spry.Widget.ValidationTextField("sprytextfield10", "none", {validateOn: ["change"], isRequired: false});
var spryradio2 = new Spry.Widget.ValidationRadio("spryradio2", {validateOn:["blur"]});
        </script>
               
    </body>
    
</html>

<?php
include_once "database.php";

include_once "allQuery.php";
$queries = new Querys();

if (isset($_POST['register'])) {

    /* echo $lname = trim($_POST['lnameA']);
      echo $date2 = trim($_POST['date2']); */

     $date1 = trim($_POST['date1']);
     $month1 = trim($_POST['month1']);
     $year1 = trim($_POST['year1']);

   /*  $registered = trim($_POST['registered']);          /*     * ****not db*******     */  /*???????????????????*/
 /*    $nic1 = trim($_POST['nic1']);                      /*     * *****not db******     */
   /*
    *   $email1 = trim($_POST['email1']);                  /*     * ******not db******    */
    

     $fname = trim($_POST['fnameA']);
     $lname = trim($_POST['lnameA']);
     $date2 = trim($_POST['date2']);
     $month2 = trim($_POST['month2']);
     $year2 = trim($_POST['year2']);

     $gender = trim($_POST['gender']);        /*??????///////////////?????*/
    
     
     $nic2 = trim($_POST['nic2']);
     $email2 = trim($_POST['email2']);
     $address1 = trim($_POST['address1']);
     $address2 = trim($_POST['address2']);
     $country = trim($_POST['country']);

     $phone = trim($_POST['phone']);
     $fax = trim($_POST['fax']);
     $motherTounge = trim($_POST['motherTounge']);
     $languagesKnown = trim($_POST['languagesKnown']);
     $job = trim($_POST['job']);
   //  $helth = trim($_POST['helth']);
   //  $practicing = trim($_POST['practicing']);

    /* !empty($date1) && !empty($month1) && !empty($year1) 
      && !empty($registered)&& !empty($nic1) && !empty($email1)
      && !empty($lname)&& !empty($address2)&& !empty($country)
      && !empty($fax)&& !empty($languagesKnown)
      && !empty($job)&& !empty($practicing)
      && !empty($date2) && !empty($month2) && !empty($year2) && !empty($gender) */

    if (!empty($fname) && !empty($nic2) && !empty($email2) && !empty($address1) && !empty($phone) && !empty($motherTounge)) {

        $person_detailsAry = array();

        $dbcon = new MySQLDatabase();
        $dbcon->open_connection();

        $person_detailsAry['date1'] = $date1;                               /*   $person_detailsAry['fname'] = $fname; */
        $person_detailsAry['month1'] = $month1;                             /* $person_detailsAry['lname'] = $lname; */
        $person_detailsAry['year1'] = $year1;
        
        $person_detailsAry['fname'] = $fname;
        $person_detailsAry['lname'] = $lname;
        $person_detailsAry['date2'] = $date2;
        $person_detailsAry['month2'] = $month2;
        $person_detailsAry['year2'] = $year2;

        $person_detailsAry['gender'] = $gender;
        $person_detailsAry['nic2'] = $nic2;
        $person_detailsAry['email2'] = $email2;
        $person_detailsAry['address1'] = $address1;
        $person_detailsAry['address2'] = $address2;
        $person_detailsAry['country'] = $country;
        $person_detailsAry['phone'] = $phone;
        $person_detailsAry['fax'] = $fax;
        $person_detailsAry['motherTounge'] = $motherTounge;
        $person_detailsAry['languagesKnown'] = $languagesKnown;
        $person_detailsAry['job'] = $job;
    //    $person_detailsAry['helth'] = $helth;
   //     $person_detailsAry['practicing'] = $practicing;

      //  $query = $queries->insertQuery($person_detailsAry);
        $queries->Query_connection($queries->insertQuery2($person_detailsAry));
        $dbcon->close_connection();
    ?>  
          <script>
          alert("Registration Successfull");
          </script>

 <?php         
    }
} else {
    /* $fnameA="";
      $lnameA=""; */

    $date1 = "";
    $month1 = "";
    $year1 = "";
    $registered = "";
    $nic1 = "";
    $email1 = "";
    $fnameA = "";
    $lnameA = "";
    $date2 = "";
    $month2 = "";
    $year2 = "";
    $gender = "";
    $nic2 = "";
    $email2 = "";
    $address1 = "";
    $address2 = "";
    $country = "";
    $phone = "";
    $fax = "";
    $motherTounge = "";
    $languagesKnown = "";
    $job = "";
  //  $helth = "";
  //  $practicing = "";
}
?>






