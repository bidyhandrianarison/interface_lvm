<link rel="stylesheet" href="../../style.css">
<body>
    <div>
    <?php
// Récupérer les données du formulaire
$vgname = $_POST['vgname'];
$lvname = $_POST['lvreduce'];
$lvreduce_amount = $_POST['lvreduce_amount'];

// Exécuter la commande LVM pour réduire le LV
$output = shell_exec("sudo umount /mnt/$lvname && sudo fsck -f /dev/$vgname/$lvname && sudo resize2fs /dev/$vgname/$lvname $lvreduce_amount && lvreduce -L $lvreduce_amount /dev/$vgname/$lvname");

// Afficher le résultat de l'exécution
echo "<pre>$output</pre>";
?>
    </div>
    <a href="../../index.php   ">Retour à la gestion de LVM</a>
</body>
