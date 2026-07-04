<?php
session_start();

if (!isset($_SESSION['user_login'])) {
    header("Location: BLogin.php");
    exit();
}

$session_user = $_SESSION['user_login'];
$msg = "";

$conn = mysqli_connect("localhost", "root", "", "user_system");
if (!$conn) {
    die("Database retrieval state connection failure.");
}

$session_user_clean = mysqli_real_escape_string($conn, $session_user);

if (isset($_POST['submit_reset'])) {
    $current_pass = $_POST['current_password'];
    $new_pass     = $_POST['new_password'];
    $re_enter_pass = $_POST['re_enter_password'];

    $check_sql = "SELECT * FROM accounts WHERE username='$session_user_clean'";
    $check_res = mysqli_query($conn, $check_sql);
    $account_record = mysqli_fetch_assoc($check_res);

    if ($current_pass !== $account_record['password']) {
        $msg = "<div class='alert alert-danger font-monospace text-center fw-semibold rounded-3 mb-4'>❌ Current password is not the same with the old password</div>";
    } elseif ($new_pass !== $re_enter_pass) {
        $msg = "<div class='alert alert-danger font-monospace text-center fw-semibold rounded-3 mb-4'>❌ New password and Re-Enter new password should be the same.</div>";
    } else {
        $new_pass_clean = mysqli_real_escape_string($conn, $new_pass);
        $update_sql = "UPDATE accounts SET password='$new_pass_clean' WHERE username='$session_user_clean'";
        
        if (mysqli_query($conn, $update_sql)) {
            $msg = "<div class='alert alert-success text-center fw-semibold rounded-3 mb-4'>✨ Password reset and saved successfully!</div>";
        } else {
            $msg = "<div class='alert alert-danger text-center font-monospace mb-4'>Error updating record: " . mysqli_error($conn) . "</div>";
        }
    }
}

$sql = "SELECT * FROM accounts WHERE username='$session_user_clean'";
$result = mysqli_query($conn, $sql);
$user_data = mysqli_fetch_assoc($result);

mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SA3 | User Information Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="Bstyle.css">
</head>
<body class="d-flex align-items-center justify-content-center min-vh-100 py-5">

<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 col-md-9 col-lg-7">
            
            <div class="main-card p-4 p-sm-5 bg-white rounded-4 shadow">
                
                <div class="mb-3 d-flex justify-content-between align-items-center">
                    <span class="badge feu-badge px-3 py-2 rounded-pill font-monospace fw-semibold">User Information Form</span>
                    <a href="BLogout.php" class="back-btn text-decoration-none fw-semibold">Log-out →</a>
                </div>

                <div class="result-wrapper p-4 rounded-3 text-start border border-dashed border-2 mb-4">
                    <h2 class="h4 fw-bold feu-text-green mb-3">Welcome, <?php echo htmlspecialchars($user_data['first_name'] . ' ' . $user_data['middle_name'] . ' ' . $user_data['last_name']); ?></h2>
                    <p class="mb-2"><span class="fw-semibold text-muted">Birthday:</span> <span class="text-dark font-monospace"><?php echo htmlspecialchars($user_data['birthday']); ?></span></p>
                    
                    <h3 class="h6 fw-bold feu-text-green text-uppercase mt-4 mb-2 small tracking-wider">Contact Details</h3>
                    <p class="mb-2"><span class="fw-semibold text-muted">Email:</span> <span class="text-dark font-monospace"><?php echo htmlspecialchars($user_data['email']); ?></span></p>
                    <p class="mb-0"><span class="fw-semibold text-muted">Contact:</span> <span class="text-dark font-monospace"><?php echo htmlspecialchars($user_data['contact_num']); ?></span></p>
                </div>

                <?php echo $msg; ?>

                <div class="accordion border-0" id="passwordAccordion">
                    <div class="accordion-item border-0 bg-transparent">
                        
                        <div class="text-center mb-2">
                            <button class="btn btn-outline-secondary btn-sm px-4 rounded-pill fw-semibold font-monospace tracking-wide" type="button" data-bs-toggle="collapse" data-bs-target="#collapsePasswordForm" aria-expanded="false" aria-controls="collapsePasswordForm">
                                Reset Password?
                            </button>
                        </div>

                        <div id="collapsePasswordForm" class="accordion-collapse collapse" data-bs-parent="#passwordAccordion">
                            <div class="accordion-body p-3 mt-3 rounded-3 bg-light border text-start">
                                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
                                    <h3 class="h6 fw-bold feu-text-green text-uppercase mb-3 tracking-wider font-monospace">RESET PASSWORD</h3>
                                    
                                    <div class="mb-3">
                                        <label class="form-label small fw-semibold text-muted">Enter Current Password:</label>
                                        <input type="password" name="current_password" class="form-control form-control-lg custom-input" required>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label small fw-semibold text-muted">Enter New Password:</label>
                                        <input type="password" name="new_password" class="form-control form-control-lg custom-input" required>
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label small fw-semibold text-muted">Re-Enter New Password:</label>
                                        <input type="password" name="re_enter_password" class="form-control form-control-lg custom-input" required>
                                    </div>
                                    
                                    <div class="text-center">
                                        <button type="submit" name="submit_reset" class="btn btn-lg feu-btn px-5 rounded-pill fw-semibold shadow-sm w-100">Save New Password</button>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="pt-3 mt-4 border-top text-center text-muted small font-monospace fw-semibold">
                    &copy; Created by Zyon Ronquillo || 202411259
                </div>
            </div>

        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>