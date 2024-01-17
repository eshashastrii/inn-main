<?php
$conn = mysqli_connect('localhost', 'root', '', 'recipes');
if (!$conn) {
    echo 'Connection error' . mysqli_connect_error();
}
$sql = 'SELECT id, Title,Ingredients, Instructions, Images FROM drinks ORDER BY time';
$result = mysqli_query($conn, $sql);
$records = mysqli_fetch_all($result, MYSQLI_ASSOC);
mysqli_close($conn);
?>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Main-Course</title>
    <link rel="stylesheet" href="main-course.css">
</head>

<body>
    <div class="banner">
        <div class="navbar">
            <img src="LOGO.svg" class="LOGO">
            <ul>
                <li><a href="home.html">HOME</a></li>
                <li><a href="recipe.html">RECIPES</a></li>
                <li><a href="#">ABOUT</a></li>
            </ul>
        </div>
        <div class="heading">
            <h1 style="color: white;">DRINKS</h1>
            <a href="drinkadd.php">+Add recipe</a>
        </div>
        <div class="scrolll">
            <button class="icon" onclick="scrollr()"><img src="before.svg" class="next"></button>

            <div class="scroll">
                <div class="element">
                    <div class="content">
                        <a href="#" class="drinks">
                            <img src="Nimbu-pani.jpg" class="drink">
                            <p style="color: white; font-weight: bolder;" id="drink">Nimbu Pani or Shikanji is an easy
                                and refreshing popular Indian drink made by mixing lemon juice, sugar, black salt, and
                                spices such as roasted cumin powder with water.</p>
                    </div>
                    </a>
                </div>
                <div class="element">
                    <div class="content">
                        <a href="#" class="soups">
                            <img src="Shahi-Lassi-1.jpg" class="drink">
                            <p style="color: white; font-weight: bolder;" id="drink">Homemade Punjabi sweet lassi recipe
                                is creamy, refreshing, and delicious. It is a popular traditional Indian yogurt-based
                                drink that can be easily made in 5 minutes.</p>
                    </div>
                    </a>
                </div>
                <div class="element">
                    <div class="content">
                        <a href="#" class="snacks">
                            <img src="dryfruits-milkshake.webp" class="drink">
                            <p style="color: white; font-weight: bolder;" id="drink">Dry fruit milkshake is a creamy,
                                healthy, and delicious drink made by blending dried fruits and nuts with milk and
                                cardamom powder.</p>
                    </div>
                    </a>
                </div>
                <div class="element">
                    <div class="content">
                        <a href="#" class="desserts">
                            <img src="sol-kadhi-recipe-1.webp" class="drink">
                            <p style="color: white; font-weight: bolder;" id="drink">Solkadhi (also known as solkadi,
                                sol kadhi, kokum kadhi or kokum curry) is a cooling drink best had during hot summers.
                            </p>
                    </div>
                    </a>
                </div>
                <div class="element">
                    <div class="content">
                        <a href="#" class="instantmixes">
                            <img src="Aam-Panna-Kairi-Panna-Recipe-e1626112665335.jpg" class="drink">
                            <p style="color: white; font-weight: bolder;" id="drink">Aam Panna is a popular summer drink
                                made with green mango pulp, sugar, spices, and mint leaves.</p>
                    </div>
                    </a>
                </div>
                <div class="element">
                    <div class="content">
                        <a href="#" class="maincourse">
                            <img src="ADRAK WALI CHAI.jpeg" class="drink">
                            <p style="color: white; font-weight: bolder;" id="drink">Adrak wali Chai or Ginger tea, is a
                                popular Indian beverage made with black tea leaves (or tea bags), milk, ginger, and
                                sugar. Serve this comforting beverage along with morning breakfast or evening snacks.
                            </p>
                    </div>
                    </a>
                </div>
            </div>
            <button class="icon" onclick="scrolll()"><img src="next.svg" class="next"></button>
        </div>
        <div class="container">
            <?php foreach ($records as $record) { ?>
                <a href="drinkdetails.php? id=<?php echo $record['id']; ?>">
                    <div class="element1">
                        <img src="<?php echo $record['Images']; ?>" class='drink'>
                        <h1>
                            <?php echo htmlspecialchars($record['Title']); ?>
                        </h1>
                    </div>
                </a>
            <?php } ?>
        </div>
    </div>

    <script src="recipe.js"></script>

</body>

</html>