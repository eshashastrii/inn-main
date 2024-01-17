<?php
     $Username = $_POST['Username'];
     $Email = $_POST['Email'];
     $Password = $_POST['Password'];
     $conn = new mysqli('localhost','root','','data');
     if ($conn->connect_error) {
        die('Connection Failed : '.$conn->connect_error);
     }else{
        $stmt = $conn->prepare("insert into registration(Username, Email, Password)
        values(?,?,?)");
        $stmt->bind_param("sss", $Username, $Email, $Password);
        $stmt->execute();
        echo"registration Successfully...
        Head Back to Login Page";
        header("Location: Sign in.html");
        $stmt->close();
        $conn->close();
     }    
?>