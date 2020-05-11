<?php
require_once '../vues/ins.php';
require_once '../modeles/AdminManager.php';
require_once '../modeles/Admin.php';

use modele\Admin;
use modele\AdminManager;

$admin = new Admin();
$admin->setNom($_POST['nom'])
->setPrenom($_POST['prenom'])
->setEmail($_POST['email'])
->setUsername($_POST['username'])
->setPass($_POST['pass']);

$adminManager = new AdminManager();


$saveisOK= $adminManager->save($admin);

// header("location:VerifierAdmin.php");



var_dump($_POST);
?>





