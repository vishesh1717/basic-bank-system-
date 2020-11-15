<?php 
	$conn=mysqli_connect("localhost", "vishesh16", "golempekka16", "bank");
	if(!$conn) {
		echo "Connection Error: " . mysqli_connect_error();
	}
?>