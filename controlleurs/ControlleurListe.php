<?php
require_once ("../modeles/EventManager.class.php");
    $eventManager=new EventManager();
    $events=$eventManager->getAll();
    //  function getAll(){
    //     $events=$this->bd->query("SELECT * FROM evenements");
    //     return $events->fetchAll();
    // function val($ct){
    //     if($ct!=""){
    //         echo $ct;
    //     }
    // }
    //  }
     require_once ("../vues/liste.php");

?>