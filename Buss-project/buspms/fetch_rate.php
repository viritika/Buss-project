<?php
include 'config.php';

if(isset($_POST['from_city'], $_POST['to_city'], $_POST['pass_type'])) {
    $from_city = mysqli_real_escape_string($conn, $_POST['from_city']);
    $to_city = mysqli_real_escape_string($conn, $_POST['to_city']);
    $pass_type = mysqli_real_escape_string($conn, $_POST['pass_type']);

    $sql = "SELECT rate FROM passes_route WHERE from_city = '$from_city' AND to_city = '$to_city' AND pass_type = '$pass_type'";
    $result = mysqli_query($conn, $sql);

    if($result) {
        if(mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            $rate = $row['rate'];

            echo json_encode(array('success' => true, 'rate' => $rate));
        } else {
            echo json_encode(array('success' => false, 'message' => 'Rate not found for the specified criteria.'));
        }
    } else {
        echo json_encode(array('success' => false, 'message' => 'Error executing query: ' . mysqli_error($conn)));
    }
} else {
    echo json_encode(array('success' => false, 'message' => 'Missing parameters'));
}
?>
