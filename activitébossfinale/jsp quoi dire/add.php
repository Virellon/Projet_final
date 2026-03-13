<?php
if (isset($_POST['nom'], $_POST['age'], $_POST['role'])) {

    $nom = $_POST['nom'];
    $age = $_POST['age'];
    $role = $_POST['role'];

    if ($nom == '' || $age == '' || $role == '') {
        echo "<p class='error'>Les champs ne sont pas remplis</p>";
    } elseif ($age < 18) {
        echo "<p class='error'>Tu es mineur</p>";
    } else {
        echo "Membre ajouté";
    }

}
?>

<form method="POST">
    <input type="text" name="nom" placeholder="Nom"><br><br>

    <input type="number" name="age" placeholder="Age"><br><br>

    <select name="role">
        <option value="">Choisir un rôle</option>
        <option value="Employé">Employé</option>
        <option value="Manager">Manager</option>
        <option value="Directeur">Directeur</option>
    </select><br><br>

    <button type="submit">Ajouter</button>
</form>