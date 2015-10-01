		<?php include('partials/header.php');
			session_start();
			session_unset();
		 ?>
		<h1>Welcome to the Decision Maker Web Application</h1>

		<h3>Choose a Mode</h3>
			<a href="do-it.php">Do It</a> 
			<a href="choices.php">Choices</a>

		<?php include('partials/footer.php'); ?>