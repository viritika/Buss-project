<?php
include('config.php');

$name = $_POST['name'];
$email = $_POST['email'];
$gender = $_POST['mobile'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

$sql = "INSERT INTO admins (name, email, mobile, password) VALUES ('$name', '$email', '$mobile', '$password')";

if (mysqli_query($conn, $sql)) {
    echo "Registration successful!";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
