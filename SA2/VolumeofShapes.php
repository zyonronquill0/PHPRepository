<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Volume Calculator · Geometric Shapes</title>
    <link rel="stylesheet" href="VSstyle.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
</head>
<body>
<div class="main-card">
    <div class="btn-wrapper">
        <a href="Index.php" class="back-btn">← BACK TO MENU</a>
    </div>
    
    <div class="title-wrapper">
        <h1>VOLUME OF SHAPES</h1>
        <div class="badge">shapes · values · formula · volume</div>
    </div>

    <?php
    function cubeVolume($side) {
        return pow($side, 3);
    }

    function rectangularPrismVolume($length, $width, $height) {
        return $length * $width * $height;
    }

    function cylinderVolume($radius, $height) {
        return pi() * pow($radius, 2) * $height;
    }

    function coneVolume($radius, $height) {
        return (1/3) * pi() * pow($radius, 2) * $height;
    }

    function squarePyramidVolume($side, $height) {
        return (1/3) * pow($side, 2) * $height;
    }

    function sphereVolume($radius) {
        return (4/3) * pi() * pow($radius, 3);
    }

    $cube_side = 5;
    $prism_l = 8; $prism_w = 3; $prism_h = 4;
    $cylinder_r = 3; $cylinder_h = 7;
    $cone_r = 4; $cone_h = 9;
    $pyramid_side = 6; $pyramid_h = 10;
    $sphere_r = 5;

    echo "<table>";
    echo "<thead>";
    echo "<tr><th>Shape</th><th>Values (only)</th><th>Formula</th><th>Volume (Answer)</th></tr>";
    echo "</thead>";
    echo "<tbody>";

    echo "<tr><td><strong>Cube</strong></td>";
    echo "<td>s = $cube_side</td>";
    echo "<td>V = s³</td>";
    echo "<td class='ans-cell'>" . cubeVolume($cube_side) . "</td></tr>";
    
    echo "<tr><td><strong>Rectangular Prism</strong></td>";
    echo "<td>l = $prism_l, w = $prism_w, h = $prism_h</td>";
    echo "<td>V = l × w × h</td>";
    echo "<td class='ans-cell'>" . rectangularPrismVolume($prism_l, $prism_w, $prism_h) . "</td></tr>";
    
    echo "<tr><td><strong>Cylinder</strong></td>";
    echo "<td>r = $cylinder_r, h = $cylinder_h</td>";
    echo "<td>V = π × r² × h</td>";
    echo "<td class='ans-cell'>" . number_format(cylinderVolume($cylinder_r, $cylinder_h), 4) . "</td></tr>";
    
    echo "<tr><td><strong>Cone</strong></td>";
    echo "<td>r = $cone_r, h = $cone_h</td>";
    echo "<td>V = (1/3) × π × r² × h</td>";
    echo "<td class='ans-cell'>" . number_format(coneVolume($cone_r, $cone_h), 4) . "</td></tr>";
    
    echo "<tr><td><strong>Square Pyramid</strong></td>";
    echo "<td>side = $pyramid_side, h = $pyramid_h</td>";
    echo "<td>V = (1/3) × side² × h</td>";
    echo "<td class='ans-cell'>" . number_format(squarePyramidVolume($pyramid_side, $pyramid_h), 4) . "</td></tr>";
    
    echo "<tr><td><strong>Sphere</strong></td>";
    echo "<td>r = $sphere_r</td>";
    echo "<td>V = (4/3) × π × r³</td>";
    echo "<td class='ans-cell'>" . number_format(sphereVolume($sphere_r), 4) . "</td></tr>";
    
    echo "</tbody>";
    echo "</table>";
    ?>

    <div class="footer">
        Created by Zyon Ronquillo || 202411259
    </div>
</div>
</body>
</html>