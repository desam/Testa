<?php if(isset($_SESSION['login'])) { ?>
<div>
<p>Fiche utilisateur</p>
<table>
<tr>
	<td>Nom : <?php echo $_SESSION['name']; ?> </td>
</tr>
<tr>
	<td>Prenom : <?php echo $_SESSION['firstname'];  ?></td>
</tr>
<tr>
	<td>Date de naissance: <?php echo $_SESSION['birthday'];  ?> </td>
</tr>
<tr>
	<td>Email: <?php echo $_SESSION['login'];  ?> </td>
</tr>
</table>
<br>
</div>
<?php } ?>