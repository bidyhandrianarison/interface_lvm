<link rel="stylesheet" href="../../style.css">
<body>
<div>
<?php
// Récupérer les données du formulaire
$vgname = $_POST['vgname'];
$lvname = $_POST['lvresize'];
$lvresize_amount = $_POST['lvresize_amount'];

// Exécuter la commande LVM pour agrandir le LV
$output = shell_exec("lvextend -L+$lvresize_amount /dev/$vgname/$lvname && sudo resize2fs /dev/$vgname/$lvname");

// Afficher le résultat de l'exécution
echo "<pre>$output</pre>";
?>
</div>
<a href="../../index.php   ">Retour à la gestion de LVM</a>
</body>