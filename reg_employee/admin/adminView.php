<?php

session_start();
include('../functions.php');  
$data=admin_detail($_SESSION['id']);  
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
			<h1>admin <span class="gray">Profile</span></h1>
			
			
			
			

			<form action="newview.php" method="post">		
				<p>
					<table border="2px" width="50%">				
						
						
						<tr>
							<td><label>Email :- <?=$row['email']?></label></td>
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
