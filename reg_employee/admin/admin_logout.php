<?php	
	include('./loginVerify.php');

	unset($_SESSION);
	session_destroy();
	header('Location:./admin_login.php?msg=LogoutSucess');
?>