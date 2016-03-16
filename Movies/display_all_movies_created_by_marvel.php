<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Display All Movies Created by Marvel- Films</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
<h1>Display All Movies Created by Marvel</h1>
<?php
include("menu.html");
include("connect2DB.php");
$sql = "SELECT * from marvelmovies WHERE productionStudio = 'Marvel Studios'";

$result = mysqli_query($db, $sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);


// keeps getting the next row until there are no more to get
while($row = mysqli_fetch_array( $result )) {
    // Print out the contents of each row into a table

    echo $row['marvelMovieID'];
    echo "<br /><br />";
    echo $row['yearReleased'];
    echo "<br /><br />";
    echo $row['title'];
    echo "<br /><br />";
    echo $row['productionStudio'];
    echo "<br /><br />";
    echo $row['notes'];
    echo "<br /><br />";
    echo "<br /><br />";

}



?>
</body>
</html>