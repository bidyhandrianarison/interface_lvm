<?php
// Récupérer les données du formulaire
$vgname = $_POST['vgname'];
$lvname = $_POST['lvreduce'];
$lvreduce_amount = $_POST['lvreduce_amount'];

// Exécuter la commande LVM pour réduire le LV
$output = shell_exec("lvreduce -L $lvreduce_amount /dev/$vgname/$lvname");

// Afficher le résultat de l'exécution
echo "<pre>$output</pre>";
?>
