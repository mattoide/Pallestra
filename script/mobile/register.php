


<?php 

error_reporting(E_ALL);
ini_set('display_errors','On');

require_once('../dbConn.php');



if ($_POST["password"] != $_POST["rePassword"]){

    echo  "Le password non coincidono";

  }  else {

  $username = $_POST["username"];
  $name = $_POST["name"];;
  $email = $_POST["email"];
  $surname = $_POST["surname"];
  $password = $_POST["password"];
  $repassword = $_POST["rePassword"];

  
  $stmt = $link->prepare("SELECT * FROM utente WHERE nickname = ?");
      $stmt->bind_param('s', $username);
      $execquery = $stmt->execute();

      
      if($execquery == false) {
          echo "C'è stato un errore di connesione, riprova più tardi";
 
      } else  {

            $acc=$stmt->fetch();  
           
            if($acc!=false) {
     
     echo "Username già esistente";

     }  else{

      //controlla la mail
      $stmt = $link->prepare("SELECT * FROM utente WHERE email = ?");
      $stmt->bind_param('s', $email);
      $execquery = $stmt->execute();
  
          if($execquery == false) {
              echo "C'è stato un errore di connesione, riprova più tardi";
            
          } else {

            $acc=$stmt->fetch();  
           
            if($acc!=false) {
     
      echo "Email già usata";


     }  else{
       

       $stmt = $link->prepare("INSERT INTO utente (nickname, nome, cognome, email, password) VALUES (?,?,?,?,?)");
      $stmt->bind_param('sssss', $username, $name, $surname, $email, $password);

      $res = $stmt->execute();                        

              if($res == false) {
        echo "Impossibile creare account";
        
              } else {
      echo "Nuovo utente creato con successo. Logga usando i tuoi dati!";
        
    
       

                  exit();
        }
   }
  }
 }
  }
}  

?>