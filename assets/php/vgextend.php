<link rel="stylesheet" href="../../style.css">
<body>
    <div>
    <?php
// Récupérer les données du formulaire
$vgname = $_POST['vgname'];
$pvs = $_POST['pvs'];

// Exécuter la commande LVM pour agrandir le VG en ajoutant de nouveaux PVs
$output = shell_exec("sudo vgextend -y $vgname $pvs");

// Afficher le résultat de l'exécution
echo "<pre>$output</pre>";
?>
    </div>
    <div><a href="../../index.php">Retour à la gestion de LVM</a></div>
</body>