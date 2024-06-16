<link rel="stylesheet" href="../../style.css">
<body>
<div>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $pvname = $_POST["pvname"];
    
    $command = "sudo pvcreate -y ".$pvname;
    $output = shell_exec($command);
    echo "<pre>$output</pre>";
}
?>
</div>
<a href="../../index.php   ">Retour à la gestion de LVM</a>


</body>