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
    Sum of digits is: 
    <?php
        if(isset($_GET["num"])) {
            $num=$_GET["num"];
            $sum=0;
            
            // Using math logic
            while ($num>0) {
                $sum+=$num%10;
                $num=floor($num/10);
            }

            // Using string parsing
            $sum=0;
            // for ($i=0; $i < strlen($num); $i++) { 
            //     $rem=$num%10;
            //     $sum=$sum+$rem;
            //     $num=floor($num/10);
            //     // echo $i."<br>";
            // }

            echo $sum;

        } else {
            echo "Number invalid!";
        }
    ?>
</body>
</html>