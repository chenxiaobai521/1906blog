<?php

$username=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];
$mysqli = new mysqli("localhost", "root", "root", "api1906");
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
$sql="select * from p_users where user_name='{$user_name}'";
echo '<br>';echo $sql;
$res=$mysqli->query($sql);
while ($row = $res->fetch_assoc()) {
    echo '<br>';print_r($row);
}

?>