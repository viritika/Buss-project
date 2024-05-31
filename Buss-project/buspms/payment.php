<?php
// Example: Fetch price from backend (replace this with actual code to fetch price)
$rate = 100; // Example rate

// Retrieve form data from query parameters
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $firstname = $_GET['firstname'];
    $lastname = $_GET['lastname'];
    $email = $_GET['email'];
    $mobile = $_GET['mobile'];
    $password = $_GET['password'];
    // Retrieve other form fields similarly
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Form</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <h3 class="card-title text-center">Payment</h3>
                    <!-- Payment Form -->
                    <form id="paymentForm" action="process_payment.php" method="POST">
                        <!-- Prefill user details -->
                        <input type="hidden" name="firstname" value="<?php echo $firstname; ?>">
                        <input type="hidden" name="lastname" value="<?php echo $lastname; ?>">
                        <input type="hidden" name="email" value="<?php echo $email; ?>">
                        <input type="hidden" name="mobile" value="<?php echo $mobile; ?>">
                        <input type="hidden" name="password" value="<?php echo $password; ?>">
                        <!-- Pass rate to payment form -->
                        <input type="hidden" name="rate" value="<?php echo $rate; ?>">

                        <!-- Your payment form fields -->
                        <div class="form-group">
                            <label for="rate">Rate</label>
                            <input type="text" class="form-control" id="rate" name="rate" value="<?php echo $rate; ?>" readonly>
                        </div>

                        <button type="submit" class="btn btn-primary btn-block">Submit Payment</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
