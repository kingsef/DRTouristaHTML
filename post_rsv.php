<?php
include 'conn.php';

function validate($data){
    $data = trim($data);
    $data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

$firstname = validate($_POST['firstname']);
$lastname = validate($_POST['lastname']);
$contact_number = validate($_POST['contact_number']);
$email = validate($_POST['email']);
$rsv_date = validate($_POST['rsv_date']);
$male_ct = validate($_POST['male_ct']);
$female_ct = validate($_POST['female_ct']);

$sql = "INSERT INTO rsv_wo_acco (firstname, lastname, contact_number, email, rsv_date, male_ct, female_ct) VALUES ('$firstname', '$lastname', '$contact_number', '$email', '$rsv_date', '$male_ct', '$female_ct')";
$res = mysqli_query($conn, $sql);

header("Location: index.html");
?>