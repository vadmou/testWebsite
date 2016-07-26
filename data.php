<?php

require_once 'classes.php';

$publications = array();

// connect to database
$con = mysqli_connect("localhost", "root", "", "test");
mysqli_set_charset($con, 'utf8');

if (mysqli_connect_error()) {
    echo 'Error:' . mysqli_connect_error();
}

// make query
$result = mysqli_query($con, "SELECT * FROM publication");

while ($row = mysqli_fetch_array($result)) {

    $publications [] = new $row['type']($row);
}

?>