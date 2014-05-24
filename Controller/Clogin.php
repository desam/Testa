<?php 
$rep = Login();
if($rep)
	echo '<script>window.location.replace("index.php?action=")</script>';	
else 
	echo '<script>window.location.replace("index.php?action=")</script>';
?>