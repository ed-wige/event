<?php

namespace modele;

use PDO;
use modele\Admin;

class AdminManager{

    private $pdo;
    private $pdoStatement;
    public function __construct(){
        $this->pdo= new PDO('mysql:host=localhost; dbname=bd_event', 'root', '');
    }

    

    private function create(Admin &$admin){
        $this->pdoStatement= $this->pdo->prepare('INSERT INTO administration VALUES (NULL, :nom, :prenom, :email, :username, 
        :pass)');

        
        $this->pdoStatement->bindValue(':nom', $admin->getNom(), PDO::PARAM_STR);
        $this->pdoStatement->bindValue(':prenom', $admin->getPrenom(), PDO::PARAM_STR);
        $this->pdoStatement->bindValue(':username', $admin->getUsername(), PDO::PARAM_STR);
        $this->pdoStatement->bindValue(':email', $admin->getEmail(), PDO::PARAM_STR);
        $this->pdoStatement->bindValue(':pass',$admin->getPass(), PDO::PARAM_STR);
        


        $executionisOK = $this->pdoStatement->execute();

        if($executionisOK){
            return false;
        }else{

            $id= $this->pdo->LastInsertId();
            $admin= $this->read($id);

            return true;
        }

    }

    public function read($id){
        $this->pdoStatement= $this->pdo->prepare('SELECT * FROM administration WHERE id= :id');
 
        $this->pdoStatement->bindValue(':id', $id, PDO::PARAM_INT);
 
       $executionisOK= $this->pdoStatement->execute();
       if($executionisOK){
           $admin= $this->pdoStatement->fetchObject('\modele\Admin');
           if($admin === false){
               return null;
           }else{
               return $admin;
           }
       }else{
           return false;
       }
 
     }



    public function save(Admin $admin){

        if(is_null($admin->getId())){
            return $this->create($admin);
        }else{
            
        }
    }


}
?>