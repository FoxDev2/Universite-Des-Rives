<!doctype html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="description" content="Découvrez l’Université des Rives, ses formations et son campus ouvert sur le monde." />
  <title>
    <?php 
    if ($_SERVER["PHP_SELF"] === "/index.php") {
      echo "Université des Rives";
    }
    else if ($_SERVER["PHP_SELF"] === "/connexion.php") {
      echo "Université des Rives | Connexion étudiant";
    }
    else if ($_SERVER["PHP_SELF"] === "/inscription.php") {
      echo "Université des Rives | Inscription";
    }
    ?>
  </title>
  <link rel="stylesheet" href="src/output.css" />
</head>

<body class="min-h-screen bg-stone-50 font-sans text-slate-900">