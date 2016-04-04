<?php

class Session{

	private $logged_in=false;
	public $user_id;
	public $value;

	function __construct(){
		session_start();
		$this->check_login();
		if($this->logged_in){
			//action to take right if user is logged in
		}else{
			// action to take right if user is not logged in
		}
	}
	public function is_logged_in(){
		return $this->logged_in;
	}
	public function login($user){
		//database should find user based on username/passord
		if($user){
			$this->user_id=$_SESSION['user_id'] = $user->Index_no;
			$this->logged_in=true;
		}
	}
	public function logout(){
		unset($_SESSION['user_id']);
		unset($this->user_id);
		$this->logged_in=false;
	}
	private function check_login(){
		if(isset($_SESSION['user_id'])){
			$this->user_id=$_SESSION['user_id'];
			$this->logged_in=true;
		}else{
			unset($this->user_id);
			$this->logged_in=false;
		}
	}
	/*
	public static function load_value($name,$value){

	} */
}

$session = new Session();
?>