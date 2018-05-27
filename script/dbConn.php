<?php



define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '0000');
//define('DB_NAME', 'palestra');
define('DB_NAME', 'pallinestra');
 
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
if($link === false){
    die("ERRORE CONNESSIONE: " . mysqli_connect_error());
}

?>