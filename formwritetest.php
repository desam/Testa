<div id="writeatest">
	<h2> Publier un avis </h2>
	<table>
	<tr>
		<td>Titre:</td>
		<td> <input type="text" name="title" size="70"></td>
	</tr>
	<tr>
		<td>Domaine:</td>
		<td> <input type="text" name="domain" size="70"></td>
	</tr>
	<tr>
		<td>Marque:</td>
		<td> <input type="text" name="marque" size="70"></td>
	</tr>
	<tr>
		<td>Mod&egrave;le:</td>
		<td> <input type="text" name="model" size="70"></td>
	</tr>
	<tr>
		<td>R&eacute;sum&eacute;:</td>
		<td>
		<textarea name="textarea1" class="jqte-test">
		<span style="color:rgb(0, 148, 133);"></span>
		</textarea>
		<script>
			$('.jqte-test').jqte();
		</script>
		</td>
	</tr>
	<tr>
		<td>Contenu:</td>
		<td>
		<textarea name="textarea2" class="jqte-test2">
			<span style="color:rgb(0, 148, 133);"></span>
		</textarea>
		<script>
			$('.jqte-test2').jqte();
		</script>
		</td>
	</tr>
	<tr>
	  	<td></td>
		<td><input type="submit" name="Envoyer">
		<input type="reset" name="Effacer"></td>
	</tr>
	</table>
</div>