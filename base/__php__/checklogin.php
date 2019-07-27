<?php


/*function get_front_data_(){

	$uid = $_POST['uid'];
	$pw = $_POST['pw'];

}*/
$uid = $_POST['uid'];
$pw = $_POST['pw'];

if($uid == 'sahil' and $pw == 'sahil123')
{	
	session_start();
	$_SESSION['sid']=session_id();
	header("location:securepage.php");
}
?>