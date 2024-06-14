<?php
// Fonction pour obtenir la liste des disques et partitions
function getDisksAndPartitions() {
    // Exécute la commande 'lsblk' pour obtenir les informations sur les disques et partitions
    $output = shell_exec('lsblk -o NAME,SIZE,TYPE,MOUNTPOINT -J');
    $disks = json_decode($output, true);

    // Retourne les informations des disques et partitions en format JSON
    return $disks;
}

// Appel de la fonction et affichage des résultats
$disks = getDisksAndPartitions();
header('Content-Type: application/json');
echo json_encode($disks);
?>
