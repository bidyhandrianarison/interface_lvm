<link rel="stylesheet" href="../../style.css">
<body>
    <div>
    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $vgname = $_POST["vgname"];
    $pvs = $_POST["pvs"];
    
    $command = "sudo vgcreate $vgname $pvs";
    $output = shell_exec($command);
    echo "<pre>$output</pre>";
}
?>

    </div>
    
    <a href="../../index.php">Retour à la gestion de LVM</a>
</body>
