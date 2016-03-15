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

echo "<table border='1'>";
echo "<tr>  </tr>";
// keeps getting the next row until there are no more to get
while($row = mysqli_fetch_array( $result )) {
    // Print out the contents of each row into a table
    echo "<tr><td>";
    echo $row['marvelMovieID'];
    echo "</td><td>";
    echo $row['yearReleased'];
    echo "</td></tr>";
    echo $row['title'];
    echo "</td><td>";
    echo $row['productionStudio'];
    echo "</td></tr>";
    echo $row['notes'];
    echo "</td></tr>";
}

echo "</table>";

?>
</body>
</html>