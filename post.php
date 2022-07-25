<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "singup";
$fname = $_POST['firstname'];
$lname = $_POST['lastname'];
$email = $_POST['email'];

$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
// set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = "INSERT INTO data (firstname, lastname, email)
                VALUES ('$fname','$lname','$email')";
// use exec() because no results are returned
$conn->exec($sql);

$conn = null;