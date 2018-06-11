<?php

$table='sensors';
$table2='users';

function getusersensor(PDO $bdd, $id)
{
    $query= "SELECT * FROM sensors WHERE user_id = :id LEFT JOIN piece ON sensors.piece_id=piece.id";
    $data=$bdd->prepare($query);
    $data -> bindParam(":id", $id);
    $data->execute();
    return $data->fetchAll();
}

function enregistrement(PDO $bdd, $id)
{
	$query= "INSERT INTO ";
}

function getlog()
{
	$ch = curl_init();
	curl_setopt(
			$ch,
			CURLOPT_URL,
			"http://projets-tomcat.isep.fr:8080/appService?ACTION=GETLOG&TEAM=009E");
	curl_setopt($ch, CURLOPT_HEADER, FALSE);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
	$data = curl_exec($ch);
	curl_close($ch);
	
	$donnee = decoder($data); 
	
}



function decoder(string $data)
{
	$data_tab = str_split($data, 33);
	$tram = array();
	echo "Tabular Data:</br>";
	echo $data_tab[0] . "</br>";
	echo count($data_tab);
	for ($i=0, $size=count($data_tab)-1; $i<$size; $i++){
		$tram [$i] = decouper($data_tab[$i]);	
	
	}
	print_r ($tram);
	return $tram;
	

}

function decouper(string $data_tab)
{
	list($t, $o, $r, $c, $n, $v, $a, $x, $year, $month, $day, $hour, $min, $sec) = sscanf($data_tab,"%1s%4s%1s%1s%2s%4s%4s%2s%4s%2s%2s%2s%2s%2s");
	echo "</br>$c</br>";
	echo "</br>$v</br>";
	if ( $c == 3)
	{
		echo $type =  'temperature';
	}
	
	if ($c == 4)
	{
		echo $type = 'Humidite';
	}
	
	if ($c == 5)
	{
		echo $type = 'Lumiere';
	}
	 $V = floatval($v);
	//$V = explode ( " " , $v );
	
	//echo $V[1]; //. $V[2] . ',' . $V[3];
	switch ($type)
	{
		case 'temperature':
			$unité = "C°";
			break;
			
		case 'Humidite':
			$unité = "%";
			break;
		
		case 'Lumiere':
			if ($v == 1111)
			{
				$unité = "alumé";
			}
			
			if ($v == 0000)
			{
				$unité = "éteint";
			}
				
	}
	echo "</br>$V $unité</br>";
	echo ' le ' . $day . '/' . $month . '/' . $year ;
	return array($type, $V, $unité, $day, $month, $year);
	
	


}


