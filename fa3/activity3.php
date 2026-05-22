<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PSA3.3 | USER DEFINED FUNCTION </title>
    <link rel="stylesheet" href="activity3.css">
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
        <h1>⟡ USER DEFINED FUNCTION ⟡</h1>
        <div class="subtitle">calculate($param1, $param2, $param3)</div>
    </div>

    <?php
    function calculate($param1, $param2, $param3) {

        $sum = $param1 + $param2 + $param3;
        $difference = $param1 - $param2 - $param3;
        $product = $param1 * $param2 * $param3;
        

        if($param2 != 0 && $param3 != 0) {
            $quotient = $param1 / $param2 / $param3;
        } else {
            $quotient = "Cannot divide by zero";
        }
        
        echo "<div class='param-box'>";
        echo "MY PARAMETER VALUES: " . $param1 . " , " . $param2 . " , " . $param3;
        echo "</div>";
        
        echo "<table class='result-table'>";
        echo "<tr>";
        echo "<td>ADDITION</td>";
        echo "<td>" . $sum . "</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>SUBTRACTION</td>";
        echo "<td>" . $difference . "</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>MULTIPLICATION</td>";
        echo "<td>" . $product . "</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>DIVISION</td>";
        echo "<td>" . $quotient . "</td>";
        echo "</tr>";
        echo "</table>";
    }

    calculate(25, 13, 6);
    ?>

    <div class="footer">
        Created by Zyon Ronquillo || 202411259
    </div>
</div>
</body>
</html>