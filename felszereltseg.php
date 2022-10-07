<?php
session_start();
include "database.php";
if (isset($_SESSION['id']) && isset($_SESSION['name'])){
?>
<!doctype html>
<html lang="hu">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width-device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link href="style.css" type="text/css" rel="stylesheet">
    <title>Diamond Tm - Tuningok</title>
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
					
						<ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
						<li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> <i class="bi bi-person-fill"></i>Profil</a>
                            <ul class="dropdown-menu dropdown-menu-dark">
                                <li>
                                    <h3> Hello <?php echo $_SESSION['name']; ?>!</h3>
                                </li>
                                <li class="nav-item">
								<form action="logout.php" method="post">
								<button>Kijelentkezés</button></form>
								</li>
                            </ul>
                        </li>
					</ul>
						
                        <li class="nav-item">
                            <a class="nav-link" href="index.php"><i class="bi bi-car-front"></i> Járművek </a>
                        </li>
                        <li class="nav-item">

                            <a class="nav-link active" aria-current="page" href="felszereltseg.php"><i class="bi bi-house-heart-fill"></i> Tuningok </a>
                        </li>
						<li class="nav-item">

                            <a class="nav-link active" aria-current="page" href="comment.php"><i class="bi bi-chat-dots"></i></i> Hozzászólások </a>
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
    <div class="tuning">
        
        <table id="tablas" class="yep">
            <tr class="nevek"><td>Autó</td><td>Motor</td><td>Fék</td><td>Turbo</td><td>Ecu</td><td>Váltó</td><td>Kerék</td><td>Súlycsökkentés</td><td>Felfüggesztés</td></tr>
            <tr class="szinez"><td>Passat</td><td class="verseny">Verseny</td><td class="verseny">Verseny</td><td class="verseny">Verseny</td><td class="gyari">Gyári</td><td class="verseny">Verseny</td><td class="verseny">Verseny</td><td class="gyari">Gyári</td><td class="gyari">Gyári</td></tr>
            <tr class="szinez"><td>Reefer</td><td class="gyari">Gyári</td><td class="gyari">Gyári</td><td class="gyari">Gyári</td><td class="gyari">Gyári</td><td class="gyari">Gyári</td><td class="gyari">Gyári</td><td class="gyari">Gyári</td><td class="gyari">Gyári</td></tr>
            <tr class="szinez"><td>Sprinter</td><td class="gyari">Gyári</td><td class="gyari">Gyári</td><td class="gyari">Gyári</td><td class="gyari">Gyári</td><td class="gyari">Gyári</td><td class="gyari">Gyári</td><td class="gyari">Gyári</td><td class="gyari">Gyári</td></tr>
            <tr class="szinez"><td>Bugatti</td><td class="venom">Venom</td><td class="venom">Venom</td><td class="venom">Venom</td><td class="venom">Venom</td><td class="venom">Venom</td><td class="venom">Venom</td><td class="gyari">Gyári</td><td class="gyari">Gyári</td></tr>
            <tr class="szinez"><td>Bugatti(RED)</td><td class="venom">Venom</td><td class="venom">Venom</td><td class="venom">Venom</td><td class="venom">Venom</td><td class="venom">Venom</td><td class="venom">Venom</td><td class="gyari">Gyári</td><td class="gyari">Gyári</td></tr>
            <tr class="szinez"><td>Subaru Impreza WRX</td><td class="venom">Venom</td><td class="venom">Venom</td><td class="venom">Venom</td><td class="venom">Venom</td><td class="venom">Venom</td><td class="venom">Venom</td><td class="gyari">Gyári</td><td class="venom">Venom</td></tr>
            <tr class="szinez"><td>F150 Raptor</td><td class="venom">Venom</td><td class="venom">Venom</td><td class="venom">Venom</td><td class="venom">Venom</td><td class="venom">Venom</td><td class="venom">Venom</td><td class="venom">Venom</td><td class="venom">Venom</td></tr>
            <tr class="szinez"><td>Towtruck</td><td class="venom">Venom</td><td class="venom">Venom</td><td class="venom">Venom</td><td class="venom">Venom</td><td class="venom">Venom</td><td class="venom">Venom</td><td class="gyari">Gyári</td><td class="gyari">Gyári</td></tr>
            <tr class="szinez"><td>Audi R8</td><td class="venom">Venom</td><td class="venom">Venom</td><td class="venom">Venom</td><td class="venom">Venom</td><td class="venom">Venom</td><td class="venom">Venom</td><td class="venom">Venom</td><td class="venom">Venom</td></tr>
            <tr class="szinez"><td>McLaren P1</td><td class="venom">Venom</td><td class="venom">Venom</td><td class="venom">Venom</td><td class="venom">Venom</td><td class="venom">Venom</td><td class="venom">Venom</td><td class="verseny">Verseny</td><td class="verseny">Verseny</td></tr>
            <tr class="szinez"><td>Maverick</td><td class="gyari">Gyári</td><td class="gyari">Gyári</td><td class="gyari">Gyári</td><td class="gyari">Gyári</td><td class="gyari">Gyári</td><td class="gyari">Gyári</td><td class="gyari">Gyári</td><td class="gyari">Gyári</td></tr>
            <tr class="szinez"><td>BMW M4</td><td class="venom">Venom</td><td class="venom">Venom</td><td class="venom">Venom</td><td class="venom">Venom</td><td class="venom">Venom</td><td class="venom">Venom</td><td class="gyari">Gyári</td><td class="gyari">Gyári</td></tr>
            <tr class="szinez"><td>Porsche 911</td><td class="venom">Venom</td><td class="venom">Venom</td><td class="venom">Venom</td><td class="venom">Venom</td><td class="venom">Venom</td><td class="venom">Venom</td><td class="venom">Venom</td><td class="gyari">Gyári</td></tr>
        </table>
    </div>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-4 text-info">Készítette</div>
                <div class="col-4 text-info">Elérhetőségek</div>

            </div>
            <div class="row">
                <div class="col-4">Diamond Tm.</div>

                <div class="col-4">
                    <a href="https://forum.see-game.com/index.php?conversations/add&to=Zsolt2132" target="_blank">
                        <i class="bi bi-person-circle"></i>
                        Fred Frederik
                    </a>
                </div>

            </div>
            <div class="row">
                <div class="col-4">

                </div>
                <div class="col-4">
                    <a href="https://forum.see-game.com/index.php?conversations/add&to=Max+06" target="_blank">
                        <i class="bi bi-person-circle"></i>
                        Max Connor
                    </a>
                </div>


            </div>
        </div>
    </footer>
    <script type="text/javascript" src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>

</html>
<?php
}else {
	header("Location: login.php");
	exit();
}
?>