<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SA3 | Activity A Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="Astyle.css">
</head>
<body class="d-flex align-items-center justify-content-center min-vh-100 py-5">

<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 col-md-8 col-lg-6">
            <div class="main-card p-4 p-sm-5 bg-white rounded-4 shadow">
                <div class="mb-3 text-start">
                    <a href="Index.php" class="back-btn text-decoration-none fw-semibold">← BACK TO MENU</a>
                </div>

                <div class="text-center mb-4">
                    <h1 class="h2 fw-bold feu-text-green m-0 mb-2">My Personal Information</h1>
                </div>

                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" class="mb-4">
                    <div class="mb-3 text-start">
                        <label class="form-label fw-semibold feu-text-green">First Name</label>
                        <input type="text" name="firstname" class="form-control form-control-lg custom-input" value="<?php echo isset($_POST['firstname']) ? htmlspecialchars($_POST['firstname']) : ''; ?>" required>
                    </div>
                    <div class="mb-3 text-start">
                        <label class="form-label fw-semibold feu-text-green">Middle Name</label>
                        <input type="text" name="middlename" class="form-control form-control-lg custom-input" value="<?php echo isset($_POST['middlename']) ? htmlspecialchars($_POST['middlename']) : ''; ?>" required>
                    </div>
                    <div class="mb-3 text-start">
                        <label class="form-label fw-semibold feu-text-green">Last Name</label>
                        <input type="text" name="lastname" class="form-control form-control-lg custom-input" value="<?php echo isset($_POST['lastname']) ? htmlspecialchars($_POST['lastname']) : ''; ?>" required>
                    </div>
                    <div class="mb-3 text-start">
                        <label class="form-label fw-semibold feu-text-green">Username</label>
                        <input type="text" name="username" class="form-control form-control-lg custom-input" value="<?php echo isset($_POST['username']) ? htmlspecialchars($_POST['username']) : ''; ?>" required>
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
                        <input type="date" name="birthday" class="form-control form-control-lg custom-input" value="<?php echo isset($_POST['birthday']) ? htmlspecialchars($_POST['birthday']) : ''; ?>" required>
                    </div>
                    <div class="mb-3 text-start">
                        <label class="form-label fw-semibold feu-text-green">Email</label>
                        <input type="email" name="email" class="form-control form-control-lg custom-input" value="<?php echo isset($_POST['email']) ? htmlspecialchars($_POST['email']) : ''; ?>" required>
                    </div>
                    <div class="mb-4 text-start">
                        <label class="form-label fw-semibold feu-text-green">Contact Number</label>
                        <input type="text" name="contact_number" class="form-control form-control-lg custom-input" value="<?php echo isset($_POST['contact_number']) ? htmlspecialchars($_POST['contact_number']) : ''; ?>" required>
                    </div>
                    <div class="text-center">
                        <button type="submit" name="submit_registration" class="btn btn-lg feu-btn px-5 rounded-pill fw-semibold shadow-sm w-100">Submit</button>
                    </div>
                </form>

                <?php
                if (isset($_POST['submit_registration'])) {
                    $fname   = isset($_POST['firstname']) ? $_POST['firstname'] : '';
                    $mname   = isset($_POST['middlename']) ? $_POST['middlename'] : '';
                    $lname   = isset($_POST['lastname']) ? $_POST['lastname'] : '';
                    $uname   = isset($_POST['username']) ? $_POST['username'] : '';
                    $pass    = isset($_POST['password']) ? $_POST['password'] : '';
                    $confirm = isset($_POST['confirm_password']) ? $_POST['confirm_password'] : '';

                    $bdate_raw = isset($_POST['birthday']) ? $_POST['birthday'] : '';
                    $bdate = '';
                    if (!empty($bdate_raw)) {
                        $d = DateTime::createFromFormat('Y-m-d', $bdate_raw);
                        if ($d) {
                            $bdate = $d->format('m/d/Y');
                        } else {
                            $d2 = date_create($bdate_raw);
                            if ($d2) {
                                $bdate = $d2->format('m/d/Y');
                            } else {
                                $bdate = $bdate_raw;
                            }
                        }
                    }

                    $email   = isset($_POST['email']) ? $_POST['email'] : '';
                    $contact = isset($_POST['contact_number']) ? $_POST['contact_number'] : '';

                    if ($pass !== $confirm) {
                        echo "<div class='alert alert-danger font-monospace text-center fw-semibold rounded-3 m-0'>❌ password and confirm password are not the same</div>";
                    } else {
                        // Save to database (user_system.accounts)
                        $conn = mysqli_connect("localhost", "root", "", "user_system");
                        if (!$conn) {
                            echo "<div class='alert alert-danger font-monospace text-center fw-semibold rounded-3 m-0'>❌ Database connection failed: " . htmlspecialchars(mysqli_connect_error()) . "</div>";
                        } else {
                            // Check if username already exists
                            $checkStmt = mysqli_prepare($conn, "SELECT id FROM accounts WHERE username = ?");
                            if ($checkStmt) {
                                mysqli_stmt_bind_param($checkStmt, 's', $uname);
                                mysqli_stmt_execute($checkStmt);
                                mysqli_stmt_store_result($checkStmt);
                                if (mysqli_stmt_num_rows($checkStmt) > 0) {
                                    echo "<div class='alert alert-warning font-monospace text-center fw-semibold rounded-3 m-0'>⚠️ Username already taken. Please choose another.</div>";
                                } else {
                                    // Insert new account
                                    $insertStmt = mysqli_prepare($conn, "INSERT INTO accounts (username, password, first_name, middle_name, last_name, birthday, email, contact_num) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
                                    if ($insertStmt) {
                                        mysqli_stmt_bind_param($insertStmt, 'ssssssss', $uname, $pass, $fname, $mname, $lname, $bdate_raw, $email, $contact);
                                        $ok = mysqli_stmt_execute($insertStmt);
                                        if ($ok) {
                                            echo "<div class='alert alert-success font-monospace text-center fw-semibold rounded-3 m-0 mb-3'>✅ Registration successful — you can now log in.</div>";
                                        } else {
                                            echo "<div class='alert alert-danger font-monospace text-center fw-semibold rounded-3 m-0'>❌ Registration failed: " . htmlspecialchars(mysqli_error($conn)) . "</div>";
                                        }
                                        mysqli_stmt_close($insertStmt);
                                    } else {
                                        echo "<div class='alert alert-danger font-monospace text-center fw-semibold rounded-3 m-0'>❌ Failed to prepare registration query.</div>";
                                    }
                                }
                                mysqli_stmt_close($checkStmt);
                            } else {
                                echo "<div class='alert alert-danger font-monospace text-center fw-semibold rounded-3 m-0'>❌ Failed to prepare username check.</div>";
                            }
                            mysqli_close($conn);
                        }

                        // Still show submitted data for confirmation
                        echo "<div class='result-wrapper p-4 rounded-3 text-start border border-dashed border-2 m-0'>";
                        echo "<p class='mb-2'><span class='fw-semibold feu-text-green'>Full Name:</span> " . htmlspecialchars($fname . " " . $mname . " " . $lname) . "</p>";
                        echo "<p class='mb-2'><span class='fw-semibold feu-text-green'>Username:</span> " . htmlspecialchars($uname) . "</p>";
                        echo "<p class='mb-2'><span class='fw-semibold feu-text-green'>Password:</span> " . htmlspecialchars($pass) . "</p>";
                        echo "<p class='mb-2'><span class='fw-semibold feu-text-green'>Birthday:</span> " . htmlspecialchars($bdate) . "</p>";
                        echo "<p class='mb-2'><span class='fw-semibold feu-text-green'>Email:</span> " . htmlspecialchars($email) . "</p>";
                        echo "<p class='mb-0'><span class='fw-semibold feu-text-green'>Contact Number:</span> " . htmlspecialchars($contact) . "</p>";
                        echo "</div>";
                    }
                }
                ?>

                <div class="pt-3 mt-4 border-top text-center text-muted small font-monospace fw-regular">
                    &copy;  Created by Zyon Ronquillo || 202411259
                </div>
            </div>

        </div>
    </div>
</div>

</body>
</html>
