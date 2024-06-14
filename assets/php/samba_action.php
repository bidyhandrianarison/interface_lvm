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

    file_put_contents("/etc/samba/smb.conf", $smbconf, FILE_APPEND);
    shell_exec("sudo systemctl restart smbd");
    echo "Partage SAMBA créé avec succès.";
}
?>
<a href="samba.php">Retour à la gestion de SAMBA</a>