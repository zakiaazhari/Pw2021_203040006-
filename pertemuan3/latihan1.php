<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTP-8"> 
    <title>Latihan 1</title> 
</head>
<body>
    
<table border="1" cellpading="10" cellspacing="0">
    <?php for( $i = 1; $i <= 3; $i++ ) : ?>
    <tr>
        <?php for( $j = 1; $j <= 5; $j++ ) : ?>
            <td><?= "$i, $j"; ?></td>
        <?php endfor; ?>
    </tr>
    <?php endfor; ?>
</table>

</body>
</html> 