<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP String Functions</title>
    <link rel="stylesheet" href="ListNames_style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
</head>
<body>
    <div class="main-card">
        <div class="btn-wrapper">
            <a href="index.php" class="back-btn"><span>←</span> BACK TO MENU</a>
        </div>

        <h1>⟡ LIST OF NAMES ⟡</h1>
        <div class="badge"> using strlen() | ucfirst() | str_replace() | strpos() | strrev() </div>

        <?php
        define('NAME_LIST', [
            'harry potter',
            'hermione granger',
            'ron weasley',
            'albus dumbledore',
            'severus snape',
            'rubeus hagrid',
            'draco malfoy',
            'lord voldemort',
            'sirius black',
            'remus lupin',
            'ginny weasley',
            'neville longbottom',
            'luna lovegood',
            'bellatrix lestrange',
            'minerva mcgonagall',
            'dobby',
            'cedric diggory',
            'cho chang',
            'fleur delacour',
            'fred weasley'
        ]);
        ?>

        <table>
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Characters</th>
                    <th>Uppercase First</th>
                    <th>Vowels → @</th>
                    <th>Position of 'a'</th>
                    <th>Reverse Name</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $counter = 1;
                foreach (NAME_LIST as $name) {
                    $charCount = strlen($name);
                    $upperFirst = ucfirst($name);
                    $replaceVowels = str_replace(['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'], '@', $name);
                    
                    $posA = strpos($name, 'a');
                    if ($posA === false) {
                        $posAText = "Not found";
                    } else {
                        $posAText = $posA;
                    }
                    
                    $reverseName = strrev($name);
                    
                    echo "<tr>";
                    echo "<td>" . $counter . "</td>";
                    echo "<td class='source-name'>" . $name . "</td>";
                    echo "<td>" . $charCount . "</td>";
                    echo "<td>" . $upperFirst . "</td>";
                    echo "<td class='vowel-replaced'>" . $replaceVowels . "</td>";
                    echo "<td class='pos-indicator'>" . $posAText . "</td>";
                    echo "<td class='reversed-output'>" . $reverseName . "</td>";
                    echo "</tr>";
                    $counter++;
                }
                ?>
            </tbody>
        </table>
        
        <div class="info-box">
            <h3>PHP String Functions I Used:: </h3>
            <ul>
                <li><strong>define()</strong> - Creates a constant for the array of 20 names</li>
                <li><strong>strlen()</strong> - Returns the length of a string (counts characters including spaces)</li>
                <li><strong>ucfirst()</strong> - Converts the first character of a string to uppercase</li>
                <li><strong>str_replace()</strong> - Replaces all vowels (a, e, i, o, u) with @ symbol</li>
                <li><strong>strpos()</strong> - Finds the position of the first occurrence of letter 'a' (returns FALSE if not found)</li>
                <li><strong>strrev()</strong> - Reverses the entire string</li>
            </ul>
        </div>
        
        <div class="footer">
            Created by Zyon Ronquillo || 202411259
        </div>
    </div>
</body>
</html>