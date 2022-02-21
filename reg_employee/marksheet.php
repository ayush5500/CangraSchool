<?php
session_start();
include('functions.php');
$data=stuProfile($_SESSION['id']);    
$row=mysqli_fetch_array($data);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>

	<title>Marksheet</title>

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
					<h1>Mark<span class="gray">Sheet</span></h1>
					
					<div style="margin-top: 20px; margin-left: 20px;">
						<div style="width:50% ; float: left;">
							<p>Enroll No : <?=$row['enrollment']?></p>
							<p>Name : <?=$row['fullname']?></p>
						</div>
						<div style="width:50% ; float: left;">
							<p>Class : <?=$row['class']?></p>
							<p>email : <?=$row['email']?></p>
						</div>
					</div>

					<form action="#">		
						

						<table  width=80% >
							<tr bgcolor=black align="center">
								<th>Subject Code</th>
								<th>Subject Name</th>
								<th>Marks</th>
								<th>Total Marks</th>
								
							</tr>
							<?php
							$data=viewmarkshet($_SESSION['id']);     
							$marks = 0;
							$total_marks = 0;
							while($row=mysqli_fetch_array($data))
							{
								$marks += $row['marks'];
								$total_marks += $row['total_marks'];
								?>
								<tr align="center">
									<td><?=$row['subject_code']?></td>
									<td><?=$row['subject_name']?></td>
									<td><?=$row['marks']?></td>
									<td><?=$row['total_marks']?></td>
									
								</tr>
								<?php
							}
							$percent = 0;
							$result = ($marks * 100)/$total_marks;
							$result = round($result, 2);
							$percent = $result;

							if($result < 33)
							{
								$result = "Fail";
							}
							else
							{
								$result = "Pass";
							}


							$division= "";

							if($percent > 60)
							{
								$division = "First";
							}
							else if($percent > 33)
							{
								$division = "Second";
							}
							else
							{
								$division = "NA";
							}
							?>
			<!--<tr align="center">
				<td>eng02</td>
				<td>English</td>
				<td>---</td>
				<td>100</td>
				 
			</tr>
			<tr align="center">
				<td>mat03</td>
				<td>Maths</td>
				<td>---</td>
				<td>100</td>
				 
			</tr>
			<tr align="center">
				<td>sci04</td>
				<td>Science</td>
				<td>---</td>
				<td>100</td>
			</tr> 
			<tr align="center">
				<td>gk005</td>
				<td>G.K</td>
				<td>---</td>
				<td>100</td>
			</tr> 
			<tr align="center">
				<td>sub06</td>
				<td>Practical</td>
				<td>---</td>
				<td>100</td>
			</tr> -->
			<tr bgcolor=black align="center">
				<td></td>
				<td>Total</td>
				<td><?php echo $marks;?></td>
				<td><?php echo $total_marks;?></td>
				
			</tr>
			<tr bgcolor=gray style="color:black" align="center">
				<td>RESULT : <?php echo $result;?></td>
				<td>PERCENTAGE : <?php echo $percent;?>%</td>
				<td>DIVISION : <?php echo $division;?></td>
				<td>POSSITION : </td>
				
			</tr>
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
