<?php

namespace modele;

use PDO;
use modele\Event;

class EventManager{

    private $pdo;
    private $pdoStatement;
    public function __construct(){
        $this->pdo= new PDO('mysql:host=localhost; dbname=bd_event', 'root', '');
    }

    

    private function create(Event &$event){
        $this->pdoStatement= $this->pdo->prepare('INSERT INTO evenements VALUES (NULL, :nom, :date_de_debut, :date_de_fin, :organisateur, 
        :description)');

        
        $this->pdoStatement->bindValue(':nom', $event->getNom(), PDO::PARAM_STR);
        $this->pdoStatement->bindValue(':date_de_debut', $event->getdate_de_debut(), PDO::PARAM_STR);
        $this->pdoStatement->bindValue(':date_de_fin', $event->getdate_de_fin(), PDO::PARAM_STR);
        $this->pdoStatement->bindValue(':organisateur', $event->getorganisateur(), PDO::PARAM_STR);
        $this->pdoStatement->bindValue(':description',$event->getdescription(), PDO::PARAM_STR);
        


        $executionisOK = $this->pdoStatement->execute();

        if($executionisOK){
            return false;
        }else{

            $id= $this->pdo->LastInsertId();
            $event= $this->read($id);

            return true;
        }

    }

    public function read($id){
        $this->pdoStatement= $this->pdo->prepare('SELECT * FROM evenements WHERE id= :id');
 
        $this->pdoStatement->bindValue(':id', $id, PDO::PARAM_INT);
 
       $executionisOK= $this->pdoStatement->execute();
       if($executionisOK){
           $event= $this->pdoStatement->fetchObject('\modele\event');
           if($event === false){
               return null;
           }else{
               return $event;
           }
       }else{
           return false;
       }
 
     }



    public function save(Event $event){

        if(is_null($event->getId())){
            return $this->create($event);
        }else{
            
        }
    }


}
?>