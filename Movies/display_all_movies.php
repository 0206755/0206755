<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Display All Movies - Films</title>
</head>
<body>
<h1>Display All Movies</h1>
<?php
include("header.html");
include("connect2DB.php");
$sql = "SELECT * from marvelmovies";

$result = mysqli_query($db, $sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
while($row = mysqli_fetch_array( $result )) {
    echo $row;
}
?>
</body>
</html>