<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Connection</title>
</head>
<body>

<div style="text-align: center">
    <h1>CONNECTION :</h1>

    <form action="/" method="post">
        <div style=" margin: 10px 10px 10px 10px"><input type="text" name="user" id="user" placeholder="Identifiant"></div>
        <div style=" margin: 10px 10px 10px 10px"><input type="password" name="password" id="password" placeholder="Mot de passe"></div>
        <div style=" margin: 10px 10px 10px 10px"><input type="checkbox" name="remember" id="remember" checked><label for="remember">Se souvenir de moi</label></div>
        <div style=" margin: 10px 10px 10px 10px"><input type="submit" value="Valider"></div>
    </form>
</div>
<?php if (isset($_POST[ 'user']) || !empty($_POST['user']) || isset($_POST[ 'password']) || !empty($_POST['password'])) { ?><div style="text-align: center; color: red">Identifiant et/ou Mot de passe incorrect(s)</div><?php } ?>

<a href="/">Réinitialiser</a>

</body>
</html>