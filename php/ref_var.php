<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reference Variables</title>
</head>
<body>
    <?php
        // Normal Variable
        $name="foo";
        // Reference to $name
        $$name="bar";

        echo "Value of \$name: ".$name."<br>";
        echo "Value of \$\$name: ".$$name."<br>";
        echo "Value of \$foo: ".$foo."<br>";
    ?>
</body>
</html>