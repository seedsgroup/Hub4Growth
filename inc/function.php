<?php

	function debugger($array, $is_die = false){
		echo "<pre>";
		print_r($array);
		echo "</pre>";
		if($is_die){

			exit;
		}
	}

	function sanitize($string){
		if(get_magic_quotes_gpc()){
			$string = trim(stripslashes($string));
		}
			$string = strip_tags($string);
			$string = trim($string);
		return $string;
	}

	function getUser($username){
		global $conn;
		$sql = "SELECT * from users where username = '$username'";
		$query = mysqli_query($conn, $sql);
		if(mysqli_num_rows($query) <= 0){
			return 0;
		}else{
			$data[]= array();
			while($rows = mysqli_fetch_assoc($query)){
				$data = $rows;
			}return $data;
		}
	}

	function getAllUserlist(){
		global $conn;
		$sql = "SELECT * from user_signup";
		$query = mysqli_query($conn, $sql);
		if(mysqli_num_rows($query) <= 0){
			return 0;
		}else{
			$data= array();
			while($rows = mysqli_fetch_assoc($query)){
				$data[]=$rows;
			}return $data;
		}
	}

	function getAllEnquiry(){
		global $conn;
		$sql = "SELECT * from enquiry order by id desc";
		$query = mysqli_query($conn, $sql);
		if(mysqli_num_rows($query) <= 0){
			return 0;
		}else{
			$data= array();
			while($rows = mysqli_fetch_assoc($query)){
				$data[]=$rows;
			}return $data;
		}
	}

	function getUserPostion($position){
		global $conn;
		$sql = "SELECT * from position_org where id = '$position'";
		$query = mysqli_query($conn, $sql);
		if(mysqli_num_rows($query) <=0){
			return 0;
		}else{
			$data=array();
			while($rows = mysqli_fetch_assoc($query)){
				$data[] = $rows;
			}return $data;
		}
	}

	function getPositionofOrg(){
		global $conn;
		$sql = "SELECT positions.*, member_image.image_title FROM positions LEFT JOIN member_image on positions.id = member_image.member_id ORDER BY positions.id desc";
		$query = mysqli_query($conn, $sql);
		if(mysqli_num_rows($query) <1){
			return 0;
		}else{
			$data = array();
			while($rows = mysqli_fetch_assoc($query)){
				$data[] = $rows;
			}return $data;
		}
	}

	function getVision(){
		global $conn;
		$sql = "SELECT * FROM about_org WHERE id=1";
		$query = mysqli_query($conn, $sql);
		if(mysqli_num_rows($query) <1){
			return 0;
		}else{
			$data = array();
			while($rows = mysqli_fetch_assoc($query)){
				$data[] = $rows;
			}return $data;
		}
	}

function getContribution (){
		global $conn;
		$sql = "SELECT * FROM about_org WHERE id=2";
		$query = mysqli_query($conn, $sql);
		if(mysqli_num_rows($query) <1){
			return 0;
		}else{
			$data = array();
			while($rows = mysqli_fetch_assoc($query)){
				$data[] = $rows;
			}return $data;
		}
	}
	function getCollaboration(){
		global $conn;
		$sql = "SELECT * FROM about_org WHERE id=3";
		$query = mysqli_query($conn, $sql);
		if(mysqli_num_rows($query) <1){
			return 0;
		}else{
			$data = array();
			while($rows = mysqli_fetch_assoc($query)){
				$data[] = $rows;
			}return $data;
		}
	}
	function getResearch(){
		global $conn;
		$sql = "SELECT * FROM about_org WHERE id=4";
		$query = mysqli_query($conn, $sql);
		if(mysqli_num_rows($query) <1){
			return 0;
		}else{
			$data = array();
			while($rows = mysqli_fetch_assoc($query)){
				$data[] = $rows;
			}return $data;
		}
	}

		function getContact(){
		global $conn;
		$sql = "SELECT * from contact WHERE id=1";
		$query = mysqli_query($conn, $sql);
		if(mysqli_num_rows($query) <= 0){
			return 0;
		}else{
			$data= array();
			while($rows = mysqli_fetch_assoc($query)){
				$data[]=$rows;
			}return $data;
		}
	}

	function getEvents(){
		global $conn;
		$sql = "SELECT * from achievement";
		$query = mysqli_query($conn, $sql);
		if(mysqli_num_rows($query) <= 0){
			return 0;
		}else{
			$data= array();
			while($rows = mysqli_fetch_assoc($query)){
				$data[]=$rows;
			}return $data;
		}
	}

	function addMember($data){
		global $conn;
		$fields = array_keys($data);
		$values = array_values($data);
		$sql= "INSERT INTO positions (".implode(", ", $fields).")VALUES('".implode("', '", $values)."')";
    $query = mysqli_query($conn, $sql);

		if($query){
   		$last_id = $conn->insert_id;
			return $last_id;
    }else{
     return false;
    }
	}
	
	function updateMember($data){
		global $conn;
		$fields = array_keys($data);
		$values = array_values($data);
		$sql= "UPDATE positions (".implode(", ", $fields).")VALUES('".implode("', '", $values)."')";
        $query = mysqli_query($conn, $sql);

		if($query){
   		$last_id = $conn->insert_id;
			return $last_id;
        }else{
        return false;
        }
	}
	
	function getAllInfoOfMemberById($value){
		global $conn;
		$sql = "SELECT positions.*, member_image.image_title FROM positions left join member_image ON positions.id = member_image.member_id where positions.id = ".$value."";
		//debugger($sql); exit;
		$query= mysqli_query($conn, $sql);
		if(mysqli_num_rows($query) <1){
			return false;
        }else{
			$data[]=array();
			while($rows = mysqli_fetch_assoc($query)){
				$data = $rows;
			}
			return $data;
		}
	}

	function deleteData($tablename, $field, $value){
        global $conn;

        $sql= "DELETE FROM ".$tablename." WHERE ".$field." = ".$value."";
        $query = mysqli_query($conn, $sql);
        if($query){
            return true;
    }
        else{
            return false;
        }
    }
    
	function getBanners(){
		global $conn;
		$sql = "SELECT banner_info.*, banner_image.banner_title FROM banner_info LEFT JOIN banner_image on banner_info.id = banner_image.banner_id ORDER BY banner_info.id desc limit 3";
		$query = mysqli_query($conn, $sql);
		if(mysqli_num_rows($query) <1){
			return 0;
		}else{
			$data = array();
			while($rows = mysqli_fetch_assoc($query)){
				$data[] = $rows;
			}return $data;
		}
	}
    
    function upDateData($tablename, $field, $value){
        global $conn;

        $sql= "UPDATE ".$tablename." WHERE ".$field." = ".$value."";
        $query = mysqli_query($conn, $sql);
        if($query){
            return true;
    }
        else{
            return false;
        }
    }
    
	function getFileExtension($fileName){
		$ext = pathinfo($fileName, PATHINFO_EXTENSION);
		return $ext;
	}

	function addProfileImages($images, $member_id){
        global $conn;
        $sql = "INSERT INTO member_image SET image_title = '$images', member_id='$member_id'";
        $query = mysqli_query($conn, $sql);
        if($query){
            return true;
        }else{
            return false;
        }
    }
    
    
	function addBannerInfo($data){
		global $conn;
		$fields = array_keys($data);
		$values = array_values($data);
		$sql= "INSERT INTO banner_info (".implode(", ", $fields).")VALUES('".implode("', '", $values)."')";
    $query = mysqli_query($conn, $sql);

		if($query){
   		$last_id = $conn->insert_id;
			return $last_id;
    }else{
     return false;
    }
	}
	
    function addBannerImage($images, $banner_id){
     global $conn;
        $sql = "INSERT INTO banner_image SET image_title = '$images', member_id='$banner_id'";
        $query = mysqli_query($conn, $sql);
        if($query){
            return true;
        }else{
            return false;
        }
	}
    

?>
