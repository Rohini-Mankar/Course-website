?php

$server="localhost";
$username="id17705516_makryto";
$password="Rohinimankar2@";
$db="id17705516_website";

$con = mysqli_connect($server, $username, $password,$db);


if(mysqli_connect_errno())
echo "error".mysqli_connect_error();
else
echo "success";

?>