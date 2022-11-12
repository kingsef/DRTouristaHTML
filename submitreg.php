<?php
include 'conn.php';

function validate($data){
    $data = trim($data);
    $data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

$username = validate($_POST['username']);
$password = validate($_POST['password']);
$fname = validate($_POST['fname']);
$lname = validate($_POST['lname']);
$birthday = validate($_POST['birthday']);
$Pnumber = validate($_POST['Pnumber']);
$gender = validate($_POST['gender']);
$user_email = validate($_POST['user_email']);
$address = validate($_POST['address']);


$sql = "INSERT INTO user_info (username, password, fname, lname, birthday, Pnumber, gender,user_email,address) VALUES ('$username', '$password', '$fname', '$lname', '$birthday', '$Pnumber', '$gender', '$user_email','$address')";
$res = mysqli_query($conn, $sql);

header("Location: signup.html");
?>