<?php
error_reporting(E_ALL | E_STRICT);
ini_set("display_errors", 1);
ini_set("html_errors", 1);
$name = $_POST['firstname'] . ' ' . $_POST['lastname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$feedback = $_POST['feedback'];

$conn = mysqli_connect('localhost', 'root', 'avi', 'fixcell');

$query = "INSERT INTO feedbacks values(null,'$name','$email','$phone','$feedback')";

mysqli_query($conn, $query);

include "submit.html";
?>