<!DOCTYPE html>
<html>
<title>R6 OP randomizer</title>	<!-- geeft de tital van de pagina neer in het tabbladen menu//-->

<body>
<p>Welcome to the Rainbow six siege operator randomizer, please click one of the option below!</p> <!--p word hier gebruikt als een stuk tekst//-->
</br>	<!--dit geeft een enter aan//-->
<a href='index.php?ClickAttack=true'>Attacker</a>	<!-- maakt Click attack true als er op deze 'link' geklikt word//-->
<a> - </a>	<!-- een streepje tussen 2 spaties//-->
<a href='index.php?ClickDefense=true'>defender</a></br></br> <!-- werkt hetzelfde als de andere 'a href' maar hier staan er nog 2 enters achter om het er beter uit te laten zien//-->

<?php
$rand = rand(1,10);			//geeft een random getal van 1 t/m 10 weer
$rndWp1 = rand(1,3);
$rndWp2 = rand(1,2);
$rndGd = rand(1,2);
include 'attackers.php';	//zegt het script dat deze 2 bestanden inclusied de php bij dit bestand horen en gebruikt kunnen worden
include 'defenders.php';

function primary($varWp1, $varWp2, $varWp3) {    //dit is de functie voor de primaire wapens, je vult de namen in en ze zullen gerandomized worden
	start:                                        //dit geeft het begin voor een goto command aan, er word later uitgelegd waarom
	$rnd = rand(1,3);                            //koppelt de variable $rnd aan een randomizer van de getallen 1 t/m 3
	if ($rnd == "1") {                            //kijkt of $rnd 1, zo ja dan voert hij zijn opdracht uit
		$weapon = $varWp1;                        //bind wapen $varWp1 aan $weapon
	} elseif ($rnd == "2") {                    //als de randomzier geen 1 geeft en geen 3 zal hij uit gaan van 2 daarom ook elsif
		$weapon = $varWp2;                        //koppely de variable $rnd aand $varWp2
	} else {                                    //als het niet 1 of 2 blijft er maar 1 over: 3, daarom ook else en geen elseif
		$weapon = $varWp3;                        //koppelt als laatste optie het 3e wapen ($varWp3) aan $weapon
	}
	if ($weapon == "") goto start;                //als een operator maar 2 wapen heeft (zoals Sledge met case[7]) en hij valt op 3 (leeg) dan gaat hij weer naar start: in de functie
	echo "<br/>Primary weapon: ";                //print een enter met de zin: "Primary weapon:" op het scherm
	echo $weapon;                                //print het gerandomizede wapen op het scherm
}
function secondary($varWp1, $varWp2) {            //dit is een herhaling van de functie primary maar dan kleiner om dat er meestal maar 2 secondaries zijn
	$rnd= rand(1,2);
	if ($rnd == "1") {
		$weapon = $varWp1;
	} else {
		$weapon = $varWp2;
	}
	echo "<br/>Secondary weapon: ";
	echo $weapon;    
}
function gadget($varGG1, $varGG2) {                //deze is precies hetzelfde als de functie secondary(); maar alleen met wat andere variabelen voor het overzicht
	$rnd = rand(1,2);
	if ($rnd == "1") {
		$gadget = $varGG1;
	} else {
		$gadget = $varGG2;
	}
	echo "</br> Gadget: ";
	echo $gadget;
}

if (isset($_GET['ClickAttack'])) {	//deze if statement kijk of ClickAttack true is, zo ja dan voet hij de onderstaande functie uit
	attackers();
}

if (isset($_GET['ClickDefense'])) {	//dit werkt precies hetzelfde maar dan voor ClickDefense
	defenders();
}

?>
</body>
</html>