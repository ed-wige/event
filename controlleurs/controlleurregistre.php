<?php
$eventManager=new EventManager(); 
$nom=" ";
$date_de_debut=" ";
$date_de_fin=" ";
$organisateur=" ";
$description=" ";

if (isset($_POST)) {
    $eventManager->enregistrer(
        $_POST['nom'],
        $_POST['prenom'],
        $_POST['date'],
        $_POST['residence'],
        $_POST['genre'],
        $_POST['profession'],
        $_POST['telephone'],


$event=new Event($_POST);
if (isset($_POST)) {
if(isset($_POST["nom"]) AND isset($_POST["date_de_debut"]) AND isset($_POST["date_de_fin"]) AND isset($_POST["organisateur"]) AND isset($_POST["description"])){
    
    header("location:index.php?page=ControlleurListe");
