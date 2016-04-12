<?php
/**
 * Created by PhpStorm.
 * User: 0206755
 * Date: 11/04/2016
 * Time: 09:55
 */

$username = $_POST["name"];
$password = $_POST["password"];

if ($username == "leigh" && $password == "leigh"){
    setcookie('access_level_cookie','standarduser');
}

header ('Location:loggedIn.php');

?>
