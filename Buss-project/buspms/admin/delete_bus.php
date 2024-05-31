<?php
include('config.php');
if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM buses WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        header("Location: dashboard.php");
        exit;
    } else {
        echo "Error deleting record: " . $conn->error;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Bus</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <div class="alert alert-warning mt-5" role="alert">
            <?php
            if(isset($_GET['id'])) {
                $id = $_GET['id'];
                $sql = "DELETE FROM buses WHERE id=$id";
                if ($conn->query($sql) === TRUE) {
                    echo "Bus deleted successfully.";
                } else {
                    echo "Error deleting record: " . $conn->error;
                }
            }
            ?>
            <a href="dashboard.php" class="alert-link">Go back to dashboard</a>
        </div>
    </div>
</body>
</html>
