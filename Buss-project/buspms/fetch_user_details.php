<?php
session_start();
if (!isset($_SESSION['email'])) {
    header("Location: login.php");
    exit();
}

include_once 'config.php';

$email = $_SESSION['email'];
$query = "SELECT * FROM passes WHERE email = ?";
$stmt = mysqli_prepare($conn, $query);
mysqli_stmt_bind_param($stmt, 's', $email);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);

if ($result && mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $pass_id = $row['pass_id'];
    $firstname = $row['firstname'];
    $email = $row['email'];
    $mobile = $row['mobile'];
    $from_city = $row['from_city'];
    $to_city = $row['to_city'];
    $pass_start_date = $row['pass_start_date'];
    $pass_end_date = $row['pass_end_date'];
    $dob = $row['dob'];
    $age = $row['age'];
    $gender = $row['gender'];
    $lastname = $row['lastname'];
    $rate = $row['rate'];
    $pass_type = $row['pass_type'];
} else {
    echo "Error fetching user details";
}

mysqli_stmt_close($stmt);
mysqli_close($conn);
?>
