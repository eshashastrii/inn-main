<?php
$conn = mysqli_connect('localhost', 'root', '', 'recipes');
if (!$conn) {
    echo 'Connection error' . mysqli_connect_error();
}
$sql = 'SELECT id, Title,Ingredients, Instructions, Images FROM soup ORDER BY time';
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
            <h1 style="color: white;">MAIN-COURSE</h1>
            <a href="soupadd.php">+Add recipe</a>
        </div>
        <div class="scrolll">
            <button class="icon" onclick="scrollr()"><img src="before.svg" class="next"></button>

            <div class="scroll">
                <div class="element">
                    <div class="content">
                        <a href="#" class="drinks">
                            <img src="Palak-Soup-Recipe.webp" class="drink">
                            <p style="color: white; font-weight: bolder;" id="drink">Palak soup is a vegetarian soup
                                primarily made of spinach. If you think it’s bland, think again. This soup is bursting
                                with flavor! Served hot, it’s the perfect way to warm you up on a cold wintery evening.
                                It’s Indian comfort food that’s good for you at the same time.</p>
                    </div>
                    </a>
                </div>
                <div class="element">
                    <div class="content">
                        <a href="#" class="soups">
                            <img src="mulligatawny-soup-2-Edit.jpg" class="drink">
                            <p style="color: white; font-weight: bolder;" id="drink">Mulligatawny soup is a curry and
                                coconut-based soup loaded with lentils, carrots, and apples.It seems like an odd
                                combination, but the flavors work really well together.While it’s technically a soup,
                                it’s so thick and creamy that we might as well call it a stew.</p>
                    </div>
                    </a>
                </div>
                <div class="element">
                    <div class="content">
                        <a href="#" class="snacks">
                            <img src="Tomato-Soup-Daens-Kitchen-High-Res-6-scaled.jpg" class="drink">
                            <p style="color: white; font-weight: bolder;" id="drink">Indian tomato soup is a lot similar
                                to regular tomato soup, but infused with a ton of Indian spices.Authentic or not, one
                                thing’s for sure: this soup is the perfect way to start any meal.</p>
                    </div>
                    </a>
                </div>
                <div class="element">
                    <div class="content">
                        <a href="#" class="desserts">
                            <img src="garam masala soup.jpg" class="drink">
                            <p style="color: white; font-weight: bolder;" id="drink">Carrot soup with a fun Indian
                                twist: that’s what this recipe is all about. Coconut milk plus Indian spices transform
                                the soup from basic to brilliant. Here’s a breakdown of what goes on in this soup: first
                                up are roasted carrots and onions with a deep, caramelized flavor.</p>
                    </div>
                    </a>
                </div>
                <div class="element">
                    <div class="content">
                        <a href="#" class="instantmixes">
                            <img src="indian lentil soup.jpg" class="drink">
                            <p style="color: white; font-weight: bolder;" id="drink">Dal shorva is a thick and creamy
                                soup made with lentils.Infused with a blend of turmeric, cumin, garam masala, chili,
                                coriander, and mustard seeds, this soup is brimming with cozy, warming flavors.It’s so
                                good, it can rival any you’ve had in an authentic Indian restaurant.</p>
                    </div>
                    </a>
                </div>
                <div class="element">
                    <div class="content">
                        <a href="Maincourse.html" class="maincourse">
                            <img src="chickpea soup.jpg" class="drink">
                            <p style="color: white; font-weight: bolder;" id="drink">Chickpeas are a common ingredient
                                in Indian cooking. These affordable legumes are used to make rice, bread, and in this
                                case, soup.Chickpea soup is a thick and creamy soup made with the most basic pantry
                                ingredients.</p>
                    </div>
                    </a>
                </div>
            </div>
            <button class="icon" onclick="scrolll()"><img src="next.svg" class="next"></button>
        </div>
        <div class="container">
            <?php foreach ($records as $record) { ?>
                <a href="soupdetails.php? id=<?php echo $record['id']; ?>">
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