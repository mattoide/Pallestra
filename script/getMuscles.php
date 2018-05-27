<?php 

error_reporting(E_ALL);
ini_set('display_errors','On');

require_once('dbConn.php');

session_start();

        $username = $_POST["username"];
		$partecorpo = $_POST["partecorpo"];

	
		$stmt = $link->prepare("SELECT nome, muscolo, ripetizioni, serie, recupero, peso FROM esercizio WHERE nomeutente = ? AND partecorpo = ?");

		$stmt->bind_param('ss', $username, $partecorpo);

		$execquery = $stmt->execute();

		$stmt->store_result();

        $stmt->bind_result($nome, $muscolo, $ripetizioni, $serie, $recupero, $peso);
        

		$i = 0;
		while ($acc = $stmt->fetch()){

			$ex[$i]['nome'] = $nome;
			$ex[$i]['muscolo'] = $muscolo;
			$ex[$i]['ripetizioni'] = $ripetizioni;
			$ex[$i]['serie'] = $serie;
			$ex[$i]['recupero'] = $recupero;
			$ex[$i]['peso'] = $peso;

			$i++;
		}
		if($i>0)
		echo json_encode($ex);
		else
		echo null;
		

		/*	if ($acc)
			{
				
				$i = 0;
			while($acc){
$i++;
			}

			echo $i;
//echo json_encode($nome.$muscolo.$ripetizioni. $serie. $recupero. $peso);
					exit();
			  	
				
			}

			else{
				echo "noemnt";
			}*/


?>