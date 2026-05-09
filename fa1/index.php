<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Resume</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="main">
        <div class="left">
            <div class="header">
                <div class="icon">
                    <img src="icon.jpg" alt="Profile Picture" class="profile-pic">
                </div>

                <div>
                    <h1>
                        <?php 
                        $firstName = "Zyon";
                        $lastName = "Ronquillo";
                        echo $firstName . "<br>" . $lastName;
                        ?>
                    </h1>

                    <p class="role">
                        <?php 
                        $role = "WEB DEVELOPER";
                        echo $role;
                        ?>
                    </p>
                </div>
            </div>

            <div class="section">
                <h2>PROFILE</h2>
                <p>
                    <?php
                    $profile= "I am a 3rd-year Bachelor of Science in Information Technology student specializing in Web and Mobile Application Development. I have a strong interest in building modern, user-friendly digital experiences using technologies like HTML, CSS, and PHP. I am continuously improving my skills in both front-end and back-end development, with a focus on creating responsive, efficient, and visually appealing applications. As a student developer, I am eager to learn, adapt, and grow in real-world development environments.";
                    echo $profile;
                    ?>
                </p>
            </div>

            <div class="section">
                <h2>PROJECTS</h2>
                
                <p class="bold">
                    <?php
                    $project1 = "E-commerce Website";
                    echo $project1;
                    ?>
                </p>
                <p>Built using HTML, CSS, and Javascript, this project is an online store that allows users to browse products, add items to their cart, and proceed to checkout. The website features a responsive design, ensuring a seamless shopping experience across various devices.</p>
                <p class="bold">
                    <?php
                    $project2 = "Food Ordering System";
                    echo $project2;
                    ?>
                </p>
                <p>Created with Python and SQL. This project is a web application that enables users to order food from local restaurants. It includes features such as menu browsing, order placement, and real-time order tracking. The system is designed to provide a convenient and efficient way for customers to enjoy their favorite meals.</p>
            </div>

            <div class="section">
                <h2>EDUCATION</h2>
                
                <p class="bold">
                    <?php
                    $school1 = "University of the East - Manila";
                    $education1 = "Senior High School, STEM Strand";
                    echo $school1 . "<br>";
                    echo $education1 . "<br>";
                    echo "2022 - 2024"
                    ?>
                </p>
                
                <p class="bold">
                    <?php
                    $school2 = "FEU Institute of Technology";
                    $education2 = "Bachelor of Science in Information Technology with a specialization in Web and Mobile Application Development";
                    echo $school2 . "<br>";
                    echo $education2 . "<br>";
                    echo "2024 - Present"
                    ?>
                </p>
            </div>
            
            <div class="section">
                <h2>CONTACT</h2>

                <p class="bold">
                    <?php
                    $email = "lordzyonronquillo22@gmail.com";
                    $phone = "+63 999-999-9999";
                    echo "Email: " . $email . "<br>";
                    echo "Phone: " . $phone;
                    ?>
                </p>
            </div>
        </div>

        <div class="right">

            <div class="box">
                <h3>SKILLS</h3>
                <p>HTML</p>
                <p>CSS</p>
                <p>JavaScript</p>
                <p>PHP</p>
                <p>Python</p>
                <p>C++</p>
            </div>

            <div class="box">
                <h3>EXPERTISE</h3>
                <p>Web Development</p>
                <p>UI/UX Design</p>
                <p>Graphic Design</p>
                <p>Video Editing</p>
            </div>

            <div class="box">
                <h3>INTERESTS</h3>
                <p>Web Development</p>
                <p>UI/UX Design</p>
                <p>Graphic Design</p>
                <p>Video Editing</p>
            </div>
        </div>
    </div>
</body>
</html>