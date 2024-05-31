<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">    <style>
        body {
            background-color: #fff;
            color: #000;
            background: url("../4844.jpg");
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
            color: #fff !important;
        }

        .nav-link:hover {
            color: #ffc107 !important;
        }

        .nav-item.active .nav-link {
            color: #ffc107 !important;
        }

        .nav-item.active:hover .nav-link {
            color: #fff !important;
        }

        input::placeholder {
            color: #ccc;
        }

        input:focus::placeholder {
            color: transparent;
        }

        .form-group input:focus {
            outline: 0px !important;
            box-shadow: none !important;
            border-color: #495057;
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
        .container {
            z-index: auto;
            background-color: #00000057;
            border-radius: 15px;
            margin: 200px auto 50px auto;
            color: #fec416;

        }
        .submit-btn {
            background: #fec416;
            border: none;
            padding: 5px;
            border-radius: 5px;
            margin: 10px 0px;
            width: 100px;
        }
        footer {
            background: #000;
            color: #fff;
            padding: 30px 0px;
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

            .footer-B {
                font-size: 12px;
            }


        }

        @media only screen and (min-width:440px) and (max-width: 769px) {
            .footer-B {
                font-size: 12px;
            }


        }

        @media only screen and (min-width:770px) and (max-width: 989px) {

            .footer-B {
                font-size: 12px;
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
                        <a class="nav-link" href="../index.php">Home</a>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="admin_login.html">Admin Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../login.html">User Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="register.html">Register</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>

    <div class="container ">
        <h2>Registration</h2>

        <form id="registrationForm" action="passes_route.php" method="POST" onsubmit="return validateForm()">
            <div class="form-group">
                <label for="from_city">From City:</label>
                <select class="form-control" id="from_city" name="from_city" required>
                    <?php include('fetch_cities.php'); ?>
                </select>
            </div>
            <div class="form-group">
                <label for="to_city">To City:</label>
                <select class="form-control" id="to_city" name="to_city" required>
                    <?php include('fetch_cities.php'); ?>
                </select>
            </div>
            <div class="form-group">
                <label for="pass_type">Pass Type:</label>
                <select class="form-control" id="pass_type" name="pass_type" required onchange="calculatePassRate()">
                    <option value="monthly">Monthly</option>
                    <option value="weekly">Weekly</option>
                    <option value="yearly">Yearly</option>
                </select>
            </div>
            <div class="form-group">
                <label for="rate">Rate:</label>
                <input type="number" class="form-control" id="rate" name="rate" required>
            </div>
            <button type="submit" class="submit-btn">Register</button>
        </form>
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
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        function validateForm() {
            var fromCity = document.getElementById("from_city").value;
            var toCity = document.getElementById("to_city").value;

            if (fromCity === toCity) {
                alert("From City and To City cannot be the same");
                return false;
            }

            return true;
        }





    </script>
</body>

</html>