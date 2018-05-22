<?php 

error_reporting(E_ALL);
ini_set('display_errors','On');

require_once('../dbConn.php');

$username = $_POST["username"];
$password = $_POST["password"];
	
$stmt = $link->prepare("SELECT * FROM utente WHERE nickname = ? AND password = ?");

$stmt->bind_param('ss', $username, $password);

$execquery = $stmt->execute();

$stmt->store_result();

$stmt->bind_result($nickname, $name, $surname, $pass, $email);

if($execquery == false)
{
    echo "Oops, qualcosa non va. Riprova più tardi.";
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


           /* if(isset($_POST['rememberme']))
                $_SESSION['logout_time'] = $long_session_logout;
             else
                $_SESSION['logout_time'] = $standard_session_logout;

            */

            $_SESSION['session_time'] = time();

            

echo "Nome = ". $name ." Cognome = ". $surname . " Nickname = ". $nickname . " Email = ". $email;

            //header("Location:../script/checkScreenSize.html");

            //header("Location:../pages/dashboard.php");
            
            exit();
          
        
    }
    else {

        echo "Account o password errati";
            

        exit();
        
    }
}

?>