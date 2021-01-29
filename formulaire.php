<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accès code secret</title>
</head>
<body>

    <h1>Formulaire</h1>

    <p>Afin d'accéder au serveur central veuillez remplir ce formulaire avec le bon mot de passe .</p>

    <form method="POST" action="secret.php">
        <p><label>Nom :
            <input type="text" name="nom" />
        </label></p>
        <p><label>Prénom :
            <input type="text" name="prenom" />
        </label></p>
        <p><label>Mot de passe :
            <input type="password" name="secret" />
        </label></p>
        <input type="submit" value="Soumettre" />
    </form>

    <p>Attention, cette page est exclusivement réservée aux personel de LabioMedoc.<br>
    Si vous ne travaillez pas à LabioMedoc, inutile d'insister vous ne trouverez jamais le mot de passe !</p>

    
</body>
</html>