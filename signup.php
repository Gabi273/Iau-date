<?php

include ('inc/init.php');
$first = $_POST['first'];
$last = $_POST['last'];
$email = $_POST['email'];
$pass = $_POST['pass'];


$sql = "INSERT INTO users(name, last, email, pass)  VALUES ('$first', '$last', '$email', '$pass')";
$conn->query($sql);



header("Location: ../index.php?signup=success");