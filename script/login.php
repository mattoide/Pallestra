<?php

error_reporting(E_ALL);
ini_set('display_errors','On');

require_once('dbConn.php');

session_start();

$standard_session_logout = 3; 
$long_session_logout = 10;

$infomsg = "";


if(isset($_SESSION['status'])){

	header("Location:../pages/dashboard.php");

	exit();
} else {

   if (!isset($_POST["login"]))
   {
    
   }
   else if (isset($_POST["login"])){
   {

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
					$_SESSION['nickname'] = $nickname;
					$_SESSION['name'] = $name;
					$_SESSION['surname'] = $surname;
					$_SESSION['status'] = "Active";


					if(isset($_POST['rememberme']))
						$_SESSION['logout_time'] = $long_session_logout;
					 else
						$_SESSION['logout_time'] = $standard_session_logout;

					

					$_SESSION['session_time'] = time();
					
					header("Location:../pages/dashboard.php");
					
					exit();
			  	
				
			}
			else {

				$_SESSION['info'] = "Account o password errati";
					
				header("Location:../pages/login.php");

				exit();
				
			}
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