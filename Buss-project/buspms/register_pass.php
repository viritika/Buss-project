<?php
include('config.php');

// Retrieve form data
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
$age = $_POST['age'];
$gender = $_POST['gender'];
$dob = $_POST['dob'];
$document_id = $_POST['document_id'];
$from_city = $_POST['from_city'];
$to_city = $_POST['to_city'];
$pass_type = $_POST['pass_type'];
$rate = $_POST['rate'];
$pass_start_date = $_POST['pass_start_date'];
$pass_end_date = $_POST['pass_end_date'];
$payment_option = $_POST['payment_options'];

$payment_details = '';
if ($payment_option === 'qr_code') {
    $payment_details = "payment Successful";
} elseif ($payment_option === 'card') {
    $card_number = $_POST['card_number'];
    $expiry_date = $_POST['expiry_date'];
    $cvv = $_POST['cvv'];
    $payment_details = "payment Successful";
}

$sql = "INSERT INTO passes (firstname, lastname, email, mobile, password, age, gender, document_id, dob, pass_type, rate, from_city, to_city, pass_start_date, pass_end_date, payment_option, payment_details) 
        VALUES ('$firstname', '$lastname', '$email', '$mobile', '$password', '$age', '$gender', '$document_id', '$dob', '$pass_type', '$rate', '$from_city', '$to_city', '$pass_start_date', '$pass_end_date', '$payment_option', '$payment_details')";

if (mysqli_query($conn, $sql)) {
    echo "<h1 style='text-align: center;'> Pass create Successfully!</h1>";
    echo "<h3 style='text-align: center;'> Login and Check E-pass</h3>";
    echo "<script>setTimeout(function(){ window.location.href = 'login.html'; }, 2000);</script>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
