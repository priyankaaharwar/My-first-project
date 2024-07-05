<?php
$con = mysqli_connect('localhost','root','','youtubeuserdata');

$username = $_POST['username'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$comments = $_POST['comments'];

$sql = "insert into userinputdata (username, email, mobile, comment) Values('$username', '$email', '$mobile', '$comments')";

$query = mysqli_query($con,$sql);

header('location:index.php');
?>