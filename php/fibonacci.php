<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fibonacci Series PHP</title>
</head>
<body>
    <form action=<?php echo $_SERVER['REQUEST_URI']; ?> method="get">
        <label for="cnt">Number of terms</label>
        <input type="number" name="cnt" id="cnt" min="0" step="1" value=<?php echo $_GET["cnt"]??"" ?>>
        <input type="submit" value="Submit">
    </form>
    <?php
        if(isset($_GET["cnt"])) {
            $cnt=$_GET["cnt"];
            $arr=array([]);
            for ($i=0; $i < $cnt; $i++) {
                if ($i===0 || $i===1) {
                    $arr[$i]=$i;
                } else {
                    $arr[$i]=$arr[$i-1]+$arr[$i-2];
                }
                echo $arr[$i]." | ";
            }
        }
    ?>
</body>
</html>