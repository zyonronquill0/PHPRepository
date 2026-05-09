<!DOCTYPE html>
<html>

<head>
    <title>Grade Ranking</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="container">

        <h1>Grade Ranking Program</h1>

        <div class="form-box">

            <form method="POST">

                <input type="text" name="name" placeholder="Enter Name" required>

                <input type="number" name="grade" placeholder="Enter Grade" required>

                <button type="submit">Check Rank</button>

            </form>

            <?php

            if ($_SERVER["REQUEST_METHOD"] == "POST") {

                $name = $_POST['name'];
                $grade = $_POST['grade'];

                if ($grade >= 93 && $grade <= 100) {
                    $rank = "A";
                } elseif ($grade >= 90) {
                    $rank = "A-";
                } elseif ($grade >= 87) {
                    $rank = "B+";
                } elseif ($grade >= 83) {
                    $rank = "B";
                } elseif ($grade >= 80) {
                    $rank = "B-";
                } elseif ($grade >= 77) {
                    $rank = "C+";
                } elseif ($grade >= 73) {
                    $rank = "C";
                } elseif ($grade >= 70) {
                    $rank = "C-";
                } elseif ($grade >= 67) {
                    $rank = "D+";
                } elseif ($grade >= 63) {
                    $rank = "D";
                } elseif ($grade >= 60) {
                    $rank = "D-";
                } else {
                    $rank = "F";
                }

                echo "<div class='result'>";
                echo "Name: $name <br><br>";
                echo "Grade: $grade <br><br>";
                echo "Rank: $rank";
                echo "</div>";
            }

            ?>

            <a href="index.php" class="back">← Back to Menu</a>

        </div>

    </div>

</body>

</html>