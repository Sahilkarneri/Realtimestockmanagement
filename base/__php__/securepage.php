<?php
	//$session_condition = False;

	function check_validitiy_ofthe_session(){
		session_start();
		if($_SESSION['sid'] == session_id())
		{
			//echo "Welcome to you<br>";
			//echo "<a href='logout.php'>Logout</a>";
		}
		else
		{	
			// if sessionb not valid redirect page to respective login page

			header("location: ../pages/login.html");
		}
	}

check_validitiy_ofthe_session();

	
?>