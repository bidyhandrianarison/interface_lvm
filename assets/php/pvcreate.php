<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $pvname = escapeshellarg($_POST["pvname"]);
    
    $command = "sudo pvcreate -y ".$pvname;
    $output = shell_exec($command);
    echo "<pre>$output</pre>";
}
?>
<div><a href="../../index.php   ">Retour à la gestion de LVM</a>
</div>
