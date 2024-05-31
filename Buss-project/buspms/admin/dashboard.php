<?php
include('config.php');

$sql1 = "SELECT COUNT(*) AS total FROM buses";
$result1 = mysqli_query($conn, $sql1);

if ($result1) {
    $row1 = mysqli_fetch_assoc($result1);
    $availableBusCount = $row1['total'];
} else {
    $availableBusCount = 'N/A';
}
$sql2 = "SELECT COUNT(*) AS total FROM traveller";
$result2 = mysqli_query($conn, $sql2);

if ($result2) {
    $row2 = mysqli_fetch_assoc($result2);
    $totalPassengerCount = $row2['total'];
} else {
    $totalPassengerCount = 'N/A';
}
$sql3 = "SELECT COUNT(*) AS total FROM passes";
$result3 = mysqli_query($conn, $sql3);

if ($result3) {
    $row3 = mysqli_fetch_assoc($result3);
    $pendingBookingCount = $row3['total'];
} else {
    $pendingBookingCount = 'N/A';
}
mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">  
     <!-- <link rel="stylesheet" href="totalinfo.css"> -->
     <style>
        body{
    margin: 0;
    padding: 0;
}
.container-BOX {
    display: flex;
    justify-content: space-around;
    align-items: baseline;
    width: 300px;
    padding: 10px;
    margin-top: 20px;
    background: rgb(246, 244, 244);
    color: #272727;
    border-left: 5px solid #ffc107;
}


.countTOTAL {
    color: #000;
    font-weight: bolder;
    font-size: large;
}
.container-DIV{
    display: flex;
    justify-content: space-around;
    flex-wrap: wrap;
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
.closebtn {
            float: right;
            background: transparent;
            color: #fec416;
            border: none;
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

.openbtn,
.closebtn {
    display: block;
    visibility: hidden;
}

.openbtn{
    color: #fec416;
    font-size: 20px;
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

.container {
    height: 500px;
    padding: 5%;
    margin-top: 150px;
}

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
        visibility: visible;
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
}

@media only screen and (min-width:990px) and (max-width: 1200px) {}

     </style>
</head>


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
                <div class="container-DIV">
                    <div class="container-BOX">
                        <div>
                            <b>AVAILABLE BUS</b>
                            <p class="countTOTAL"><?php echo $availableBusCount; ?></p>
                        </div>
                        <div><i class="bi bi-bus-front"></i></div>
                    </div>
                    <div class="container-BOX">
                        <div>
                            <b> Total Passes</b>
                            <p class="countTOTAL"><?php echo $pendingBookingCount; ?></p>
                        </div>
                        <div><i class="bi bi-pass"></i></div>
                    </div>
                    <div class="container-BOX">
                        <div>
                            <b>TOTAL PASSENGER</b>
                            <p class="countTOTAL"><?php echo $totalPassengerCount; ?></p>
                        </div>
                        <div><i class="bi bi-people-fill"></i></div>
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
All rights reseverd                    </div>
                </div>
            </footer>
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
