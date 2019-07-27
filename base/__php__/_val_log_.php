<?php
include("configdata.php");


$uid = $_POST['user_name'];
$pw = $_POST['user_passwd'];
$user_role = $_POST['user_role'];

if(! $conn )
{
  die('Could not connect...');
}
$sql = "SELECT user_id, user_fullname, role FROM user_info_all WHERE _user_name_='$uid' AND __password__='$pw' AND role='$user_role'";

$retval = mysqli_query($conn, $sql);

if(! (! $retval) )
{
  //die('Data is not valid....... ');
  echo "Invalid username or password or check selected role..... ";
  //header("location: ../pages/login.html");
  
}

while($row = mysqli_fetch_array($retval))
{
	
    //echo "User Id : ",$row['user_id'];
    //echo "User Name : ",$row['user_fullname'];
    //echo "role: ",$row['role'];

    if(isset($user_role)){
	
		if($row['role'] == "admin"){
			
			session_start();
			$_SESSION['sid']=session_id();
			$_SESSION['_user_name_']=$row['user_fullname'];
			header("location: ../pages/Admin_panel.php");
			

	}
		else if($row['role'] == "warehouse"){
			
			session_start();
			$_SESSION['sid']=session_id();
			$_SESSION['_user_name_']=$row['user_fullname'];
			header("location: ../pages/warehouseuser_dashboard.php");
		
	}
		else if($row['role'] == "vendor"){
			
				session_start();
				$_SESSION['sid']=session_id();
				$_SESSION['_user_name_']=$row['user_fullname'];
				header("location: ../pages/vendor_dashboard.php");
			

	}
		else if($row['role'] == "retailer"){
			
				session_start();
				$_SESSION['sid']=session_id();
				$_SESSION['_user_name_']=$row['user_fullname'];
				header("location: ../pages/retailer_dashboard.php");
			

	}


}
	else{
	echo "Please select a option........";
}

} 
//echo "Fetched data successfully\n";
mysqli_close($conn);
   //session_start();
   /*
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$uid);
      $mypassword = mysqli_real_escape_string($db,$pw); 
      
      $sql = "SELECT user_id, user_fullname FROM user_info_all WHERE _user_name_ = '$myusername' and __password__ = '$mypassword'";
      
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      //$active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 2) {
      	 session_start();
         session_register("myusername");
         $_SESSION['login_user'] = $myusername;
         
         header("location: welcome.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }
	*/






?>
