<?php


require_once './activitébossfinale/collaborateur.php';
require_once './activitébossfinale/CollaborateurManager.php';
require_once './activitébossfinale/db.php';
$collaborateurs = [
    [
        "nom" => "Alice Martin",
        "role" => "Développeur",
        "email" => "alice@nexus.com"
    ],
    [
        "nom" => "John Martin",
        "role" => "Développeur",
        "email" => "alice@nexus.com"
    ]
];
$recherche = "";
if (!empty($_GET["search"])) {
    $recherche = trim($_GET["search"]);
    $collaborateurs = array_filter($collaborateurs, function ($collab) use ($recherche) {
        return stripos($collab['nom'], $recherche) !== false ||
            stripos($collab['role'], $recherche) !== false;

    });
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<title>Nexus Dynamic</title>
<style>
body{
font-family: Arial;
margin:40px;
}
table{
border-collapse: collapse;
width:60%;
}
th,td{
border:1px solid #ccc;
padding:10px;
text-align:left;
}
th{
background:#f2f2f2;
}
form{
margin-bottom:20px;
}
.pagination a{
margin:5px;
padding:8px 12px;
border:1px solid #ccc;
text-decoration:none;
}
.pagination a:hover{
background:#ddd;
}
</style>
 <nav>
    <ul>
      <li><a href="./formulaire_post/post.php">Post et Conditions</a></li>
  </ul>
</nav>
</head>
<body>

<h1>Nexus Dynamic - Collaborateurs</h1>
<form method="GET">
<input type="text"
    name="search"
    placeholder="Recherche par nom ou rôle"
    value="<?= htmlspecialchars($recherche) ?>">

<button type="submit">Rechercher</button>
</form>
<table>
<tr>
<th>Nom</th>
<th>Rôle</th>
<th>Email</th>
</tr>
<?php if (count($collaborateurs) > 0): ?>
<?php foreach ($collaborateurs as $collab): ?>
<tr>
<td><?= htmlspecialchars($collab['nom']) ?></td>
<td><?= htmlspecialchars($collab['role']) ?></td>
<td><?= htmlspecialchars($collab['email']) ?></td>
</tr>
<?php endforeach; ?>
<?php else: ?>
<tr>
<td colspan="3">Aucun résultat trouvé</td>
</tr>
<?php endif; ?>
</table>
</body>
</html>
