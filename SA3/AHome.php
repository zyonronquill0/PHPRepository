<?php
session_start();

if (!isset($_SESSION['user_login'])) {
    header("Location: ALogin.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SA3 | System Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="Astyle.css">
</head>
<body class="d-flex align-items-center justify-content-center min-vh-100 py-5">

<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 col-md-8 col-lg-6">
            
            <div class="main-card p-4 p-sm-5 bg-white rounded-4 shadow">
                
                <div class="text-center mb-4">
                    <h1 class="h2 fw-bold feu-text-green m-0 mb-2">Welcome Dashboard</h1>
                    <span class="badge feu-badge px-3 py-2 rounded-pill font-monospace fw-semibold">Secure User Dashboard</span>
                </div>

                <div class="result-wrapper p-4 rounded-3 text-center border border-dashed border-2 mb-4">
                    <h2 class="h4 fw-bold feu-text-green mb-3">Welcome, <?php echo htmlspecialchars($_SESSION['user_login']); ?>!</h2>
                    <p class="text-muted m-0">You have safely logged into your profile storage terminal layer.</p>
                </div>

                <div class="text-center">
                    <a href="ALogout.php" class="btn btn-lg feu-btn px-5 rounded-pill fw-semibold shadow-sm w-100">Logout</a>
                </div>

                <div class="pt-3 mt-4 border-top text-center text-muted small font-monospace fw-semibold">
                    &copy; Created by Zyon Ronquillo || 202411259
                </div>
            </div>

        </div>
    </div>
</div>

</body>
</html>