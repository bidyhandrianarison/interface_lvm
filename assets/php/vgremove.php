    <title>Supprimer un Volume Group (VG)</title>
    <link rel="stylesheet" href="../../style.css">
  <body>
  <div>
   <h1>Supprimer un Volume Group (VG)</h1>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $vgname = $_POST["vgname"];
        
        // Commande pour supprimer le Volume Group
        $command = "sudo vgremove -y $vgname 2>&1";
        $output = shell_exec($command);
        echo "<pre>$output</pre>";
    }
    ?>
   </div>
    <a href="../../index.php">Retour à l'accueil</a>
  </body>
