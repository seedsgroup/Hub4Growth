<?php session_start();
	include 'config.php';
	include 'dbconnect.php';
	include 'function.php';

	if(isset($_POST) && !empty($_POST)){
		$summary = sanitize($_POST['summary']);
		$description = sanitize($_POST['description']);
		$page = sanitize($_POST['page']);
		if($page=="Vision and mission"){
			$id=1;
		}else if($page=="Contribution to National Development"){
			$id=2;			
		
		}else if($page=="collaboration"){
			$id=3;
		}else {
			$id=4;
		}
	}
		

		$sql = "UPDATE about_org SET description = '$description', summary = '$summary' WHERE id='$id'";
		// debugger($sql, true);
		// exit;
		$query = mysqli_query($conn, $sql);
		/*echo "after query";*/
		if($query){
		
				$_SESSION['success'] = ucfirst($page)." has been updated successfully.";
				
					if($page=="Vision and mission"){
						@header('location: ../about_vision');
						exit;
					}else if($page =="Contribution to National Development"){
						@header('location: ../about_contribution');
						exit;
					}else if($page =="collaboration"){
						@header('location: ../about_collaboration');
						exit;
					}else{
						@header('location: ../about_research');
						exit;
					}
		}
		else{
				$_SESSION['warning'] = ucfirst($page)." couldn't be updated at this moment.";
				if($page="Vision and mission"){
						@header('location: ../about_vision');
						exit;
					}else if($page ="Contribution to National Development"){
						@header('location: ../about_contribution');
						exit;
					}else if($page ="collaboration"){
						@header('location: ../about_collaboration');
						exit;
					}else{
						@header('location: ../about_research');
						exit;
					}
			}
?>