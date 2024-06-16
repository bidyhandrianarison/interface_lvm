    <title>Réduire un Volume Group (VG)</title>
    <link rel="stylesheet" href="../../style.css">
  <body>
  <div>
   <h1>Réduire un Volume Group (VG)</h1>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $vgname = $_POST["vgname"];
        $pvreduce = $_POST["pvreduce"];
        
        // Commande pour réduire le Volume Group
        $command = "sudo vgreduce $vgname $pvreduce 2>&1";
        $output = shell_exec($command);
        echo "<div><pre>$output</pre></div>";
    }
    ?>
   </div>
    <a href="../../index.php">Retour à l'accueil</a>

  </body>