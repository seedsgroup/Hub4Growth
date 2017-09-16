<?php session_start();
    include 'inc/config.php';
    include 'inc/dbconnect.php';
    include 'inc/function.php';

if(isset($_POST) && !empty($_POST)){
  $firstname = sanitize($_POST['firstname']);
  $lastname = sanitize($_POST['lastname']);
  $email = sanitize($_POST['email']);
  $status = sanitize($_POST['status']);
  $nationality = sanitize($_POST['nationality']);
  $address = sanitize($_POST['address']);
  $role_id = sanitize($_POST['role_id']);
  $gender = sanitize($_POST['gender']);
  $added_by = $_SESSION['user_id'];
  $id = sanitize($_GET['id']);

  $sql= "UPDATE user_registration SET firstname = '$firstname', lastname = '$lastname', email = '$email', gender = '$gender', address = '$address', user_status = $status, nationality = '$nationality', 
  added_by = '$added_by',role_id = '$role_id' WHERE id = $id";

  $query= mysqli_query($conn, $sql);
    if($query){
      $_SESSION['SUCCESS'] = "User has been updated successfully";
      @header('location: usr_list.php');
    }else{
      $_SESSION['ERROR'] = "There was some problem while updating user at this moment. Try again later";
      @header('location: usr_list.php');
  }
}
?>