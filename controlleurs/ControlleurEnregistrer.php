<?php


$eventManager=new EventManager(); 
$nom=" ";
$date_de_debut=" ";
$date_de_fin=" ";
$organisateur=" ";
$description=" ";



if(isset($_GET["id"])){
    $event=$eventManager-> get($_GET["id"]);

    $nom='value="'.$event->getNom().'"';
    $date_de_debut='value="'.$event->getDate_de_debut().'"';
    $date_de_fin='value="'.$event->getDate_de_fin().'"';
    $organisateur='value="'.$event->getOrganisateur().'"';
    $description='value="'.$event->getDescription().'"';

}

if(isset($_POST["nom"]) AND isset($_POST["date_de_debut"]) AND isset($_POST["date_de_fin"]) AND isset($_POST["organisateur"]) AND isset($_POST["description"])){
    $event=new Event($_POST);
    $eventManager->enregistrer($event);
     header("location:index.php?page=ControlleurListe");

}
    
require_once ("../vues/enregistrer.php");


?>








