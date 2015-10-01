<?php
	session_start();

	if(isset($_POST['type'])) {  //to determine if this come from the do-it.php page
		
		$type = $_POST['type'];
		if($type == 'doit') { //to double check that this really come from the do-it.php page
			$_SESSION['decision'] = rand(0,1); //to generate the random decision and save it in the session
			unset($_POST['type']); //remove the POST variable
			header("Location: do-it.php"); //redirect to the do-it page
			die(); //stop the execution of any PHP after the redirect
		}
	}

	if(isset($_SESSION['choices'])) { //to determine if this come from the choices.php page
		$key = array_rand($_SESSION['choices']); //to generate the random decision 
		$_SESSION['decision'] = $_SESSION['choices'][$key]; //to get the value of the random item in the array and save it in the session variable
		header("Location: choices.php"); //redirect to choices.php page
		die();
	}

?>