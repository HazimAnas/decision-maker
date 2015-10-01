<?php
	
	session_start();

	if(isset($_POST['type'])) { 
		
		$type = $_POST['type'];
		
		if($type == 'doit') {
			$_SESSION['decision'] = rand(0,1);
			header("Location: http://localhost/decision-maker/do-it.php");
			die();
		}
	}

	$choices = $_POST['choices'];	
?>