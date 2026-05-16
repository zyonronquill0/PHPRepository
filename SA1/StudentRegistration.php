<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration Form</title>
    <link rel="stylesheet" href="styleSR.css">
</head>
<body>
    <div class="container">
        <?php
        $fName = "Lord Zyon";
        $mName = "Aniceto";
        $lName = "Ronquillo";
        $dobRaw = "2006-05-22";
        $dobFormatted = "";
        $gender = "Male";
        $contact = "09991682210";
        $email = "lordzyonronquillo22@gmail.com";
        $address = "688 Rosalina St. Gagalangin, Tondo, Manila";

        $hsName = "Lakan Dula High School";
        $hsGradYear = "2022";
        $shsName = "University of the East - Manila Senior High School";
        $strand = "STEM";
        $shsGradYear = "2024";
        ?>

        <div class="">
            <img src="https://upload.wikimedia.org/wikipedia/en/thumb/6/62/FEU_Tech_official_seal.png/250px-FEU_Tech_official_seal.png" alt="FEU Tech Logo" class="logo">

        <h1>FEU TECH STUDENT REGISTRATION FORM</h1>
        
        <form method="POST" action="">
            <h2>Personal Information</h2>
            
            <div class="form-group">
                <label>First Name:</label>
                <input type="text" name="fName" value="<?=$fName ?>" required>
            </div>

            <div class="form-group">
                <label>Middle Name:</label>
                <input type="text" name="mName" value="<?=$mName ?>">
            </div>

            <div class="form-group">
                <label>Last Name:</label>
                <input type="text" name="lName" value="<?=$lName ?>" required>
            </div>

            <div class="form-row">
                <div class="form-group">
                    <label>Date of Birth:</label>
                    <input type="date" name="dob" value="<?=$dobRaw ?>" required>
                </div>

                <div class="form-group">
                    <label>Gender:</label>
                    <select name="gender" required>
                        <option value="">Select Gender</option>
                        <option value="Male" <?=$gender == 'Male' ? 'selected' : '' ?>>Male</option>
                        <option value="Female" <?=$gender == 'Female' ? 'selected' : '' ?>>Female</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Contact Number:</label>
                    <input type="text" name="contact" value="<?=$contact ?>" required>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group">
                    <label>Email Address:</label>
                    <input type="email" name="email" value="<?=$email ?>" required>
                </div>
                <div class="form-group" style="flex: 2;">
                    <label>Home Address:</label>
                    <input type="text" name="address" value="<?=$address ?>" required>
                </div>
            </div>

            <h2>Educational Background</h2>

            <div class="form-row">
                <div class="form-group" style="flex: 2;">
                    <label>High School Name:</label>
                    <input type="text" name="hsName" value="<?=$hsName ?>" required>
                </div>
                <div class="form-group">
                    <label>Year Graduated:</label>
                    <input type="number" name="hsGradYear" value="<?=$hsGradYear ?>" required>
                </div>
            </div>

            <div class="form-group">
                <label>Senior High School Name:</label>
                <input type="text" name="shsName" value="<?=$shsName ?>" required>
            </div>

            <div class="form-row">
                <div class="form-group">
                    <label>Strand:</label>
                    <select name="strand" required>
                        <option value="">Select Strand</option>
                        <option value="STEM" <?=$strand == 'STEM' ? 'selected' : '' ?>>STEM</option>
                        <option value="HUMSS" <?=$strand == 'HUMSS' ? 'selected' : '' ?>>HUMSS</option>
                        <option value="ABM" <?=$strand == 'ABM' ? 'selected' : '' ?>>ABM</option>
                        <option value="GAS" <?=$strand == 'GAS' ? 'selected' : '' ?>>GAS</option>
                        <option value="ICT" <?=$strand == 'ICT' ? 'selected' : '' ?>>ICT</option>
                        <option value="THE" <?=$strand == 'THE' ? 'selected' : '' ?>>THE</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Year Graduated:</label>
                    <input type="number" name="shsGradYear" value="<?=$shsGradYear ?>" required>
                </div>
            </div>
            
            <button type="submit" class="btn">REGISTER</button>

            <a href="index.php" class="btn" style="display:block; margin: 30px auto 0 auto; max-width: 300px; text-align:center;">← Back to Menu</a>

        </form>
    </div>
</body>
</html>