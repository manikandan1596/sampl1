<?php
	include('db/conn.php');
	if(isset($_POST['fetch'])){
		?>
		<table class="table table-striped table-bordered table-hover">
			<thead>
				<th>COMPANY</th>
				<th>PRODUCTS</th>
			</thead>
			<tbody>
			<?php
				$query=$conn->query("SELECT * FROM `pro`");
				while($row=$query->fetch_array()){
					?>
					<tr>
						<td><span id="comp<?php echo $row['memberid']; ?>"><?php echo $row['company']; ?></span></td>
						<td><span id="prod<?php echo $row['memberid']; ?>"><?php echo $row['product']; ?></span></td>
						
					</tr>
					<?php
				}
			
			?>
			</tbody>
		</table>
		<?php
	}
?>


