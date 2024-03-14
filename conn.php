<?php
$host = "mysql:host=localhost;dbname=user";
$username = "root";
$password = "";
$conn = new PDO($host, $username, $password);
if ($conn) {
    echo "connected";
} else {
    echo "not connected";
}
// $sql = "insert into data(name,email,password,address,salary) values('isha','is12@gmail.com','pass123','address',67000)";
// if ($conn->query($sql)) {

//     echo "inserted";
// } else {
//     echo "not inserted";
// }

