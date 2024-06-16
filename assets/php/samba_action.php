<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ajouter un Partage Samba</title>
    <link rel="stylesheet" href="../../style.css">
</head>
<body>
   <div>
   <h1>Ajouter un Partage Samba</h1>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $sharename = $_POST["sharename"];
        $sharepath = $_POST["sharepath"];
        $comment = $_POST["comment"];
        $writable = isset($_POST["writable"]) ? "yes" : "no";
        $smbconf = "
[$sharename]
    path = $sharepath
    comment = $comment
    browsable = yes
    writable = $writable
    guest ok = yes
";

        // Utiliser sudo et tee pour écrire dans smb.conf
        $command = "echo " . escapeshellarg($smbconf) . " | sudo tee -a /etc/samba/smb.conf";
        shell_exec($command);
        shell_exec("sudo systemctl restart smbd");
        echo "Partage SAMBA créé avec succès.";
    }
    ?>
   </div>
    <a href="../../index.php">Retour à l'accueil</a>
</body>
</html>
