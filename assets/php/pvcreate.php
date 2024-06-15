<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $pvname = escapeshellarg($_POST["pvname"]);
    
    $command = "sudo pvcreate -y ".$pvname;
    $output = shell_exec($command);
    echo "<pre>$output</pre>";
}
?>
<<<<<<< HEAD
<div><a href="../../index.php   ">Retour à la gestion de LVM</a>
=======
<div><a href="lvm.php">Retour à la gestion de LVM</a>
>>>>>>> 98124f3e6b99a8b33e1b840f6618822c34a701e5
</div>
