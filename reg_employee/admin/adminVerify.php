<?php
if(isset($_POST['Regbtn1'])){  
  $email=$_POST['email'];
  $password=$_POST['upass'];
  
  include('../config.php');
  
  $adm_login="SELECT * FROM admin WHERE email='$email' AND password='$password'";

  $data=mysqli_query($conn,$adm_login);
  if(mysqli_num_rows($data)>0)
  {
    $row=mysqli_fetch_array($data);
    
    session_start();
    $_SESSION['id']=$row['id']; 
    
    
    header('Location:./adminView.php?msg=LOGIN-SUCCESS');
  }else{
    header('Location:./admin_login.php');
  }

}

?>