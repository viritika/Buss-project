<?php include('config.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <title>Add Bus</title>
    <style>
        body {
            background: url("../4844.jpg");
            object-fit: cover;
            background-repeat: no-repeat;

        }

        .navigetionbar {
            display: grid;
            position: fixed;
            width: 100%;
            top: 0;
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

        .container {
            z-index: auto;
            background-color: #00000057;
            border-radius: 15px;
            margin: 120px auto 50px auto;
            color: #fec416;

        }

        form .form-group {
            display: grid;
            max-width: 500px;
            margin: auto;
        }

        .input {
            padding: 5px 5px;
            border: none;
            border-radius: 3px;
            background: #fff;
            outline: none;
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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
</head>

<body>
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
        <h1 class="text-center  mb-4">Add Bus</h1>
        <form action="add_bus_process.php" method="POST">
            <div class="form-group">
                <label for="busname">Bus Name:</label>
                <input type="text" name="busname" id="busname" class="input" required>
            </div>
            <div class="form-group">
                <label for="from_city">From City:</label>
                <select name="from_city" id="from_city" class="input" required>
                    <?php
                    $sql = "SELECT city_name FROM cities";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo "<option value='" . $row['city_name'] . "'>" . $row['city_name'] . "</option>";
                        }
                    }
                    ?>
                </select>
            </div>
            <div class="form-group">
                <label for="to_city">To City:</label>
                <select name="to_city" id="to_city" class="input" required>
                    <?php
                    $result->data_seek(0);
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo "<option value='" . $row['city_name'] . "'>" . $row['city_name'] . "</option>";
                        }
                    }
                    ?>
                </select>
            </div>
            <div class="form-group">
                <label for="available_seats">Available Seats:</label>
                <input type="number" name="available_seats" id="available_seats" class="input" required>
            </div>
            <div class="form-group">
                <label for="dtime">Departure Time:</label>
                <input type="time" name="dtime" id="dtime" class="input" required>
            </div>
            <div class="form-group">
                <label for="atime">Arrival Time:</label>
                <input type="time" name="atime" id="atime" class="input" required>
            </div>
            <div class="form-group">
                <label for="price">Price:</label>
                <input type="int" name="price" id="price" class="input" required>
            </div>
            <div class="form-group">
                <label for="total_seats">Total Seats:</label>
                <input type="number" name="total_seats" id="total_seats" class="input" required>
            </div>
            <div class="form-group">
                <label for="total_time">Total Time:</label>
                <input type="text" name="total_time" id="total_time" class="input" required>
                <button type="submit" class="submit-btn">Add Bus</button>
            </div>
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
</body>

</html>