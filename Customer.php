<?php
include ('header.html');
include ('applying.php');
?>
<div class="container">
	<h2>Customers</h2>
	<br>
	<table class="table table-light table-striped">
		<tr>
			<th>ID</th>
			<th>Name</th>
      <th>For more info</th>
		</tr>

		<?php
			$tbl_name = 'customer';
			$query = $obj->select_data($tbl_name);
			$res = $obj->execute_query($conn,$query);
			$sn = 1;

			if($res)
			{
				$count_rows= $obj->num_rows($res);
				if($count_rows > 0)
				{
					while ($row=$obj->fetch_data($res)) {
						$id = $row['id'];
						$name = $row['name'];
						?>

						<tr>
							<td><?php echo $id; ?>. </td>
							<td><?php echo $name; ?></td>
							<td>
								<a href="customer1.php?id=<?php echo $id; ?>" class="btn-success btn-sm">More</a>
							</td>
						</tr>

						<?php
					}
				}
      }
		?>

	</table>
</div>
