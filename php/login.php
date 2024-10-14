<?php declare(strict_types=1);
$name=$_POST["username"];
$pass=$_POST["password"];

session_start();

$_SESSION["user"]=$name;

if(!isset($_SESSION["user"])) {
    echo "Unable to create session!";
} else {
    echo "Created session for user with name ".$name;
}

echo "<br>";
echo "Go to <a href='./session2.php'>Next Session</a>";

?>