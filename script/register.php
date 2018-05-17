<?php

error_reporting(E_ALL);
ini_set('display_errors','On');

session_start();

if(isset($_SESSION['username']))
{
	
}

if(!isset($_SESSION['info']))
{
	$_SESSION['info'] = "";
}


$emptyuser = "";
$emptypass = "";
$repass = "";
$emptyname = "";
$emptyemail = "";
$infomsg = "";

$dispusername = "";
$dispemail = "";
$dispfullname = "";


if(isset($_POST["newuser"]))
{

    $dispusername = $_POST["username"];
    $dispfullname = $_POST["fullname"];
    $dispemail = $_POST["email"];

    // verifico e leggo
    if (empty($_POST["username"]))
    {
      $emptyuser = "* Inserisci un username";
    }
    else if (empty($_POST["password"]))
    {
      $emptypass = "* Inserisci una password";
    }
    else if (empty($_POST["repassword"]))
    {
      $repass = "* Ri inserisci la password";
    }
    else if (empty($_POST["fullname"]))
    {
      $emptyname = "* Inserisci un fullname";
    }
    else if (empty($_POST["email"]))
    {
      $emptyemail = "* Inserisci una mail";
    }
    else if ($_POST["password"] != $_POST["repassword"])
    {
      $repass = "* Le password non coincidono";
    }
    else
    {

		$username = ($_POST["username"]);
		$password = md5($_POST["password"]);
		$fullname = $_POST["fullname"];
		$email = $_POST["email"];   
		
		$dbpath = __DIR__ . '/mydb.sqlite';
		$dbh = new SQLite3($dbpath);
		
        // Verifica dell'username
        $stmt = $dbh->prepare("SELECT * FROM users WHERE username='". $username . "'");
        $execquery = $stmt->execute();
        if($execquery == false)
        {
            $_SESSION['info'] = "C'è stato un errore di connesione, riprova più tardi";
        }
        else
        {
			$acc=$execquery->fetchArray(SQLITE3_ASSOC);  
			 
			if($acc!=false) {
				$_SESSION['info'] = "Username già esistente";
			}  
			else
			{

				$stmt = $dbh->prepare("INSERT into users values('" . $username . "','" . $password . "','" . $fullname . "','" . $email . "')");
				$res = $stmt->execute();                        

				if($res == false) {
					$_SESSION['info'] = "Impossibile creare account";
				} else {
					$_SESSION['info'] = "Nuovo utente creato con successo";
					session_write_close();
					header("location: board.php");
					exit();
				}
			}
		}
	}
}


if(isset($_SESSION['info']) && $_SESSION['info'] != "")
{
  $infomsg = $_SESSION['info'];
  $_SESSION['info'] = "";
}

?>
<!DOCTYPE html>
<html>
<head>
  <title>Message Board</title>
  <?php include('header.php'); ?>
</head>
<body>
<form action="register.php" method="POST">
<table id="register_table">
  <tr>
    <td width="116"><div align="right">Username</div></td>
    <td width="177"><input name="username" value="<?php echo $dispusername; ?>" type="text" /></td>
    <td nowrap><span class="error"><?php echo $emptyuser;?></span></td>
  </tr>
  <tr>
    <td><div align="right">Password</div></td>
    <td><input name="password" type="password" /></td>
    <td nowrap><span class="error"><?php echo $emptypass;?></span></td>
  </tr>
  <tr>
    <td><div align="right">Retype Password</div></td>
    <td><input name="repassword" type="password" /></td>
    <td nowrap><span class="error"><?php echo $repass;?></span></td>
  </tr>
  <tr>
    <td width="116"><div align="right">Fullname</div></td>
    <td width="177"><input name="fullname" value="<?php echo $dispfullname; ?>" type="text" /></td>
    <td nowrap><span class="error"><?php echo $emptyname;?></span></td>
  </tr>
  <tr>
    <td width="116"><div align="right">Email</div></td>
    <td width="177"><input name="email" value="<?php echo $dispemail; ?>" type="text" /></td>
    <td nowrap><span class="error"><?php echo $emptyemail;?></span></td>
  </tr>
  <tr>
	<td><a href="board.php">Accedi</a></td>
	<td align="center"><input name="newuser" type="submit" value="Register" /></td>
    <td nowrap><span class="error"><?php echo $infomsg;?></span></td>
  </tr>
</table>
</form>
<?php include('footer.php'); ?>
</body>
</html>