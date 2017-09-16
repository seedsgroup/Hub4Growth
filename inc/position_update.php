<?php session_start();
	include 'config.php';
	include 'dbconnect.php';
	include 'function.php';

	// debugger($_POST);  debugger($_FILES); debugger($_FILES['images']['tmp_name']); 
	if(isset($_POST) && !empty($_POST)){
		
		$name= sanitize($_POST['name']);
		$pos_title = sanitize($_POST['pos_title']);
		$pos_description = sanitize($_POST['pos_description']);
		$message = sanitize($_POST['message']);
		$type = sanitize($_POST['type']);
		$status = sanitize($_POST['status']);
		$id = sanitize($_POST['id']);
      // debugger($_POST);
        global $conn;
        if(!isset($_FILES) && empty($_FILES)){
        $sql = "UPDATE positions SET name='$name', pos_title='$pos_title' , pos_description='$pos_description' , message ='$message' , type ='$type' , status ='$status' Where id = '$id'";
       
        $query = mysqli_query($conn, $sql);
        if($query){
        
        $_SESSION['success'] = "Profile has been updated";
            @header("location: ../list_position");
			exit;
		}else{
            $_SESSION['error'] = "Profile update was unsuccessfull at the moment;";
            @header("location: ../list_position");
			exit;
		}
    } //file check gareko 
    if((isset($_FILES) && !empty($_FILES))){
        $data = array();
		$data['name']= sanitize($_POST['name']);
		$data['pos_title'] = sanitize($_POST['pos_title']);
		$data['pos_description'] = sanitize($_POST['pos_description']);
		$data['message'] = sanitize($_POST['message']);
		$data['type'] = sanitize($_POST['type']);
		$data['status'] = sanitize($_POST['status']);
        $image = $_POST['removeImage'];
        unlink($image);
        
		$member_id = updateMember($data);
		
		if($member_id){
					if(isset($_FILES) && !empty($_FILES['images']['tmp_name'])){
                    
                    for($i=0; $i<count($_FILES['images']['tmp_name']); $i++){
                    // debugger($_FILES, true);
                   $temporary_name = $_FILES['images']['tmp_name'];
                    $ext = getFileExtension($_FILES['images']['name']);
                     
                    if(in_array($ext, $allowed_image_ext)){
                        $file_name = "Hub4Growth-".rand(0,999999999).".".$ext;
                        $success = @move_uploaded_file($temporary_name, $upload_path."/".$file_name);
                        if($success){
                            $images= $file_name;
                        }
                    }
                }
           

					$uploads = addProfileImages($images, $member_id);

					}
                            if($uploads){
                                $_SESSION['success'] = "Profile has been added successfully";
                                @header("location: ../list_position");
                                exit;
							}
							else{
									$_SESSION['info'] = "Profile's data has been added";
									@header("location: ../list_position");
									exit;
							}


					}else{
							$_SESSION['error'] = "Profile data hasn't been updated!";
							@header('location: ../list_position');
							exit;
			 }
    }
} //post check gareko
?>
