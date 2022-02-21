<?php
session_start();
include('../functions.php');
$data=stuProfile($_SESSION['id']);     
$row=mysqli_fetch_array($data);
?>


<?php
include('./adminHeader2.php');
?>

<!-- content-wrap starts here -->
<div id="content-wrap">	 
	
	<div id="main">
		


		<a name="SampleTags"></a>
		<div class="box">
			<h1>Student<span class="gray">Details</span></h1>



			<form action="#">		


				<table  width=100% >
					<tr bgcolor=black align="center">
						<th>Full Name</th>
						<th>Enrollment</th>
						<th>Class</th>
						<th>Email</th>
						<th>Age</th>
						<th>City</th>
						<th>Forward Form</th>				 
					</tr>
					<?php
					$data=stuDetails();   

					while($row=mysqli_fetch_array($data))
					{  

						?>
						<tr align="center">
							<td><?=$row['fullname']?></td>
							<td><?=$row['enrollment']?></td>
							<td><?=$row['class']?></td>
							<td><?=$row['email']?></td>
							<td><?=$row['age']?></td>
							<td><?=$row['city']?></td>
							<td><?php 
							if($row['fees_total']!=7000)
							{
								echo 'Due Fees';
							}else{
								echo "<input type='submit' name='btn' value='Forward' style='background-color: green;
								color: white;'></input>";
							}

						?></td>

					</tr>
					<?php
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
			
		</tr>
	</table>	 		
</p>			
</form>


<br />	

</div>	

</div>

<!-- sidebar start here -->
<?php
include('./adminsidebar.php');
?>

<br />
<div class="clear"></div>
<!-- content-wrap ends here -->		
</div>	

<!-- wrap ends here -->
</div>

<!-- footer starts here -->	
<?php
include('../footer.php');
?>
<!-- footer ends here -->	

</body>
</html>
