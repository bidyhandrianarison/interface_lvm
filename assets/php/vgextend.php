<link rel="stylesheet" href="../../style.css">
<?php
// Récupérer les données du formulaire
$vgname = $_POST['vgname'];
$pvs = $_POST['pvs'];

// Exécuter la commande LVM pour agrandir le VG en ajoutant de nouveaux PVs
$output = shell_exec("vgextend $vgname $pvs");

// Afficher le résultat de l'exécution
echo "<pre>$output</pre>";
?>
