
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>

	<title>admin</title>

	<meta http-equiv="content-type" content="application/xhtml+xml; charset=UTF-8" />
	<meta name="author" content="Erwin Aligam - styleshout.com" />
	<meta name="description" content="Site Description Here" />
	<meta name="keywords" content="keywords, here" />
	<meta name="robots" content="index, follow, noarchive" />
	<meta name="googlebot" content="noarchive" />

	<link rel="stylesheet" type="text/css" media="screen" href="../images/myStyle.css" />

</head>

<body>
	<!-- wrap starts here -->
	<div id="wrap">
		<!--=======hedear file =========-->
		<div id="header">	
			
			<h1 id="logo">Admin<br><span class="gray">Profile</span></h1>	
			
			
			<!-- Menu Tabs -->
			<div id="menu">
				<ul>
					<li id="current"><a href="../home.php">Home</a></li>
					
					<li><a href="ragister.php">Register User</a></li>
					<li><a href="admin_login.php">Login</a></li>			
				</ul>		
			</div>		
			
		</div>
		<!--===end of header===-->
		
		<!-- content-wrap starts here -->
		<div id="content-wrap">	
			
			<div id="main">
				
				<a name="TemplateInfo"></a>			
				
				
				<h3>Admin Login</h3>
				<form action="adminverify.php" method="post">	
					
					
					<p>

						<label>email</label>
						<input name="email" placeholder="Your email" type="text" size="30" />
						<label>password</label>
						<input name="upass" placeholder="your Password" type="Password" size="30" /></p>
						<br />	
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="button" type="submit" name="Regbtn1" value="SignIn" />
						&nbsp;<input class="button" type="reset"  value="Reset"name="btn2" />		
					</p>		
				</form>				
				
				<br />	
				
			</div>	
			
		</div>
		<!--===sidebaar===-->

		<!--end sidbar-->

		<br />
		<div class="clear"></div>
		<!-- content-wrap ends here -->		
	</div>	

	<!-- wrap ends here -->
</div>

<!-- footer starts here -->	
<?php
include('../footer.php')
?>

<!-- footer ends here -->	

</body>
</html>
