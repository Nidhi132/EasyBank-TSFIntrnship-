<?php
include ('header.html');
include ('applying.php');
?>
<div class="container">
	<h2>Transfers made</h2>
	<br>
	<table class="table table-light table-striped">
		<tr>
			<th>ID</th>
			<th>Transfer from</th>
      <th>Transfer to</th>
      <th>Amount</th>
      <th>Date</th>
		</tr>

		<?php
			$tbl_name = 'transaction';
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
						$c1 = $row['c1'];
            $c2 = $row['c2'];
						$amt = $row['amt'];
						$date = $row['date'];
						?>

						<tr>
							<td><?php echo $id; ?>. </td>
							<td><?php echo $c1; ?></td>
              <td><?php echo $c2; ?></td>
							<td><?php echo $amt; ?></td>
							<td><?php echo $date; ?></td>
						</tr>

						<?php
					}
				}
      }
		?>

	</table>
</div>
