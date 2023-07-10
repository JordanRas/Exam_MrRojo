<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Authentification</title>
</head>
<body>
    <h3>Etes-vous vraiment l'admin?</h3>
    <p>(CODE D'AUTHENTIFICATION : 1234)</p>
    <form action="<?php echo(site_url('acceuil/authentification2'));?>" method="post">
    <p>Code d'authentification: <input type="text" name="code"></p>
    <p><input type="submit" value="Confirmer"></p>
    </form>
    <p><a href="<?php echo(site_url('acceuil/deconnexion'));?>">Annuler</a></p>
</body>
</html>