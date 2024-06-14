<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Afficher les Volume Groups (VG)</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Afficher les Volume Groups (VG)</h1>
    <?php
    $command = "sudo vgdisplay --columns --separator '|' --noheadings -o vg_name,vg_size,vg_free";
    $output = shell_exec($command);
    $lines = explode("\n", trim($output));
    ?>
    <table>
        <thead>
            <tr>
                <th>Nom du VG</th>
                <th>Taille du VG</th>
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
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <a href="../../index.html">Retour à la gestion de LVM</a>
</body>
</html>
