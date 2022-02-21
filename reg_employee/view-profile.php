<?php session_start();
include('functions.php');      
$data=stuProfile($_SESSION['id']);
$row=mysqli_fetch_array($data);

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>

	<title>View Profile</title>

	<meta http-equiv="content-type" content="application/xhtml+xml; charset=UTF-8" />
	<meta name="author" content="Erwin Aligam - styleshout.com" />
	<meta name="description" content="Site Description Here" />
	<meta name="keywords" content="keywords, here" />
	<meta name="robots" content="index, follow, noarchive" />
	<meta name="googlebot" content="noarchive" />

	<link rel="stylesheet" type="text/css" media="screen" href="images/myStyle.css" />

</head>

<body>
	<!-- wrap starts here -->
	<div id="wrap">

		<?php
		include('./header2.php');
		?>
		
		<!-- content-wrap starts here -->
		<div id="content-wrap">	 
			
			<div id="main">
				
				
				
				<a name="SampleTags"></a>
				<div class="box">
					<h1>View <span class="gray">Profile</span></h1>
					
					
					
					

					<form action="newview.php" method="post">		
						<p>
							<table border="2px" width="50%">				
								<tr>
									<td><label>Name :- <?=$row['fullname']?></label></td>
								</tr>
								
								<tr>
									<td><label>Email :- <?=$row['email']?></label></td>
								</tr>
								
								<tr>
									<td><label>EnrollNo. :- <?=$row['enrollment']?></label></td>
								</tr>
								<tr>
									<td><label>Age :- <?=$row['age']?></label></td>
								</tr>	
								<tr>
									<td><label>Class :- <?=$row['class']?></label></td>
								</tr>
								<tr>
									<td><label>City :- <?=$row['city']?></label></td>
								</tr>				 
							</table>	
						</p>		
					</form>				
					
					<br />	
					
				</div>	
				
			</div>

			<!-- sidebar start here -->
			<?php
			include('./sidebar.php');
			?>

			<br />
			<div class="clear"></div>
			<!-- content-wrap ends here -->		
		</div>	

		<!-- wrap ends here -->
	</div>

	<!-- footer starts here -->	
	<?php
	include('./footer.php');
	?>
	<!-- footer ends here -->	

</body>
</html>