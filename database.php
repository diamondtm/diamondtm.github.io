<?php

echo $x;

$conn = mysqli_connect('sql304.epizy.com', 'epiz_32739099', 'QBpmduEB5k');
if (!$conn) {die('Szerver elutasította a kapcsolódást: ' . mysqli_connect_error());}

if (!mysqli_select_db($conn,"epiz_32739099_user")) 
 {
  echo "Adatbázis kiválasztása sikertelen:" . mysqli_connect_error();
  exit;
 }
return $mysqli;