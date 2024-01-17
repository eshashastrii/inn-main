<?php
$conn = mysqli_connect('localhost', 'root', '', 'recipes');
if (!$conn) {
    echo 'Connection error' . mysqli_connect_error();
}
$sql = 'SELECT id, Title,Ingredients, Instructions, Images FROM dessert ORDER BY time';
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
            <h1 style="color: white;">DESSERTS</h1>
            <a href="dessertadd.php">+Add recipe</a>
        </div>
        <div class="scrolll">
            <button class="icon" onclick="scrollr()"><img src="before.svg" class="next"></button>

            <div class="scroll">
                <div class="element">
                    <div class="content">
                        <a href="#" class="drinks">
                            <img src="gulab jamun.jpeg" class="drink">
                            <p style="color: white; font-weight: bolder;" id="drink">Soft, spongy and melt in your
                                mouth, Gulab Jamun is drenched in delicately flavored sugar syrup. It’s a traditional
                                sweet perfect for birthdays, parties, celebrations, and festivals!</p>
                    </div>
                    </a>
                </div>
                <div class="element">
                    <div class="content">
                        <a href="#" class="soups">
                            <img src="gajar-halwa-carrot-halwa.jpg" class="drink">
                            <p style="color: white; font-weight: bolder;" id="drink">Gajar Halwa is one of
                                quintessential winter desserts, especially in North Indian, and is rich and decadent.
                                This delicious dessert is delicately scented with cardamom powder and garnished with
                                nuts, making it irresistibly tasty.</p>
                    </div>
                    </a>
                </div>
                <div class="element">
                    <div class="content">
                        <a href="#" class="snacks">
                            <img src="Kaju-Katli-Diwali-Recipe-500x500.jpg" class="drink">
                            <p style="color: white; font-weight: bolder;" id="drink">This gluten free Indian Kaju Katli
                                (Cashew Fudge) recipe is made by grinding and kneading cashew nuts into a nutty dough,
                                then cutting them in diamond shapes. They’re spread with a delicate layer of silver leaf
                                to give a celebratory finish.</p>
                    </div>
                    </a>
                </div>
                <div class="element">
                    <div class="content">
                        <a href="#" class="desserts">
                            <img src="Rasgulla-Image-_3_1024x1024.webp" class="drink">
                            <p style="color: white; font-weight: bolder;" id="drink">Rasgulla is a popular milk based
                                sweet treat that originates from the state of West Bengal. This dessert is prepared with
                                Indian cottage cheese that is shaped into a ball and cooked in sugar syrup.</p>
                    </div>
                    </a>
                </div>
                <div class="element">
                    <div class="content">
                        <a href="#" class="instantmixes">
                            <img src="Besan-Ladoo-Featured.jpg" class="drink">
                            <p style="color: white; font-weight: bolder;" id="drink">Besan Ladoo is one of the most
                                popular Indian desserts. These Ladoos are so fragrant, delicious and have a melt in your
                                mouth texture. One of the easiest Diwali sweet recipes made with gram flour, ghee and
                                sugar laced with aromatic cardamom.</p>
                    </div>
                    </a>
                </div>
                <div class="element">
                    <div class="content">
                        <a href="#" class="maincourse">
                            <img src="kalakand.jpg" class="drink">
                            <p style="color: white; font-weight: bolder;" id="drink">Kalakand (Milk Cake) recipe is a
                                rich, soft, creamy dessert that will melt in your mouth. This cardamom spiced milk cake
                                is a perfect treat for any festival or special occasion.</p>
                    </div>
                    </a>
                </div>
            </div>
            <button class="icon" onclick="scrolll()"><img src="next.svg" class="next"></button>
        </div>
        <div class="container">
            <?php foreach ($records as $record) { ?>
                <a href="dessertdetail.php? id=<?php echo $record['id']; ?>">
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