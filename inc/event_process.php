<?php session_start();
	include 'config.php';
	include 'dbconnect.php';
	include 'function.php';

	if(isset($_POST) && !empty($_POST)){
		$event_title = sanitize($_POST['event_title']);
		$event_summary = sanitize($_POST['event_summary']);
		$event_description = sanitize($_POST['event_description']);
		$event_location = sanitize($_POST['event_location']);
		$event_date = sanitize($_POST['event_date']);
		$event_time = sanitize($_POST['event_time']);
		$event_type = sanitize($_POST['event_type']);

		$sql = "INSERT INTO achievement SET event_title = '$event_title', event_summary='$event_summary', event_description='$event_description', event_location='$event_location', event_date='$event_date', event_time='$event_time', event_type='$event_type'";
		
		$query = mysqli_query($conn, $sql);
		/*debugger($_POST);
		exit;
*/
		if($query){
			$_SESSION['success'] = "Event added successfully.";
			
			@header('location: ../events');
			exit;
		}else{
			$_SESSION['warning'] = "Event could not be added at this moment!";
			@header('location: ../events');
			exit;
		}		
	}
?>