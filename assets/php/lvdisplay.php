<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Afficher les Logical Volumes (LV)</title>
<<<<<<< HEAD
    <link rel="stylesheet" href="../../style.css">
</head>
<body>
    <div class="lvDisplay">
        <h1>Afficher les Logical Volumes (LV)</h1>
        <?php
        $command = "sudo lvdisplay --columns --separator '|' --noheadings -o lv_name,vg_name,lv_size";
        $output = shell_exec($command);
        $lines = explode("\n", trim($output));
        ?>
        <table>
            <thead>
                <tr>
                    <th>Nom du LV</th>
                    <th>Nom du VG</th>
                    <th>Taille du LV</th>
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
        <a href="../../index.php">Retour à la gestion de LVM</a>

    </div>
=======
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Afficher les Logical Volumes (LV)</h1>
    <?php
    $command = "sudo lvdisplay --columns --separator '|' --noheadings -o lv_name,vg_name,lv_size";
    $output = shell_exec($command);
    $lines = explode("\n", trim($output));
    ?>
    <table>
        <thead>
            <tr>
                <th>Nom du LV</th>
                <th>Nom du VG</th>
                <th>Taille du LV</th>
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
>>>>>>> 98124f3e6b99a8b33e1b840f6618822c34a701e5
</body>
</html>
