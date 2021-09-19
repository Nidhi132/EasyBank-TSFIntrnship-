<?php
include ('header.html');
include ('applying.php');
 ?>
<div class="container">
  <br><br>
	<h2 class="text-center">Money Transfer</h2>
  <div class="row">
    <div class="col">
<br><br>
	<form action="transfer1.php" method="post">
    <div class="form-group">
    <label for="c1">From:</label>
    <input type="text" name="c1" class="form-control" placeholder="From" required="true" id="c1">
  </div>
  <div class="form-group">
    <label for="c2">To:</label>
    <input type="text" name="c2" class="form-control" placeholder="To" required="true" id="c2">
  </div>
  <div class="form-group">
    <label for="amt">Amount:</label>
    <input type="number" name="amt" class="form-control" placeholder="Amount" required="true" id="amt">
  </div>
  <!-- <button type="submit" class="btn btn-danger">Submit</button> -->
  <input type="submit" name="submit" class="form-control btn btn-danger">
	</form>
</div>
<div class="col">
  <br>
  <br>
<img src="images/2.jpg" class="rounded float-left" alt="..." width="500px">
</div>
</div>
</div>
</body>
</html>
