<?php
require_once('initialize.php');

class User {

	public $Index_no;
	public $user_name;
	public $password;
	public $first_name;
	public $secound_name;
	public $birthday;
	public $gender;
	public $NIC;
	public $E_mail;
	public $mobile;
	public $location;

	 public static function find_all(){
	 	 return self::find_by_query("SELECT * FROM admin_account");
	 }
	 public static function find_by_username($username){
	 	global $database;
	 	$result_array = self::find_by_query("SELECT * FROM admin_account WHERE user_name='{$username}' LIMIT 1");
	 	return !empty($result_array) ? array_shift($result_array) : false;
	 }
	  public static function find_by_id($index_no){
	 	global $database;
	 	$result_array = self::find_by_query("SELECT * FROM admin_account WHERE Index_no='{$index_no}' LIMIT 1");
	 	return !empty($result_array) ? array_shift($result_array) : false;
	 }
	 public static function find_by_query($sqlquery){
	 	global $database;
	 	$result_set=$database->query($sqlquery);
	 	$object_array = array();
	 	while($row =$database->fetch_assoc($result_set)){
	 		$object_array[]=self::instantiate($row);
	 	}
	 	return $object_array;
	 }
	 public static function instantiate($record){
	 	$object = new self;

	 	//more dynamic, short-form approch:
	 	foreach ($record as $attribute => $value) {
	 		if($object->has_attribute($attribute)){
	 			$object->$attribute=$value;
	 		}
		}
	 	return $object;
	 }
	 	private function has_attribute($attribute){
	 		$object_var = get_object_vars($this);
			return array_key_exists($attribute, $object_var);
	 	}
	 	public static function insert_data($input_data){
	 		global $database;
	 		$query = "INSERT INTO admin_account ";
	 		$query .="(user_name,password,first_name,secound_name, ";
	 		$query .="birthday,gender,NIC,E_mail,mobile,location) ";
	 		$query .="VALUES ('{$input_data['username']}', ";
	 		$query .="SHA('{$input_data['password']}'), ";
	 		$query .="'{$input_data['first_name']}', ";
	 		$query .="'{$input_data['secound_name']}', ";
	 		$query .="'{$input_data['birthday']}', ";
	 		$query .="'{$input_data['gender']}', ";
	 		$query .="'{$input_data['nic']}', ";
	 		$query .="'{$input_data['Email']}', ";
	 		$query .="'{$input_data['mobile']}', ";
	 		$query .="'{$input_data['location']}') ";
			$database->query($query);
	 	}
	 	public static function update_data($input_data,$index_no){
	 		global $database;
	 		$query ="UPDATE admin_account SET ";
	 		$query .="user_name ='{$input_data['username']}', ";
	 		$query .="password ='{$input_data['password']}', ";
	 		$query .="first_name ='{$input_data['first_name']}', ";
	 		$query .="secound_name ='{$input_data['secound_name']}', ";
	 		$query .="birthday ='{$input_data['birthday']}', ";
	 		$query .="gender ='{$input_data['gender']}', ";
	 		$query .="NIC ='{$input_data['nic']}', ";
	 		$query .="E_mail ='{$input_data['Email']}', ";
	 		$query .="mobile ='{$input_data['mobile']}', ";
	 		$query .="location ='{$input_data['location']}' ";
	 		$query .="WHERE Index_no='{$index_no}' ";
	 		$database->query($query);
	 	}
		
	public static function authenticate($username, $password){
		global $database;
		$username = $database->escape_string($username);
		$password = $database->escape_string($password);

		$query = "SELECT * FROM admin_account ";
		$query .= "WHERE user_name = '{$username}' ";
		$query .= "AND password = SHA('{$password}') ";
		$query .= "LIMIT 1";
		$result_array = self::find_by_query($query);
		return !empty($result_array) ? array_shift($result_array) : false;
	}
	public static function authenticate_p($index_no, $password){
		global $database;
		$index_no = $database->escape_string($index_no);
		$password = $database->escape_string($password);

		$query = "SELECT * FROM admin_account ";
		$query .= "WHERE Index_no = '{$index_no}' ";
		$query .= "AND password = '{$password}' ";
		$query .= "LIMIT 1";
		$result_array = self::find_by_query($query);
		return !empty($result_array) ? array_shift($result_array) : false;
	}
}
?>