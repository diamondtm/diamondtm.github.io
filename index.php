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
								<?php
									if (isset($_SESSION['name'])){?>
								<form action="logout.php" method="post">
								<button>Kijelentkezés</button></form>
									<?php } else {?>
								
								<li class="nav-item">
								<a class="nav-link active" aria-current="page" href="login.php"><i class="bi bi-person-fill"></i> Bejelentkezés </a>
								</li>
                                <li class="nav-item">
									<a class="nav-link active" aria-current="page" href="signup.html"><i class="bi bi-person-fill"></i> Regisztráció </a>
								</li>
									<?php }?>
								</li>
                            </ul>
                        </li>
					</ul>
						
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="bi bi-car-front"></i> Járművek </a>
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
    <div class="container">
	
        <div class="row mt-5 align-self-center">
            <div class="col">
                <div class="tarolo">
                    <div class="kartya">
                        <div class="elolap"> Passat </div>
                        <div class="hatlap">
                            <table>
                                <tr><td>Napok</td><td>Ára</td><td>Kaució</td></tr>
                                <tr><td>1 nap</td><td>5 000$</td><td>100 000$</td></tr>
                                <tr><td>3 nap</td><td>7 000$</td><td>100 000$</td></tr>
                                <tr><td>7 nap</td><td>10 000$</td><td>100 000$</td></tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="tarolo">
                    <div class="kartya">
                        <!-- -------------------------------      Porsche       ------------------------------->
                        <div class="elolap"><img src="autok/porsche.png" alt="Porsche" style="width: 100%"></div>
                        <div class="hatlap">
                            <table>
                                <tr><td>Napok</td><td>Ára</td><td>Kaució</td></tr>
                                <tr><td>1 nap</td><td>24 000$</td><td>100 000$</td></tr>
                                <tr><td>3 nap</td><td>30 000$</td><td>100 000$</td></tr>
                                <tr><td>7 nap</td><td>60 000$</td><td>130 000$</td></tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="tarolo">
                    <div class="kartya">
                        <!-- -------------------------------      Sprinter       ------------------------------->
                        <div class="elolap"> Sprinter </div>
                        <div class="hatlap">
                            <table>
                                <tr><td>Napok</td><td>Ára</td><td>Kaució</td></tr>
                                <tr><td>1 nap</td><td>20 000$</td><td>100 000$</td></tr>
                                <tr><td>3 nap</td><td>28 000$</td><td>100 000$</td></tr>
                                <tr><td>7 nap</td><td>40 000$</td><td>100 000$</td></tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-5 ">
            <div class="col">

                <div class="tarolo">
                    <div class="kartya">
                        <!-- -------------------------------      Buga       ------------------------------->
                        <div class="elolap"><img src="autok/buga.png" alt="Bugatti" style="width: 100%"></div>
                        <div class="hatlap">
                            <table>
                                <tr><td>Napok</td><td>Ára</td><td>Kaució</td></tr>
                                <tr><td>1 nap</td><td>30 000$</td><td>100 000$</td></tr>
                                <tr><td>3 nap</td><td>42 000$</td><td>100 000$</td></tr>
                                <tr><td>7 nap</td><td>60 000$</td><td>120 000$</td></tr>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col">

                <div class="tarolo">
                    <div class="kartya">
                        <!-- -------------------------------      RED       ------------------------------->
                        <div class="elolap"> Red Buga<img src="autok/nop.png" alt="RED" style="width: 30%"></div>
                        <div class="hatlap">
                            <table>
                                <tr><td>Napok</td><td>Ára</td><td>Kaució</td></tr>
                                <tr><td>1 nap</td><td>30 000$</td><td>100 000$</td></tr>
                                <tr><td>3 nap</td><td>42 000$</td><td>100 000$</td></tr>
                                <tr><td>7 nap</td><td>60 000$</td><td>120 000$</td></tr>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col">

                <div class="tarolo">
                    <div class="kartya">
                        <!-- -------------------------------      WRX       ------------------------------->
                        <div class="elolap"><img src="autok/wrx.png" alt="WRX" style="width: 100%"></div>
                        <div class="hatlap">
                            <table>
                                <tr><td>Napok</td><td>Ára</td><td>Kaució</td></tr>
                                <tr><td>1 nap</td><td>25 000$</td><td>100 000$</td></tr>
                                <tr><td>3 nap</td><td>35 000$</td><td>100 000$</td></tr>
                                <tr><td>7 nap</td><td>55 000$</td><td>120 000$</td></tr>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="row mt-5 ">
            <div class="col">

                <div class="tarolo">
                    <div class="kartya">
                        <!-- -------------------------------      RAPTOR       ------------------------------->
                        <div class="elolap"><img src="autok/raptor.png" alt="raptor" style="width: 100%"></div>
                        <div class="hatlap">
                            <table>
                                <tr><td>Napok</td><td>Ára</td><td>Kaució</td></tr>
                                <tr><td>1 nap</td><td>27 500$</td><td>100 000$</td></tr>
                                <tr><td>3 nap</td><td>38 500$</td><td>100 000$</td></tr>
                                <tr><td>7 nap</td><td>55 000$</td><td>120 000$</td></tr>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col">

                <div class="tarolo">
                    <div class="kartya">
                        <!-- -------------------------------      VONTATÓ       ------------------------------->
                        <div class="elolap"> <img src="autok/vonti.png" alt="vonti" style="width: 100%"> </div>
                        <div class="hatlap">
                            <table>
                                <tr><td>Napok</td><td>Ára</td><td>Kaució</td></tr>
                                <tr><td>1 nap</td><td>35 000$</td><td>100 000$</td></tr>
                                <tr><td>3 nap</td><td>49 000$</td><td>120 000$</td></tr>
                                <tr><td>7 nap</td><td>70 000$</td><td>130 000$</td></tr>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col">

                <div class="tarolo">
                    <div class="kartya">
                        <!-- -------------------------------      R8       ------------------------------->
                        <div class="elolap"><img src="autok/r8.png" alt="r8" style="width: 100%"></div>
                        <div class="hatlap">
                            <table>
                                <tr><td>Napok</td><td>Ára</td><td>Kaució</td></tr>
                                <tr><td>1 nap</td><td>25 000$</td><td>100 000$</td></tr>
                                <tr><td>3 nap</td><td>35 000$</td><td>100 000$</td></tr>
                                <tr><td>7 nap</td><td>50 000$</td><td>130 000$</td></tr>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="row mt-5 ">
            <div class="col">

                <div class="tarolo">
                    <div class="kartya">
                        <!-- -------------------------------      P1       ------------------------------->
                        <div class="elolap"><img src="autok/p1.png" alt="p1" style="width: 100%"></div>
                        <div class="hatlap">
                            <table>
                                <tr><td>Napok</td><td>Ára</td><td>Kaució</td></tr>
                                <tr><td>1 nap</td><td>32 500$</td><td>100 000$</td></tr>
                                <tr><td>3 nap</td><td>45 000$</td><td>100 000$</td></tr>
                                <tr><td>7 nap</td><td>65 000$</td><td>145 000$</td></tr>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col">

                <div class="tarolo">
                    <div class="kartya">
                        <!-- -------------------------------      Heli       ------------------------------->
                        <div class="elolap"> <img src="autok/heli.png" alt="heli" style="width: 100%"> </div>
                        <div class="hatlap">
                            <table>
                                <tr><td>Napok</td><td>Ára</td><td>Kaució</td></tr>
                                <tr><td>1 nap</td><td>24 000$</td><td>100 000$</td></tr>
                                <tr><td>3 nap</td><td>30 000$</td><td>100 000$</td></tr>
                                <tr><td>7 nap</td><td>60 000$</td><td>130 000$</td></tr>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col">

                <div class="tarolo">
                    <div class="kartya">
                        <!-- -------------------------------      M4       ------------------------------->
                        <div class="elolap"> <img src="autok/m4nop.png" alt="M4" style="width: 100%"> </div>
                        <div class="hatlap">
                            <table>
                                <tr><td>Napok</td><td>Ára</td><td>Kaució</td></tr>
                                <tr><td>1 nap</td><td>26 800$</td><td>100 000$</td></tr>
                                <tr><td>3 nap</td><td>33 500$</td><td>100 000$</td></tr>
                                <tr><td>7 nap</td><td>67 000$</td><td>150 000$</td></tr>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    
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