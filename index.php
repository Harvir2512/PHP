<?php

$conn = mysqli_connect("localhost", "root", "", "wine_shop");

if (!$conn) {
    die("Database Connection Failed: " . mysqli_connect_error());
}

echo "Database Connected Successfully";

?>