<div class="filariane"> Television > Marque  </div>
<?php 
include("searchbar.php"); 

if(isset($_POST)&&!empty($_POST)) {
 $var = afficherConsommation($_POST['model'],$_POST['television']);
 echo '<div id="article">';
 echo '<h3>Derni&egrave;res publications</h3>';
 echo $var;
 echo '</div>';	
}
else {
$var = afficherDerniereconso(0);
echo '<div id="article">';
 echo '<h3>Derni&egrave;res publications</h3>';
 echo $var;
 echo '</div>';	

}
?>



