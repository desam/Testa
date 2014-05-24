<div id="writeatest">
	<h2> Publier un avis </h2>
<form action="index.php?action=savetest" method="post">
	<table>
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
		<textarea cols="63" rows="5" name="textarea1" maxlength="180">
		</textarea>
		</td>
	</tr>
	<tr>
	<td></td>
	<td>
	 <input type="submit" name="save" value="Enregistrer" class="submit" >
	 <input type="reset" name="cancel" value="Annuler" class="submit">
	</td>
	</tr>
	</table>
	
 </form>
</div>