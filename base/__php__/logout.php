<?php
	/*
	echo "Logged out scuccessfully";
    
    session_start();
	session_destroy();
	setcookie(PHPSESSID,session_id(),time()-1);
	*/

	function log_session_destroy(){
		
		session_start();
		session_destroy();
		setcookie(PHPSESSID,session_id(),time()-1);

		header("location: ../pages/login.html");		
	}

log_session_destroy();



?>