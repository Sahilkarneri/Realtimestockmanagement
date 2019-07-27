<?php

include('../../__php__/configdata.php') ; 
/*
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "sahil123";
$dbname = "testingusers" ;

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
*/


if(! $conn )
{
  die('Could not connect: ');
}

//$sql = "SELECT product_name, productitem_name, category FROM product_details";
//$sql = "SELECT product_details.product_name , product_details.productitem_name, product_details.category, product_details.product_description, product_details.cost_peritem, stock_details.total_stock_quantity FROM product_details , stock_details WHERE product_details.product_id=stock_details.product_id" ;


$sql = "SELECT * FROM product_details, stock_details WHERE product_details.product_id=stock_details.product_id";



$retval = mysqli_query( $conn, $sql );

if(! $retval )
{
  die('Could not get data: ');
}
echo '<table border="2" >';
		echo '<tr>';
			echo '<th>Product Name</th>';
			echo '<th>Product Item Name</th>';
			echo '<th>Category</th>';
		echo '</tr>';
		
while($row = mysqli_fetch_array($retval))
{
			echo '<tr>';
			echo "<td>".$row['product_name']."</td>";
			echo "<td>".$row['productitem_name']."</td>";
			echo "<td>".$row['category']."</td>";
			echo '</tr>';


	//echo $row['user_id']."&nbsp";
    //echo $row['username']."<br>";
    
}

echo '</table>';

?>