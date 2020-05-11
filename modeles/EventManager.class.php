<?php

require_once ("Event.class.php");
require_once ("Db.class.php");
class EventManager{
    private $base;
    function __construct(){
        $this->base=$GLOBALS["base"];
    }
    
    function enregistrer($eventregister){
        //print_r($motoregister);
       $inserer=$this->base->prepare("INSERT INTO evenements(nom, date_de_debut, date_de_fin, organisateur, description) VALUES(:nom,:date_de_debut,:date_de_fin,:organisateur,:description)");
       $inserer->execute(array(
           "nom"=>$eventregister->nom(),
           "date_de_debut"=>$eventregister->date_de_debut(),
           "date_de_fin"=>$eventregister->date_de_fin(),
           "organisateur"=>$eventregister->organisateur(),
           "description"=>$eventregister->description()
       ));
   }
   public function getAll(){
     $events=$this->bd->query("SELECT * FROM evenements");
     return $events->fetchAll();
 }

//    $don= $get->fetchAll();
//     foreach($don as $key=>$tom) {
//         $event=new Event($tom);
//         $eventliste[$key]=$moto;
//     }
//     return $eventliste;
   
   function misejour($eventjour){
    $modi=$this->base->prepare("UPDATE evenements SET nom=:nomM,date_de_debut=:date_de_debutM, date_de_fin=:date_de_finM,organisateur=:organisateurM, description=:descriptionM WHERE id=:id");
    $modi->execute(array(

        "nomM"=>$eventjour->getnom(),
        "date_de_debutM"=>$eventjour->getdate_de_fin(),
        "date_de_finM"=>$eventjour->getdate_de_fin(),
        "organisateurM"=>$eventjour->getorganisateur(),
        "descriptionM">$eventjour->getdescription()

        
    ));
}

function supprimer($eventdelete){
    $supr=$this->base->prepare("DELETE FROM evenements WHERE id=:id");
    $supr->execute(array(
        "id"=>$eventdelete
    ));
}
}