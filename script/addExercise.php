<?php 

error_reporting(E_ALL);
ini_set('display_errors','On');

require_once('dbConn.php');

session_start();

$muscolo=$_POST['muscolo'];
$nome=$_POST['esercizio'];
$serie=$_POST['serie'];
$ripetizioni=$_POST['ripetizioni'];
$recupero=$_POST['recupero'];
$peso=$_POST['peso'];
$partecorpo=$_POST['partecorpo'];


$nickname = $_SESSION['nickname'];

/*echo "Muscolo: ".$muscolo . " " 
. "Esercizio: ".$esercizio . " " . "Serie: ".$serie . " " 
. "Ripe: " .$ripetizioni . " " 
."Rec: ".$recupero . " " 
."Pes: ".$peso . " " 
."par: ".$partecorpo . " " 
."Nick: ".$nickname . " "  ;*/

$stmt = $link->prepare("INSERT INTO esercizio (nome, muscolo, partecorpo, ripetizioni, serie, recupero, peso, nomeutente) VALUES (?,?,?,?,?,?,?,?)");

$stmt->bind_param('ssssssss', $nome, $muscolo, $partecorpo, $ripetizioni, $serie, $recupero, $peso, $nickname);

		$res = $stmt->execute();

        if($res == false) {
            $_SESSION['info'] = "Impossibile creare account";
echo "Forse hai gia inserito questo esercizio oppure qualcosa è andato storto. Sfigato."  ;
                  } else {
            
          
  
                    echo "Esercizio aggiunto!"  ;
  
  
                      exit();
            }


?>