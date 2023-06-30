<?php

$host = 'localhost';
$username = 'root';
$password = 'Peacebewithyouall2020!!';
$db_name = 'CGUIDE';

$conn = mysqli_connect($host, $username, $password, $db_name);

if (mysqli_connect_errno()) {
    echo "Connection Failed" . mysqli_connect_error();
}

?>
