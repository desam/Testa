<?php 

function connect(){
	global $link;
	$link=mysql_connect('localhost','root','root') or die("error establishing a data base connection");
	mysql_query("SET NAMES 'UTF8'");
	mysql_select_db('testa', $link) or die ("error in selecting data base");
}

function query($req){
    global $link;
    if ($link==NULL) connect();
    $ref=mysql_query($req) or die("error in the query" . $req);
    return $ref;
}

function enreg($ref){
    $enregT=array();
    while($enregT[]=mysql_fetch_array($ref));
    return $enregT;
}


?>