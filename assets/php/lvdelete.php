<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $vgname = escapeshellarg($_POST["vgname"]);
    $lvname = escapeshellarg($_POST["lvdelname"]);
    
    $command = "sudo lvremove -f /dev/$vgname/$lvname";
    $output = shell_exec($command);
    echo "<pre>$output</pre>";
}
?>
<a href="lvm.php">Retour à la gestion de LVM</a>