    <title>Supprimer un Volume Group (VG)</title>
    <link rel="stylesheet" href="../../style.css">
    <h1>Supprimer un Volume Group (VG)</h1>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $vgname = escapeshellarg($_POST["vgname"]);
        
        // Commande pour supprimer le Volume Group
        $command = "sudo vgremove $vgname 2>&1";
        $output = shell_exec($command);
        echo "<pre>$output</pre>";
    }
    ?>
    <a href="../../index.php">Retour à l'accueil</a>
</body>
</html>
