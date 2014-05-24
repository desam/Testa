<?php

function Createtest() {
	if (!empty($_POST['marque'])&&!empty($_POST['model'])&&!empty($_POST['textarea1']))
	{
	$marque = addslashes($_POST['marque']);
	$model = addslashes($_POST['model']);
	$contenu =addslashes($_POST['textarea1']);
	
	$sql="INSERT INTO `article` (`idarticle`, `summaryarticle`, `marque`,`model`,
	 `datearticle`, `idproduct`, `iduser`) VALUES (NULL,'$contenu','$marque','$model',
	  CURRENT_TIMESTAMP, '1', '1');";
	query($sql);
	return true;
	}
	else
		return false;
}

function CreateUser() {
	if (!empty($_POST['name'])&&!empty($_POST['firstname'])&&!empty($_POST['email'])
		&&!empty($_POST['confirmemail'])&&!empty($_POST['password'])
		&&!empty($_POST['password2'])&&!empty($_POST['birthday']))
	{
		$name = $_POST['name'];
		$firstname = $_POST['firstname'];
		$birthday = $_POST['birthday'];
		$email = $_POST['email'];
		$confirmmail = $_POST['confirmemail'];
		$compmail= strcmp($email, $confirmmail);
	
		$password = $_POST['password'];
		$password2 = $_POST['password2'];
		$comppass = strcmp($password,$password2);
		$pwd = sha1($password);
	
		$sql="INSERT INTO `user` (`iduser`, `nameuser`, `firstname`, `password`, 
		`email`, `birthday`, `iduserprofil`) VALUES (NULL,'$name','$firstname','$pwd', 
		'$email', '$birthday', 1);";
		
		if(($compmail==0)&&($comppass==0)){
			query($sql);
			return true;
	 	}
	  	else
	  		return false;
	}	
	else
		return false;
}

?>