<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SA3 | Activity B Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="Bstyle.css">
</head>
<body class="d-flex align-items-center justify-content-center min-vh-100 py-5">

<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 col-md-8 col-lg-6">
            
            <div class="main-card p-4 p-sm-5 bg-white rounded-4 shadow">
                
                <div class="mb-3 text-start">
                    <a href="BLogin.php" class="back-btn text-decoration-none fw-semibold">← GO TO LOGIN</a>
                </div>
                
                <div class="text-center mb-4">
                    <h1 class="h2 fw-bold feu-text-green m-0 mb-2">My Personal Information</h1>
                </div>

                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" class="mb-4">
                    <div class="mb-3 text-start">
                        <label class="form-label fw-semibold feu-text-green">First Name</label>
                        <input type="text" name="firstname" class="form-control form-control-lg custom-input" required>
                    </div>
                    <div class="mb-3 text-start">
                        <label class="form-label fw-semibold feu-text-green">Middle Name</label>
                        <input type="text" name="middlename" class="form-control form-control-lg custom-input" required>
                    </div>
                    <div class="mb-3 text-start">
                        <label class="form-label fw-semibold feu-text-green">Last Name</label>
                        <input type="text" name="lastname" class="form-control form-control-lg custom-input" required>
                    </div>
                    <div class="mb-3 text-start">
                        <label class="form-label fw-semibold feu-text-green">Username</label>
                        <input type="text" name="username" class="form-control form-control-lg custom-input" required>
                    </div>
                    <div class="mb-3 text-start">
                        <label class="form-label fw-semibold feu-text-green">Password</label>
                        <input type="password" name="password" class="form-control form-control-lg custom-input" required>
                    </div>
                    <div class="mb-3 text-start">
                        <label class="form-label fw-semibold feu-text-green">Confirm Password</label>
                        <input type="password" name="confirm_password" class="form-control form-control-lg custom-input" required>
                    </div>
                    <div class="mb-3 text-start">
                        <label class="form-label fw-semibold feu-text-green">Birthday</label>
                        <input type="date" name="birthday" class="form-control form-control-lg custom-input" required>
                    </div>
                    <div class="mb-3 text-start">
                        <label class="form-label fw-semibold feu-text-green">Email</label>
                        <input type="email" name="email" class="form-control form-control-lg custom-input" required>
                    </div>
                    <div class="mb-4 text-start">
                        <label class="form-label fw-semibold feu-text-green">Contact Number</label>
                        <input type="text" name="contact_number" class="form-control form-control-lg custom-input" required>
                    </div>
                    <div class="text-center">
                        <button type="submit" name="submit_registration" class="btn btn-lg feu-btn px-5 rounded-pill fw-semibold shadow-sm w-100">Submit</button>
                    </div>
                </form>

                <?php
                if (isset($_POST['submit_registration'])) {
                    $fname   = $_POST['firstname'];
                    $mname   = $_POST['middlename'];
                    $lname   = $_POST['lastname'];
                    $uname   = $_POST['username'];
                    $pass    = $_POST['password'];
                    $confirm = $_POST['confirm_password'];
                    $bdate   = $_POST['birthday'];
                    $email   = $_POST['email'];
                    $contact = $_POST['contact_number'];

                    if ($pass !== $confirm) {
                        echo "<div class='alert alert-danger font-monospace text-center fw-semibold rounded-3 m-0'>❌ password and confirm password are not the same</div>";
                    } else {
                        $conn = mysqli_connect("localhost", "root", "", "user_system");
                        if (!$conn) {
                            die("<div class='alert alert-danger text-center m-0'>Database connection failed.</div>");
                        }

                        $fname_clean   = mysqli_real_escape_string($conn, $fname);
                        $mname_clean   = mysqli_real_escape_string($conn, $mname);
                        $lname_clean   = mysqli_real_escape_string($conn, $lname);
                        $uname_clean   = mysqli_real_escape_string($conn, $uname);
                        $pass_clean    = mysqli_real_escape_string($conn, $pass);
                        $bdate_clean   = mysqli_real_escape_string($conn, $bdate);
                        $email_clean   = mysqli_real_escape_string($conn, $email);
                        $contact_clean = mysqli_real_escape_string($conn, $contact);

                        $sql = "INSERT INTO accounts (first_name, middle_name, last_name, username, password, birthday, email, contact_num) 
                                VALUES ('$fname_clean', '$mname_clean', '$lname_clean', '$uname_clean', '$pass_clean', '$bdate_clean', '$email_clean', '$contact_clean')";

                        if (mysqli_query($conn, $sql)) {
                            echo "<div class='alert alert-success text-center fw-semibold rounded-3 m-0'>✨ Account saved to database! Go to login.</div>";
                        } else {
                            echo "<div class='alert alert-danger text-center font-monospace m-0'>Error: " . mysqli_error($conn) . "</div>";
                        }
                        mysqli_close($conn);
                    }
                }
                ?>

                <div class="pt-3 mt-4 border-top text-center text-muted small font-monospace fw-semibold">
                    &copy; Created by Zyon Ronquillo || 202411259
                </div>
            </div>

        </div>
    </div>
</div>

</body>
</html>