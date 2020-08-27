<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>perulangan kedua</title>
    <style>
        .warna-baris{
            background-color: salmon;
        }
    </style>
</head>
<body>
    <table border="1" cellpadding="10" cellspacing="0">
        <?php for ($tr = 1; $tr <= 5; $tr++) : ?>
            <?php if ($tr % 2 == 1) : ?>
                <tr class="warna-baris">    
            <?php endif; ?>

                <?php for ($td = 1; $td <= 5; $td++) :?>
                    <td> <?= "$tr, $td"?> </td>
                <?php endfor; ?>
            </tr>
        <?php endfor; ?>
    </table>
</body>
</html>