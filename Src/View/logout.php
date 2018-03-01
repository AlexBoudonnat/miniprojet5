
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Page de <?php echo $_SESSION['user']?></title>
</head>
<body>

<h1>Bonjour <?php echo $_SESSION['user']?>, comment ça va aujourd'hui ?</h1>

<form action="">
    <input type="submit" name="logout" id="logout" value="logout">
</form>

</body>
</html>
