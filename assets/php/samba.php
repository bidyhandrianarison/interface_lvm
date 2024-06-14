<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Gestion de SAMBA</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Gestion de SAMBA</h1>
    <form action="samba_action.php" method="post">
        <label for="sharename">Nom du partage :</label>
        <input type="text" id="sharename" name="sharename" required><br><br>
        <label for="sharepath">Chemin du partage :</label>
        <input type="text" id="sharepath" name="sharepath" required><br><br>
        <label for="comment">Commentaire :</label>
        <input type="text" id="comment" name="comment"><br><br>
        <label for="writable">Écriture :</label>
        <input type="checkbox" id="writable" name="writable"><br><br>
        <input type="submit" value="Créer Partage">
    </form>
    <div><a href="index.html">Retour à l'accueil</a></div>
</body>
</html>