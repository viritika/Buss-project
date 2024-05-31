
<?php

include('config.php');

$paymentSuccess = true; 

if ($paymentSuccess) {

    $firstname = $_POST['firstname1'];
    $lastname = $_POST['lastname1'];
    $email = $_POST['email1'];
    $mobile = $_POST['mobile1'];
    $seats = $_POST['seats'];
    $price = $_POST['price'];
    $tprice = $_POST['tprice'];
    $from_city = $_POST['sourceCityModal'];
    $to_city = $_POST['destinationCityModal'];
    $date = $_POST['dateInSecondForm'];
    $payment_option = $_POST['payment_options1'];
    $payment_details = '';
if ($payment_option === 'qr_code') {
    $payment_details = "payment Successful";
} elseif ($payment_option === 'card') {
    $card_number = $_POST['card_number1'];
    $expiry_date = $_POST['expiry_date1'];
    $cvv = $_POST['cvv1'];
    $payment_details = "payment Successful";
}
   
$sql = "INSERT INTO traveller (firstname, lastname, email, mobile, seats, price, tprice, from_city, to_city, date, payment_option, payment_details ) 
VALUES ('$firstname', '$lastname', '$email', '$mobile', '$seats', '$price', '$tprice','$from_city','$to_city','$date', '$payment_option', '$payment_details' )";

    if (mysqli_query($conn, $sql)) {
        echo "<h1 style='text-align: center;'>Traveller details stored successfully!</h1>";
        echo "<script>setTimeout(function(){ window.location.href = 'index.php'; }, 3000);</script>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
} else {
    echo "Payment failed. Please try again.";
}
?>

