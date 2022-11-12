<?php
$localhost = "localhost";
$user = "root";
$pass = "";
$db_name = "be17_cr4_mauritzgstaettner_biglibrary";

$conn = mysqli_connect($localhost, $user, $pass, $db_name);

if (!$conn) {
    echo "There was an error";
}
try {
    $conn = mysqli_connect($localhost, $user, $pass, $db_name);
    // echo "Connected";
} catch (Exception $e) {
    echo "Failed to connect: " . mysqli_connect_error();
}

function var_dump_pretty($var)
{
    echo "<pre>";
    var_dump($var);
    echo "</pre>";
}