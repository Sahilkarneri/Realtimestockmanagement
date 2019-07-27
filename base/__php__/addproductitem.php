<?php
//echo "Added";
include('configdata.php') ;


/* Attempt MySQL server connection. Assuming you are running MySQL

03.server with default setting (user 'root' with no password) 

$link = mysqli_connect($host, $username, $password, $databasename);
 
*/
// Check connection

if($conn === false){

    die("ERROR: Could not connect. " );

}
else{
	//echo "You have successfully connected to database stock_manage_db_all." ;

}
// Escape user inputs for security
$catg= $_POST['product_category']; 
if(isset($catg)){

}
else{
	echo '<script>alert("Select category.....");</script>';
}


$product_name = mysqli_real_escape_string($conn, $_POST['product_name']);

$productitem_name = mysqli_real_escape_string($conn, $_POST['productitem_name']);

$category = mysqli_real_escape_string($conn, $catg);

$product_discription = mysqli_real_escape_string($conn, $_POST['product_discription']);

$costperitem = mysqli_real_escape_string($conn, $_POST['costperitem']);

$quantity = mysqli_real_escape_string($conn, $_POST['quantity']);

$date = mysqli_real_escape_string($conn, $_POST['date']);

$time = mysqli_real_escape_string($conn, $_POST['time']);



function getunitprise($costperitem, $quantity){
		$unitprise=0;



		return $unitprise;
}

function total_stock_cost($costperitem, $quantity){
		$total_stock_cost=0;
		$total_stock_cost=$costperitem*$quantity;


		return $total_stock_cost;
}
$total_stock_cost = total_stock_cost($costperitem, $quantity); 

//$sql = "INSERT INTO user_info_all (user_id,user_fullname, email_id, d_o_b, role, company_name, address, office_address, _user_name_, __password__) VALUES (1,'Peter Parker', 'peterparker@mail.com', '1996-09-10','warehouse', 'xyz', 'andheri[e]', 'andheri[e]','peter', 'peter123')";

$sql = "INSERT INTO product_details(product_id, product_name, category, product_description, cost_peritem, total_stock_cost, date_, time_, productitem_name) VALUES (DEFAULT, '$product_name', '$category', '$product_discription','$costperitem', '$total_stock_cost', '$date', '$time','$productitem_name')";

if(mysqli_query($conn, $sql)){
	//echo $full_name.$email.$dob.$role.$companyname.$address.$officeaddress.$username.$password ;
    //echo "Records added successfully.";
    echo '<script>alert("Product item Added..........");</script>';
    header("location: ../pages/warehouseuser_dashboard.php");
   // echo "<a href='slogin.html' ";

} 
else{

    echo "ERROR: Could not able to execute $sql. ";

}


mysqli_close($conn);



//echo $conn ;



?>