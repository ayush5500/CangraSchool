<?php
if(isset($_POST['Regbtn'])){  
  $email=$_POST['email'];
  $password=$_POST['upass'];
  
  include('config.php');
  
  $stu_login="SELECT * FROM student_tbl WHERE email='$email' AND pass='$password'";

  $data=mysqli_query($conn,$stu_login);
  if(mysqli_num_rows($data)>0)
  {
    $row=mysqli_fetch_array($data);
    
    session_start();
    $_SESSION['id']=$row['id']; 
    
    
    header('Location:./view-profile.php?msg=LOGIN-SUCCESS');
  }

}

?>