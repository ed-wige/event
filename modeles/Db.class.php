<?php
class Db
{
   private $base;
   function __construct(){
    $this->base=new PDO("mysql:host=localhost;dbname=bd_ev","root","");
   }
   function getBase(){
   return $this->base;
   }
}
?>
