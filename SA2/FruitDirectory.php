<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fruit Directory · Simple Fruits</title>
    <link rel="stylesheet" href="FDstyle.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
</head>
<body>
<div class="main-card">
    <div class="btn-wrapper">
        <a href="Index.php" class="back-btn">← BACK TO MENU</a>
    </div>
    
    <div class="title-wrapper">
        <h1>MY FRUIT DIRECTORY</h1>
        <div class="subtitle">alphabetical order</div>
    </div>

    <?php
    $fruits = array(
        array("name" => "Apple", "image" => "https://cdn-icons-png.flaticon.com/512/415/415733.png", "description" => "A firm round fruit with a crunch, available in various sweet or tart varieties.", "facts" => "They contain no fat, sodium, or cholesterol and are composed of about 85 percent water."),
        array("name" => "Banana", "image" => "https://cdn-icons-png.flaticon.com/512/2909/2909761.png", "description" => "An elongated, curved fruit covered in a thick protective skin that peels away easily.", "facts" => "A cluster of these fruits is botanically referred to as a hand, while an individual fruit is called a finger."),
        array("name" => "Grapes", "image" => "https://img.magnific.com/premium-vector/grape-flat-vector-illustration-white-background_674398-556.jpg?semt=ais_hybrid&w=740&q=80", "description" => "Berries that develop in large bunches, ranging from deep purple hues to translucent greens.", "facts" => "It requires roughly 2.5 pounds of these fresh berries to manufacture a single bottle of wine."),
        array("name" => "Lemon", "image" => "https://cdn.creativefabrica.com/2021/10/14/Lemon-Illustration-Graphics-18821087-2-580x386.jpg", "description" => "An oval-shaped, bright yellow citrus fruit valued for its highly acidic and sour juice.", "facts" => "Just two tablespoons of this fresh citrus juice provides half of your daily requirement of Vitamin C."),
        array("name" => "Mango", "image" => "https://static.vecteezy.com/system/resources/previews/013/236/593/non_2x/fresh-mango-whole-and-slice-with-leaves-illustration-free-vector.jpg", "description" => "A juicy tropical stone fruit with a leather-like skin and sweet, golden-orange flesh.", "facts" => "They are distant relatives of cashews and pistachios, belonging to the exact same plant family."),
        array("name" => "Orange", "image" => "https://img.magnific.com/free-vector/hand-drawn-colorful-orange-illustration_53876-2977.jpg", "description" => "A round citrus fruit split internally into juicy, seed-bearing segments enclosed by an aromatic peel.", "facts" => "The color was named after the fruit itself, as the word did not exist in English before its arrival."),
        array("name" => "Papaya", "image" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRphXcuAt4LL4n0aGfqWngUeMbABhHDNaTWFA&s", "description" => "A large, dynamic melon-like fruit packed with dozens of small, black peppercorn-like seeds.", "facts" => "Christopher Columbus famously described this tropical sweet delicacy as the Fruit of the Angels."),
        array("name" => "Peach", "image" => "https://thumbs.dreamstime.com/b/peach-icon-hand-drawn-vector-illustration-44274894.jpg", "description" => "A brownie-velvet skinned fruit featuring sweet, delicate flesh surrounding a large central furrowed pit.", "facts" => "They are a historical symbol of longevity and good fortune within traditional Asian cultures."),
        array("name" => "Pear", "image" => "https://thumbs.dreamstime.com/b/pear-drawing-transparent-background-png-format-ideal-use-graphic-projects-illustrations-352907883.jpg", "description" => "A sweet, bell-shaped fruit that tapers uniquely at the top, offering a soft, granular texture.", "facts" => "Unlike most other options, these fruits turn soft and fully ripen only after being removed from the tree."),
        array("name" => "Pineapple", "image" => "https://static.vecteezy.com/system/resources/thumbnails/044/805/710/small/cartoon-pineapple-logo-illustration-no-background-perfect-for-print-on-demand-png.png", "description" => "A large tropical fruit with a rough, segmented skin topped by a crown of stiff, spiky leaves.", "facts" => "It is not a single entity, but rather a collection of individual berries fused together around a core."),
        array("name" => "Strawberry", "image" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcStActxqBr8Nph02smwyxY0aOfuZEcrZkM9yA&s", "description" => "A bright red, heart-shaped juicy accessory fruit featuring a sweet fragrance and tiny outer seeds.", "facts" => "Members of the rose family, they are unique because they carry their seeds entirely on their exterior skin."),
        array("name" => "Watermelon", "image" => "https://static.vecteezy.com/system/resources/previews/005/490/728/non_2x/watermelon-slice-set-watermelon-illustration-fruit-design-watermelon-slice-dense-illustration-in-flat-design-isolated-on-white-vector.jpg", "description" => "A massive fruit defined by a hard, dark green striped rind covering a sweet, pink fluid-filled interior.", "facts" => "Every single part of this giant melon is edible, including the thick green rinds and inner seeds.")
    );

    $names = array();
    for ($i = 0; $i < count($fruits); $i++) {
        $names[] = $fruits[$i]["name"];
    }
    sort($names);

    $sortedFruits = array();
    for ($i = 0; $i < count($names); $i++) {
        for ($j = 0; $j < count($fruits); $j++) {
            if ($fruits[$j]["name"] == $names[$i]) {
                $sortedFruits[] = $fruits[$j];
                break;
            }
        }
    }

    echo "<table>";
    echo "<thead>";
    echo "<tr><th>Image</th><th>Name</th><th>Description</th><th>Facts</th></tr>";
    echo "</thead>";
    echo "<tbody>";
    for ($i = 0; $i < count($sortedFruits); $i++) {
        echo "<tr>";
        echo "<td><img class='fruit-img' src='" . $sortedFruits[$i]["image"] . "' alt='" . $sortedFruits[$i]["name"] . "'></td>";
        echo "<td class='fruit-name'><strong>" . $sortedFruits[$i]["name"] . "</strong></td>";
        echo "<td>" . $sortedFruits[$i]["description"] . "</td>";
        echo "<td class='fruit-facts'>" . $sortedFruits[$i]["facts"] . "</td>";
        echo "</tr>";
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