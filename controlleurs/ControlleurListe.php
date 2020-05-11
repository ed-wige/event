<?php
require_once ("../modeles/EventManager.class.php");
require_once ("../vues/liste.php");
    $eventManager=new EventManager();
     function getAll(){
        $events=$this->bd->query("SELECT * FROM evenements");
        return $events->fetchAll();
    function val($ct){
        if($ct!=""){
            echo $ct;
        }
    }
     }
?>