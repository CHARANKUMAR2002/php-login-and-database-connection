<?php 
session_start(); 
include "db_conn.php";

if (isset($_POST['uname']) && isset($_POST['password'])) {
	
	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}if(!empty($_POST["remember"])) {
	setcookie ("uname",$_POST["uname"],time()+ 3600);
	setcookie ("password",$_POST["password"],time()+ 3600);
	echo "Cookies Set Successfuly";
} else {
	setcookie("uname","");
	setcookie("password","");
	echo "Cookies Not Set";
}

	$uname = validate($_POST['uname']);
	$pass = validate($_POST['password']);

	if (empty($uname) && empty($pass)){
        header("Location: Login.php?error=Username and Password is required");
	    exit();
	}else if(empty($pass)){
        header("Location: Login.php?error=Password is required");
	    exit();
	}elseif (empty($uname)) {
		header("Location: Login.php?error=Username is required");
	    exit(); 
    }else{
		$sql = "SELECT * FROM users WHERE user_name='$uname' AND password='$pass'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result)) {
			$row = mysqli_fetch_assoc($result);
            if ($row['user_name'] === $uname && $row['password'] === $pass) {
				if( isset($_POST['remember'])) {
					session_start();
					$_SESSION['user_name'] = $uname;
					$_SESSION['password'] = $pass;
					header("Location: Home.php");
				}
            	$_SESSION['user_name'] = $row['user_name'];
            	header("Location: Home.php");
		        exit();
            }else{
				header("Location: Login.php?error=Incorect Username or password");
		        exit();
			}
		}else{
			header("Location: Login.php?error=Incorect Username or password");
	        exit();
		}
	}
	
}else{
	header("Location: Login.php");
	exit();
}?>