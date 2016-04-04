<?php
require_once('initialize.php');

class Donation{

	public $Name;
	public $Email;
	public $Address;
	public $Country;
	public $City;
	public $Zipcode;
	public $Phone_no;
	public $Discription;
	public $State;

	public static function insert_data($donation_object){
	global $database;
	$query = "INSERT INTO donoation ";
	$query .="(Name,Email,Address,Country, ";
	$query .="City,Zipcode,Phone_no) ";
	$query .="VALUES ('{$donation_object->Name}', ";
	$query .="'{$donation_object->Email}', ";
	$query .="'{$donation_object->Address}', ";
	$query .="'{$donation_object->Country}', ";
	$query .="'{$donation_object->City}', ";
	$query .="'{$donation_object->Zipcode}', ";
	$query .="'{$donation_object->Phone_no}') ";
	$database->query($query);
	 	}
	public static function update_data($input_data,$old_email){
	 		global $database;
	 		$query ="UPDATE donoation SET ";
	 		$query .="Name ='{$input_data->Name}', ";
	 		$query .="Email ='{$input_data->Email}', ";
	 		$query .="Address ='{$input_data->Address}', ";
	 		$query .="Country ='{$input_data->Country}', ";
	 		$query .="City ='{$input_data->City}', ";
	 		$query .="Zipcode ='{$input_data->Zipcode}', ";
	 		$query .="Phone_no ='{$input_data->Phone_no}' ";
	 		$query .="WHERE Email='{$old_email}' ";
	 		$database->query($query);
	 	}
	public static function add_discription($discription,$email){
		global $database;
		$query ="UPDATE donoation SET ";
		$query .="Discription ='{$discription}' ";
		$query .="WHERE Email='{$email}' ";
		$database->query($query);
	}
	public static function update_state($state,$email){
		global $database;
		$query ="UPDATE donoation SET ";
		$query .="State ='{$state}' ";
		$query .="WHERE Email='{$email}' ";
		$database->query($query);
	}
	public static function checked_state(){
		global $database;
		$query ="SELECT * FROM donoation WHERE State=1 ";
		$result =self::find_by_query($query);
		return $result;
	}
	public static function find_by_donor($email){
	 	global $database;
	 	$result_array = self::find_by_query("SELECT * FROM donoation WHERE Email='{$email}' LIMIT 1");
	 	return !empty($result_array) ? array_shift($result_array) : false;
	 }
	 public static function find_by_donor_by_id($id){
	 	global $database;
	 	$result_array = self::find_by_query("SELECT * FROM donoation WHERE Id_number='{$id}' LIMIT 1");
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
	 private static function instantiate($record){
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
}
?>