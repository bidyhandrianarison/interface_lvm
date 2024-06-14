<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Gestion de LVM</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Gestion de LVM</h1>

    <h2>Créer un Physical Volume (PV)</h2>
    <form action="pvcreate.php" method="post">
        <label for="pvname">Nom du PV (ex: /dev/sdX) :</label>
        <input type="text" id="pvname" name="pvname" required><br><br>
        <input type="submit" value="Créer PV">
    </form>

    <h2>Créer un Volume Group (VG)</h2>
    <form action="vgcreate.php" method="post">
        <label for="vgname">Nom du VG :</label>
        <input type="text" id="vgname" name="vgname" required><br><br>
        <label for="pvs">Liste des PVs (séparés par des espaces) :</label>
        <input type="text" id="pvs" name="pvs" required><br><br>
        <input type="submit" value="Créer VG">
    </form>

    <h2>Créer un Logical Volume (LV)</h2>
    <form action="lvm_action.php" method="post">
        <label for="vgname">Nom du VG :</label>
        <input type="text" id="vgname" name="vgname" required><br><br>
        <label for="lvname">Nom du LV :</label>
        <input type="text" id="lvname" name="lvname" required><br><br>
        <label for="lvsize">Taille du LV (ex: 10G) :</label>
        <input type="text" id="lvsize" name="lvsize" required><br><br>
        <input type="submit" value="Créer LV">
    </form>

    <h2>Supprimer un Logical Volume (LV)</h2>
    <form action="lvm_delete.php" method="post">
        <label for="vgname">Nom du VG :</label>
        <input type="text" id="vgname" name="vgname" required><br><br>
        <label for="lvdelname">Nom du LV à supprimer :</label>
        <input type="text" id="lvdelname" name="lvdelname" required><br><br>
        <input type="submit" value="Supprimer LV">
    </form>

    <h2>Agrandir un Logical Volume (LV)</h2>
<form action="lvresize.php" method="post">
    <label for="vgname">Nom du VG :</label>
    <input type="text" id="vgname" name="vgname" required><br><br>
    <label for="lvresize">Nom du LV à agrandir :</label>
    <input type="text" id="lvresize" name="lvresize" required><br><br>
    <label for="lvresize_amount">Quantité à agrandir (ex: +1G) :</label>
    <input type="text" id="lvresize_amount" name="lvresize_amount" required><br><br>
    <input type="submit" value="Agrandir LV">
</form>

<h2>Réduire un Logical Volume (LV)</h2>
<form action="lvreduce.php" method="post">
    <label for="vgname">Nom du VG :</label>
    <input type="text" id="vgname" name="vgname" required><br><br>
    <label for="lvreduce">Nom du LV à réduire :</label>
    <input type="text" id="lvreduce" name="lvreduce" required><br><br>
    <label for="lvreduce_amount">Quantité à réduire (ex: -1G) :</label>
    <input type="text" id="lvreduce_amount" name="lvreduce_amount" required><br><br>
    <input type="submit" value="Réduire LV">
</form>

<h2>Agrandir un Volume Group (VG)</h2>
<form action="vgextend.php" method="post">
    <label for="vgname">Nom du VG à agrandir :</label>
    <input type="text" id="vgname" name="vgname" required><br><br>
    <label for="pvs">Liste des nouveaux PVs à ajouter (séparés par des espaces) :</label>
    <input type="text" id="pvs" name="pvs" required><br><br>
    <input type="submit" value="Agrandir VG">
</form>


    <div><a href="index.html">Retour à l'accueil</a></div>
</body>
</html>