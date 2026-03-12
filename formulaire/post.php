<?php

$error = [];

function validateForm(){

    global $error;

    switch (true) {
        case empty($_POST["name"]) ||
            empty($_POST["age"]) ||
            empty($_POST["role"]);

            $error[] = "Tous les champs sont obligatoires";

            break;
    }
    return empty($error);
}

$formIsValid = $_SERVER["REQUEST_METHOD"] === "POST" && validateForm();

if(isset($_POST["name"])){
  if ($formIsValid){
    $name = htmlspecialchars($_POST["name"]);
    $age = htmlspecialchars($_POST["age"]);
    $role = htmlspecialchars($_POST["role"]);
      if ($age < 18){
        echo "<span style='color:red;text-align:center;'> Sorry :( $name, tu dois être majeur pour pour rejoindre Tyrolium.</span>";
      } elseif ($_POST["role"] == "Directeur") {
        echo "Félicitations $name ⭐!, votre profile de $role a été enregistré.";
      } else {
      echo "Félicitations $name !, votre profile de $role a été enregistré.";
    }
  } else {
    foreach($error as $err){
      echo $err;
    }
  }
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nexus Dynamic</title>
</head>
<body>
    <header>
        <h1>Nexus Dynamic</h1>
    </header>

    <main>
        <section id="home">
            <h2>Ajouter un membre</h2>
            <form action="post.php" method="POST">
              <input type="text" name="name" placeholder="Candidate's name">
              <input type="number" name="age" placeholder="Candidate's age">
              <select name="role">
                <option>Developer</option>
                <option>Designer</option>
                <option>Manager</option>
                <option>Directeur</option>
              </select>
              <button  type="submit">send</button>
            </form>
        </section>
    </main>

    <footer>
        <p>&copy; 2026 Your Company Name. All rights reserved.</p>
    </footer>
</body>
</html>





