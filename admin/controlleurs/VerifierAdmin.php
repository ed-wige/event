<?php
require_once '../vues/log.php';
require_once '../modeles/AdminManager.php';
require_once '../modeles/Admin.php';



use modeles\Admin;
use modeles\AdminManager;

	session_start();
	@$username=$_POST["username"];
	@$pass=$_POST["pass"];
	@$valider=$_POST["valider"];
	$message="";
	if(isset($valider)){
		include("../database/connexion.php");
		$res=$pdo->prepare("select * from administration where username=? and pass=? limit 1");
		$res->setFetchMode(PDO::FETCH_ASSOC);
		$res->execute(array($username,md5($pass)));
		$tab=$res->fetchAll();
		if(count($tab)==0)
			$message="<li>Mauvais login ou mot de passe!</li>";
		else{
			$_SESSION["autoriser"]="oui";
			
			header("location:../vues/session.php");
		}
	}
?>

<!DOCYTPE html>
<html>

<head>
  <link rel="stylesheet" type="text/css" href="../assets/materialize.min.css">
   
</head>
<center style="color:red; ">
         <p><?= $message ?></p> 
        <br><br>


</center>




