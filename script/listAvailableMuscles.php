<?php 

error_reporting(E_ALL);
ini_set('display_errors','On');

require_once('dbConn.php');

session_start();

		$muscolo = $_POST['muscolo'];



		$stmt = $link->prepare("SELECT esercizio, partecorpo, muscolo FROM esercizi WHERE muscolo = ?");

		$stmt->bind_param('s', $muscolo);

		$execquery = $stmt->execute();

		$stmt->store_result();

        $stmt->bind_result($esercizio, $partecorpo, $muscolo);
        

		$i = 0;
		while ($acc = $stmt->fetch()){

			$ex[$i]['esercizio'] = $esercizio;
			$ex[$i]['partecorpo'] = $partecorpo;
			$ex[$i]['muscolo'] = $muscolo;
			

			$i++;
		}
		if($i>0)
		echo json_encode($ex);
		else
		echo null;


?>