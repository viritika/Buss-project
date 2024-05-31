<?php
include('config.php');

$name = $_POST['name'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$dob = $_POST['dob'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
$contact_no = $_POST['contact_no'];

$sql = "INSERT INTO users (name, email, gender, dob, password, contact_no) VALUES ('$name', '$email', '$gender', '$dob', '$password', '$contact_no')";

if (mysqli_query($conn, $sql)) {
    echo "Registration successful!";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
