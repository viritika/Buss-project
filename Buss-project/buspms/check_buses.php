<?php
include('config.php');
if(isset($_POST['sourceCity']) && isset($_POST['destinationCity'])) {
    $sourceCity = $_POST['sourceCity'];
    $destinationCity = $_POST['destinationCity'];
        $sql = "SELECT * FROM buses WHERE from_city = '$sourceCity' AND to_city = '$destinationCity'";
    $result = $conn->query($sql);
    
    $buses = array();
    
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $buses[] = $row;
        }
    }
    
    echo json_encode($buses);
} else {
    http_response_code(400);
    echo "Bad Request: Source and destination cities are required.";
}
?>
