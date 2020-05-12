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

     public function readAll()
     {
 
        $this->pdoStatement= $this->pdo->query('SELECT * FROM evenements ORDER BY nom');
 
          $events=[];
 
         while($event=$this->pdoStatement->fetchObject('\modele\event')){
 
              $events[]= $event;
         }
 
         return $events;
     }


     private function update(Event $event){

        $this->pdoStatement= $this->pdo->prepare('UPDATE evenements set nom=:nom, date_de_debut=:date_de_debut, date_de_fin=:date_de_fin, organisateur=:organisateur, 
         description=:description WHERE id=:id LIMIT 1');
         
 

        $this->pdoStatement->bindValue(':nom', $event->getNom(), PDO::PARAM_STR);
        $this->pdoStatement->bindValue(':date_de_debut', $event->getDate_de_debut(), PDO::PARAM_STR);
        $this->pdoStatement->bindValue(':date_de_fin', $event->getdate_de_fin(), PDO::PARAM_STR);
        $this->pdoStatement->bindValue(':organisateur', $event->getorganisateur(), PDO::PARAM_STR);
        $this->pdoStatement->bindValue(':description',$event->getdescription(), PDO::PARAM_STR);
        $this->pdoStatement->bindValue(':id', $event->getId(), PDO::PARAM_INT);
       
        return $this->pdoStatement->execute();


    }

    public function delete(Event $event){

        $this->pdoStatement= $this->pdo->prepare('DELETE FROM evenements WHERE id=:id LIMIT 1');

        $this->pdoStatement->bindValue(':id', $event->getId(), PDO::PARAM_INT);

        return $this->pdoStatement->execute();


    }



    public function save(Event $event){

        if(is_null($event->getId())){
            return $this->create($event);
        }else{
            return $this->update($event);
        }
    }


}
?>