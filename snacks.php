<?php
$conn = mysqli_connect('localhost', 'root', '', 'recipes');
if (!$conn) {
    echo 'Connection error' . mysqli_connect_error();
}
$sql = 'SELECT id, Title,Ingredients, Instructions, Images FROM snack ORDER BY time';
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
            <h1 style="color: white;">SNACKS AND APPETIZERS</h1>
            <a href="snackaddd.php">+Add recipe</a>
        </div>
        <div class="scrolll">
            <button class="icon" onclick="scrollr()"><img src="before.svg" class="next"></button>

            <div class="scroll">
                <div class="element">
                    <div class="content">
                        <a href="#" class="drinks">
                            <img src="CHICKEN TIKKA.jpg" class="drink">
                            <p style="color: white; font-weight: bolder;" id="drink">Savor the smoky and flavorful
                                Chicken Tikkas, a popular Indian appetizer. These succulent chicken pieces are marinated
                                in a mixture of yogurt and spices, then grilled or baked to perfection.They are best
                                enjoyed with mint chutney and a squeeze of lemon juice.</p>
                    </div>
                    </a>
                </div>
                <div class="element">
                    <div class="content">
                        <a href="#" class="soups">
                            <img src="indian-samosas.jpg" class="drink">
                            <p style="color: white; font-weight: bolder;" id="drink">Traditional Indian Samosas are a
                                beloved appetizer in India.The crispy pastry pockets are filled with spiced potatoes and
                                peas, then deep-fried until golden, and served with tangy tamarind or mint chutney.Enjoy
                                them as an appetizer or tea-time snack.</p>
                    </div>
                    </a>
                </div>
                <div class="element">
                    <div class="content">
                        <a href="#" class="snacks">
                            <img src="MASALA BHUTTA.jpg" class="drink">
                            <p style="color: white; font-weight: bolder;" id="drink">Experience the flavors of Indian
                                street food with Masala Bhutta, a spicy and tangy corn-on-the-cob.This dish features
                                grilled or boiled corn brushed with spices, lemon juice, and butter, creating great
                                flavor with every bite.</p>
                    </div>
                    </a>
                </div>
                <div class="element">
                    <div class="content">
                        <a href="#" class="desserts">
                            <img src="PAKORAS.jpg" class="drink">
                            <p style="color: white; font-weight: bolder;" id="drink">Enjoy a variety of crispy and
                                delicious pakoras with the Tea Time Pakora Platter.This platter includes an assortment
                                of vegetable cakes, such as onion, potato, and spinach, coated in a spiced chickpea
                                flour batter and deep-fried until golden and crispy.</p>
                    </div>
                    </a>
                </div>
                <div class="element">
                    <div class="content">
                        <a href="#" class="instantmixes">
                            <img src="Dabeli-recipe.jpg" class="drink">
                            <p style="color: white; font-weight: bolder;" id="drink">Enjoy the spicy and tangy flavors
                                of Kachhi Dabeli, a popular street food from Gujarat, India.This dish features a potato
                                filling seasoned with spices, tamarind chutney, and peanuts, served in a bun and topped
                                with sev and pomegranate seeds.</p>
                    </div>
                    </a>
                </div>
                <div class="element">
                    <div class="content">
                        <a href="Maincourse.html" class="maincourse">
                            <img src="Kala-Chana-Chaat-Piping-Pot-Curry.jpg" class="drink">
                            <p style="color: white; font-weight: bolder;" id="drink">Enjoy the tangy and refreshing Kala
                                Chana Chaat, a nutritious and flavorful black chickpea salad.This chaat features boiled
                                black chickpeas mixed with chopped veggies, spicy chutneys, and a blend of spices,
                                creating a light and healthy snack.Great for picnics, potlucks, or a quick meal.</p>
                    </div>
                    </a>
                </div>
            </div>
            <button class="icon" onclick="scrolll()"><img src="next.svg" class="next"></button>
        </div>
        <div class="container">
            <?php foreach ($records as $record) { ?>
                <a href="snackdetail.php? id=<?php echo $record['id']; ?>">
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