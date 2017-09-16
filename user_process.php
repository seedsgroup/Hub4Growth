<?php session_start();
    include 'inc/config.php';
    include 'inc/dbconnect.php';
    include 'inc/function.php';

if(isset($_POST['firstname']) && !empty($_POST['firstname'])){
  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $email = $_POST['email'];
  $username = $_POST['username'];
  $password = $_POST['password'];
  $status = $_POST['status'];
  $nationality = $_POST['nationality'];
  $address = $_POST['address'];
  $role_id = $_POST['role_id'];
  $gender = $_POST['gender'];
  $added_by = $_SESSION['user_id'];
  $sql= "INSERT INTO user_registration SET firstname = '$firstname', lastname = '$lastname', email = '$email', username = '$username', user_password = '$password', gender = '$gender', address = '$address', user_status = $status, nationality = '$nationality', 
  added_by = '$added_by',role_id = '$role_id'";

  $query= mysqli_query($conn, $sql);
    if($query){
      $_SESSION['SUCCESS'] = "User has been registered successfully";
      @header('location: user_reg.php');
    }else{
      $_SESSION['ERROR'] = "There was some problem on adding user because of ".mysqli_error($conn).". Try again later";
      @header('location: user_reg.php');
  }
}
?>