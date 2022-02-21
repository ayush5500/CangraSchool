<?php	
	include('./loginVerify.php');

	unset($_SESSION);
	session_destroy();
	header('Location:./login.php?msg=LogoutSucess');
?>