<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SA4 || Student Resume Portfolio</title>
    <link rel="stylesheet" href="Resumestyle.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
</head>
<body>

<div class="main-card">
    <div class="btn-wrapper">
        <a href="Index.php" class="back-btn"><span>←</span> BACK TO MENU</a>
    </div>

    <?php require 'PersonalInformation.php'; ?>
    
    <div class="resume-timeline-stack">
        <?php 
            include 'CareerObjective.php';
            include 'EducationalAttainment.php';
            include 'Skills.php';
            include 'Affiliations.php';
            include 'WorkExperience.php'; 
        ?>
    </div>

    <div class="footer">
        Created by Zyon Ronquillo || 202411259
    </div>
</div>

</body>
</html>