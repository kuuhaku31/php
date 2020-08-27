<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>perulangan</title>
</head>
<body>
    <table border="1" cellpadding="10" cellspacing="0">
    <?php 
        for ($tr = 1; $tr <= 3; $tr++ ) {
            echo "<tr>"; //untuk baris
            for ($td = 1; $td <= 5; $td++) {
                echo "<td>$tr, $td</td>"; //untuk kolom
            }
            echo "</tr>";
        }
    ?>
    </table>
</body>
</html>