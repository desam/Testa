<div id="newaccount">
<h2>Cr&eacute;ation d'un nouveau compte</h2>

<form method="post" action="index.php?action=saveuser">
<table>
<tr>
	<td>Nom: </td>
	<td><input type="text" name="name"></td>
</tr>
<tr>
	<td>Prenom:</td>
	<td> <input type="text" name="firstname"></td>
</tr>
<tr>
	<td>Email:</td>
	<td> <input type="email" name="email"></td>
</tr>
<tr>
	<td>confirmer votre email:</td>
	<td> <input type="email" name="confirmemail"></td>
</tr>
<tr>
<tr>
	<td> Date de naissance:(AAAA-MM-JJ) </td>
	<td> <input type="text" name="birthday"></td>
</tr>
<tr>
	<td>Password:</td>
	<td> <input type="password" name="password"></td>
</tr>
<tr>
	<td>Confirm password:</td>
	<td> <input type="password" name="password2"></td>
</tr>
<tr>
	<td>capcha :</td>
	<td>
<?php 
  require_once('recaptcha/recaptchalib.php');
  $publickey = "6LcYE_QSAAAAAL3eQ6ypASSpQvL2OgqYiB8E6nPO"; // you got this from the signup page
  echo recaptcha_get_html($publickey);
?>
	</td>
<tr>
	<td></td>
	<td><input type="submit" name="submit">
	<input type="reset" name="cancel"></td>
</tr>
</table>
</form>
</div>