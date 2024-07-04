<?php
$servername = "localhost";
$username = "insidk9k_localhos";
$password = "aGm6tD9%IqYn";
$dbname = "crudres";


$conn = mysqli_connect($servername,$username,$password,$dbname);

if($conn)
{
    echo "connection done";
}
else
{
    echo "connection failed";
}
?>
