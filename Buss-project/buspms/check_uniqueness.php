<?php
include('config.php'); 

$email = $_POST['email'];
$mobile = $_POST['mobile'];
$document_iddocument_id = $_POST['document_id'];

$sql = "SELECT * FROM your_table WHERE email = '$email' OR mobile = '$mobile' OR document_id = '$document_id'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    echo 'not_unique';
} else {
    echo 'unique';
}

mysqli_close($conn);
?>
