<?php
class Event{
  private $id;
  private $nom;
  private $date_de_debut;
  private $date_de_fin;
  private $organisateur;
  private $description;

  public function hydrate(array $data){
    foreach ($data as $key => $value){
      $method='set'.ucfirst($key);
      if(method_exists($this,$method)){
        $this->$method($value);
      }
    }
  }

   //les setteurs
   public function setId($Id){
    if (is_string($id)){
      $this->id=$id;
    }
  }

  public function setNom($nom){
    if (is_string($nom)){
      $this->nom=$nom;
    }
  }

  public function setDate_de_debut($date_de_debut){
    if (is_string($date_de_debut)){
      $this->date_de_debut=$date_de_debut;
    }
  }

  public function setDate_de_fin($date_de_fin){
    if (is_string($date_de_fin)){
      $this->date_de_fin=$date_de_fin;
    }
  }

  public function setOrganisateur($organisateur){
    if (is_string($organisateur)){
      $this->organisateur=$organisateur;
    }
  }

  public function setdescription($description){
    if (is_string($description)){
      $this->description=$description;
    }
  }

  //les getters
   public function id(){
    return $this->id;
   }

   //les getters
   public function nom(){
    return $this->nom;
   }
   //les getters
   public function date_de_debut(){
    return $this->date_de_debut;
   }

   //les getters
   public function date_de_fin(){
    return $this->date_de_fin;
   }

   //les getters
   public function organisateur(){
    return $this->organisateur;
   }

   public function description(){
    return $this->description;
   }
   public function __construct(array $data){
    $this->hydrate($data);
 }
}

  
  