<?php

error_reporting(E_ALL);
ini_set('display_errors','On');

require_once('../script/dbConn.php');

session_start();

if(isset($_SESSION['status']))
{

  $_SESSION['info'] = "Devi effettuare prima il logout!";

  session_write_close();

	header('Location: ../pages/dashboard.php');
	exit();
}


$infomsg = "";

$username = "";
$name = "";
$surnamename = "";
$email = "";
$password = "";
$repassword = "";



if(isset($_POST["register"]))
{
    if ($_POST["password"] != $_POST["retypepassword"]){

      $_SESSION['info'] =  "Le password non coincidono";
        session_write_close();

				header("Location: ../pages/register.php");
    }  else {

    $username = $_POST["username"];
    $name = $_POST["name"];;
    $email = $_POST["email"];
    $surname = $_POST["surname"];
    $password = $_POST["password"];
    $repassword = $_POST["retypepassword"];

	
    $stmt = $link->prepare("SELECT * FROM utente WHERE nickname = ?");
		$stmt->bind_param('s', $username);
		$execquery = $stmt->execute();

		
        if($execquery == false) {
            $_SESSION['info'] = "C'è stato un errore di connesione, riprova più tardi";
            session_write_close();

            header("Location: ../pages/register.php");
        } else  {

		  	$acc=$stmt->fetch();  
			 
			  if($acc!=false) {
       
        $_SESSION['info'] = "Username già esistente";

        session_write_close();

        header("Location: ../pages/register.php");
       }  else{

        //controlla la mail
        $stmt = $link->prepare("SELECT * FROM utente WHERE email = ?");
        $stmt->bind_param('s', $email);
        $execquery = $stmt->execute();
    
            if($execquery == false) {
                $_SESSION['info'] = "C'è stato un errore di connesione, riprova più tardi";
                session_write_close();
    
                header("Location: ../pages/register.php");
            } else {

              $acc=$stmt->fetch();  
			 
			  if($acc!=false) {
       
        $_SESSION['info'] = "Email già usata";

        session_write_close();

        header("Location: ../pages/register.php");
       }  else{
         

         $stmt = $link->prepare("INSERT INTO utente (nickname, nome, cognome, email, password) VALUES (?,?,?,?,?)");
        $stmt->bind_param('sssss', $username, $name, $surname, $email, $password);

        $res = $stmt->execute();                        

				if($res == false) {
          $_SESSION['info'] = "Impossibile creare account";
          session_write_close();

          header("Location: ../pages/register.php");          
				} else {
          $_SESSION['info'] = "Nuovo utente creato con successo. Logga usando i tuoi dati!";
          
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
 }
}


if(isset($_SESSION['info']))
{
	$infomsg = $_SESSION['info'];
	
  unset($_SESSION['info']);
}


?>