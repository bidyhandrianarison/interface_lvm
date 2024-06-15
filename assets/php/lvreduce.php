<?php
// Récupérer les données du formulaire
$vgname = $_POST['vgname'];
$lvname = $_POST['lvreduce'];
$lvreduce_amount = $_POST['lvreduce_amount'];

// Exécuter la commande LVM pour réduire le LV
<<<<<<< HEAD
$output = shell_exec("sudo umount /mnt/$lvname && sudo fsck -f /dev/$vgname/$lvname && sudo resize2fs /dev/$vgname/$lvname $lvreduce_amount && lvreduce -L $lvreduce_amount /dev/$vgname/$lvname");
=======
$output = shell_exec("lvreduce -L $lvreduce_amount /dev/$vgname/$lvname");
>>>>>>> 98124f3e6b99a8b33e1b840f6618822c34a701e5

// Afficher le résultat de l'exécution
echo "<pre>$output</pre>";
?>
