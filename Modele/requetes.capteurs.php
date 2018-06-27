<?php
include('./Modele/requetes.generiques.php');
$table='sensors';
$table2='users';

function getusersensor(PDO $bdd, $id)
{
    $query= "SELECT * FROM sensors LEFT JOIN piece ON sensors.piece_id=piece.id WHERE users_id = :id ";
    $data=$bdd->prepare($query);
    $data -> bindParam(":id", $id);
    $data->execute();
    return $data->fetchAll();
}

function enregistrement(PDO $bdd, $id)
{
	$query= "INSERT INTO ";
}

function getlog(PDO $bdd)
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
	
	$donnee = decoder($bdd ,$data); 
	
}



function decoder(PDO $bdd, string $data)
{
	$data_tab = str_split($data, 33);
	$tram = array();
	echo "Tabular Data:</br>";
	echo $data_tab[0] . "</br>";
	echo count($data_tab);
	for ($i=0, $size=count($data_tab)-1; $i<$size; $i++){
		$tram [$i] = decouper($bdd, $data_tab[$i]);	
	
	}
	print_r ($tram);
	return $tram;
	

}

function decouper(PDO $bdd, string $data_tab)
{
	list($t, $o, $r, $c, $n, $v, $a, $x, $year, $month, $day, $hour, $min, $sec) = sscanf($data_tab,"%1s%4s%1s%1s%2s%4s%4s%2s%4s%2s%2s%2s%2s%2s");
	//echo "</br>$c</br>";
	//echo "</br>$v</br>";
	
	if ($c == 1)
	{
		echo $type = 'Distance 1';
	}
	
	if ($c == 2)
	{
		echo $type = 'Distance 2';
	}
	
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
	
	if ($c == 6)
	{
		echo $type = 'Couleur';
	}
	
	if ($c == 7)
	{
		echo $type = 'Presence';
	}
	
	 //$V = floatval($v);
	 $V = number_format($v, 2, ',', ' '); 
	 //$V = explode( " " , $v);
	
	
	switch ($type)
	{
		case 'Distance 1':
			$unité = "m";
			break;
		
		case 'Distance 2':
			$unité = "m";
			break;
			
		case 'Couleur':
			$unité = "";
			break;
		
		case 'Presence':
			$unité = "";
			break;
		
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
	echo ' le ' . $day . '/' . $month . '/' . $year . '</br>' ;
	
	list($n1, $n2) = sscanf($n,"%1s%1s");
	echo "$n2</br>";
	$req = $bdd->prepare('UPDATE sensors SET valeur = :nvvaleur, sensortype_id = :nv_sensortype_id WHERE id = :id');
	$req->execute(array(
			'nvvaleur' => $v,
			'nv_sensortype_id' => $c,
			'id' => $n2,
	));
	
	return array($type, $V, $unité, $day, $month, $year);
	
	


}
function adduser(PDO $bdd, array $sensor)
{
    $query= 'INSERT INTO users() VALUES ()';
    $donnees= $bdd->prepare($query);
    $donnees->bindParam(":email", $sensor['email']);
    $donnees->bindParam(":lastname", $sensor['lastname']);
    $donnees->bindParam(":name", $sensor['name']);
    $donnees->bindParam(":birthdate", $sensor['birthdate']);
    $donnees->bindParam(":phonenumber", $sensor['phonenumber']);
    $donnees->bindParam(":adress", $sensor['adress']);
    $donnees->bindParam(":postalcode", $sensor['postalcode']); 
    return $donnees->execute();
}


