<?php 

error_reporting(E_ALL);
ini_set('display_errors','On');

require_once('../dbConn.php');

session_start();

        $username = $_POST["username"];
		$password = $_POST["password"];

	
		$stmt = $link->prepare("SELECT * FROM utente WHERE nickname = ? AND password = ?");

		$stmt->bind_param('ss', $username, $password);

		$execquery = $stmt->execute();

		$stmt->store_result();

        $stmt->bind_result($nickname, $pass, $id_scheda, $name, $surname, $email);
        
        $acc = $stmt->fetch();



?>