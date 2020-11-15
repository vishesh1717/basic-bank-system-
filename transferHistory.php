<?php 
	session_start();
	include('db_connect.php');

	$sql = 'SELECT * FROM transfer_history ORDER BY t_id';

	// get the result set (set of rows)
	$result = mysqli_query($conn, $sql);

	// fetch the resulting rows as an array
	$history = mysqli_fetch_all($result, MYSQLI_ASSOC);

	// free the $result from memory (good practise)
	mysqli_free_result($result);

	// close connection
	mysqli_close($conn);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Transfer History | Banking System</title>
    <link rel="stylesheet" href="css1.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>
    <?php include('navbar2.php'); ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

	<section>
		<div class="wrapper">
			<form action="selectSender.php" method="POST">
				<div class="container" style="margin: 70px auto">
				<table class="highlight center">
					<tr>
						<th>Sender</th>
						<th></th>
						<th>Receiver</th>
						<th>Transfer Amount</th>
						<th>Transfer Time</th>
					</tr>
					<?php 
						foreach($history as $hist) {
							echo "<tr><td> ".$hist['t_sender']."</td><td>&rarr;</td><td>".$hist['t_receiver']."</td><td>".$hist['t_amount']."</td><td>".$hist['t_time']."</td></tr>";
						}
					?>
				</table>
			</div>		

	</section>
	<?php include('footer.php'); ?>
</body>
</html>