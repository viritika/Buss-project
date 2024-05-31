<?php
include('config.php');

$from_city = $_POST['from_city'];
$to_city = $_POST['to_city'];
$pass_type = $_POST['pass_type'];
$rate = $_POST['rate'];
$sql = "SELECT * FROM passes_route WHERE from_city = '$from_city' AND to_city = '$to_city' AND pass_type = '$pass_type'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<script>alert('Error: This combination already exists.');</script>";
        echo "<script>window.location = 'dashboard.php';</script>"; // Redirect to the form page

} else {
    $insert_sql = "INSERT INTO passes_route (from_city, to_city, pass_type, rate) VALUES ('$from_city', '$to_city', '$pass_type', '$rate')";

    if ($conn->query($insert_sql) === TRUE) {
        echo "Registration successful!";
    } else {
        echo "Error: " . $insert_sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
