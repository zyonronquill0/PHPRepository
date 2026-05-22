<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PSA 3.1 | Philippine Senators (20th Congress)</title>
    <link rel="stylesheet" href="activity1.css">
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
        <h1>⟡ SENATORS OF THE PHILIPPINES ⟡</h1>
        <div class="badge">PSA3 · Activity 1</div>
    </div>

    <?php
    $profileACayetano = "https://senate.gov.ph/hq//uploads/temp/504de602-02fe-475a-911b-75c52589b32c.png";
    $profileLegarda = "https://senate.gov.ph/hq//uploads/temp/50ef8465-2893-4ac8-b377-820b5d8fcacb.png";
    $profileAquino = "https://senate.gov.ph/hq//uploads/temp/863a1b50-b1f1-4d92-bbbf-66909b4fee0c.png";
    $profilePCayetano = "https://senate.gov.ph/hq//uploads/temp/d9336dae-a4ba-4d7e-b94e-bd1da6d7715d.png";
    $profileDelaRosa = "https://senate.gov.ph/hq//uploads/temp/80653c43-8461-4aa2-a8c5-1ea6f7f2682c.png";
    $profileEstrada = "https://senate.gov.ph/hq//uploads/temp/c9306349-e11c-4701-97c7-4e888daedfc2.png";
    $profileEscudero = "https://senate.gov.ph/hq//uploads/temp/10ed2058-9445-46da-8927-0a6308c703a2.png";
    $profileGatchalian = "https://senate.gov.ph/hq//uploads/temp/92bddf27-2a8e-4487-9c5f-c747e8fb5b3b.png";
    $profileHontiveros = "https://senate.gov.ph/hq//uploads/temp/f3a88c43-58c3-449d-b1d5-2a69a14f2ddb.png";
    $profilePangilinan = "https://senate.gov.ph/hq//uploads/temp/24507a6b-c2b0-491f-8d69-97f81286428a.png";


    $persons = array(
        array("name" => "Alan Peter Cayetano", "image" => $profileACayetano, "age" => 55, "birthday" => "1970-10-28", "contact" => "09178234911"),
        array("name" => "Loren Legarda", "image" => $profileLegarda, "age" => 66, "birthday" => "1960-01-28", "contact" => "09183347512"),
        array("name" => "Bam Aquino", "image" => $profileAquino, "age" => 49, "birthday" => "1977-05-07", "contact" => "09192284613"),
        array("name" => "Pia Cayetano", "image" => $profilePCayetano, "age" => 60, "birthday" => "1966-03-22", "contact" => "09204918324"),
        array("name" => "Ronald Dela Rosa", "image" => $profileDelaRosa, "age" => 64, "birthday" => "1962-01-21", "contact" => "09217734955"),
        array("name" => "Jinggoy Estrada", "image" => $profileEstrada, "age" => 63, "birthday" => "1963-02-17", "contact" => "09228819436"),
        array("name" => "Chiz Escudero", "image" => $profileEscudero, "age" => 56, "birthday" => "1969-10-10", "contact" => "09245519387"),
        array("name" => "Win Gatchalian", "image" => $profileGatchalian, "age" => 52, "birthday" => "1974-04-06", "contact" => "09256610498"),
        array("name" => "Risa Hontiveros", "image" => $profileHontiveros, "age" => 60, "birthday" => "1966-02-24", "contact" => "09269938159"),
        array("name" => "Kiko Pangilinan", "image" => $profilePangilinan, "age" => 62, "birthday" => "1963-08-24", "contact" => "09314482910")
    );
    
    $names = array();
    for($i = 0; $i < count($persons); $i++) {
        $names[] = $persons[$i]["name"];
    }
    
    sort($names);

    $sortedPersons = array();
    for($i = 0; $i < count($names); $i++) {
        for($j = 0; $j < count($persons); $j++) {
            if($persons[$j]["name"] == $names[$i]) {
                $sortedPersons[] = $persons[$j];
                break;
            }
        }
    }

    echo "<table>";
    echo "<thead>";
    echo "<tr>";
    echo "<th>NO.</th>";
    echo "<th>NAME</th>";
    echo "<th>IMAGE</th>";
    echo "<th>AGE</th>";
    echo "<th>BIRTHDAY</th>";
    echo "<th>CONTACT NUMBER</th>";
    echo "</tr>";
    echo "</thead>";
    echo "<tbody>";

    $counter = 1;
    for($i = 0; $i < count($sortedPersons); $i++) {
        echo "<tr>";
        echo "<td>" . $counter . "</td>";
        echo "<td class='senator-name'>" . $sortedPersons[$i]["name"] . "</td>";
        echo "<td><img class='person-img' src='" . $sortedPersons[$i]["image"] . "' alt='senator'></td>";
        echo "<td>" . $sortedPersons[$i]["age"] . "</td>";
        echo "<td>" . $sortedPersons[$i]["birthday"] . "</td>";
        echo "<td class='contact-field'>" . $sortedPersons[$i]["contact"] . "</td>";
        echo "</tr>";
        $counter++;
    }
    
    echo "</tbody>";
    echo "</table>";
    ?>

    <div class="footer">
        Created by Zyon Ronquillo || 202411259
    </div>
</div>

</body>
</html>