<?php
class CollaborateurManager {
    private $db; // Instance de PDO
 
    public function __construct(PDO $db) {
        $this->db = $db;
    }

  public function GetAll() {
      return $this->pdo->query->fetchAll();
  }
  public function add(Collaborateur $collab) {

  $sql = "SELECT * FROM collaborateurs";
  $stmt = $pdo->query($sql);
  $resultats = $stmt->fetchAll();
  $stmt->execute([
    $collab-> getNom(),
    $collab-> getAge(),
    $collab-> getRole()
  ]);
  }

public function delete ($id) {
$stmt = $this->pdo->prepare("DELETE FROM collaborateurs WHERE id=?");
        $stmt->execute([$id]);
    }

    public function search($motCle){
$stmt = $this->pdo->prepare("SELECT * FROM collaborateurs ,WHERE nom like");
$stmt->execute([$motCle]);

}

}



?>
