<?php
class collaborateur {
    private $id;
    private $nom;
    private $age;
    private $role;

    public function __construct ($id, $nom, $age, $role){
        $this->id = $id;
        $this->nom = $nom;
        $this->age = $age;
        $this->role = $role;
    }
    public function getId() {
      return $this->id;
    }
    public function setId($id) {
      $this->id = $id;
    }
    public function getNom() {
      return $this->nom;
    }
    public function setNom($nom) {
      $this->nom = $nom;
    }
    public function getAge() {
      return $this->age;
    }
    public function setAge($age) {
      $this->age = $age;
    }
    public function getRole() {
      return $this->role;
    }

    public function setRole($role) {
      $this->role = $role;
    }


}
?>



