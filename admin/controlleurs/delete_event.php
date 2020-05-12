<?php

require_once '../modeles/EventManager.php';
require_once '../modeles/Event.php';

use modele\Event;
use modele\EventManager;

$eventManager = new EventManager();

$event= $eventManager->read($_GET['id']);


$deleteisOK= $eventManager->delete($event);

if($deleteisOK){
    header("location:../../admin/vues/amindashboard/examples/tables.php");
}else{
    $message="le event n'a pas été supprimé";
}




?>

<center> <h1><?= $message ?></h1>  </center>
