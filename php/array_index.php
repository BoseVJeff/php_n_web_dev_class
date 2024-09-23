<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Index</title>
</head>
<body>
    <?php
    // First way
    $name=array("a1","b1","c1");
    echo $name[0]."<br>";
    echo $name[1]."<br>";
    echo $name[2]."<br>";

    // Second Way
    $rno[0]=101;
    $rno[1]=102;
    $rno[2]=103;

    echo $rno[0]."<br>";
    echo $rno[1]."<br>";
    echo $rno[2]."<br>";

    for ($i=0; $i < 3; $i++) { 
        echo $rno[$i]."<br>";
    }
    ?>
</body>
</html>