<?php


if (empty($_POST["name"])) {
    header("Location: signup.html?error=Név megadása szükséges!");
	exit();
}

if ( ! filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
    header("Location: signup.html?error=email megadása szükséges!");
	exit();
}

if (strlen($_POST["password"]) < 8) {
    header("Location: signup.html?error=Jelszó túl rövid!");
	exit();
}


if ($_POST["password"] !== $_POST["password_confirmation"]) {
    header("Location: signup.html?error=A jelszó nem egyezik!");
	exit();
}
$password_hash = password_hash($_POST["password"], PASSWORD_DEFAULT);


$mysqli = require __DIR__ . "/database.php"; 
 
$name = $_POST["name"];
$email = $_POST["email"];
$password = $_POST["password"];

$sql="INSERT INTO user (name,email,password_hash) 
VALUES('$name','$email','$password_hash')";

 
$results = mysqli_query($conn,"SELECT * FROM user");

$all_property = array();  


while ($property = mysqli_fetch_field($results)) {
   
    array_push($all_property, $property->name); 
}


//showing all data
while ($row = mysqli_fetch_array($results)) {
	$names = $row['name'];
	$emails = $row['email'];
          

}

if($name == $names){	
	header("Location: signup.html?error=Név megadása szükséges!");
	exit();
	}
	
if($email == $emails){
		header("Location: signup.html?error=Név megadása szükséges!");
	exit();
	}
	else{
	$result= mysqli_query($conn,$sql); 
	header("Location: index.php");
	}
	
