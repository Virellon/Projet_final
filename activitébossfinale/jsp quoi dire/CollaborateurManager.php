<?php
class CollaborateurManager {
    private = $PDO;
    public function _construct($PDO)
    $this->pdo = $pdo;
}

public function GetAll() {
    return $this->pdo->query"select , *FROM CollaborateurManager"->fetchAll();

}
public function add(Collaborateur $collab) {

$sql = "SELECT * FROM collaborateurs";
$stmt = $pdo->query($sql);
$resultats = $stmt->fetchAll();
$stmt->execute([
$collab-> GetNom();
$collab-> GetAge();
$collab-> GetRole();

]);
}

public function delete ($id) {
$stmt = $this->pdo->prepare("DELETE FROM collaborateurs WHERE id=?");
        $stmt->execute([$id]);
    }

    public function search($motCle){
$stmt = $this->pdo->prepare("SELECT *FROM collaborateurs ,WHERE nom like");
$stmt->execute([$motCle]);

}



?>