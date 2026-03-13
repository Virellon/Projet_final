<?php
class collaborateur {
    private $id
    private $nom
    private $age
    private $role

    public function _construct ($id, $nom, $age, $role){
        $this->id = $id;
        $this->nom = $nom;
        $this->age = $age;
        $this->role = $role;
    }
        public function GetId() {return $this->id;}
        public function GetNom() {return $this->nom;}
        public function GetAge() {return $this->age;}
        public function GetRole() {return $this->role;}

    public function getId(); {
    return $this->$id
    }
    public function GetNom(); {
    return $this->$nom
    }
    public function GetAge(); {
    return $this->$age
    }
    public function GetRole(); {
    return $this->$role
    }

}
?>



