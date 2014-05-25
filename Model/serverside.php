<?php
include("connection.php");
include("savetest.php");

if(isset($_POST['datepubli'])) {
	genererJSON(1,$_POST['datepubli'],'../style/results.json');	
	$var = afficherNouveauxResultats('../style/results.json');
	echo $var;
}
else 
	echo "Erreur interne - datepubi not found";
 ?>