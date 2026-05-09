<!DOCTYPE html>
<html>

<head>
    <title>Length Conversion Table</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="container">

        <h1>Length Conversion Table</h1>

        <table>

            <tr>
                <td colspan="6" class="title">METRIC CONVERSIONS</td>
            </tr>

            <?php

            $cm = 1 * 10;
            $dm = 1 * 10;
            $m = 1 * 100;
            $km = 1 * 1000;

            ?>

            <tr>
                <td>1 centimetre</td>
                <td>=</td>
                <td><?php echo $cm; ?> millimetres</td>
                <td>1 cm</td>
                <td>=</td>
                <td><?php echo $cm; ?> mm</td>
            </tr>

            <tr>
                <td>1 decimetre</td>
                <td>=</td>
                <td><?php echo $dm; ?> centimetres</td>
                <td>1 dm</td>
                <td>=</td>
                <td><?php echo $dm; ?> cm</td>
            </tr>

            <tr>
                <td>1 metre</td>
                <td>=</td>
                <td><?php echo $m; ?> centimetres</td>
                <td>1 m</td>
                <td>=</td>
                <td><?php echo $m; ?> cm</td>
            </tr>

            <tr>
                <td>1 kilometre</td>
                <td>=</td>
                <td><?php echo $km; ?> metres</td>
                <td>1 km</td>
                <td>=</td>
                <td><?php echo $km; ?> m</td>
            </tr>

        </table>

        <table>

            <tr>
                <td colspan="6" class="title">IMPERIAL CONVERSIONS</td>
            </tr>

            <?php

            $foot = 1 * 12;
            $yard = 1 * 3;
            $chain = 1 * 22;
            $furlong = 1 * 220;
            $mile = 1 * 1760;

            ?>

            <tr>
                <td>1 foot</td>
                <td>=</td>
                <td><?php echo $foot; ?> inches</td>
                <td>1 ft</td>
                <td>=</td>
                <td><?php echo $foot; ?> in</td>
            </tr>

            <tr>
                <td>1 yard</td>
                <td>=</td>
                <td><?php echo $yard; ?> feet</td>
                <td>1 yd</td>
                <td>=</td>
                <td><?php echo $yard; ?> ft</td>
            </tr>

            <tr>
                <td>1 chain</td>
                <td>=</td>
                <td><?php echo $chain; ?> yards</td>
                <td>1 ch</td>
                <td>=</td>
                <td><?php echo $chain; ?> yd</td>
            </tr>

            <tr>
                <td>1 furlong</td>
                <td>=</td>
                <td><?php echo $furlong; ?> yards</td>
                <td>1 fur</td>
                <td>=</td>
                <td><?php echo $furlong; ?> yd</td>
            </tr>

            <tr>
                <td>1 mile</td>
                <td>=</td>
                <td><?php echo $mile; ?> yards</td>
                <td>1 mi</td>
                <td>=</td>
                <td><?php echo $mile; ?> yd</td>
            </tr>

        </table>


        <table>

            <tr>
                <td colspan="6" class="title">METRIC → IMPERIAL CONVERSIONS</td>
            </tr>

            <tr>
                <td>1 millimetre</td>
                <td>=</td>
                <td>0.03937 inches</td>
                <td>1 mm</td>
                <td>=</td>
                <td>0.03937 in</td>
            </tr>

            <tr>
                <td>1 centimetre</td>
                <td>=</td>
                <td>0.39370 inches</td>
                <td>1 cm</td>
                <td>=</td>
                <td>0.39370 in</td>
            </tr>

            <tr>
                <td>1 metre</td>
                <td>=</td>
                <td>39.37008 inches</td>
                <td>1 m</td>
                <td>=</td>
                <td>39.37008 in</td>
            </tr>

            <tr>
                <td>1 metre</td>
                <td>=</td>
                <td>3.28084 feet</td>
                <td>1 m</td>
                <td>=</td>
                <td>3.28084 ft</td>
            </tr>

            <tr>
                <td>1 metre</td>
                <td>=</td>
                <td>1.09361 yards</td>
                <td>1 m</td>
                <td>=</td>
                <td>1.09361 yd</td>
            </tr>

            <tr>
                <td>1 kilometre</td>
                <td>=</td>
                <td>1093.6133 yards</td>
                <td>1 km</td>
                <td>=</td>
                <td>1093.6133 yd</td>
            </tr>

            <tr>
                <td>1 kilometre</td>
                <td>=</td>
                <td>0.62137 miles</td>
                <td>1 km</td>
                <td>=</td>
                <td>0.62137 mi</td>
            </tr>

        </table>


        <table>

            <tr>
                <td colspan="6" class="title">IMPERIAL → METRIC CONVERSIONS</td>
            </tr>

            <tr>
                <td>1 inch</td>
                <td>=</td>
                <td>2.54 centimetres</td>
                <td>1 in</td>
                <td>=</td>
                <td>2.54 cm</td>
            </tr>

            <tr>
                <td>1 foot</td>
                <td>=</td>
                <td>30.48 centimetres</td>
                <td>1 ft</td>
                <td>=</td>
                <td>30.48 cm</td>
            </tr>

            <tr>
                <td>1 yard</td>
                <td>=</td>
                <td>91.44 centimetres</td>
                <td>1 yd</td>
                <td>=</td>
                <td>91.44 cm</td>
            </tr>

            <tr>
                <td>1 yard</td>
                <td>=</td>
                <td>0.9144 metres</td>
                <td>1 yd</td>
                <td>=</td>
                <td>0.9144 m</td>
            </tr>

            <tr>
                <td>1 mile</td>
                <td>=</td>
                <td>1609.344 metres</td>
                <td>1 mi</td>
                <td>=</td>
                <td>1609.344 m</td>
            </tr>

            <tr>
                <td>1 mile</td>
                <td>=</td>
                <td>1.609344 kilometres</td>
                <td>1 mi</td>
                <td>=</td>
                <td>1.609344 km</td>
            </tr>

        </table>

        <br>

        <a href="index.php" class="back">← Back to Menu</a>

    </div>

</body>

</html>