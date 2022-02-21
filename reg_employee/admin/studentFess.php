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
			<h1>Student<span class="gray">Fees</span></h1>
			
			
			<form action="#">		
				

				<table  width=80% >
					<tr bgcolor=black align="center">
						<th>Enroll No.</th>
						<th>Student Name</th>
						<th>Total fees</th>
						<th>Due fees</th>
						<th>Late fees</th>
						<th>Due months</th>

						
					</tr>
					<?php
					$data=stuFees();    
					while($row=mysqli_fetch_array($data))
					{
						
						?>
						<tr align="center">
							<td><?=$row['enrollment']?></td>
							<td><?=$row['fullname']?></td>
							<td><?php
							if($row['fees_total']=="")
							{
								echo 'nill';

							}else{
								echo $row['fees_total'];
								
							}
						?></td>
						<td><?php
						if($row['due_fees']=="")
						{
							echo 12000;
						}else{
							echo $row['due_fees'];
						}
					?></td>
					<td><?php  
					$m = 0;				
					if($row['last_month'] != "")
					{
						$datetime2 = date_create ($row['last_month']);
						$datetime1 = date_create(date('Y-m-d'));
						$datetime2 = date_create ($row['last_month']);
						$interval = date_diff($datetime1, $datetime2);
						$m = $interval->format('%m');
						echo $late_fees = $m * 100;
					}
					else
					{
						$datetime2 = date_create ($row['last_month']);
						$datetime1 = date_create(date('Y-m-d'));
						$datetime2 = date_create ("2021-07-01");
						$interval = date_diff($datetime1, $datetime2);
						$m = $interval->format('%m');
						echo $late_fees = $m * 100;
					}

					?>

				</td>
				<td><?= $m;?></td>
				
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
