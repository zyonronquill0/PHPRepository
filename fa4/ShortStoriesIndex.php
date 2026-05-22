<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Short Stories · Harry Potter Collection</title>
    <link rel="stylesheet" href="ShortStories.css">
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
        <h1>⟡ HARRY POTTER CHRONICLES ⟡</h1>
        <div class="subtitle">a collection of 5 iconic magical tales</div>
    </div>

    <div class="story-grid">
        <?php include 'hpstory1.php'; ?>
        <?php include 'hpstory2.php'; ?>
        <?php include 'hpstory3.php'; ?>
        <?php include 'hpstory4.php'; ?>
        <?php include 'hpstory5.php'; ?>
    </div>
    
    <div class="footer">
        Created by Zyon Ronquillo || 202411259
    </div>
</div>
</body>
</html>