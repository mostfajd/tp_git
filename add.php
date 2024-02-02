<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page d'accueil</title>
</head>
<body>

    <header>
        <h1>Bienvenue sur notre site</h1>
    </header>

    <main>
        <p>Voici la date et l'heure actuelles :</p>
        <?php
            // Utilisation de la fonction date() pour afficher la date et l'heure actuelles
            echo "<p>".date('d-m-Y H:i:s')."</p>";
        ?>
    </main>

    <footer>
        <p>© 2024 Nom de votre entreprise</p>
    </footer>

</body>
</html>
