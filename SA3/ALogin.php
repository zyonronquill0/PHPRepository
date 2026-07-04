<?php
session_start();

if (isset($_SESSION['user_login'])) {
    header("Location: AHome.php");
    exit();
}

$cookie_user = isset($_COOKIE['username_cookie']) ? htmlspecialchars($_COOKIE['username_cookie']) : "";
$cookie_pass = isset($_COOKIE['password_cookie']) ? htmlspecialchars($_COOKIE['password_cookie']) : "";
$is_checked = isset($_COOKIE['username_cookie']) ? "checked" : "";
$error_msg = "";

if (isset($_POST['submit_login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $conn = mysqli_connect("localhost", "root", "", "user_system");
    if (!$conn) {
        die("Database connection failed: " . mysqli_connect_error());
    }

    $username_clean = mysqli_real_escape_string($conn, $username);
    $password_clean = mysqli_real_escape_string($conn, $password);

    $sql = "SELECT * FROM accounts WHERE username='$username_clean' AND password='$password_clean'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) === 1) {
        $_SESSION['user_login'] = $username;

        if (isset($_POST['remember_me'])) {
            setcookie("username_cookie", $username, time() + 86400, "/");
            setcookie("password_cookie", $password, time() + 86400, "/");
        } else {
            setcookie("username_cookie", "", time() - 3600, "/");
            setcookie("password_cookie", "", time() - 3600, "/");
        }

        header("Location: AHome.php");
        exit();
    } else {
        $error_msg = "<div class='alert alert-danger font-monospace text-center fw-semibold rounded-3 mb-4'>❌ Invalid Username or Password</div>";
    }
    mysqli_close($conn);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SA3 | Live Account Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="Astyle.css">
</head>
<body class="d-flex align-items-center justify-content-center min-vh-100 py-5">

<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 col-md-7 col-lg-5">
            
            <div class="main-card p-4 p-sm-5 bg-white rounded-4 shadow">
                
                <div class="mb-3 text-start">
                    <a href="Index.php" class="back-btn text-decoration-none fw-semibold">← BACK TO MENU</a>
                </div>
                
                <div class="text-center mb-4">
                    <h1 class="h2 fw-bold feu-text-green m-0 mb-2">Log-In Form</h1>
                </div>

                <?php echo $error_msg; ?>

                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
                    <div class="mb-3 text-start">
                        <label class="form-label fw-semibold feu-text-green">Username</label>
                        <input type="text" name="username" class="form-control form-control-lg custom-input" required value="<?php echo $cookie_user; ?>">
                    </div>
                    <div class="mb-3 text-start">
                        <label class="form-label fw-semibold feu-text-green">Password</label>
                        <input type="password" name="password" class="form-control form-control-lg custom-input" required value="<?php echo $cookie_pass; ?>">
                    </div>
                    
                    <div class="mb-4 text-start form-check d-flex align-items-center gap-2 justify-content-start ps-0">
                        <input type="checkbox" name="remember_me" id="remember_me" class="form-check-input ms-0 mt-0" <?php echo $is_checked; ?>>
                        <label for="remember_me" class="form-check-label fw-semibold feu-text-green small">Remember Me</label>
                    </div>

                    <div class="text-center">
                        <button type="submit" name="submit_login" class="btn btn-lg feu-btn px-5 rounded-pill fw-semibold shadow-sm w-100">Submit</button>
                    </div>
                </form>

                <div class="pt-3 mt-4 border-top text-center text-muted small font-monospace fw-semibold">
                    &copy; Created by Zyon Ronquillo || 202411259
                </div>
            </div>

        </div>
    </div>
</div>

</body>
</html>