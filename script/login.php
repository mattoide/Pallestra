<?php

error_reporting(E_ALL);
ini_set('display_errors','On');

require_once('dbConn.php');

session_start();




/*
$session_logout = 5; 

if(isset($_SESSION['status'])) {
//	session_write_close();

if((time()-$_SESSION['session_time']) > $session_logout){

	header('Location: ../script/logout.php');
	exit();

} else {
	$_SESSION['session_time'] = time();

	print_r("stong ca");
	header('Location: ../pages/dashboard.php');
	exit();
}

	
} 
*/



$infomsg = "";


   if (!isset($_POST["login"]))
   {
    
   }
   else if (isset($_POST["login"])){
   {
//aaaavv
		$username = $_POST["username"];
		$password = $_POST["password"];
	
		
		
		$stmt = $link->prepare("SELECT * FROM utente WHERE nickname = ? AND password = ?");

		$stmt->bind_param('ss', $username, $password);

		$execquery = $stmt->execute();

		$stmt->store_result();

		$stmt->bind_result($nickname, $name, $surname, $email, $pass);

        if($execquery == false)
        {

            $_SESSION['info'] = "Oops, qualcosa non va. Riprova più tardi.";
        }
        else
        {
			$acc = $stmt->fetch();

			if ($acc)
			{
				
					// Assegno i valori alle varibili di sessione
					$_SESSION['nickname'] = $username;
					$_SESSION['name'] = $name;
					$_SESSION['surname'] = $surname;
					$_SESSION['status'] = "Active";

					$_SESSION['session_time'] = time();

			        header("Location:../script/header.php");
					exit();
			  	
				
			}
			else {

				$_SESSION['info'] = "Account o password errati";
					
				session_write_close();
				header("Location:../pages/login.php");
				exit();
				
			}
        }
	}
	
}



if(isset($_SESSION['info']))
{
	$infomsg = $_SESSION['info'];
	
  unset($_SESSION['info']);
}
?>