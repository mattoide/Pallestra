<?php 

error_reporting(E_ALL);
ini_set('display_errors','On');

require_once('../dbConn.php');

$muscolo=$_POST['muscolo'];
$nome=$_POST['esercizio'];
$serie=$_POST['serie'];
$ripetizioni=$_POST['ripetizioni'];
$recupero=$_POST['recupero'];
$peso=$_POST['peso'];
$partecorpo=$_POST['partecorpo'];
$nickname = $_POST['nickname'];




$stmt = $link->prepare("INSERT INTO esercizio (nome, muscolo, partecorpo, ripetizioni, serie, recupero, peso, nomeutente) VALUES (?,?,?,?,?,?,?,?)");

$stmt->bind_param('ssssssss', $nome, $muscolo, $partecorpo, $ripetizioni, $serie, $recupero, $peso, $nickname);

		$res = $stmt->execute();

        if($res == false) {

			        http_response_code(400);
              echo "Forse hai gia inserito questo esercizio oppure qualcosa è andato storto. Sfigato."  ;

                  } else {
            
          
                    http_response_code(200);
                    echo "Esercizio aggiunto!"  ;
  
  
                      exit();
            }


?>