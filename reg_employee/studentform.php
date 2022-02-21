<?php
session_start();
include('functions.php');    
$data=stuProfile($_SESSION['id']);   
$row=mysqli_fetch_array($data);
?>

<!--=======hedear file =========-->
<?php
include('./header2.php');

?>
<!--===end of header===-->

<!-- content-wrap starts here -->
<div id="content-wrap">	 
	
	<div id="main">
		
		<a name="TemplateInfo"></a>			
		
		
		<h3>Exam Form</h3>
		
		<?php
		if($row['forwarded']==1)
		{ 
			?>
			
			<form action="userreg.php" method="post">	
				
				
				<p>
					

					<label>fullname</label>
					<input  name="uname" type="text" size="30" />
					<label>Fathername</label>
					<input  name="fname" type="text" size="30" />
					<label>Mothername</label>
					<input  name="mname" type="text" size="30" />
					<label>Gender</label>
					Male <input  name="name" type="radio" size="30" checked="" /> 
					Female <input  name="name" type="radio" size="30" />
					<label>email</label>
					<input name="email" type="email" size="30" />
					<label>Enrollno.</label>
					<input name="enroll" type="text" size="30" />
					<label>Address</label>
					<input name="add" type="text" size="30" />

				</p>
				<br />	
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="button" type="submit" name="Regbtn" value="ragister" />
				&nbsp;<input class="button" type="reset"  value="clear"name="clearbtn" />		
			</p>		
		</form>				
		<?php
	}else{
		echo 'Not Forwarded By Insititute';
	}
	?>
	<br />	
	
</div>	

</div>
<!--===sidebaar===-->
<?php
include('sidebar.php');
?>
<!--end sidbar-->

<br />
<div class="clear"></div>
<!-- content-wrap ends here -->		
</div>	

<!-- wrap ends here -->
</div>

<!-- footer starts here -->	
<?php
include('./footer.php')
?>

<!-- footer ends here -->	

</body>
</html>

