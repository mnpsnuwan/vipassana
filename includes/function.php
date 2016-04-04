<?php

function output_massage($massage=""){
	 if(!empty($massage)){
	 	return "<p class=\"message\">{$massage}</p>";
	 }else{
	 	return "";
	 }
}
function __autoload($class_name){
	$class_name = strtolower($class_name);
	$path =LIB_PATH.DS."{$class_name}.php";
	if(file_exists($path)){require_once($path);
	}else{
		die("The file {$class_name}.php could not be found.");
	}
}
function redirect_to($location=null){
	if($location != null){
		//echo "It's a redirect_to function";
		header("Location: {$location}");
		exit;
	}
}
function strip_zeros_from_date($marked_string){
	// first remove the marked zeros
	$no_zeros = str_replace('*0', '', $marked_string);
	// then remove any remaining marks
	$cleaned_string = str_replace('*', '', $no_zeros);
	return $cleaned_string;
}
function include_layout_template($template){
	include(LIB_PATHi.DS.'layouts'.DS.$template);
}
?>