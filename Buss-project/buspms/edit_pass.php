<?php
// Retrieve pass_id from the URL query parameters
$pass_id = $_GET['pass_id'];

// Use $pass_id to fetch the corresponding pass details from the database or perform any other operations
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recreate Pass</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

</head>

<body>
    <style>
        body {
            background: url("./4844.jpg");
            background-size: cover;
            object-fit: cover;
            background-repeat: no-repeat;
            color: #fff;
            margin: 0;
            padding: 0;
        }

        /* navigetionbar */
        .navbar-toggler {
            display: grid;
            text-align: end;
        }


        .navigetionbar {
            width: 100%;
            position: fixed;
            top: 0;
            z-index: 100;
        }

        .First-nav {
            background: #fec416;
            text-align: center;
        }

        .userpro {
            color: #fec416;
            text-decoration: none;
            font-weight: bold;
        }

        .userpro:hover {
            background: #fec416;
            color: #000;
            padding: 5px;
            border-radius: 5px;
            text-decoration: none;
            box-shadow: 1px 1px 6px #fec416;
        }

        .second-nav {
            background: #000;
            padding: 10px;
            text-align: center;
        }

        .nav-link {
            color: #fff;
        }

        .nav-link:hover {
            color: #ffc107;
        }

        .nav-item.active .nav-link {
            color: #ffc107;
        }

        .nav-item.active:hover .nav-link {
            color: #fec416;
        }

        .form-group label {
            color: #ffc107;
            font-size: larger;
            font-weight: bold;
        }

        button[type="submit"] {
            background-color: #ffc107;
            color: #000;
            border: none;
            font-size: larger;
        }

        button[type="button"] {
            background-color: #ffc107;
            color: #000;
            border: none;
            font-size: larger;
        }

        button[type="submit"]:hover {
            background-color: #ffc107;
            color: #000;
            font-size: larger;
            font-weight: bold;
        }

        button[type="submit"]:focus {
            background-color: #ffc107;
            color: #000;
            font-size: larger;
            font-weight: bold;
        }

        button[type="button"]:hover {
            background-color: #000;
            color: #ffc107;
            font-size: larger;
            font-weight: bold;
        }

        button[type="button"]:focus {
            background-color: #000;
            color: #ffc107;
            font-size: larger;
            font-weight: bold;
        }

        .container {
            z-index: auto;
            padding: 5%;
        }

        .container-box {
            z-index: auto;
            background-color: #00000057;
            border-radius: 15px;
            padding: 3%;

        }

        h2 {
            color: #ffc107;
            text-align: center;
            text-transform: uppercase;
            text-shadow: 2px 2px 4px #000;
            font-weight: bold;
            letter-spacing: 2px;
        }


        /* Style for the form */
        .form-groupDIV {
            display: flex;
            align-items: center;
        }

        #busBookingForm {
            border-radius: 15px;
            padding: 5%;
            background: #00000080;
        }

        #busBookingForm .form-group {
            margin-bottom: 20px;
            width: 100%;
            margin: 5px;
        }

        span {
            /* border-left: 3px solid #fff; */
            background: #fff;
            height: 70px;
            width: 5px;
        }

        #busBookingForm .btn {
            border-radius: 15px;
        }

        .form-btn {
            display: flex;
        }

        .form-group input:focus {
            outline: 0px !important;
            box-shadow: none !important;
            border-color: #495057;
        }

        input::placeholder {
            color: #ccc;
        }

        input:focus::placeholder {
            color: transparent;
        }

        input:-webkit-autofill,
        input:-webkit-autofill:focus,
        input:-webkit-autofill:hover,
        input:-webkit-autofill:active {
            transition: background-color 5000s ease-in-out 0s;
            background-color: white !important;
            border-color: #ced4da !important;
            -webkit-text-fill-color: #495057 !important;
            box-shadow: none !important;
        }

        input:focus {
            outline: none;
        }

        .bus-details {
            background-color: #000;
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 20px;
            color: #fff;
        }

        .bus-details h4 {
            color: #ffc107;
            margin-bottom: 10px;
        }

        .bus-details p {
            margin-bottom: 5px;
        }

        .actions {
            margin-top: 20px;
        }

        .no-buses {
            color: #dc3545;
        }

        .navigetionbar {
            display: grid;
            position: fixed;
            width: 100%;
        }

        .First-nav {
            background: #fec416;
            text-align: center;
        }

        .openbtn,
        .closebtn {
            display: none;
        }

        .userpro {
            color: #fec416;
            text-decoration: none;
            font-weight: bold;
        }

        .userpro:hover {
            background: #fec416;
            color: #000;
            padding: 5px;
            border-radius: 5px;
            text-decoration: none;
            box-shadow: 1px 1px 6px #fec416;
        }

        .second-nav {
            background: #000;
            padding: 10px;
            text-align: right;

        }

        /* footer  */
        footer {
            background: #000;
            color: #fff;
            padding: 20px 0px;
        }

        .main-footer {
            display: grid;
            text-align: center;
            align-items: center;
            max-width: 600px;
            margin: auto;
        }

        .footer-B,
        .footer-C {
            font-size: large;
            font-weight: bold;
        }

        @media only screen and (min-width:310px) and (max-width:439px) {
            .form-groupDIV {
                display: grid;
            }

            .form-btn {
                display: grid;
            }

            .footer-B {
                font-size: 12px;
            }

            .container-box {
                margin-top: 10px;
                z-index: auto;
                background-color: #00000057;
                border-radius: 15px;
                padding: 10px;

            }

            span {
                display: none;
            }
        }

        @media only screen and (min-width:440px) and (max-width: 769px) {
            .form-groupDIV {
                display: grid;
            }

            .form-btn {
                display: grid;
            }

            .footer-B {
                font-size: 12px;
            }

            span {
                display: none;
            }
        }

        @media only screen and (min-width:770px) and (max-width: 989px) {
            .form-groupDIV {
                display: grid;
            }

            .footer-B {
                font-size: 12px;
            }

            span {
                display: none;
            }
        }
    </style>
    <div class="navigetionbar">
        <nav class="First-nav">
            <img src="./wepik-linear-monocolor-bustop-school-bus-for-travels-logo-202403071229055IIH (1).png" alt=""
                width="90px">
        </nav>
        <nav class="second-nav">
            <div class="">
                <button class="openbtn" onclick="w3_open()">☰</button>
                <a href="./logout.php" class="userpro"><i class="bi bi-person-square"></i> Logout</a>
            </div>
        </nav>
    </div>
    <div class="container">
        <div class="mx-5">
            <h1 class="text-center mt-5" style="color:#ffc107">Recreate Pass</h1>
            <div class="form mt-5">
                <form id="passUpdateForm" action="update_pass.php" method="POST" enctype="multipart/form-data">
                    <div class="row">
                        <div class="form-group col-md-6">
                            <input type="hidden" name="pass_id" value="<?php echo $pass_id; ?>">
                            <label for="from_city"><img width="35" height="35"
                                    src="https://img.icons8.com/ios/50/FAB005/bus.png" alt="bus" /> From:</label>
                            <select class="form-control" id="from_city" name="from_city" required>
                                <option value="select">select</option>
                                <?php
                                include('config.php');
                                $sql = "SELECT DISTINCT from_city FROM passes_route";
                                $result = mysqli_query($conn, $sql);
                                while ($row = mysqli_fetch_assoc($result)) {
                                    echo "<option value='" . $row['from_city'] . "' style='color: black;'>" . $row['from_city'] . "</option>";
                                }
                                ?>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="to_city"><img width="35" height="35"
                                    src="https://img.icons8.com/ios/50/FAB005/bus.png" alt="bus" /> To:</label>
                            <select class="form-control" id="to_city" name="to_city" required>
                                <option value="select">select</option>
                                <?php
                                include('config.php');
                                $sql = "SELECT DISTINCT to_city FROM passes_route";
                                $result = mysqli_query($conn, $sql);
                                while ($row = mysqli_fetch_assoc($result)) {
                                    echo "<option value='" . $row['to_city'] . "' style='color: black;'>" . $row['to_city'] . "</option>";
                                }
                                ?>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="pass_type">Type of Pass:</label>
                        <select class="form-control" id="pass_type" name="pass_type" required>
                            <option value="select">select</option>
                            <option value="monthly">Monthly</option>
                            <option value="weekly">Weekly</option>
                            <option value="yearly">Yearly</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="pass_start_date">Pass Start Date:</label>
                        <input type="date" class="form-control" id="pass_start_date" name="pass_start_date"
                            style="color: #000; background-color:#fff" readonly>
                    </div>
                    <div class="form-group">
                        <label for="pass_end_date">Pass End Date:</label>
                        <input type="date" class="form-control" id="pass_end_date" name="pass_end_date"
                            style="color: #000; background-color:#fff" readonly>
                    </div>
                    <div class="form-group">
                        <label for="rate">Pass Rate:</label>
                        <input type="text" id="rate" style="color: #000; background-color:#fff" name="rate"
                            class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label for="payment_options">Select Payment Option:</label>
                        <select class="form-control" id="payment_options" name="payment_options" required
                            onchange="togglePaymentForms()">
                            <option value="select">Select Payment Option</option>
                            <option value="qr_code">Pay with QR Code</option>
                            <option value="card">Pay with Card</option>
                        </select>
                    </div>

                    <div id="qr_code_payment" style="display: none;">
                        <div class="text-center" style="color: #000; font-weight:bold">
                            <label for="qr_code_image">Scan and Pay:</label>
                            <!-- Display the dynamically generated QR code image here -->
                            <img class="rounded mx-auto d-block" src="Pay.png" style="height: 20vh; width: 20vh"
                                alt="QR Code" id="qr_code_image">
                        </div>
                    </div>
                    <div id="card_payment" style="display: none;">
                        <div class="form-group">
                            <label for="card_number">Card Number:</label>
                            <input type="number" class="form-control" id="card_number" name="card_number" required>
                        </div>
                        <div class="form-group">
                            <label for="expiry_date">Expiry Date:</label>
                            <input type="text" class="form-control" id="expiry_date" name="expiry_date" required>
                        </div>
                        <div class="form-group">
                            <label for="cvv">CVV:</label>
                            <input type="number" class="form-control" id="cvv" name="cvv" required>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-block">Create new Pass</button>
                </form>
            </div>
        </div>
    </div>
    <footer>
        <div class="main-footer">
            <div class="footer-A">
                <h2><img src="./wepik-linear-monocolor-bustop-school-bus-for-travels-logo-20240307121427ym4R.png"
                        alt="" width="200px"></h2>
            </div>
            <div class="footer-B">

            </div>
            <div class="footer-C">
                <i class="bi bi-facebook"></i>
                <i class="bi bi-whatsapp"></i>
                <i class="bi bi-meta"></i>
                <i class="bi bi-messenger"></i>
                <i class="bi bi-google"></i>
            </div>
            <div class="footer-D">
                All rights reserved </div>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function () {
            $("#pass_type").change(function () {
                var passType = $(this).val();
                var passStartDate = new Date(); // Today's date

                // Set end date based on pass type
                var passEndDate = new Date(passStartDate); // Clone the start date
                if (passType === "monthly") {
                    passEndDate.setMonth(passEndDate.getMonth() + 1);
                } else if (passType === "weekly") {
                    passEndDate.setDate(passEndDate.getDate() + 7);
                } else if (passType === "yearly") {
                    passEndDate.setFullYear(passEndDate.getFullYear() + 1);
                }

                // Format dates as YYYY-MM-DD
                var formattedStartDate = passStartDate.toISOString().split('T')[0];
                var formattedEndDate = passEndDate.toISOString().split('T')[0];

                // Set the values to the input fields
                $("#pass_start_date").val(formattedStartDate);
                $("#pass_end_date").val(formattedEndDate);
            });
        });

        $(document).ready(function () {
            // Function to fetch and set the pass rate
            function setPassRate() {
                var fromCity = $("#from_city").val();
                var toCity = $("#to_city").val();
                var passType = $("#pass_type").val();

                $.ajax({
                    url: 'fetch_rate.php',
                    type: 'POST',
                    data: {
                        from_city: fromCity,
                        to_city: toCity,
                        pass_type: passType
                    },
                    dataType: 'json',
                    success: function (response) {
                        if (response.success) {
                            $("#rate").val(response.rate); // Set the pass rate
                            console.log(response.rate)
                        } else {
                        }
                    },
                    error: function (xhr, status, error) {
                        console.error(xhr.responseText);
                        alert('Error occurred while fetching rate. Please try again later.');
                    }
                });
            }

            // Event listeners for changes in "From" city, "To" city, and pass type
            $("#from_city, #to_city, #pass_type").change(setPassRate);
        });

        function togglePaymentForms() {
            var paymentOption = document.getElementById("payment_options").value;
            var qrCodePaymentForm = document.getElementById("qr_code_payment");
            var cardPaymentForm = document.getElementById("card_payment");
            var cardNumberInput = document.getElementById("card_number");
            var expiryDateInput = document.getElementById("expiry_date");
            var cvvInput = document.getElementById("cvv");
            var submitButton = document.querySelector('button[type="submit"]');

            if (paymentOption === "qr_code") {
                qrCodePaymentForm.style.display = "block";
                cardPaymentForm.style.display = "none";
                submitButton.disabled = false; // Enable submission
                // Make QR code fields required
                cardNumberInput.removeAttribute("required");
                expiryDateInput.removeAttribute("required");
                cvvInput.removeAttribute("required");

            } else if (paymentOption === "card") {
                qrCodePaymentForm.style.display = "none";
                cardPaymentForm.style.display = "block";
                submitButton.disabled = false; // Enable submission
                // Make card fields required
                cardNumberInput.setAttribute("required", "");
                expiryDateInput.setAttribute("required", "");
                cvvInput.setAttribute("required", "");

            } else {
                qrCodePaymentForm.style.display = "none";
                cardPaymentForm.style.display = "none";
                submitButton.disabled = true; // Disable submission
                // Remove required attribute from all fields
                cardNumberInput.removeAttribute("required");
                expiryDateInput.removeAttribute("required");
                cvvInput.removeAttribute("required");
            }
        }
    </script>

</body>

</html>