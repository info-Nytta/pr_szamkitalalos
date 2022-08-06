<?php
$gondol='Gép';
$tippel='Játékos';

if (isset($_GET['tipp']))
{	
	$tipp=$_GET['tipp'];
	
	//$szam=$_GET['xx'];
	$tippszam=$_GET['x'];
	$min=$_GET['min'];
	$max=$_GET['max'];
	$le=$tippszam-$min-1;
	$fel=$max-$tippszam;
	if ($tipp==7) {
		if ($min<$max) {$valasz.="vesztettél "; $_SESSION['gg']['gep']++;}
		else { $valasz.="győztél "; $_SESSION['gg']['jatekos']++;}
	}
	if ($min>=$max) {
		$valasz.="eltaláltad";
		$ok=true;
	}
	else if ($le>=$fel) {$valasz.="kisebb"; $max=$_GET['x']-1; $min=$_GET['min'];}
	else {$valasz.="nagyobb"; $min=$_GET['x']+1; $max=$_GET['max'];}
	$szam=floor(($min+$max)/2);
	$tipp=$_GET['tipp']+1;
	/*
	if ($_GET['x']<$szam) {$valasz="nagyobb"; $min=$_GET['x']+1; $max=$_GET['max'];}
	else if ($_GET['x']>$szam) {$valasz="kisebb"; $max=$_GET['x']-1; $min=$_GET['min'];}
	else $valasz="eltaláltad";
	*/
	$tippek=$_GET['tippek'].$_GET['tipp'].". tipp: ".$_GET['x']." - ".$valasz."<br>";
	
}

?>