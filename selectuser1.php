<?php 
	include('db_connect.php');

	$sql = 'SELECT c_name, c_balance FROM customer_details ORDER BY c_id';

	// get the result set (set of rows)
	$result = mysqli_query($conn, $sql);

	// fetch the resulting rows as an array
	$customers = mysqli_fetch_all($result, MYSQLI_ASSOC);

	// free the $result from memory (good practise)
	mysqli_free_result($result);

	// close connection
	mysqli_close($conn);

?>

<!DOCTYPE html>
<html>
<head>
	<title>Select User | Banking System</title>
	
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<?php include('navbar2.php'); ?>
	<section style="background-color:grey">
		<div class="wrapper" >
			<form action="transaction1.php" method="POST">
			<div class="container col s12" style="margin: 3px auto">

				<label style="font-size:20px;font-weight:600;color:black;">Select a user</label>
				<select class="browser-default" name="name">
					<option value="" disabled selected>Choose your option</option>
					<?php 
						foreach($customers as $customer) {
							echo "<option value='".$customer['c_name']."'>".$customer['c_name']."</option>";
						}
					?> 
            </select>
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
			
			</div>
			<div class="center">
				<button type="submit" class="waves-effect waves-light btn z-depth-2" style="background-color: #6C63FF; margin: 20px;">Submit</button>
				<a href="index.php" class="waves-effect waves-light btn black z-depth-2">Home</a> 
			</div>
				<div class="container" style="margin: 3px auto">
				<table class="highlight">
					<tr>
						<th>Name</th>
						<th>Current Balance(in ₹)</th>
					</tr>
					<?php 
						foreach($customers as $customer) {
							echo "<tr><td> ".$customer['c_name']."</td><td>".$customer['c_balance']."</td></tr>";
						}
					?>
				</table>
			</div>

			
			
			</form>
		</div>
    </section>
    <link rel="stylesheet" href="css1.css">
	<?php include('footer.php'); ?>
</body>

</html>