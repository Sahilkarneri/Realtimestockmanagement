<?php
   /*
   define('DB_SERVER', 'localhost');
   define('DB_USERNAME', '');
   define('DB_PASSWORD', '');
   define('DB_DATABASE', 'stock_manage_db_all');
	*/
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "stock_manage_db_all" ;

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

//$db = mysqli_connect($DB_SERVER,$DB_USERNAME,$DB_PASSWORD,$DB_DATABASE);



//$conn = mysql_connect($DB_SERVER, $DB_USERNAME, $DB_PASSWORD);
//mysql_select_db($dbname);

//$n1=1;

?>