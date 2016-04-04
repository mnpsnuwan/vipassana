<?php
require_once('initialize.php');

class Donationitem{

	public $donation_id;
	public $items;
	public $amount;
	public $description;
	public $state;
	public $necessity_id;
	public $donar_id;

	public static function insert_data($donation_object,$email){
	global $database;
	$query = "INSERT INTO donation_items ";
	$query .="(items,amount,description,state, ";
	$query .="necessity_id,donar_id) ";
	$query .="VALUES ('{$donation_object->items}', ";
	$query .="'{$donation_object->amount}', ";
	$query .="'{$donation_object->description}', ";
	$query .="'{$donation_object->state}', ";
	$query .="'{$donation_object->necessity_id}', ";
	$query .="(SELECT Id_number FROM donoation WHERE ";
	$query .="Email='{$email}')) ";
	$database->query($query);
	 	}
	public static function view_condition_data(){
	 	global $database;
	 	$result_array = self::find_by_query("SELECT * FROM donation_items WHERE state=1 LIMIT 0,50");
	 	return $result_array;
	 }
	public static function update_state($state,$value){
		global $database;
		$query ="UPDATE donation_items SET ";
		$query .="State ='{$state}' ";
		$query .="WHERE donar_id='{$value}' ";
		$database->query($query);
	}
	public static function checked_state(){
		global $database;
		$query ="SELECT * FROM donoation WHERE State=1 ";
		$result =self::find_by_query($query);
		return $result;
	}
	public static function find_by_donor($id){
	 	global $database;
	 	$result_array = self::find_by_query("SELECT * FROM donation_items WHERE donar_id='{$id}' LIMIT 0,50");
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