<?php
include('config.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $pass_id = $_POST['pass_id']; 
    $from_city = $_POST['from_city'];
    $to_city = $_POST['to_city'];
    $pass_type = $_POST['pass_type'];
    $pass_start_date = $_POST['pass_start_date'];
    $pass_end_date = $_POST['pass_end_date'];
    $rate = $_POST['rate'];
    $payment_option = $_POST['payment_options'];



    $sql = "UPDATE passes SET from_city='$from_city', to_city='$to_city', pass_type='$pass_type', pass_start_date='$pass_start_date', pass_end_date='$pass_end_date', rate='$rate', payment_option='$payment_option' WHERE pass_id='$pass_id'";

    if (mysqli_query($conn, $sql)) {
        echo "";
        echo "<h1 style='text-align: center;'> Pass updated successfully!</h1>";
        echo "<script>setTimeout(function(){ window.location.href = 'home.php'; }, 2000);</script>";
    } else {
        echo "Error updating pass: " . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>
