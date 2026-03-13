<?php
class Collaborateur {
  private $id;
  private $nom;
  private $age;
  private $role;


  public function __construct($id, $nom, $age, $role){
    $this->id = $id;
    $this->nom = $nom;
    $this->age = $age;
    $this->role = $role;
  }

}
?>
