<?php
require_once('initialize.php');


class DatabaseObject{
	function __construct(){
		echo "I'm DatabaseObject class";
	}
		public static function find_all(){
		 return self::find_by_query("SELECT * FROM user_account");
	}
	public static function find_by_id($id){
		global $database;
		$result_array = self::find_by_query("SELECT * FROM user_account WHERE Index_no={$id} LIMIT 1");
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