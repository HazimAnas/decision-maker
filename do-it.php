<?php
	include('partials/header.php');
	session_start();

	if(isset($_SESSION['decision'])) {

		if($_SESSION['decision'] == 0) {
			echo "<h1>Do It!!</h1>";
		}
		else {
			echo "<h1>Don't Do It!!";
		}
		
		unset($_SESSION['decision']);
		die();
	}

?>

<form method="POST" action="randomizer.php">
	<input name="type" type="hidden" value="doit" />
	<input type="submit" value="Should I do it" />
</form>