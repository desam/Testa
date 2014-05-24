<?php 

$resp = Createtest();

if ($resp)
	echo '<script>window.location.replace("index.php?action=")</script>';
else
	echo '<script>window.location.replace("index.php?action=formwritetest")</script>';
	
?>