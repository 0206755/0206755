<?php
/**
 * Created by PhpStorm.
 * User: 0206755
 * Date: 14/03/2016
 * Time: 10:01
 */

include("connect2DB.php");

if (empty($_POST["username"]) || empty($_POST["password"])) {
    echo "Both fields are required";
}else
{
    $username=$_POST['username'];
    $password=$_POST['password'];

    $sql="SELECT * FROM users WHERE username='". $username ."' and password='". $password . "'";
    $result=mysqli_query($db,$sql);

    $valueFound = 0;
    while($row = $result->fetch_array())
    {
        $valueFound = 1;
    }

    if ($valueFound==1)
    {
        header ("location: home.php");
    }
    else
    {
        echo "Incorrect username or password";
    }

}
?>