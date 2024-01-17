<?php
$conn = mysqli_connect('localhost', 'root', '', 'recipes');
if (!$conn) {
    echo 'Connection error' . mysqli_connect_error();
}
if (isset($_GET['id'])) {
    $id = mysqli_real_escape_string($conn, $_GET['id']);
    $sql = "SELECT id, Title, Ingredients, Instructions, Images FROM drinks WHERE id = $id";
    $result = mysqli_query($conn, $sql);
    $records = mysqli_fetch_assoc($result);
    mysqli_close($conn);
}
?>


<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Main-Course</title>
    <link rel="stylesheet" href="details.css">
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
            <h1>
                <?php echo htmlspecialchars($records['Title']) ?>
            </h1>
        </div>
    </div>
    <div class="container">
        <img src="<?php echo $records['Images']; ?>" class='drink'>
        <h2>Ingredients:</h2>
        <p>
            <?php echo htmlspecialchars($records['Ingredients']); ?>
        </p>
        <h2>Instructions:</h2>
        <p>
            <?php echo htmlspecialchars($records['Instructions']); ?>
        </p>
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
</body>

</html>