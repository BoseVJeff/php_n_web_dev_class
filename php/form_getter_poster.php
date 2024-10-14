<?php
$fname="";
$addr="";
$email="";
$pass="";
$mob="";
$gen="";
$met="";

if(strtolower($_GET["method"]??"")==="post") {
    $met="POST";
    $fname=$_POST["fname"];
    $addr=$_POST["address"];
    $email=$_POST["email"];
    $pass=$_POST["password"];
    $mob=$_POST["mobile"];
    $gen=$_POST["gender"];
} else {
    $met="POST";
    $fname=$_GET["fname"];
    $addr=$_GET["address"];
    $email=$_GET["email"];
    $pass=$_GET["password"];
    $mob=$_GET["mobile"];
    $gen=$_GET["gender"];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reciever</title>
</head>
<body>
    Data recieved via HTTP <?php echo strtoupper($met); ?>
    <br>
    Full Name: <?php echo $fname; ?>
    <br>
    Address: <?php echo $addr; ?>
    <br>
    Email: <?php echo $email; ?>
    <br>
    Password: <?php echo $pass; ?>
    <br>
    Mobile No.: <?php echo $mob; ?>
    <br>
    Gender: <?php echo $gen; ?>
</body>
</html>