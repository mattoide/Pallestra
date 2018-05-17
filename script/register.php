<?php

error_reporting(E_ALL);
ini_set('display_errors','On');

require_once('dbConn.php');

session_start();

if(isset($_SESSION['username']))
{
	
}

if(!isset($_SESSION['info']))
{
	$_SESSION['info'] = "";
}

$username = "";
$name = "";
$surnamename = "";
$email = "";
$password = "";
$repassword = "";



if(isset($_POST["register"]))
{

    

  
    
    if ($_POST["password"] != $_POST["retypepassword"])
    {
      $repass = "* Le password non coincidono";
    }
    else
    {

      $username = $_POST["username"];
    $name = $_POST["name"];;
    $email = $_POST["email"];
    $surname = $_POST["surname"];
    $password = $_POST["password"];
    $repassword = $_POST["retypepassword"];

	
    $stmt = $link->prepare("SELECT * FROM utente WHERE nickname = ?");

		$stmt->bind_param('s', $username);

		$execquery = $stmt->execute();

		
        if($execquery == false)
        {
            $_SESSION['info'] = "C'è stato un errore di connesione, riprova più tardi";
        }
        else
        {

			$acc=$stmt->fetch();  
			 
			if($acc!=false) {
        $_SESSION['info'] = "Username già esistente";
        print_r("user gia esistente");
			}  
			else
			{
        print_r("user ok");
				$stmt = $link->prepare("INSERT INTO utente (nickname, nome, cognome, password) VALUES (?,?,?,?)");
        $stmt->bind_param('ssss', $username, $name, $surname, $password);

        $res = $stmt->execute();                        

				if($res == false) {
          $_SESSION['info'] = "Impossibile creare account";
          print_r("impossible acc");
          
				} else {
          $_SESSION['info'] = "Nuovo utente creato con successo. Logga usando i tuoi dati!";
          print_r("user creato");

         /* $_SESSION['nickname'] = $username;
					$_SESSION['name'] = $name;
					$_SESSION['surname'] = $surname;
          $_SESSION['status'] = "Active";
          */

          session_write_close();

          header("Location: ../pages/login.php");

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