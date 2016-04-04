<?php
require_once("initialize.php");

class Necessity{
	public $id;
	public $necessity;
	public $quantity;
	public $is_urgent;
	public $description;
	public $submited_date;

	public static function insert_data($data){
		global $database;
	 		$query = "INSERT INTO necessity (description) VALUES ('{$data}') ";
			$database->query($query);
	}
	public static function find_by_one($number){
	 	global $database;
	 	$result_array = self::find_by_query("SELECT * FROM necessity_details WHERE id='{$number}' LIMIT 1");
	 	return !empty($result_array) ? array_shift($result_array) : false;
	 }
	 public static function view_condition_data(){
	 	global $database;
	 	$result_array = self::find_by_query("SELECT * FROM necessity_details");
	 	return $result_array;
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
}
?>