<?php
include('config.php');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $busname = $_POST['busname'];
    $from_city = $_POST['from_city'];
    $to_city = $_POST['to_city'];
    $available_seats = $_POST['available_seats'];
    $total_seats = $_POST['total_seats'];
    $total_time = $_POST['total_time'];
    $dtime = $_POST['dtime'];
    $atime = $_POST['atime'];
    $price = $_POST['price'];

    $sql = "UPDATE buses SET from_city='$from_city', to_city='$to_city', available_seats='$available_seats', 
            total_seats='$total_seats', total_time='$total_time',   busname='$busname', dtime='$dtime',   atime='$atime', price='$price' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "<h1 style='text-align: center;'> Bus eidted Successfully!</h1>";
        echo "<script>setTimeout(function(){ window.location.href = 'buses.php'; }, 1000);</script>";
        exit;
    } else {
        echo "Error updating record: " . $conn->error;
    }
}
?>
