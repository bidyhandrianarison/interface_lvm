<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $sharename = escapeshellarg($_POST["sharename"]);
    $sharepath = escapeshellarg($_POST["sharepath"]);
    $comment = escapeshellarg($_POST["comment"]);
    $writable = isset($_POST["writable"]) ? "yes" : "no";
    
    $smbconf = "
[$sharename]
path = $sharepath
comment = $comment
browsable = yes
writable = $writable
guest ok = yes
";

<<<<<<< HEAD
    /*file_put_contents("/etc/samba/smb.conf", $smbconf, FILE_APPEND);*/
    $command="sudo echo $smbconf | sudo tee -a /etc/samba/smb.conf";
    shell_exec($command);
=======
    file_put_contents("/etc/samba/smb.conf", $smbconf, FILE_APPEND);
>>>>>>> 98124f3e6b99a8b33e1b840f6618822c34a701e5
    shell_exec("sudo systemctl restart smbd");
    echo "Partage SAMBA créé avec succès.";
}
?>
<<<<<<< HEAD
<a href="../../index.php">Retour à l'ACCUEIL</a>
=======
<a href="samba.php">Retour à la gestion de SAMBA</a>
>>>>>>> 98124f3e6b99a8b33e1b840f6618822c34a701e5
