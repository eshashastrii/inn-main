<?php
$conn = mysqli_connect('localhost', 'root', '', 'recipes');
if (!$conn) {
    echo 'Connection error' . mysqli_connect_error();
}
if (isset($_POST['submit'])) {
    $title = mysqli_real_escape_string($conn, $_POST['Title']);
    $ins = mysqli_real_escape_string($conn, $_POST['instructions']);
    $ing = mysqli_real_escape_string($conn, $_POST['ingredients']);
    $file = $_FILES['file'];
    $fileName = $_FILES['file']['name'];
    $fileTmpName = $_FILES['file']['tmp_name'];
    $fileSize = $_FILES['file']['size'];
    $fileError = $_FILES['file']['error'];
    $fileType = $_FILES['file']['type'];
    $fileExt = explode('.', $fileName);
    $fileExt1 = strtolower(end($fileExt));
    $allowed = array('jpg', 'jpeg', 'png');
    if (in_array($fileExt1, $allowed)) {
        if ($fileError === 0) {
            $folder = "Images/" . $fileName;
            move_uploaded_file($fileTmpName, $folder);
            $sql = "INSERT INTO drinks(Title, Ingredients, Instructions, Images) VALUES('$title','$ing','$ins', '$folder')";
        } else {
            echo "There was an error uploading your file";
        }
    } else {
        echo "You cannot upload files of this type";
    }
    if (mysqli_query($conn, $sql)) {
        header('Location: drinks.php');
    } else {
        echo 'error';
    }
}
?>

<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ADD-RECIPES</title>
    <link rel="stylesheet" href="add.css">
</head>

<body>
    <div class="banner">
        <div class="navbar">
            <img src="LOGO.svg" class="LOGO">
            <ul class="nav">
                <li><a href="home.html">HOME</a></li>
                <li><a href="recipe.html">RECIPES</a></li>
                <li><a href="#">ABOUT</a></li>
            </ul>
        </div>
        <div class="heading">
            <h1 style="color: white;">ADD RECIPES</h1>
        </div>
    </div>
    <div class="container">
        <form action="" method="POST" enctype="multipart/form-data">
            <label for="Title">Title:</label>
            <input type="text" placeholder="Enter Title" name="Title">
            <label for="file">Photo:</label>
            <input type="file" name="file" required>
            <label for="instructions">Instructions:</label>
            <input type="text" placeholder="Enter Instructions" name="instructions">
            <label for="ingredients">Ingredients:</label>
            <input type="text" placeholder="Enter Ingredients" name="ingredients">
            <button type="submit" name='submit'>SUBMIT</button>
        </form>
    </div>
</body>

</html>