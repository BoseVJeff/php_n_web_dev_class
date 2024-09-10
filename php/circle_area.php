<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Area of Circle</title>
</head>
<body>
    <form action=<?php echo $_SERVER['REQUEST_URI']; ?> method="get">
        <label for="radius">Radius</label>
        <input type="number" name="radius" id="radius" min="0" value=<?php echo $_GET["radius"]??"" ?>>
        <input type="submit" value="Submit">
    </form>
    <?php
        define('PI', 3.14);
        if(isset($_GET["radius"])) {
            $rad=$_GET["radius"];
            echo "Area is ".PI*$rad*$rad;
        }
    ?>
</body>
</html>