<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Even Odd</title>
</head>
<body>
    <form action=<?php echo $_SERVER['REQUEST_URI']; ?> method="get">
        <label for="num">Enter a number</label>
        <input type="number" name="num" id="num" min="0" value=<?php echo $_GET["num"]??"" ?>>
        <input type="submit" value="Submit">
    </form>
    Number is: 
    <?php

        function evenOdd($a) : bool {
            if ($a%2===0) {
                return TRUE;
            } else {
                return FALSE;
            }
            
        }

        if(isset($_GET["num"])) {
            $num=$_GET["num"];

            if(evenOdd($num)) {
                echo "Even";
            } else {
                echo "Odd";
            }

        } else {
            echo "Number invalid!";
        }
    ?>
</body>
</html>