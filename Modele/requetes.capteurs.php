<?php


//require('requetes.generiques.php');


$table='sensors';
$table2='users';

function getusersensor()
{
	$ch = curl_init();
	curl_setopt(
			$ch,
			CURLOPT_URL,
			"http://projets-tomcat.isep.fr:8080/appService?ACTION=GETLOG&TEAM=009A");
	curl_setopt($ch, CURLOPT_HEADER, FALSE);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
	$data = curl_exec($ch);
	curl_close($ch);
	
	//echo "Raw Data:</br>";
	//echo ("$data");
	$donnee = decoder($data); 
	
}



function decoder(string $data)
{
	$data_tab = str_split($data, 33);
	$tram = array();
	echo "Tabular Data:</br>";
	echo $data_tab[1] . "</br";
	//for ($i=0, $size=count($data_tab); $i<$size; $i++){
		$tram [] = decouper($data_tab[1] );
		//echo "Trame $i: $data_tab[$i]</br>";
		
	
	}
	
	

//}

function decouper(string $data_tab)
{
	list($t, $o, $r, $c, $n, $v, $a, $x, $year, $month, $day, $hour, $min, $sec) = sscanf($data_tab,"%1s%4s%1s%1s%2s%4s%4s%2s%4s%2s%2s%2s%2s%2s");
	
	if ($c == 3)
	{
		echo  'temperature ';
	}
	
	if ($c == 4)
	{
		echo 'Humidite ';
	}
	
	if ($c == 5)
	{
		echo 'Lumiere ';
	}
	//echo $V = floatval($v);
	$V = explode ( " " , $v );
	echo $v;
	//echo $V[1]; //. $V[2] . ',' . $V[3];
	
	
	//echo ' le ' . $day . '/' . $month . '/' . $year ;
	
	


}


