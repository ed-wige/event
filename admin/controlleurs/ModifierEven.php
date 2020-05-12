<?php
require_once '../modeles/EventManager.php';
require_once '../modeles/Event.php';

use modele\Event;
use modele\EventManager;

$eventManager = new EventManager();


$event= $eventManager->read($_POST['id']);
$event->setNom($_POST['nom']);
$event->setdate_de_debut($_POST['date_de_debut']);
$event->setdate_de_fin($_POST['date_de_fin']);
$event->setorganisateur($_POST['organisateur']);
$event->setdescription($_POST['description']);



$saveisOK= $eventManager->save($event);

if($saveisOK){
    header("location:../../admin/vues/amindashboard/examples/tables.php");
}else{
    $message="Erreur!!! L'evenement n'a pas été modifié";
}

// ggg

// $patientManager = new PatientManager();

// $patient= $patientManager->read($_POST['id']);
// $patient->setNom($_POST['nom']);
// $patient->setPrenom($_POST['prenom']);
// $patient->setGenre($_POST['genre']);
// $patient->setAge($_POST['age']);
// $patient->setGroupe_sanguin($_POST['groupe_sanguin']);
// $patient->setAntecedents_medicaux($_POST['antecedents_medicaux']);
// $patient->setMaladie_actuelle($_POST['maladie_actuelle']);
// $patient->setTelephone($_POST['telephone']);
// $patient->setMail($_POST['mail']);
// $patient->setNationalite($_POST['nationalite']);

// $saveisOK= $patientManager->save($patient);

// if($saveisOK){
//     $message="Le patient a été modifié";
// }else{
//     $message="Erreur!!! Le patient n'a pas été modifié";
// }

// include_once("header.php");

?>


<center> <h1><?= $message ?></h1>  </center> <br> <br>



