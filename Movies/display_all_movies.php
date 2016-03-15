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


// keeps getting the next row until there are no more to get
while($row = mysqli_fetch_array( $result )) {
    // Print out the contents of each row into a table

    echo $row['marvelMovieID'];

    echo $row['yearReleased'];

    echo $row['title'];

    echo $row['productionStudio'];

    echo $row['notes'];

    echo "<br /><br />";

}



?>
</body>
</html>