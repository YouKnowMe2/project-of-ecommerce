
<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "software-application";

$con = mysqli_connect($host, $user, $pass, $db);

if(!$con){
    die("Database Connection Failed".mysqli_connect_error());
}


?>
