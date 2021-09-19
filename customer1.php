<?php
include ('header.html');
include ('applying.php');
?>
<div class="container">
	<h2>Customer detailed Info</h2>
	<br>
	<table class="table table-light table-striped">
		<tr>
			<th>ID</th>
			<th>Name</th>
      <th>Account No</th>
      <th>Balance</th>
		</tr>

		<?php
			$tbl_name = 'customer';
			$id = $_GET['id'];
			$where = "id='$id'";
			$query = $obj->select_data($tbl_name,$where);
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
						$accno = $row['accno'];
						$balance = $row['balance'];
						?>

						<tr>
							<td><?php echo $id; ?>. </td>
							<td><?php echo $name; ?></td>
							<td><?php echo $accno; ?></td>
							<td><?php echo $balance; ?></td>
						</tr>

						<?php
					}
				}
      }
		?>

	</table>
</div>
</body>
</html>
