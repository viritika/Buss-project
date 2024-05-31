
<?php
include('config.php');

$sql = "SELECT * FROM cities";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<option value='" . $row['city_name'] . "'>" . $row['city_name'] . "</option>";
    }
} else {
    echo "<option value=''>No cities found</option>";
}

mysqli_close($conn);
?>
