<?php $tabassoc = afficherTests(1); ?>

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
<div id="newPubli" onclick="javascript:ajaxGetNewResults();"> 
	<form>
		<input type="hidden" id="datearticlehidden" name="datearticlehidden" value="<?php echo $tabassoc['lastarticle']['datearticle']; ?>">
		<u>Nouvelles publications</u>
	</form>
</div>
</div>
<div id="resultat"> </div>	
</div>
<?php 
echo $tabassoc['contenu'];
?>