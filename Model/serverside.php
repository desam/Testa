<?php
include("connection.php");
include("savetest.php");

if(isset($_POST['datearticlehidden'])) {
	
	echo $POST['datearticlehidden'];
	
	genererJSON(1,$_POST['datearticlehidden'],'../style/results.json');
	
	$var = afficherNouveauxResultats('../style/results.json');
	
	echo $var;
}
 ?>