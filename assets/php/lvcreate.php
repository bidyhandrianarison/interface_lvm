<link rel="stylesheet" href="../../style.css">
<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $vgname = escapeshellarg($_POST["vgname"]);
    $lvname = escapeshellarg($_POST["lvname"]);
    $lvsize = escapeshellarg($_POST["lvsize"]);
    $fstabconf="/dev/$vgname/$lvname /mnt/$lvname ext4 defaults 0 2";
    $command = "sudo lvcreate -y -L $lvsize -n $lvname $vgname && sudo mkfs.ext4 /dev/$vgname/$lvname && sudo mkdir -p /mnt/$lvname && sudo mount -v /dev/$vgname/$lvname /mnt/$lvname";
    $output = shell_exec($command);
    $fstab = "echo " . escapeshellarg($fstabconf) . " | sudo tee -a /etc/fstab";
    shell_exec($fstab);
    echo "<pre>$output</pre>";
    /*$command2 = "echo '/dev/$vgname/$lvname /mnt/$lvname ext4 defaults 0 2' | sudo tee -a /etc/fstab"*/
}
?>
<a href="../../index.php">Retour à la gestion de LVM</a>
