<?php 
if($_GET['action']=="televisiondomain")
 {
	$tabassoc = afficherTests(1); ?>

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

} else if($_GET['action']=="product") {
	$idp = $_GET['id'];
	$tabassoc = afficherTests($idp); 
	$tabprod = getProduct($idp);
	$trademark = getTrademark($tabprod[0]['idtrademark']);
?>
<div id="big-television">
<div class="filariane"> <a href="index.php?action=television">
<?php 
 	echo $trademark[0]['libelletrademark']."</a> >";
 	echo $tabprod[0]['libelleproduct']; 
 ?>
</div>
<div id="televisonlateral">
<div class="titre-image"><img src="images/sony.jpg" alt="sony-tv" height="260" width="362"> </p></div>
  <div class="description-produit">
  <p><b> <?php echo $tabprod[0]['libelleproduct']; ?> </b></p>
  <p><?php echo $tabprod[0]['caracteristicsproduct'];?> </p>
	</div>
	</p>

<!--div id="newPubli" onclick="javascript:ajaxGetNewResults();"> 
	<form>
		<input type="hidden" id="datearticlehidden" name="datearticlehidden" value="<?php echo $tabassoc['lastarticle']['datearticle']; ?>">
		<u>Nouvelles publications</u>
	</form>
</div>
</div-->

<!-- Button trigger modal -->
<button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
  Publier 
</button>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Votre publication</h4>
      </div>
      <div class="modal-body">
      <form action="index.php?action=savetest" method="POST">	
       	 <textarea cols="63" rows="5" name="textarea1" maxlength="180">
		 </textarea>
		 <input type="hidden" id="marque" name="marque" value="<?php echo $trademark[0]['libelletrademark']; ?>">
		 <input type="hidden" id="model" name="model" value="<?php echo $tabprod[0]['libelleproduct']; ?>">
		 <input type="hidden" id="idproduct" name="idproduct" value="<?php echo $_GET['id']; ?>" >
		 <input type="submit" class="btn btn-primary" value="Envoyer" >
      </form>
      </div>
    </div>
  </div>
</div>
	<div id="resultat"></div>	
</div>

<?php
echo $tabassoc['contenu'];
}
?>