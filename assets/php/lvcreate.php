<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $vgname = escapeshellarg($_POST["vgname"]);
    $lvname = escapeshellarg($_POST["lvname"]);
    $lvsize = escapeshellarg($_POST["lvsize"]);
    
    $command = "sudo lvcreate -L $lvsize -n $lvname $vgname && sudo mkfs.ext4 /dev/$vgname/$lvname && sudo mkdir /mnt/$lvname && sudo mount /dev/$vgname/$lvname /mnt/$lvname";
    $output = shell_exec($command);
    echo "<pre>$output</pre>";
}
?>
<a href="lvm.php">Retour à la gestion de LVM</a>