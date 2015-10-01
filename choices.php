<?php 
	session_start();
	include('partials/header.php');

	if(isset($_SESSION['decision'])) { //check if any decision is available
		echo "<h3>The decision is </h3>" . "<h1>$_SESSION[decision]</h1>"; //display the decision if available
		echo "<br><a href='choices.php'>I Do Not Agree</a><a href='index.php'>I Agree</a>"; //the link to generate another decision or return to mode selection
		unset($_SESSION['decision']); //remove the current decision in order to generate a different one the next time
		unset($_POST['choice']); //remove the choice variable so that no new item are added to the choices array on page load.
		die();
	}
	else {
		if(isset($_POST['choice'])) { //check if any choice variable is available
			if($_POST['choice'] != "") { //check if the variable is not empty
				$_SESSION['choices'][] = $_POST['choice']; //if it is not empty add the new item to the choices array
			}

			echo 'Current choice(s)'; 
			foreach ($_SESSION['choices'] as $value) { //display all current items in the choices array
				echo "<br>$value";
			}
		}
		elseif(!isset($_SESSION['choices'])) { //check if no choices array is set
			$_SESSION['choices'] = array(); //create a new choices array if it does not exist yet
		}
		else {
			echo 'Current choice(s)';
			foreach ($_SESSION['choices'] as $value) { //display all current items in the choices array
				echo "<br>$value";
			}
		}		
	}


?>
	<form method="POST" action="choices.php">
		<label>Add New Choice :</label>
		<input type="text" name="choice" />
		<button type="submit">Add</button>
	</form>

	<form method="POST" action="randomizer.php">
		<button type="submit">Make the decision for me</button>
	</form>
	<a href="index.php">Home</a>