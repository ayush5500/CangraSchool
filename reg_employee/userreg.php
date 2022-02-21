<?php
if(isset($_POST['Regbtn'])){
	include("./function.php");
	$name=addslashes(trim($_POST['uname']));
	$user=addslashes(trim($_POST['usname']));
	$phone=addslashes(trim($_POST['uphone']));
	$email=addslashes(trim($_POST['email']));
	$password=addslashes(trim($_POST['upass']));
	$address=addslashes(trim($_POST['add']));


	$arr_val=array("name"=>$name,"username"=>$user,"email"=>$email,"mobile"=>$phone,"address"=>$address,"password"=>$password);
	$tbl="users";
	$r=insert($tbl,$arr_val);
	if($r>0){
		header('Location:./login.php?msg=Sucess');
	}else{
		header('Location:./home.php?msg=Fail');
	}
}

?>