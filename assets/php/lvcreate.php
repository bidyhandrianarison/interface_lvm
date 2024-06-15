<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $vgname = escapeshellarg($_POST["vgname"]);
    $lvname = escapeshellarg($_POST["lvname"]);
    $lvsize = escapeshellarg($_POST["lvsize"]);
    
<<<<<<< HEAD
    $command = "sudo lvcreate -y -L $lvsize -n $lvname $vgname && sudo mkfs.ext4 /dev/$vgname/$lvname && sudo mkdir -p /mnt/$lvname && sudo mount /dev/$vgname/$lvname /mnt/$lvname";
    $output = shell_exec($command);
    echo "<pre>$output</pre>";
    /*$command2 = "echo '/dev/$vgname/$lvname /mnt/$lvname ext4 defaults 0 2' | sudo tee -a /etc/fstab"*/
}
?>
<a href="../../index.php">Retour à la gestion de LVM</a>
=======
    $command = "sudo lvcreate -L $lvsize -n $lvname $vgname && sudo mkfs.ext4 /dev/$vgname/$lvname && sudo mkdir /mnt/$lvname && sudo mount /dev/$vgname/$lvname /mnt/$lvname";
    $output = shell_exec($command);
    echo "<pre>$output</pre>";
}
?>
<a href="lvm.php">Retour à la gestion de LVM</a>
>>>>>>> 98124f3e6b99a8b33e1b840f6618822c34a701e5
