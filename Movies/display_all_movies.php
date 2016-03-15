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
$result = mysqli_query("Select * FROM marvelmovies")
or die(mysqli_error());

echo "<table border='1'>";
echo "<tr> <th>Name</th> <th>Age</th> </tr>";
// keeps getting the next row until there are no more to get
while($row = mysqli_fetch_array( $result )) {
    // Print out the contents of each row into a table
    echo "<tr><td>";
    echo $row['name'];
    echo "</td><td>";
    echo $row['age'];
    echo "</td></tr>";
}
echo "</table>";
?>
</body>
</html>