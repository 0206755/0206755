<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Display All Movies Created after 2010 - Films</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/main-styles.css">
    <link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Cabin' rel='stylesheet' type='text/css'>
</head>
<body>
<main>
<h1>Display All Movies Created after 2010</h1>
<?php
include("menu.html");
include("connect2DB.php");
$sql = "SELECT * from marvelmovies WHERE yearReleased > '2010'";

$result = mysqli_query($db, $sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);


// keeps getting the next row until there are no more to get
while($row = mysqli_fetch_array( $result )) {
    // Print out the contents of each row into a table
    echo "<p>";
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
    echo "</p>";

}



?>
</main>
</body>
</html>