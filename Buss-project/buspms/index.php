<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Home</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

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

        @media only screen and (min-width:990px) and (max-width: 1200px) {}
    </style>
</head>

<body>
    <div class="navigetionbar">
        <nav class="First-nav">
            <img src="./wepik-linear-monocolor-bustop-school-bus-for-travels-logo-202403071229055IIH (1).png" alt=""
                width="90px">
        </nav>
        <nav class="second-nav navbar-expand-lg navbar-dark">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <i class="bi bi-list "></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact Us</a>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="admin/admin_login.html">Admin Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.html">User Login</a>
                    </li>

                </ul>
            </div>
        </nav>
    </div>

    <div class="container mt-5">
        <div class="container-box mt-5">
            <div class="col-md-10 offset-md-1 mt-5">
                <h2 class="mt-5" style="text-align: center;">Book Bus Ticket</h2>
                <form id="busBookingForm" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">

                    <div class="form-groupDIV">

                        <div class="form-group ">
                            <label for="sourceCity"><img width="35" height="35"
                                    src="https://img.icons8.com/ios/50/FAB005/bus.png" alt="bus" /> From:</label>
                            <select class="form-control" id="sourceCity" name="sourceCity" required>
                                <?php
                                include('config.php');
                                $sql = "SELECT * FROM cities";
                                $result = mysqli_query($conn, $sql);
                                while ($row = mysqli_fetch_assoc($result)) {
                                    echo "<option value='" . $row['city_name'] . "'>" . $row['city_name'] . "</option>";
                                }
                                ?>
                            </select>
                        </div>
                        <span></span>

                        <div class="form-group">
                            <label for=" destinationCity"><img width="35" height="35"
                                    src="https://img.icons8.com/ios/50/FAB005/bus.png" alt="bus" /> To:</label>
                            <select class="form-control" id="destinationCity" name="destinationCity" required>
                                <?php
                                mysqli_data_seek($result, 0);
                                while ($row = mysqli_fetch_assoc($result)) {
                                    echo "<option value='" . $row['city_name'] . "'>" . $row['city_name'] . "</option>";
                                }
                                ?>
                            </select>
                        </div>
                        <span></span>

                        <div class="form-group">
                            <label for="date"><img width="35" height="35"
                                    src="https://img.icons8.com/external-yogi-aprelliyanto-basic-outline-yogi-aprelliyanto/64/FAB005/external-calender-time-and-date-yogi-aprelliyanto-basic-outline-yogi-aprelliyanto.png"
                                    alt="external-calender-time-and-date-yogi-aprelliyanto-basic-outline-yogi-aprelliyanto" />
                                Date:</label>
                            <input class="form-control" type="date" min="<?php echo date('Y-m-d'); ?>" id="date"
                                name="date">
                        </div>
                    </div>
                    <div class="form-btn">
                        <div class="form-group ">
                            <button type="button" class="btn btn-warning btn-block p-3 mt-1" id="searchBusesBtn">Search
                                Buses</button>
                        </div>
                        <div class="form-group ">
                            <button type="button" class="btn btn-warning btn-block p-3 mt-1" data-toggle="modal"
                                data-target="#registrationModal">Take a Pass</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
    <div class="modal fade" id="busModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel" style="color: #000;">Available Buses</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="registrationModal" tabindex="-1" role="dialog" aria-labelledby="registrationModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="registrationModalLabel">Register for Bus Pass</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="passRegistrationForm" action="register_pass.php" method="POST"
                        enctype="multipart/form-data">
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="firstname">First Name:</label>
                                <input type="text" class="form-control" id="firstname" name="firstname" required
                                    oninput="changeBackground()">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="lastname">Last Name:</label>
                                <input type="text" class="form-control" id="lastname" name="lastname" required
                                    oninput="changeBackground()">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" id="email" name="email" required
                                oninput="changeBackground()">
                        </div>
                        <div class="form-group">
                            <label for="mobile">Mobile:</label>
                            <input type="number" class="form-control" id="mobile" pattern="[0-9]{10}" name="mobile"
                                required oninput="changeBackground()">
                        </div>
                        <div class="form-group">
                            <label for="password">Password:</label>
                            <input type="password" class="form-control" id="password" name="password" required
                                oninput="changeBackground()">
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="age">age:</label>
                                <input type="number" class="form-control" id="age" name="age" maxlength="2" required
                                    oninput="changeBackground()">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="gender">Gender:</label>
                                <select class="form-control" id="gender" name="gender" required>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="document_id">Aadhaar Number:</label>
                            <input type="text" class="form-control" id="document_id" pattern="[0-9]{12}"
                                name="document_id" required oninput="changeBackground()">
                        </div>
                        <div class="form-group">
                            <label for="dob">Date of Birth:</label>
                            <input type="date" max="<?php echo date('Y-m-d'); ?>" class="form-control" id="dob"
                                name="dob" required>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6" style="border-color: grey; border-right: solid">
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
                            <div class="form-group col-md-6" style="border-color: grey; border-right: solid">
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
                                <input type="number" class="form-control" id="card_number" pattern="[0-9]{1}"
                                    name="card_number" required>
                            </div>
                            <div class="form-group">
                                <label for="expiry_date">Expiry Date:</label>
                                <input type="text" class="form-control" id="expiry_date" name="expiry_date" required>
                            </div>
                            <div class="form-group">
                                <label for="cvv">CVV:</label>
                                <input type="number" class="form-control" id="cvv" pattern="[0-9]{3}" name="cvv"
                                    required>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-block">book a Pass</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="travellerModal" tabindex="-1" role="dialog" aria-labelledby="travellerModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="travellerModalLabel">Book a Seat</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" style="color: #000;">
                    <form id="travellerRegistrationForm" action="traveller.php" method="POST"
                        enctype="multipart/form-data">
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="firstname1">First Name:</label>
                                <input type="text" class="form-control" id="firstname1" name="firstname1" required
                                    oninput="changeBackground()">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="lastname1">Last Name:</label>
                                <input type="text" class="form-control" id="lastname1" name="lastname1" required
                                    oninput="changeBackground()">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email1">Email:</label>
                            <input type="email" class="form-control" id="email1" name="email1" required>
                        </div>
                        <div class="form-group">
                            <label for="mobile1">Mobile:</label>
                            <input type="text" class="form-control" id="mobile1" name="mobile1" required>
                        </div>
                        <div class="form-group">
                            <label for="seats">No of Seats:</label>
                            <input type="text" class="form-control" id="seats" name="seats" required
                                oninput="changeBackground()">
                        </div>
                        <div class="form-group">
                            <label for="sourceCityModal">From City:</label>
                            <input type="text" class="form-control" id="sourceCityModal" name="sourceCityModal"
                                style="color: #000; background-color:#fff" readonly>
                        </div>
                        <div class="form-group">
                            <label for="destinationCityModal">To City:</label>
                            <input type="text" class="form-control" id="destinationCityModal"
                                name="destinationCityModal" style="color: #000; background-color:#fff" readonly>
                        </div>
                        <div class="form-group">
                            <label for="dateInSecondForm">Date:</label>
                            <input type="date" class="form-control" id="dateInSecondForm" name="dateInSecondForm"
                                style="color: #000; background-color:#fff" readonly>
                        </div>
                        <div class="form-group" style="color: #000;">
                            <label for="price">Price per person:</label>
                            <p> ₹ <span id="price" name="price"></span></p>
                            <input type="hidden" id="priceInput" name="price">
                        </div>
                        <div class="form-group" style="color: #000;">
                            <label for="tprice">Total Price:</label>
                            <p> ₹ <span id="tprice" name="tprice"></span></p>
                            <input type="hidden" id="tpriceInput" name="tprice">
                        </div>
                        <div class="form-group">
                            <label for="payment_options1">Select Payment Option:</label>
                            <select class="form-control" id="payment_options1" name="payment_options1" required
                                onchange="togglePaymentForms1()">
                                <option value="select">Select Payment Option</option>
                                <option value="qr_code">Pay with QR Code</option>
                                <option value="card">Pay with Card</option>
                            </select>
                        </div>

                        <div id="qr_code_payment1" style="display: none;">
                            <div class="text-center" style="color: #000; font-weight:bold">
                                <label for="qr_code_image1">Scan and Pay:</label>
                                <!-- Display the dynamically generated QR code image here -->
                                <img class="rounded mx-auto d-block" src="Pay.png" style="height: 20vh; width: 20vh"
                                    alt="QR Code" id="qr_code_image1">
                            </div>

                        </div>
                        <div id="card_payment1" style="display: none;">
                            <div class="form-group">
                                <label for="card_number1">Card Number:</label>
                                <input type="number" class="form-control" id="card_number1" name="card_number1"
                                    required>
                            </div>
                            <div class="form-group">
                                <label for="expiry_date1">Expiry Date:</label>
                                <input type="text" class="form-control" id="expiry_date1" name="expiry_date1" required>
                            </div>
                            <div class="form-group">
                                <label for="cvv1">CVV:</label>
                                <input type="number" class="form-control" id="cvv1" name="cvv1" required>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-block">Book Seat</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


    </div>
    <footer>
        <div class="main-footer">
            <div class="footer-A">
                <h2><img src="./wepik-linear-monocolor-bustop-school-bus-for-travels-logo-20240307121427ym4R.png" alt=""
                        width="200px"></h2>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>

        document.getElementById('searchBusesBtn').addEventListener('click', function () {
            var selectedDate = document.getElementById("date").value;
            if (selectedDate.trim() === '') {
                alert('Please select a date before searching for buses.');
                return;
            }

            var today = new Date();
            today.setHours(0, 0, 0, 0);
            var selectedDateObj = new Date(selectedDate);
            if (selectedDateObj < today) {
                alert('Selected date should be greater than or equal to today\'s date.');
                return;
            }
            var sourceCity = document.getElementById("sourceCity").value;
            var destinationCity = document.getElementById("destinationCity").value;
            if (sourceCity === destinationCity) {
                alert('Please select different source and destination cities.');
                return;
            }
            var xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function () {
                if (xhr.readyState === XMLHttpRequest.DONE) {
                    if (xhr.status === 200) {
                        $('#busModal').find('.modal-body').empty();
                        var buses = JSON.parse(xhr.responseText);
                        if (buses.length > 0) {
                            buses.forEach(function (bus) {
                                var busDetailsHtml = `
                            <div class="bus-details">
                                <h4>${bus.busname}</h4>
                                <p><strong>From:</strong> ${bus.from_city}</p>
                                <p><strong>To:</strong> ${bus.to_city}</p>
                                <p><strong>Available Seats:</strong> ${bus.available_seats}</p>
                                <p><strong>Total Seats:</strong> ${bus.total_seats}</p>
                                <p><strong>Total Time:</strong> ${bus.total_time}</p>
                                <p><strong>Departure Time:</strong> ${bus.dtime}</p>
                                <p><strong>Arrival Time:</strong> ${bus.atime}</p>
                                <p><strong>Price:</strong> ${bus.price}</p>
                                <div class="actions">
                                    <a href="#" class="btn btn-warning mb-2" onclick="openTravellerModal(${bus.id}, ${bus.price})">Book Seat</a>
                                </div>
                            </div>
                        `;
                                $('#busModal').find('.modal-body').append(busDetailsHtml);
                            });
                            $('#busModal').modal('show');
                        } else {
                            alert('No buses found for the selected cities.');
                        }
                    } else {
                        alert('Error: ' + xhr.status);
                    }
                }
            };
            xhr.open("POST", "check_buses.php", true);
            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            xhr.send("sourceCity=" + sourceCity + "&destinationCity=" + destinationCity);
        });

        function calculatePassRate() {
            var passType = document.getElementById("pass_type").value;
            var passStartDate = new Date();
            var passEndDate = new Date();

            if (passType === "monthly") {
                passEndDate.setMonth(passEndDate.getMonth() + 1);
            } else if (passType === "weekly") {
                passEndDate.setDate(passEndDate.getDate() + 7);
            } else if (passType === "yearly") {
                passEndDate.setFullYear(passEndDate.getFullYear() + 1);
            }

            document.getElementById("pass_start_date").value = passStartDate.toISOString().split('T')[0];
            document.getElementById("pass_end_date").value = passEndDate.toISOString().split('T')[0];
        }

        $(document).ready(function () {
            $("#pass_type").change(function () {
                calculatePassRate();
            });
        });

        calculatePassRate();


        $(document).ready(function () {
            $("#pass_type").change(function () {
                var from_city = $("#from_city").val();
                var to_city = $("#to_city").val();
                var pass_type = $("#pass_type").val();
                calculatePassRate();

                $.ajax({
                    url: 'fetch_rate.php',
                    type: 'POST',
                    data: {
                        from_city: from_city,
                        to_city: to_city,
                        pass_type: pass_type
                    },
                    dataType: 'json',
                    success: function (response) {
                        if (response.success) {
                            $("#rate").val(response.rate);
                            console.log("Rate:", response.rate);
                        } else {
                            alert(response.message);
                        }
                    },
                    error: function (xhr, status, error) {
                        console.error(xhr.responseText);
                        alert('Error occurred while fetching rate. Please try again later.');
                    }
                });
            });

        });




        function openTravellerModal(id, price) {
            $('#travellerModal').modal('show');
            var sourceCity = document.getElementById("sourceCity").value;
            var destinationCity = document.getElementById("destinationCity").value;
            var selectedDate = document.getElementById('date').value;
            document.getElementById('sourceCityModal').value = sourceCity;
            document.getElementById('destinationCityModal').value = destinationCity;
            document.getElementById('dateInSecondForm').value = selectedDate;

            $('#price').text(price);
            console.log("Bus ID:", id);
        }

        function populateDate() {
            var selectedDate = document.getElementById('date').value;

            document.getElementById('dateInSecondForm').value = selectedDate;
        }

        function calculateTotal() {
            var pricePerPersonText = document.getElementById("price").textContent;

            var numberOfSeatsText = document.getElementById("seats").value;

            var pricePerPerson = parseFloat(pricePerPersonText);
            var numberOfSeats = parseFloat(numberOfSeatsText);

            if (!isNaN(pricePerPerson) && !isNaN(numberOfSeats)) {
                var totalPrice = pricePerPerson * numberOfSeats;
                document.getElementById("tprice").textContent = totalPrice;
                document.getElementById("tpriceInput").value = totalPrice;
                document.getElementById("priceInput").value = pricePerPerson;
            } else {
                document.getElementById("tprice").textContent = "0";
                document.getElementById("tpriceInput").value = "0";
            }
        }

        calculateTotal();

        document.getElementById("seats").addEventListener("input", calculateTotal);

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
                submitButton.disabled = false; 
                
                cardNumberInput.removeAttribute("required");
                expiryDateInput.removeAttribute("required");
                cvvInput.removeAttribute("required");

            } else if (paymentOption === "card") {
                qrCodePaymentForm.style.display = "none";
                cardPaymentForm.style.display = "block";
                submitButton.disabled = false; 
                
                cardNumberInput.setAttribute("required", "");
                expiryDateInput.setAttribute("required", "");
                cvvInput.setAttribute("required", "");

            } else {
                qrCodePaymentForm.style.display = "none";
                cardPaymentForm.style.display = "none";
                submitButton.disabled = true; 
                
                cardNumberInput.removeAttribute("required");
                expiryDateInput.removeAttribute("required");
                cvvInput.removeAttribute("required");
            }
        }
        function togglePaymentForms1() {
            var paymentOption1 = document.getElementById("payment_options1").value;
            var qrCodePaymentForm1 = document.getElementById("qr_code_payment1");
            var cardPaymentForm1 = document.getElementById("card_payment1");
            var cardNumberInput1 = document.getElementById("card_number1");
            var expiryDateInput1 = document.getElementById("expiry_date1");
            var cvvInput1 = document.getElementById("cvv1");
            var submitButton = document.querySelector('button[type="submit"]');

            if (paymentOption1 === "qr_code") {
                qrCodePaymentForm1.style.display = "block";
                cardPaymentForm1.style.display = "none";
                submitButton.disabled = false; 
                
                cardNumberInput1.removeAttribute("required");
                expiryDateInput1.removeAttribute("required");
                cvvInput1.removeAttribute("required");
            } else if (paymentOption1 === "card") {
                qrCodePaymentForm1.style.display = "none";
                cardPaymentForm1.style.display = "block";
                submitButton.disabled = false; 
                
                cardNumberInput1.setAttribute("required", "");
                expiryDateInput1.setAttribute("required", "");
                cvvInput1.setAttribute("required", "");
            } else {
                qrCodePaymentForm1.style.display = "none";
                cardPaymentForm1.style.display = "none";
                submitButton.disabled = true; 
                
                cardNumberInput1.removeAttribute("required");
                expiryDateInput1.removeAttribute("required");
                cvvInput1.removeAttribute("required");
            }
        }
        function checkUniqueFields(event) {
            var email = document.getElementById("email").value;
            var mobile = document.getElementById("mobile").value;
            var document_id = document.getElementById("document_id").value;
            var anyFieldNotUnique = false; 
            
            $.ajax({
                url: 'check_uniqueness.php',
                type: 'POST',
                data: { email: email, mobile: mobile, document_id: document_id },
                async: false, 
                
                success: function (response) {

                    if (response !== 'unique') {
                        anyFieldNotUnique = true; 
                    }
                }
            });


            if (event !== null && anyFieldNotUnique) {
                alert('Please correct the fields.');
                event.preventDefault();
                
            }


            if (!anyFieldNotUnique) {
                alert('All fields are unique.');
            }

            if (!anyFieldNotUnique) {
                document.getElementById('submitButton').disabled = false;
                if (event !== null) {
                    $('#passRegistrationForm').unbind('submit').submit();
                }
            }
        }

    </script>
</body>

</html>