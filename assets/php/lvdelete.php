<link rel="stylesheet" href="../../style.css">
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $vgname = escapeshellarg($_POST["vgname"]);
    $lvname = escapeshellarg($_POST["lvdelname"]);
    $command1 = "sudo umount /mnt/$lvname";
    $output1 = shell_exec($command1);
    $command = "sudo lvremove -f /dev/$vgname/$lvname";
    $output = shell_exec($command);
    echo "<pre>$output1 $output </pre>";
}
?>
<a href="../../index.php">Retour à l'accueil</a>
