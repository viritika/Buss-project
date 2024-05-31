<?php
include('config.php');
if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM buses WHERE id=$id";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
    } else {
        echo "Bus not found";
        exit;
    }
} else {
    echo "Bus ID not provided";
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Bus</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Custom CSS -->
  <style>
    
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

        .container {
            z-index: auto;
            border-radius: 15px;
            padding: 3%;
            max-width: 700px;
            margin: 200px auto auto;

        }
     /* footer  */
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
                <a class="navbar-brand" href="#">BusPMS</a>
            </div>
        </nav>
    </div>
    <div class="container">
        <h1 class="text-center mt-5 mb-4">Edit Bus</h1>
        <form action="edit_bus_process.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
            <div class="form-group">
                <label for="from_city">From City:</label>
                <input type="text" name="from_city" id="from_city" class="form-control" value="<?php echo $row['from_city']; ?>" required>
            </div>
            <div class="form-group">
                <label for="to_city">To City:</label>
                <input type="text" name="to_city" id="to_city" class="form-control" value="<?php echo $row['to_city']; ?>" required>
            </div>
            <div class="form-group">
                <label for="available_seats">Available Seats:</label>
                <input type="number" name="available_seats" id="available_seats" class="form-control" value="<?php echo $row['available_seats']; ?>" required>
            </div>
            <div class="form-group">
                <label for="total_seats">Total Seats:</label>
                <input type="number" name="total_seats" id="total_seats" class="form-control" value="<?php echo $row['total_seats']; ?>" required>
            </div>
            <div class="form-group">
                <label for="total_time">Total Time:</label>
                <input type="text" name="total_time" id="total_time" class="form-control" value="<?php echo $row['total_time']; ?>" required>
            </div>
            <button type="submit" class="form-control btn-warning">Update Bus</button>
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
