<?php
	include('partials/header.php');
	session_start();

	if(isset($_SESSION['decision'])) { //to check if the decision is available

		if($_SESSION['decision'] == 0) { //to display the decision if available
			echo "<h1>Do It!!</h1>";
		}
		else {
			echo "<h1>Don't Do It!!</h1>";
		}
		echo "<br><a href='do-it.php'>I Do Not Agree</a><a href='index.php'>I Agree</a>"; //the link to generate another decision or return to mode selection
		unset($_SESSION['decision']); //remove the current decision in order to generate a different one the next time
		die();
	}

?>
<h1>Do-It Mode</h1>
<form method="POST" action="randomizer.php">
	<input name="type" type="hidden" value="doit" />
	<input type="submit" value="Should I do it" />
</form>