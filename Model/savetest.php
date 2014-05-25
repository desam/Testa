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

function Login() {
	if (!empty($_POST['login'])&&!empty($_POST['password']))
	{
		$login=$_POST['login'];
		$password=sha1($_POST['password']);
		
		$sql="SELECT * FROM user WHERE email='$login' AND password='$password';";
		$ref=query($sql);
		$tab=enreg($ref);
		
		if ((count($tab)-1)!=0)
		{
			if(!isset($_SESSION['login'])) {
			$_SESSION['login'] = $tab[0]['email'];
			$_SESSION['userid'] = $tab[0]['iduser'];
			$_SESSION['name'] = $tab[0]['nameuser'];
			$_SESSION['firstname'] = $tab[0]['firstname'];
			$_SESSION['birthday'] = $tab[0]['birthday'];
			}
			return true;
		}
		else 
			return false;
	}
	else 
		return false;
 }
 
 function deconnexion()
 {
  // On détruit les variables de notre session
  session_unset ();

	// On détruit notre session
  session_destroy ();
 }

 
function getUser($id) {
	$sql = "SELECT * FROM user WHERE iduser=$id;";
	$ref = query($sql);
	$tab = enreg($ref);
	return $tab;
}


function afficherTests($idproduit) {
	$idproduit = 1;
	$sql = "SELECT * FROM article WHERE idproduct=$idproduit ORDER BY datearticle DESC LIMIT 0,15;";
	$ref = query($sql);
	$tab = enreg($ref);

	if ((count($tab)-1)!=0){
		for($i=0 ; $i < count($tab)-1 ; $i++){
			echo '<div class="text-article">';
			$tabuser = getUser($tab[$i]['iduser']);
			echo '<div class="article-image2">'.$tabuser[0]['nameuser'].' '. 
			$tabuser[0]['firstname'].'</div>';
			echo '<div class="contenu-article">';
			echo '<div class="dateheure">'.$tab[$i]['datearticle'].'</div><br>';
			echo "<p>".$tab[$i]['summaryarticle']."</p>";
			echo '</div>';
			echo '</div>';
		}
	return $tab[0];
	}
	
}

function genererJSON($idproduct,$date,$url){

	$sql = "SELECT * FROM article WHERE idproduct =$idproduct 
	AND datearticle > '$date' ORDER BY datearticle DESC LIMIT 0 , 20;";
	$ref = query($sql);
	$tab = enreg($ref);
	$posts=array();
if ((count($tab)-1)!=0) {
	for($i=0 ; $i < count($tab)-1 ; $i++) {
		$idarticle = $tab[$i]['idarticle'];
		$contenu = $tab[$i]['summaryarticle']; 
		$datepub = $tab[$i]['datearticle'];
		$iduser = $tab[$i]['iduser'];
		$posts[] = array('contenu'=> $contenu, 'datepublication'=> $datepub, 'idarticle'=>$idarticle,
		'iduser'=> $iduser);
	} 
}

$response['posts'] = $posts;

$fp = fopen($url, 'w');
fwrite($fp, json_encode($response));
fclose($fp);

}


function afficherNouveauxResultats($url) {
//Afficher le résultat si tout est OK
if(file_exists($url)) {
	$json =file_get_contents($url);
	$obj = json_decode($json);		
 	$var = "";
 	
 	foreach($obj->posts as $post) {
   	 	$contenu = $post->contenu; 
    	$date = $post->datepublication;
		$iduser = $post->iduser;
		$var.= '<div class="">';
		$tabuser = getUser($iduser);
		$var.= '<div class="article-image2">'.$tabuser[0]['nameuser'].' '. 
		$tabuser[0]['firstname'].'</div>';
		$var.=  '<div class="contenu-article">';
		$var.= '<div class="dateheure">'.$date.'</div><br>';
		$var.= "<p>".$contenu."</p>";
		$var.= '</div>';
		$var.= '</div>';
	}
	return $var;
 }
 }
?>