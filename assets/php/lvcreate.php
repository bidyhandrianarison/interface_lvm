<link rel="stylesheet" href="../../style.css">
<body>
    <div>
    <?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $vgname = $_POST["vgname"];
    $lvname = $_POST["lvname"];
    $lvsize = $_POST["lvsize"];
    $fstabconf="/dev/$vgname/$lvname /mnt/$lvname ext4 defaults 0 2";
    $command = "sudo lvcreate -y -L $lvsize -n $lvname $vgname && sudo mkfs.ext4 /dev/$vgname/$lvname && sudo mkdir -p /mnt/$lvname";
    $output = shell_exec($command);
    shell_exec("sudo mount  /dev/$vgname/$lvname /mnt/$lvname");
    $fstab = "echo " . escapeshellarg($fstabconf) . " | sudo tee -a /etc/fstab";
    shell_exec($fstab);
    //shell_exec("sudo mount -a");
    echo "<div><pre>$output</pre><div>";
    /*$command2 = "echo '/dev/$vgname/$lvname /mnt/$lvname ext4 defaults 0 2' | sudo tee -a /etc/fstab"*/
}
?>
    </div>
    <a href="../../index.php">Retour à la gestion de LVM</a>
</body>
