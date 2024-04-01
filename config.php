<?php

$hostName = "localhost";
$dbUser = "root";
$dbPassword = "";
$dbName = "barangay_db";
$conn = mysqli_connect($hostName, $dbUser, $dbPassword, $dbName, 3307);
if (mysqli_connect_errno()) {
    echo "Failed";
    exit();
}
echo "Connection Success";
