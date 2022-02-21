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
			<h1>Student<span class="gray">Result</span></h1>
			
			

			<form action="#">		
				

				<table  width=80% >
					<tr bgcolor=black align="center">
						<th>Enroll No.</th>
						<th>Student Name</th>
						<th>Percentage</th>
						<th>Division</th>
						<th>Position</th>
						<th>Result</th>
						
					</tr>
					<?php
					$data=stuResult();     
					$position = 1;
					while($row=mysqli_fetch_array($data))
					{

						if($row['percent'] < 33)
						{
							$result = "Fail";
						}
						else
						{
							$result = "Pass";
						}


						$division= "";

						if($row['percent'] > 60)
						{
							$division = "First";
						}
						else if($row['percent'] > 33)
						{
							$division = "Second";
						}
						else
						{
							$division = "NA";
						}
						?>
						<tr align="center">
							<td><?=$row['enrollment']?></td>
							<td><?=$row['fullname']?></td>
							<td><?=$row['percent']?></td>
							<td><?=$division;?></td>
							<td><?=$position;?></td>
							<td><?=$result;?></td>
							
						</tr>
						<?php
						$position++;	
					}
					
					?>
					
					
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
