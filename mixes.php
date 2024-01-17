<?php
$conn = mysqli_connect('localhost', 'root', '', 'recipes');
if (!$conn) {
    echo 'Connection error' . mysqli_connect_error();
}
$sql = 'SELECT id, Title,Ingredients, Instructions, Images FROM mixes ORDER BY time';
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
            <h1 style="color: white;">INSTANT-MIXES</h1>
            <a href="mixesadd.php">+Add recipe</a>
        </div>
        <div class="scrolll">
            <button class="icon" onclick="scrollr()"><img src="before.svg" class="next"></button>

            <div class="scroll">
                <div class="element">
                    <div class="content">
                        <a href="#" class="drinks">
                            <img src="PODI.jpg" class="drink">
                            <p style="color: white; font-weight: bolder;" id="drink">Idli podi, chutney pudi, or milagai
                                podi is a coarse spice powder, originating from the Indian subcontinent, with a mixture
                                of ground dry spices that typically contains dried chilis, black gram, chickpeas, salt
                                and sesame seeds. </p>
                    </div>
                    </a>
                </div>
                <div class="element">
                    <div class="content">
                        <a href="#" class="soups">
                            <img src="Dates+Paste.jpeg" class="drink">
                            <p style="color: white; font-weight: bolder;" id="drink">Date paste is a natural sweetener
                                made from pureed dates. It offers a healthier alternative to refined sugar and is often
                                used in a variety of culinary applications.</p>
                    </div>
                    </a>
                </div>
                <div class="element">
                    <div class="content">
                        <a href="#" class="snacks">
                            <img src="hazelnut.jpeg" class="drink">
                            <p style="color: white; font-weight: bolder;" id="drink">Hazelnut Chocolate Chip Granola is
                                a delightful and nutritious blend of whole grains, nuts, chocolate chips, and natural
                                sweeteners. This granola variant combines the rich, toasty flavor of hazelnuts with the
                                sweet and decadent touch of chocolate chips.</p>
                    </div>
                    </a>
                </div>
                <div class="element">
                    <div class="content">
                        <a href="#" class="desserts">
                            <img src="instant dosa.jpeg" class="drink">
                            <p style="color: white; font-weight: bolder;" id="drink">Instant Oats Dosa is a quick and
                                healthy variation of the traditional South Indian dosa, a thin and crispy fermented
                                pancake made from a batter of rice and urad dal. This modern adaptation incorporates
                                oats, providing a nutritious twist to the classic dosa. </p>
                    </div>
                    </a>
                </div>
                <div class="element">
                    <div class="content">
                        <a href="#" class="instantmixes">
                            <img src="energy drink.jpeg" class="drink">
                            <p style="color: white; font-weight: bolder;" id="drink">The Almond Saffron Energy Drink is
                                a vibrant and invigorating beverage that combines the rich, nutty flavor of almonds with
                                the exquisite essence of saffron, creating a drink that not only delights the senses but
                                also provides a natural boost of energy.</p>
                    </div>
                    </a>
                </div>
                <div class="element">
                    <div class="content">
                        <a href="Maincourse.html" class="maincourse">
                            <img src="curry.jpg" class="drink">
                            <p style="color: white; font-weight: bolder;" id="drink">TAn instant gravy for Indian bread
                                is a quick and flavorful sauce that pairs perfectly with various Indian bread like
                                chapati, naan, roti, or paratha. This versatile and time-saving recipe allows you to
                                create a rich, aromatic curry in a short amount of time.</p>
                    </div>
                    </a>
                </div>
            </div>
            <button class="icon" onclick="scrolll()"><img src="next.svg" class="next"></button>
        </div>
        <div class="container">
            <?php foreach ($records as $record) { ?>
                <a href="mixesdetails.php? id=<?php echo $record['id']; ?>">
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