<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Associative Arrays</title>
</head>
<body>
    <?php
    // First way
    $data=array("id"=>101,"name"=>"zxcvbn","address"=>"azerty");

    echo $data["id"]."<br>";
    echo $data["name"]."<br>";
    echo $data["address"]."<br>";

    // Second way
    $edata["eid"]=101;
    $edata["dept"]="sales";
    $edata["salary"]=25000;
    
    echo "ID: ".$edata["eid"]."<br>";
    echo "Department: ".$edata["dept"]."<br>";
    echo "Salary: ".$edata["salary"]."<br>";

    foreach ($edata as $key => $value) {
        echo $key.": ".$value."<br>";
    }
    ?>
</body>
</html>