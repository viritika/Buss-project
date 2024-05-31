<?php
include('config.php');

$sql = "SELECT * FROM passes";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .heading {
            font-size: 40px;
            font-weight: bold;
        }

        .btn {
            display: inline-block;
            padding: 0.5rem 1rem;
            border: none;
            border-radius: 5px;
            background-color: #ffc107;
            color: #000;
            text-decoration: none;
            font-weight: bold;
        }

        .btn:hover {
            background-color: #ffca28;
        }

        .table {
            width: 100%;
            border-collapse: collapse;
            text-align: center;

        }

        .table th,
        .table td {
            border: 1px solid #ccc;
            padding: 10px 0px;
        }

        .table th {
            background-color: #343a40;
            color: #fff;
            text-align: center;
        }

        .table tbody tr:nth-child(even) {
            background-color: #fff;
            color: #000;
            text-align: center;
        }

        .main {
            display: flex;
            width: 100%;
        }

        .navigetionbar {
            display: grid;
            position: fixed;
            width: 87%;
        }

        .First-nav {
            background: #fec416;
            text-align: center;
        }

        .openbtn,
        .closebtn {
            display: block;
            visibility: hidden;
        }

        .openbtn{
            color: #fec416;
            font-size: 20px;
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
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: #000;
            padding: 10px;

        }
       
        .sidebar-Main {
            position: fixed;
            background: #343a40;
            height: 100%;
            width: 15%;

        }

        .sidebar {
            height: 100%;
            width: 15%;
            background: #272727;
            position: static;
            z-index: 100;
            display: block;
        }

        .closebtn {
            float: right;
            background: transparent;
            color: #fec416;
            border: none;
        }

        .Dashboard-item {
            display: grid;
            margin-top: 40px;
           
        }

        .Dashboard-item-btn {
            padding: 10px;
            text-align: start;
            color: #ffc107;
            font-weight: bold;
        }

        .Dashboard-item-btn:hover {
            background: #ffc107;
        }

        .Dashboard-item-btn .active {
            background: #fec416;
        }

        .Dashboard-heading {
            background: #000;
            color: #ffc107;
            padding: 21px 10px;
        }

        .B-side {
            width: 100%;
            text-align: center;
            display: grid;
        }
        .heading {
            font-weight: 500;
            color: #272727;
            text-decoration: underline #ffc107;
            padding: 10px;
        }

        .container {
            height: 500px;
            padding: 20px;
            place-items: center;
            text-align: center;
           margin-top: 150px;

        }

        footer {
            background: #000;
            color: #fff;
            padding: 20px 0px;
            width: 100%;


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
            .sidebar {
                height: 100vh;
                width: 50%;
                display: none;
                position: fixed;
                z-index: 100;
            }

            .sidebar-Main {
                position: fixed;
                height: 100%;
                width: 50%;
            }

            .openbtn,
            .closebtn {
                display: block;
                visibility: visible;
            }

            .navigetionbar {
                display: grid;
                position: fixed;
                width: 100%;
            }

            .container {
                overflow-x: scroll;
                padding: 1%;
            }

            .table th,
            .table td {
                font-size: 11px;
            }
        }

        @media only screen and (min-width:440px) and (max-width: 769px) {
            .sidebar {
                height: 100vh;
                width: 30%;
                background: #272727;
                display: none;
                position: fixed;
                z-index: 100;
            }

            .openbtn,
            .closebtn {
                display: block;
                visibility: visible;
            }
            .navigetionbar {
                display: grid;
                position: fixed;
                width: 100%;
            }

            .sidebar-Main {
                position: fixed;
                background: #343a40;
                height: 100%;
                width: 30%;

            }

            .container {
                overflow-x: scroll;
                padding: 1px;

            }
            .table th,
            .table td {
                font-size: 11px;
            }
        }

        @media only screen and (min-width:770px) and (max-width: 989px) {
            .sidebar {
                height: 100vh;
                width: 20%;
                background: #272727;
                display: none;
                position: fixed;
                z-index: 100;
            }

            .openbtn,
            .closebtn {
                display: block;
            }

            .sidebar-Main {
                position: fixed;
                background: #343a40;
                height: 100%;
                width: 20%;

            }

            .navigetionbar {
                display: grid;
                position: fixed;
                width: 100%;
            }
            .table th,
            .table td {
                font-size: 13px;
            }
        }

        @media only screen and (min-width:990px) and (max-width: 1200px) {}
    </style>
</head></head>

<body>
    <div class="main">
        <div class="sidebar" id="mySidebar">
            <div class="sidebar-Main">
                <button onclick="w3_close()" class="closebtn"> &times;</button>
                <h4 class="Dashboard-heading">Admin Dashboard</h4>
                <div class="Dashboard-item">
                    <a href="./buses.php" class="Dashboard-item-btn">Buss</a>
                    <a href="./passes.php" class="Dashboard-item-btn">Passes</a>
                    <a href="./traveller.php" class="Dashboard-item-btn">Passenger</a>
                    <a href="./passesroute.php" class="Dashboard-item-btn">Passes Route</a>
                </div>
            </div>
        </div>
        <div class="B-side">
            <div class="navigetionbar">
                <nav class="First-nav">
                    <img src="./wepik-linear-monocolor-bustop-school-bus-for-travels-logo-202403071229055IIH (1).png"
                        alt="" width="90px">
                </nav>
                <nav class="second-nav">
                    <i class="bi bi-list openbtn" onclick="w3_open()"></i>
                    <a href="./logout.php" class="userpro"><i class="bi bi-person-square"></i> Logout</a>
                </nav>
            </div>
            <div class="container ">
                <h1 class="heading">Passes</h1>
                <table class="table table-bordered table-striped">
                    <thead class="thead-dark">
                        <tr>

                            <th>Pass ID</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Email</th>
                            <th>Mobile</th>
                            <th>Gender</th>
                            <th>document ID</th>
                            <th>DOB</th>
                            <th>Registration Time</th>
                            <th>Pass Type</th>
                            <th>Age</th>
                            <th>Rate</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                ?>
                                <tr>
                                    <td>
                                        <?php echo $row['pass_id']; ?>
                                    </td>
                                    <td>
                                        <?php echo $row['firstname']; ?>
                                    </td>
                                    <td>
                                        <?php echo $row['lastname']; ?>
                                    </td>
                                    <td>
                                        <?php echo $row['email']; ?>
                                    </td>
                                    <td>
                                        <?php echo $row['mobile']; ?>
                                    </td>
                                    <td>
                                        <?php echo $row['gender']; ?>
                                    </td>
                                    <td>
                                        <?php echo $row['document_id']; ?>
                                    </td>
                                    <td>
                                        <?php echo $row['dob']; ?>
                                    </td>
                                    <td>
                                        <?php echo $row['registration_date']; ?>
                                    </td>
                                    <td>
                                        <?php echo $row['pass_type']; ?>
                                    </td>
                                    <td>
                                        <?php echo $row['age']; ?>
                                    </td>
                                    <td>
                                        <?php echo $row['rate']; ?>
                                    </td>
                                </tr>
                                <?php
                            }
                        } else {
                            echo "<tr><td colspan='11'>No pass registrations found</td></tr>";
                        }
                        ?>
                    </tbody>
                </table>
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
        </div>
        <script>
            function w3_open() {
                document.getElementById("mySidebar").style.display = "block";
            }

            function w3_close() {
                document.getElementById("mySidebar").style.display = "none";
            }
        </script>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>