<?php session_start(); ?>
<?php
 			unset($_SESSION['is_log_in']);
           unset($_SESSION['is_log_in']);
		  unset($_SESSION['user_data']);
		  session_destroy();
		  // Redirect
		  header('location:login.php');
?>