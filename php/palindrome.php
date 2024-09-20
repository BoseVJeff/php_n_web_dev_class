<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Sum of Digits</title>
</head>
<body>
    <form action=<?php echo $_SERVER['REQUEST_URI']; ?> method="get">
        <label for="num">Enter a number</label>
        <input type="number" name="num" id="num" min="0" value=<?php echo $_GET["num"]??"" ?>>
        <input type="submit" value="Submit">
    </form>
    Is number a palindrome: 
    <?php
        if(isset($_GET["num"])) {
            $num=$_GET["num"];

            $rev_num=strrev($num);

            if ($num===$rev_num) {
                echo "Yes!";
            } else {
                echo "No!";
            }

        } else {
            echo "Number invalid!";
        }
    ?>
</body>
</html>