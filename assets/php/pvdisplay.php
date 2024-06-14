<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Afficher les Physical Volumes (PV)</title>
    <link rel="stylesheet" href="../../style.css">
</head>
<body id="display">
    <h1>Afficher les Physical Volumes (PV)</h1>
    <?php
    $command = "sudo pvdisplay --columns --separator '|' --noheadings -o pv_name,vg_name,pv_size,pv_free";
    $output = shell_exec($command);
    $lines = explode("\n", trim($output));
    ?>
    <table cellpadding="20" >
        <thead>
            <tr>
                <th>Nom du PV</th>
                <th>Nom du VG</th>
                <th>Taille du PV</th>
                <th>Espace Libre</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($lines as $line): ?>
                <?php $columns = explode('|', $line); ?>
                <tr>
                    <td><?php echo trim($columns[0]); ?></td>
                    <td><?php echo trim($columns[1]); ?></td>
                    <td><?php echo trim($columns[2]); ?></td>
                    <td><?php echo trim($columns[3]); ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <a href="../../index.php">Retour à la gestion de LVM</a>
</body>
</html>
