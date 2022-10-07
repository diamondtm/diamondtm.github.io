<?php 
session_start();
include "database.php";
if (isset($_POST['name']) && isset($_POST['password'])){
	function validate($data){
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}

	$name = validate($_POST['name']);
	$pass = validate($_POST['password']);
	
	

$sql = "SELECT * FROM user WHERE name='$name'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['name'] === $name) {
            	$hash = $row['password_hash'];
				
            }
		}

	 if (empty($name)){
		header("Location: login.php?error=Név megadása szükséges!");
		
		exit();
	} else if (empty($pass)){
		header("Location: login.php?error=Jelszó megadása szükséges!");
		exit();
	} else {
		
		if (password_verify($pass, $hash)) {	
			$_SESSION['name'] = $row['name'];
			$_SESSION['id'] = $row['id'];
			header("Location: index.php");
			exit();
		} else {
			
		header("Location: login.php?error=Helytelen felhasználónév - jelszó páros!");
		exit();
	}
	}
} else {
	header("Location: login.php");
	exit();
}
?>