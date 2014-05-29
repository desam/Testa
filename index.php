<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <title>TESTA - Your opinion counts ! </title>
    <link REL=StyleSheet HREF="style/style.css" TYPE="text/css">
    <link type="text/css" rel="stylesheet" href="jQuery-TE_v.1.4.0/jquery-te-1.4.0.css">
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<script type="text/javascript" src="http://code.jquery.com/jquery.min.js" charset="utf-8"></script>
	<script type="text/javascript" src="jQuery-TE_v.1.4.0/jquery-te-1.4.0.min.js" charset="utf-8"></script>
	<script type="text/javascript" src="style/ajax.js"></script>
	
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
	<!-- Optional theme -->
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">
	<!-- Latest compiled and minified JavaScript -->
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>

</head>
<body>
<div id="conteneur">
<?php

include("header.inc.php");
include("Model/connection.php");
include("Model/savetest.php");


if(isset($_GET['action'])&&!empty($_GET['action']))
{
	switch($_GET['action'])
	{
		case 'events':
			include("accueil.php");
		break;
        
        case 'television':
            include("televisiongeneral.php");
        break;
        
		case 'televisiondomain':
            include("television.php");
        break;
        
        case 'article':
            include("article.php");
        break;
        
        case 'writetest':
            include("writetest.php");
        break;
        
        case 'formwritetest':
          include("formwritetest.php");
        break;
        
        case 'createnewaccount':
        	include("createnewaccount.php");
        break;
        
        case 'personnel':
            include("personnel.php");
        break;      
        
        case 'contact':
            include("contact.php");
        break; 
        
        case 'savetest':
        	include("Controller/Csavetest.php");
        break; 
        
        case 'saveuser':
        	include("Controller/Csaveuser.php");
        break;
        
        case 'login':
        	include("Controller/Clogin.php");
        break;
        
        case 'deconnexion':
        	include("Controller/Cdeconnexion.php");
        break;
        
    	case 'user':
        	include("Controller/Cuser.php");
        break;
        
        case 'consommation':
        	include("Controller/Cconsommation.php");
        break;
        
        case 'afficherconso':
        	include("televisiongeneral.php");
        break;
        
        case 'product';
        	include("television.php");
        break;
        
        case 'saveconsomation':
        	include("Controller/Csaveconsommation.php");
        break;
        
        default:
			include("accueil.php");
		break;
    }
}
else{
    include("accueil.php");
} 
include("footer.inc.php");   

?>
</div>
</body>
</html> 