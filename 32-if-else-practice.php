<?php
    if($_SERVER["REQUEST_METHOD"] === "POST"){
        echo $_POST["username"];
        echo "<br>";
        echo $_POST["lang"];
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Support</title>
</head>
<body>
    <form action="" method="POST">
        <input type="text" name="username">
        <select name="lang">
            <option value="ar">Arabic</option>
            <option value="en">English</option>
            <option value="ar">Arabiv</option>
            <option value="sp">Spanish</option>
        </select>
        <input type="submit" value="Go">
    </form>
</body>
</html>