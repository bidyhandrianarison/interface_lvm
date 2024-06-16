<link rel="stylesheet" href="../../style.css">
<body>
<div>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $vgname = $_POST["vgname"];
    $lvname = $_POST["lvdelname"];
    $command1 = "sudo umount /mnt/$lvname";
    $output1 = shell_exec($command1);
    $command = "sudo lvremove -f /dev/$vgname/$lvname";
    $output = shell_exec($command);
    echo "<pre>$output1 $output </pre>";
}
?>
</div>
<a href="../../index.php">Retour à l'accueil</a>
</body>
