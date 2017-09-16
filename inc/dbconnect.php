<?php
	$conn=mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD) OR die("Error in establishing database connection due to ".mysqli_error($conn)." right now.");
	$db=mysqli_select_db($conn, DB_NAME) OR die(" ".mysqli_error($conn)." ");


?>