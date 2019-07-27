<?php

/* Attempt MySQL server connection. Assuming you are running MySQL

03.server with default setting (user 'root' with no password) */
$host = "localhost";
$username = "";
$password = "";
$databasename = "stock_manage_db_all";



$link = mysqli_connect($host, $username, $password, $databasename);

 

// Check connection

if($link === false){

    die("ERROR: Could not connect. " . mysqli_connect_error());

}
else{
	echo "You have successfully connected to database stock_manage_db_all." ;

}
// Escape user inputs for security

$full_name = mysqli_real_escape_string($link, $_POST['fullname']);

$email = mysqli_real_escape_string($link, $_POST['email']);

$username = mysqli_real_escape_string($link, $_POST['username']);

$password = mysqli_real_escape_string($link, $_POST['password']);

$dob = mysqli_real_escape_string($link, $_POST['dob']);

$companyname = mysqli_real_escape_string($link, $_POST['company_name']);

$role = mysqli_real_escape_string($link, $_POST['userrole']);

$address = mysqli_real_escape_string($link, $_POST['address']);

$officeaddress = mysqli_real_escape_string($link, $_POST['off_address']);

$contact_no = mysqli_real_escape_string($link, $_POST['contact_no']);


//$sql = "INSERT INTO user_info_all (user_id,user_fullname, email_id, d_o_b, role, company_name, address, office_address, _user_name_, __password__) VALUES (1,'Peter Parker', 'peterparker@mail.com', '1996-09-10','warehouse', 'xyz', 'andheri[e]', 'andheri[e]','peter', 'peter123')";

$sql = "INSERT INTO user_info_all (user_id, user_fullname, email_id, d_o_b, role, company_name, address, office_address, contact_no, _user_name_, __password__) VALUES (DEFAULT, '$full_name', '$email', '$dob','$role', '$companyname', '$address', '$officeaddress',$contact_no,'$username', '$password')";

if(mysqli_query($link, $sql)){
	//echo $full_name.$email.$dob.$role.$companyname.$address.$officeaddress.$username.$password ;
    //echo "Records added successfully.";
    echo "You have successfully Registered..........";
    echo "<a href='slogin.html' ";

} 
else{

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}


mysqli_close($link);
?>

