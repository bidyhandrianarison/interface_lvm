<?php
// Récupérer les données du formulaire
$vgname = $_POST['vgname'];
$lvname = $_POST['lvresize'];
$lvresize_amount = $_POST['lvresize_amount'];

// Exécuter la commande LVM pour agrandir le LV
<<<<<<< HEAD
$output = shell_exec("lvextend -L+$lvresize_amount /dev/$vgname/$lvname && sudo resize2fs /dev/$vgname/$lvname");
=======
$output = shell_exec("lvextend -L+$lvresize_amount /dev/$vgname/$lvname");
>>>>>>> 98124f3e6b99a8b33e1b840f6618822c34a701e5

// Afficher le résultat de l'exécution
echo "<pre>$output</pre>";
?>