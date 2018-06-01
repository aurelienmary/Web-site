<?php
session_start();

include ('requetes.generiques.php');


$table='sensors';
$table2='users';

function getusersensor(PDO $bdd, array $user)
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
	
	echo "Raw Data:</br>";
	echo ("$data");
	decoder($bdd, $data); 
}



function decoder(PDO $bdd, array $data)
{
	$data_tab = str_split($data, 33);
	
	echo "Tabular Data:</br>";
	for ($i=0, $size=count($data_tab); $i<$size; $i++){
		decouper($bdd, $data_tab[$i] );
		echo "Trame $i: $data_tab[$i]</br>";
	}
	
	

}

function decouper(PDO $bdd, string $data_tab)
{
	list($t, $o, $r, $c,$n, $v, $a, $x, $year, $month, $day, $hour, $min, $sec) = sscanf($data_tab,"%1s%4s%1s%1s%2s%4s%4s%2s%4s%2s%2s%2s%2s%2s");
}