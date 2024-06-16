<link rel="stylesheet" href="../../style.css">
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $vgname = escapeshellarg($_POST["vgname"]);
    $pvs = escapeshellarg($_POST["pvs"]);
    
    $command = "sudo vgcreate $vgname $pvs";
    $output = shell_exec($command);
    echo "<pre>$output</pre>";
}
?>
<div><a href="../../index.php">Retour à la gestion de LVM</a></div>
