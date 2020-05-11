<?php
require_once '../vues/session.php';
require_once '../modeles/EventManager.php';
require_once '../modeles/Event.php';

use modele\Event;
use modele\EventManager;

$event = new Event();
$event->setNom($_POST['nom'])
->setdate_de_debut($_POST['date_de_debut'])
->setdate_de_fin($_POST['date_de_fin'])
->setorganisateur($_POST['organisateur'])
->setdescription($_POST['description']);

$eventManager = new EventManager();


$saveisOK= $eventManager->save($event);

// header("location:Verifierevent.php");



var_dump($_POST);
?>






<!-- 
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
   

}
var_dump($_POST);

?> -->








