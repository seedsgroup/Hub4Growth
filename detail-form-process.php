<?php session_start(); include 'inc/config.php'; include 'inc/dbconnect.php'; include 'inc/function.php'; 
	if(isset($_POST) && !empty($_POST)){
		
		$fullname = $_POST['fullname'];
		$email = sanitize($_POST['email']);
		$username = sanitize($_POST['username']);
		$password = sha1($_POST['password']);
		$gender = sanitize($_POST['gender']);
		$position = sanitize($_POST['position']);
		$message = sanitize($_POST['message']);
		$nationality = sanitize($_POST['nationality']);
		$phoneNumber = sanitize($_POST['phoneNumber']);
		$address = sanitize($_POST['address']);
		$status = sanitize($_POST['status']),
		$role = sanitize($_POST['role_id']),
		

		$sql = "INSERT into user_signup set 
				fullname = '$fullname', 
				email = 'email'.
				username = '$username',
				usr_password = '$password',
				gender = '$gender',
				position = '$position',
				message = '$message',
				nationality = '$nationality',
				address = '$address',
				role_id = '$role',
				usr_status = '$status'";
		$query= mysqli_query($conn, $sql);
		if($query){
			$_SESSION['success']= "User has been added successfully";
			session_destroy();
			setcookie('logged_in', 1, time()-60);
			header('location: header.php');
			exit;
		}else{
			$_SESSION['error'] = "User couldn't be added";
			header('location: detail_form.php');
			exit;
		}


	}
?>