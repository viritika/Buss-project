<?php
include('config.php');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $busname = $_POST['busname'];
    $from_city = $_POST['from_city'];
    $to_city = $_POST['to_city'];
    $available_seats = $_POST['available_seats'];
    $total_seats = $_POST['total_seats'];
    $total_time = $_POST['total_time'];
    $dtime = $_POST['dtime'];
    $atime = $_POST['atime'];
    $price = $_POST['price'];

    $sql = "INSERT INTO buses (busname, from_city, to_city, available_seats, total_seats, total_time, dtime, atime, price)
            VALUES ('$busname', '$from_city', '$to_city', '$available_seats', '$total_seats', '$total_time', '$dtime', '$atime', '$price')";

    if ($conn->query($sql) === TRUE) {
        header("Location: buses.php");
        exit;
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>
