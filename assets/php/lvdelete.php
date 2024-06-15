<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $vgname = escapeshellarg($_POST["vgname"]);
    $lvname = escapeshellarg($_POST["lvdelname"]);
    
<<<<<<< HEAD
    $command = "sudo umount /mnt/$lvname && sudo lvremove -f /dev/$vgname/$lvname";
=======
    $command = "sudo lvremove -f /dev/$vgname/$lvname";
>>>>>>> 98124f3e6b99a8b33e1b840f6618822c34a701e5
    $output = shell_exec($command);
    echo "<pre>$output</pre>";
}
?>
<<<<<<< HEAD
<a href="../../index.html">Retour à l'accueil</a>
=======
<a href="lvm.php">Retour à la gestion de LVM</a>
>>>>>>> 98124f3e6b99a8b33e1b840f6618822c34a701e5
