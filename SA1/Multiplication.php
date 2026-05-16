<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplication Table</title>
    <link rel="stylesheet" href="styleMT.css">
</head>
<body>
    <div class="container">
        <h1>Multiplication Table</h1>

        <table>
            <?php
            for ($row = 0; $row <= 10; $row++) {
                echo "<tr>";
                for ($col = 0; $col <= 10; $col++) {
                    $product = $row * $col;
                    $cellClass = (($row + $col) % 2 == 0) ? 'cell-yellow' : 'cell-red';
                    echo "<td class='$cellClass'>" . $product . "</td>";
                }
                echo "</tr>";
            }
            ?>
        </table>
        <a href="index.php" class="btn" style="display:block; margin: 30px auto 0 auto; max-width: 300px; text-align:center;">← Back to Menu</a>
    </div>
</body>
</html>
