<!DOCTYPE html>
<html lang="fr">
<head>
    <title>TESTA - Your opinion counts ! </title>
    <LINK REL=StyleSheet HREF="style/style.css" TYPE="text/css">
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
</head>
<body>
<div id="conteneur">
<?php
include("header.inc.php");
include("menu.inc.php");
include("lateral.inc.php");

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