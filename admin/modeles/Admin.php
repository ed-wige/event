<?php

namespace modele;

class Admin{

    private $id;
    private $nom;
    private $prenom;
    private $email;
    private $username;
    private $pass;
   







    // getter et setter pour le nom d'utilisateur 
    public function getUsername(){
        return $this->username;
    }

    public function setUsername($username){
        $this->username= $username;
        return $this;
    }


    // getter et setter pour le mot de passe
    public function getPass(){
        return $this->pass;
       
    }

    public function setPass($pass){
        $this->pass= md5($pass);
        return $this;
    }

     // getter et setter pour le mot de passe
     public function getNom(){
        return $this->nom;
       
    }

    public function setNom($nom){
        $this->nom= $nom;
        return $this;
    }

     // getter et setter pour le mot de passe
     public function getPrenom(){
        return $this->prenom;
       
    }

    public function setPrenom($prenom){
        $this->prenom= $prenom;
        return $this;
    }

     // getter et setter pour le mot de passe
     public function getEmail(){
        return $this->email;
       
    }

    public function setEmail($email){
        $this->email= $email;
        return $this;
    }


    
    public function getId(){
        return $this->id;
    }

}



?>