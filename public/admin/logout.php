<?php
require_once("../../includes/initialize.php");
if (isset($_POST['log_out'])) {
	$session->logout(); 
	if (!$session->is_logged_in()) {
		redirect_to("login.php");
	}
}
?>