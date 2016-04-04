<?php
//include('database.php');
include_once "database.php";


class Querys {
    
    public $person_detailsAry = array();

    
  /*****************************this function include insert query**************************************/  
    public static function insertQuery($person_detailsAry) {
        
        $queryInsert = " INSERT INTO registerform (date1,month1, year1,fname,lname,date2,month2,year2,gender,nic2,email2, ";
        $queryInsert .="address1,address2,country,phone,fax,motherTounge,languagesKnown,job,helth,practicing) ";
        $queryInsert .="VALUES ('{$person_detailsAry['date1']}', ";
        $queryInsert .="'{$person_detailsAry['month1']}', ";
        $queryInsert .="'{$person_detailsAry['year1']}', ";
        $queryInsert .="'{$person_detailsAry['fname']}', ";
        $queryInsert .="'{$person_detailsAry['lname']}', ";
        $queryInsert .="'{$person_detailsAry['date2']}', ";
        $queryInsert .="'{$person_detailsAry['month2']}', ";
        $queryInsert .="'{$person_detailsAry['year2']}', ";
        $queryInsert .="'{$person_detailsAry['gender']}', ";
        $queryInsert .="'{$person_detailsAry['nic2']}', ";
        $queryInsert .="'{$person_detailsAry['email2']}', ";
        $queryInsert .="'{$person_detailsAry['address1']}', ";
        $queryInsert .="'{$person_detailsAry['address2']}', ";
        $queryInsert .="'{$person_detailsAry['country']}', ";
        $queryInsert .="'{$person_detailsAry['phone']}', ";
        $queryInsert .="'{$person_detailsAry['fax']}', ";
        $queryInsert .="'{$person_detailsAry['motherTounge']}', ";
        $queryInsert .="'{$person_detailsAry['languagesKnown']}', ";
        $queryInsert .="'{$person_detailsAry['job']}', ";
        $queryInsert .="'{$person_detailsAry['helth']}', ";            
        $queryInsert .="'{$person_detailsAry['practicing']}') ";        
        return $queryInsert;
    }
         
    public static function find_all(){
	 	 return "SELECT *FROM registerform" ;
	 }    
         
 /*********************return 'data array' from data base*************************************************************/ 
         
    public static function find_by_query_forRowArray($sqlquery){        
               
	 	$result_set =  Querys::Query_connection($sqlquery);              
	 	//$object_array = array(); 
        
	 	while( $row = Querys::fetch_array($result_set) ){
                //while( $row = Querys::fetch_array(Query_connection($sqlquery)) ){
	 		//$object_array[]=self::instantiate($row);
                   // echo $row['fname'];
                 //   echo $row['lname']; 
                    
                    return $row ;
	 	}
	 	//return $object_array;
                }
                
                
 /********************The mysqli_fetch_array() function fetches a result row as an associative array, a numeric array, or both.***************/  
                
     public static function fetch_array($result){
 		return mysqli_fetch_array($result);
 	}        
        
        
  /*The mysqli_query() function performs a query against the database.*/  
        
    public static function Query_connection($query) {

        $dbcon = new MySQLDatabase();
        $con = $dbcon->connection;
       // if (mysqli_query($con,$query)) {   /*mysql_affected_rows function will return, number of rows that you delete */
         //  mysqli_connect_errno() Return , an error code from the last connection error, if any:  
        if (! mysqli_connect_errno()) {     
            echo "New record created successfully";
            return mysqli_query($con,$query) ;
        } else {
          echo "Error: " . $query . "<br>" . mysqli_error($con);
           //echo mysqli_error($con);   
        }} 
    
    
    /**************      copy query   registerform  to  confermedapplication  *********************/
        
       public static function copyQuery($result){           
 		return "INSERT INTO confermedapplication select  * from registerform where RegNo =' ".$result." '" ;
 	} 
        
               
        /**************      delete query   registerform   *********************/
        
        public static function deleteQueryRegfm($result){           
 		return "DELETE FROM registerform where RegNo =' ".$result." '" ;
 	}
     
        
        /**************      delete query   confermedapplication   *********************/
        
        public static function deleteQueryConfermed($result){           
 		return "DELETE * FROM confermedapplication where RegNo =' ".$result." '" ;
 	}
        
        
         /**************      next button query   registerform   *********************/
        
        public static function NextBtnQuery($result){           
 		return "SELECT * FROM registerform WHERE RegNo =' ".($result + 1)." '" ;
                
 	}
        
       /********************************  view and create course ************************/     
        public static function create_course_view($date1,$month1,$year1){           
 		return "SELECT * FROM confermedapplication WHERE date1 ='$date' AND   month1 ='$month1' AND   year1 ='$year1'"  ;                 
 	}                          
    }
?>