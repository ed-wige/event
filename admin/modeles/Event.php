<?php

namespace modele;

class Event{

    private $id;
    private $nom;
    private $date_de_debut;
    private $date_de_fin;
    private $organisateur;
    private $description;
   







    // getter et setter pour le nom d'utilisateur 
    public function getorganisateur(){
        return $this->organisateur;
    }

    public function setorganisateur($organisateur){
        $this->organisateur= $organisateur;
        return $this;
    }


    // getter et setter pour le mot de descriptione
    public function getdescription(){
        return $this->description;
       
    }

    public function setdescription($description){
        $this->description= $description;
        return $this;
    }

     // getter et setter pour le mot de descriptione
     public function getNom(){
        return $this->nom;
       
    }

    public function setNom($nom){
        $this->nom= $nom;
        return $this;
    }

     // getter et setter pour le mot de descriptione
     public function getdate_de_debut(){
        return $this->date_de_debut;
       
    }

    public function setdate_de_debut($date_de_debut){
        $this->date_de_debut= $date_de_debut;
        return $this;
    }

     // getter et setter pour le mot de descriptione
     public function getdate_de_fin(){
        return $this->date_de_fin;
       
    }

    public function setdate_de_fin($date_de_fin){
        $this->date_de_fin= $date_de_fin;
        return $this;
    }


    
    public function getId(){
        return $this->id;
    }

}



?>