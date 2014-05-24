<div id="big-television">
<div class="filariane"> <a href="index.php?action=television">Television</a> > SONY KDL55W808 LED 3D </div>


<div id="televisonlateral">
<div class="titre-image"><img src="images/sony.jpg" alt="sony-tv" height="260" width="362"> </p></div>
  <div class="description-produit">
  <p><b>SONY KDL55W808 LED 3D</b></p>
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ac erat et leo 
  	 suscipit ornare ultricies ac sem.Proin fermentum lorem ac eros consequat, vel viverra 
  	 ligula semper. Donec vitae velit ut magna consectetur pretium in eu neque.
	  Morbi ante velit, ultrices</p>
	<p> suscipit ornare ultricie:uscipit ornare ultricies ac sem.Proin fermentum 
	lorem ac eros consequat, vel viverra  ligula semper. Donec vitae velit ut magna</p>
	</div>
	</p>
</div>

<?php
//Lancer la fonction au bout de 15s et récupérer la dernière date article en entrée 
	genererJSON(1,'2014-05-24 15:49:13');

//Afficher le résultat si tout est OK
	$json =file_get_contents("style/results.json");
	$obj = json_decode($json);		
 	
 	$vars = get_object_vars($obj);
 	
 	foreach($obj->posts as $post){
    $contenu = $post->contenu;
    $date = $post->datepublication;
	$iduser = $post->iduser;
	echo '<div class="">';
			$tabuser = getUser($iduser);
			echo '<div class="article-image2">'.$tabuser[0]['nameuser'].' '. 
			$tabuser[0]['firstname'].'</div>';
			echo '<div class="contenu-article">';
			echo '<div class="dateheure">'.$date.'</div><br>';
			echo "<p>".$contenu."</p>";
			echo '</div>';
			echo '</div>';

	}
 	
 	afficherTests(1); 
 	
 	?>
</div>