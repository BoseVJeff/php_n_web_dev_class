<?php
// $con=mysqli_connect("localhost:3306","root","vineet","student");
// if($con!=null) {
//     echo "Connection success!";
//     $conn->close();
// } else {
//     echo "Connection Failure! Error: ".mysqli_error();
// }
$host="localhost";
$port=3305;
$socket="";
$user="root";
$password="vineet";
$dbname="php_class";

$conn = new mysqli($host, $user, $password, $dbname, $port, $socket);

if($conn!=null) {
    echo "Connection Success!";
    $conn->close();
} else {
    echo "Connection Failed! Error: ".mysqli_error();
}

?>