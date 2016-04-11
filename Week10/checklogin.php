<?php
/**
 * Created by PhpStorm.
 * User: 0206755
 * Date: 11/04/2016
 * Time: 09:55
 */

$username = $_POST["leigh"];
$password = $_POST["leigh"];

if ($username == "username" && $password == "password"){
    setcookie('access_level_cookie','standarduser');
}

header ('Location:loggedIn.php');

?>
