<?php
session_start();
session_destroy();
setcookie('is_logged_in', 1, time()-60);
 header('location: index');
?>
