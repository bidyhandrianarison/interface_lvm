<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $vgname = escapeshellarg($_POST["vgname"]);
    $pvs = escapeshellarg($_POST["pvs"]);
    
    $command = "sudo vgcreate $vgname $pvs";
    $output = shell_exec($command);
    echo "<pre>$output</pre>";
}
?>
<<<<<<< HEAD
<div><a href="../../index.php">Retour à la gestion de LVM</a></div>
=======
<div><a href="lvm.php">Retour à la gestion de LVM</a></div>
>>>>>>> 98124f3e6b99a8b33e1b840f6618822c34a701e5
