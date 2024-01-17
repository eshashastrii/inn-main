<?php
$conn = mysqli_connect('localhost', 'root', '', 'recipes');
if (!$conn) {
    echo 'Connection error' . mysqli_connect_error();
}
$sql = 'SELECT id, Title,Ingredients, Instructions, Images FROM recipe ORDER BY time';
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
            <a href="add.php">+Add recipe</a>
        </div>
        <div class="scrolll">
            <button class="icon" onclick="scrollr()"><img src="before.svg" class="next"></button>

            <div class="scroll">
                <div class="element">
                    <div class="content">
                        <a href="#" class="drinks">
                            <img src="biryani.jpg" class="drink">
                            <p style="color: white; font-weight: bolder;" id="drink">If there’s one dish that almost
                                everyone knows in Indian cuisine, it’s biryani. The origin of this aromatic mixture of
                                rice, spices and meat is usually credited to the Mughal kings who once ruled the
                                subcontinent, but it’s now a popular dish all over the country.</p>
                    </div>
                    </a>
                </div>
                <div class="element">
                    <div class="content">
                        <a href="#" class="soups">
                            <img src="Butter-Chicken.jpg" class="drink">
                            <p style="color: white; font-weight: bolder;" id="drink">If biryani is the most well-known
                                Indian dish, butter chicken (or murgh makhani) is a close second. Like most rich, creamy
                                dishes, this originated in the northern region of India, and was created by Kundan Lal
                                Gujral in the late 1940s.</p>
                    </div>
                    </a>
                </div>
                <div class="element">
                    <div class="content">
                        <a href="#" class="snacks">
                            <img src="chole-bhature-recipe.jpg" class="drink">
                            <p style="color: white; font-weight: bolder;" id="drink">One of the most popular vegetarian
                                North Indian recipes, chole refers to the spicy garbanzo bean and tomato gravy (also
                                known as chana masala), while bhature are the fluffy deep-fried flatbreads served
                                alongside it.</p>
                    </div>
                    </a>
                </div>
                <div class="element">
                    <div class="content">
                        <a href="#" class="desserts">
                            <img src="dalmakhani.jpg" class="drink">
                            <p style="color: white; font-weight: bolder;" id="drink">Another popular North Indian
                                vegetarian dish, dal makhani is a creamy preparation made with black lentils (urad dal)
                                and served with roti. A hot piece of charcoal is sometimes dropped into the final
                                mixture to infuse a smoky flavor into the gravy.</p>
                    </div>
                    </a>
                </div>
                <div class="element">
                    <div class="content">
                        <a href="#" class="instantmixes">
                            <img src="palakpaneer.jpg" class="drink">
                            <p style="color: white; font-weight: bolder;" id="drink">North Indian vegetarian cusine
                                relies often on paneer, or Indian cottage cheese. One of the most popular Indian main
                                dishes involves dunking the creamy cubes into a rich spinach (palak) gravy.</p>
                    </div>
                    </a>
                </div>
                <div class="element">
                    <div class="content">
                        <a href="Maincourse.html" class="maincourse">
                            <img src="undhiyu.jpg" class="drink">
                            <p style="color: white; font-weight: bolder;" id="drink">The famously vegetarian-heavy
                                western state of Gujurat thrives on undhiyu, its signature mixed vegetable preparation.
                                The first half of the word, undhu, means upside-down, and refers to the traditional
                                method of cooking it upside down in earthen pots.</p>
                    </div>
                    </a>
                </div>
            </div>
            <button class="icon" onclick="scrolll()"><img src="next.svg" class="next"></button>
        </div>

    </div>
    <div class="container">
        <?php foreach ($records as $record) { ?>
            <a href="details.php? id=<?php echo $record['id']; ?>">
                <div class="element1">
                    <img src="<?php echo $record['Images']; ?>" class='drink'>
                    <h1>
                        <?php echo htmlspecialchars($record['Title']); ?>
                    </h1>
                </div>
            </a>
        <?php } ?>
    </div>

    <script src="recipe.js"></script>

</body>

</html>