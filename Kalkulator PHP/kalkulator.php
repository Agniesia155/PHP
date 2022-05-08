<?php
if (isset ($_GET["liczba1"]) || ($_GET["liczba2"]))
{	
echo '<b> Liczba 1: </b>' . $_GET["liczba1"] .'<br>';
echo '<b>Liczba 2: </b>' . $_GET["liczba2"] .'<br>';


$w1=$_GET["liczba1"];
$w2=$_GET["liczba2"];
$zmienna=$_GET["opcja"];


if (isset ($w1) && ($w2)) 

{
		
		switch ($zmienna)
{
case 1: 
	 	function dod($w1, $w2)
{
		$suma=$w1+$w2;
		return $suma;
	
}
	$wart1= dod($w1,$w2);
	echo ("<br> <b> Dodawanie: </b> $wart1");
	break;


case 2: 
	
function odejmij($w1, $w2)

{
	$roznica= $w1-$w2;
	return $roznica;
}
	$wart2= odejmij($w1,$w2);
	echo ("<br> <b> Odejmowanie: </b> $wart2");
	break;
	

case 3: 
function mnoz ($w1, $w2)
{
	$mn= $w1*$w2;
	return $mn;
}
	$wart3= mnoz ($w1,$w2);
	echo ("<br> <b>Mnożenie: </b> $wart3 ");
	break;


case 4: 
function dziel($w1, $w2)
{
	$dz=$w1/$w2;
	return $dz;
}
	$wart4= round(dziel ($w1,$w2),2);
	echo ("<br> <b> Dzielenie: </b> $wart4 ");
	break;
	
case 5: 
function mod($w1, $w2)
{
	$m=$w1%$w2;
	return $m;
}
	$wart5= mod($w1,$w2);
	echo ("<br> <b> Modulo: </b> $wart5");
	break;

case 6: 
function pot ($w1, $w2)
{
	$pt= pow($w1, $w2);
	return $pt;
}
	$wart6= pot($w1,$w2);
	echo ("<br> <b>Potęga: </b> $wart6 ");
	break;	
}
}

else if (isset ($_GET["liczba1"])) 
{
	
function pierw ($w1)
{
	$p= sqrt($w1);
	return $p;
}
	$wart7= round(pierw($w1),1);
	echo ("<br> <b> Pierwiastek: </b> $wart7 <br>");

}
}





?>