<?php
require_once 'include/config.php';

$conn = mysqli_connect(HOST, USER, PASS, DATABASE)
or die("Connection Failed: " . mysqli_error($conn));


$sql = "SELECT * FROM roles";
$result = mysqli_query($conn, $sql) or die("Error in Selection: " . mysqli_error($conn));


while ($row = mysqli_fetch_assoc($result)) {

    $myArray[] = $row;

}

print json_encode($myArray);


mysqli_close($conn);