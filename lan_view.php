<?php
if(!isset($_SESSION)) { 
session_start();
}
// include "auth.php";
 include "header_lanview.php";
?>
<br>
	<br>
		<center><h3> Voting So Far  </h3></center>
	<br>
<br>
<center>
	<div class="form-group col-sm-9">
		<?php
			include "connection.php";
			$member = mysqli_query($con, 'SELECT * FROM languages' );
			if (mysqli_num_rows($member)== 0 ) {
				echo '<font color="red">No results found</font>';
			}
			else {
				
					echo '<center>
					<table class="table">
					<thead>
						<tr>
							<th scope="col">ID</td>		
							<th scope="col">CANDIDATE</td>
							<th scope="col">ABOUT</td>
							<th scope="col">VOTE</td>
						</tr>
					</thead>';
					
					while($mb=mysqli_fetch_object($member))
							{	
								$id=$mb->lan_id;
								$name=$mb->fullname;
								$about=$mb->about;
								$vote=$mb->votecount;
								echo '
								<tbody>
									<tr>';
										echo '<th scope="row">'.$id.'</th>';		
										echo '<td>'.$name.'</td>';
										echo '<td>'.$about.'</td>';
										echo '<td>'.$vote.'</td>';
							echo "</tr>";
							}
							echo'
							</tbody>
							</table>
						</center>';
				}
	?>
	</div>
</center>