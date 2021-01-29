<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Code Secret</title>
</head>
<body>
    
    <h1>Autorisation si dessous !</h1>

    <p>
        <?php 
            $secret = "kangourou";

            if (isset($_POST["secret"]) AND $_POST["secret"] === $secret) {
                echo '<p>Bonjour ' . $_POST["nom"] . ' ' . $_POST["prenom"] . '!</p><br>' ;
                echo '<p>Le code secret est <strong>918273645</strong> !</p>';
            } else {
                echo '<p>Bonjour ' . $_POST["nom"] . ' ' . $_POST["prenom"] . '!</p><br>' ;
                echo '<p>Vous ne pouvez pas accéder au code secret sans le bon mot de passe !</p>';
            }
            
        ?>
    </p>

</body>
</html>