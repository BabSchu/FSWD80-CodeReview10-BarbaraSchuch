<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cr10_barbara_schuch_biglibrary";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//printf("Initial character set: %s\n", $conn->character_set_name());

/* change character set to utf8 */

if (!$conn->set_charset("utf8")) {
    printf("Error loading character set utf8: %s\n", $conn->error);
    exit();
} else {
    $conn->character_set_name();
}