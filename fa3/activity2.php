<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PSA 3.2 | Array Calculations</title>
    <link rel="stylesheet" href="activity2.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
</head>
<body>

<div class="main-card">
    <div class="btn-wrapper">
        <a href="index.php" class="back-btn">
            <span>←</span> BACK TO MENU
        </a>
    </div>

    <div class="title-wrapper">
        <h1>⟡ ARRAY ARITHMETIC OPERATIONS ⟡</h1>
        <div class="badge">PSA 3 · Activity 2</div>
    </div>

    <?php
    $numbers = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
    $arrlength = count($numbers);

    $sum = $numbers[0];
    $difference = $numbers[0];
    $product = $numbers[0];
    $quotient = $numbers[0];

    for ($x = 1; $x < $arrlength; $x++) {
        $sum        += $numbers[$x];
        $difference -= $numbers[$x];
        $product    *= $numbers[$x];
        $quotient   /= $numbers[$x];
    }
    ?>

    <table>
        <thead>
            <tr>
                <th colspan="2">Active Dataset: [ <?php echo implode(", ", $numbers); ?> ]</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="operation">Addition (Sum)</td>
                <td class="result-val"><?php echo $sum; ?></td>
            </tr>
            <tr>
                <td class="operation">Subtraction (Difference)</td>
                <td class="result-val"><?php echo $difference; ?></td>
            </tr>
            <tr>
                <td class="operation">Multiplication (Product)</td>
                <td class="result-val"><?php echo $product; ?></td>
            </tr>
            <tr>
                <td class="operation">Division (Quotient)</td>
                <td class="result-val"><?php echo $quotient; ?></td>
            </tr>
        </tbody>
    </table>

    <div class="footer">
        Created by Zyon Ronquillo || 202411259
    </div>
</div>

</body>
</html>