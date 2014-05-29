<?php $var = DeroulerMarques();  ?>
<div class="dropdown">
</div>
<div id="consommation">
	<form action="index.php?action=saveconsomation" method="post">
	 <div class="row">
  		<div class="col-lg-6">
  			<?php echo $var; ?> <br/>
			 <input type="text" name="modele" class="form-control" placeholder="Modele" size="50"> 
			 <textarea type="text" name="publication" class="form-control" rows="3" placeholder="publication">
			 Votre avis
			 </textarea>
			<div class="form-group">
    			<label for="exampleInputFile"> Inserer des images</label>
    			<input type="file" name="inserer-image" id="exampleInputFile">
  			</div>
  			Videos: <input type="url" name="videos" class="form-control" placeholder="Url de video">
  		</div>
  	 </div>
  	 <br>
   <input type="submit" class="btn btn-default">
   
	</form>
</div>