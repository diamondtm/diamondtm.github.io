<?php
session_start();
if (isset($_SESSION['id']) && isset($_SESSION['name'])){


$link2 = mysqli_connect('sql304.epizy.com', 'epiz_32739099', 'QBpmduEB5k');
if (!$link2) {die('Szerver elutasította a kapcsolódást: ' . mysqli_connect_error());}

if (!mysqli_select_db($link2,"epiz_32739099_comment")) 
 {
  echo "Adatbázis kiválasztása sikertelen:" . mysqli_connect_error();
  exit;
 }
/*-[Modosítás kezelése]-------------------------------------------*/
$gt=$_GET["felvesz"]; 
if ($gt==1)
{
$query="INSERT INTO comments 
 (
 
 felhasznalonev,
 uzenet
 )
 VALUES(
  '".$_SESSION['name']."',
  '".$_POST["uzenet"]."'
  )";
 ?>
<?php 

 if (empty($_POST["uzenet"])) {
     header("Location: comment.php?error=Elfelejtettél üzenetet írni! :)");
	 exit();
    }else{
 $result= mysqli_query($link2,$query);  
	}

}?>



<?php

$result = mysqli_query($link2,"SELECT * FROM comments");
$all_property = array();  


while ($property = mysqli_fetch_field($result)) {
   
    array_push($all_property, $property->name); 
}
?>



<!doctype html>
<html lang="hu">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width-device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link href="style.css" type="text/css" rel="stylesheet">
    <title>Diamond Tm.</title>
</head>
<body>
<nav class="navbar">
        <div class="container">
            <!-- neve -->
            <div class="load">
                <img src="diamond.png" alt="Diamond logo">
            </div>
            <a class="navbar-brand" href="#">Diamond Tm</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end " tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
                <div class="offcanvas-header">

                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
					<li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> <i class="bi bi-person-fill"></i>Profil</a>
                            <ul class="dropdown-menu dropdown-menu-dark">
                                <li>
                                    <h3> Hello <?php echo $_SESSION['name']; ?>!</h3>
                                </li>
                                <li class="nav-item">
									<a class="nav-link active" aria-current="page" href="logout.php"><i class="bi bi-person-fill"></i> Kijelentkezés </a>
								</li>
                            </ul>
                        </li>
					
					
                        <li class="nav-item">
                            <a class="nav-link" href="index.php"><i class="bi bi-car-front"></i> Járművek </a>
                        </li>
                        <li class="nav-item">

                            <a class="nav-link active" aria-current="page" href="felszereltseg.php"><i class="bi bi-house-heart-fill"></i> Tuningok </a>
                        </li>
						<li class="nav-item">

                            <a class="nav-link active" aria-current="page" href="comment.php"><i class="bi bi-chat-dots"></i></i> Hosszászólások </a>
                        </li>
                        
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> <i class="bi bi-person-fill"></i>Elérhetőségek  </a>
                            <ul class="dropdown-menu dropdown-menu-dark">
                                <li>
                                    <a class="dropdown-item" href="https://forum.see-game.com/index.php?conversations/add&to=Max+06" target="_blank">
                                        <i class="bi bi-person-circle"></i>
                                        Max Connor
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="https://forum.see-game.com/index.php?conversations/add&to=Zsolt2132" target="_blank">
                                        <i class="bi bi-person-circle"></i>
                                        Fred Frederik
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>

                </div>
            </div>
        </div>
    </nav>
	<div class="container">
	<?php if(isset($_GET['error'])){ ?>
	<p style="color: red"><?php echo $_GET['error']; ?></p>
	<?php } ?>
	<h1 style="background-color: white">Komment szekció</h1>
	<table width="30%", height="auto" style="background-color: grey;">
	<form method="post" action="comment.php?felvesz=1">
	<tr><td>Üzenet</td><td><textarea name="uzenet" rows="auto" cols="40"><?php echo $comment;?></textarea></td></tr>
	<input type="submit" value="mehet">
	</form>
    <form method="post" action="comment.php">
	<input type="submit" value="Újratölrés">
	</form>
	</table>
	<?php
	while ($row = mysqli_fetch_array($result)) {
	?>
	<table class="szamologep"><tr><td style=" background-color: white; border: 1px solid red;">Név: </td><td style=" background-color: white; border: 1px solid green;"><?php echo $row['felhasznalonev'];?> </td></tr>
	<tr><td style=" background-color: white; border: 1px solid red;">Üzenet:</td><td><textarea name="chat" rows="auto" cols="50" readonly><?php echo $row['uzenet'];?></textarea></td><tr>
	</br>
	</table>
	<?php		
	}
	?>
    
    <script type="text/javascript" src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
	</div>
</body>

</html>
<?php
}else {
	header("Location: login.php");
	exit();
}
?>