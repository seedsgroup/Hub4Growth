<?php
 if(!isset($_SESSION['is_logged_in']) || empty($_SESSION['is_logged_in'])) {
    if((!isset($_COOKIE['is_logged_in']) || $_COOKIE['is_logged_in'] == "")){

        $_SESSION['error'] = "Please login first";
        @header('location: index');
        exit;
    }
}



?>
