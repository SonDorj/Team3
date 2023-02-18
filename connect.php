<?php

$servername = "localhost";
$username = "Team_3";
$password ="";
$db = "event_db";

$con = mysqli_connect($servername, $username, $password, $db);

if(!$con){
    die("Connection failed" . mysqli_connect_error());
}

$sql = "SELECT * FROM table_name";
$result = mysqli_query($con, $sql);

mysqli_close($con);
?>
