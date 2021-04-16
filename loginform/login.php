<?php 
session_start(); 
include "db_conn.php";

if (isset($_POST['username']) && isset($_POST['password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$username = validate($_POST['username']);
	$password = validate($_POST['password']);
	$password=md5($password);

	if (empty($username)) {
		header("Location: loginform.php?error=Brugernavn er påkrævet");
	    exit();
	}else if(empty($password)){
        header("Location: loginform.php?error=password er påkrævet");
	    exit();
	}else{
		$sql = "SELECT * FROM users WHERE username = '$username' AND password= '$password'";
	
	   

		$result = mysqli_query($conn, $sql);

		print_r(mysqli_num_rows($result) );
		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
			print_r($row );
            if ($row['username'] === $username && $row['password'] === $password) {
            	$_SESSION['user_id'] = $row['user_id'];

            	$_SESSION['username'] = $row['username'];
            	$_SESSION['password'] = $row['password'];
            	header("Location: dashboard.php");
		        exit();
            }else{
				header("Location: loginform.php?error=Forkert brugernavn eller kodeord");
		        exit();
			}
		}else{
			header("Location: loginform.php?error=Forkert brugernavn eller kodeord");
	        exit();
		}
	}
	
}else{
	header("Location: loginform.php");
	exit();
}