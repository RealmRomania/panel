<?php
	session_start();
	require_once '../db.php';
 
	if(ISSET($_POST['register-username'])){
		if($_POST['register-username'] != "" || $_POST['register-email'] != "" || $_POST['register-password'] != ""){
			try{
				$email = $_POST['register-email'];
				$username = $_POST['register-username'];
				// md5 encrypted
				$password = md5($_POST['register-password']);
				$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				$sql = "INSERT INTO `users` VALUES ('', '$username', '$password', '$email', '$create_datetime')";
				$conn->exec($sql);
			}catch(PDOException $e){
				echo $e->getMessage();
			}
			$_SESSION['message']=array("text"=>"User successfully created.","alert"=>"info");
			$conn = null;
			header('location:../login.php');
		}else{
			echo "
				<script>alert('Please fill up the required field!')</script>
				<script>window.location = 'register.php'</script>
			";
		}
	}
?>