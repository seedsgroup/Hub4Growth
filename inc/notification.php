<?php
if(isset($_SESSION['success']) && $_SESSION['success'] != ""){
	?>
		<div class="alert alert-success" role="alert">
			<?php 
				echo $_SESSION['success']; 
			?>
		</div>
	<?php
	
	} unset($_SESSION['success']);

if(isset($_SESSION['error']) && $_SESSION['error'] != ""){
	?>
		<div class="alert alert-danger" role="alert">
			<?php echo $_SESSION['error']; ?>
		</div>
	<?php
	
	}unset($_SESSION['error']);
if(isset($_SESSION['warning']) && $_SESSION['warning'] != ""){
	?>
		<div class="alert alert-warning" role="alert">
			<?php echo $_SESSION['warning']; ?>
		</div>
	<?php
	
	}unset($_SESSION['warning']);
	if(isset($_SESSION['info']) && $_SESSION['info'] != ""){
	?>
		<div class="alert alert-info" role="alert">
			<?php echo $_SESSION['info']; ?>
		</div>
	<?php
	
	}unset($_SESSION['info']);
?>
