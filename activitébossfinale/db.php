<?php
$dsn = "mysql:host=localhost;port=3306;dbname=collaborateurs;charset=utf8";
$user = "root";
$password = "";
 
try {
    // On instancie l'objet PDO (c'est notre clé d'accès)
    $db = new PDO($dsn, $user, $password);
    // Configuration des options (pour voir les erreurs SQL)
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connecté !";
} catch (PDOException $e) {
    die("Erreur de connexion : " . $e->getMessage());
}
?>
