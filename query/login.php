<?php
	session_start();
 
	require_once '../db.php';

    if (isset($_POST['login-username'])) {
			$username = $_POST['login-username'];
			$password = md5($_POST['login-password']);
			$sql = "SELECT * FROM `users` WHERE `username`=? AND `password`=? ";
			$query = $conn->prepare($sql);
			$query->execute(array($username,$password));
			$row = $query->rowCount();
			$fetch = $query->fetch();
			if($row > 0) {
                $_SESSION['login-username'] = $username;
				header("location: ../main.php");
                echo "merge vere";
			} else{
				echo "
				<script>alert('Invalid username or password')</script>
				<script>window.location = '../main.php'</script>
				";
			}
		}
?>