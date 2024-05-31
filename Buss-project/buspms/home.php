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
            background-image: url('auth-bg.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            color: #fff;
        }

        .navbar {
            background-color: #000;
            padding: 10px 0;
        }

        .nav-link {
            color: #ffc107 !important;
            margin-right: 0 !important;
        }

        .navbar-nav {
            margin-left: auto;
        }

        .container {
            margin-top: 50px;
        }

        .modal-content {
            background-color: #fff;
            color: #000;
        }

        .modal-header,
        .modal-footer {
            border-color: #000;
        }

        button[type="button"]:hover {
            background-color: #0000d0;
            color: #ffc107;
          
        }

        button[type="button"]:focus {
            background-color: #000;
            color: #ffc107;
            font-size: larger;
            font-weight: bold;
        }

        .user-details-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .user-details-card {
            background-color: #ffc107;
            border-radius: 10px;
            box-shadow: 1px  1px 10px  #ffc107;
            padding: 20px;
            width: 400px;
        }

        .pass-header {
            text-align: center;
            margin-bottom: 20px;
        }

        .pass-heading {
            font-size: 24px;
            margin: 0;
        }

        .pass-label {
            font-weight: bold;
            margin-right: 5px;
            margin-left: 10px;
        }

        .pass-item {
            padding-bottom: 10px;
        }

        footer {
            background: #000;
            text-align: center;
        }
      
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark">
        <a class="navbar-brand" href="#">BusPMS</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="" data-toggle="modal" data-target="#profileModal">User Profile</a>
                </li>
        </div>
    </nav>

    <div class="modal fade" id="profileModal" tabindex="-1" role="dialog" aria-labelledby="profileModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="profileModalLabel">Profile Details</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Profile Details</h5>
                            <?php
                            include_once 'fetch_user_details.php';
                            echo "<p>Name: $firstname</p>";
                            echo "<p>Email: $email</p>";
                            echo "<p>Mobile: $mobile</p>";
                            echo "<p>Age: $age</p>";
                            ?>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="logout.php" class="btn btn-warning p-3 mt-1">Logout</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div>
                <h1 class="text-center" style="color: #000;">E-Pass</h1>
                <div class="user-details-card" style="color: #000; ">
                    <div class="pass-header">
                        <h1 class="pass-heading">
                            <?php echo "$from_city To $to_city"; ?>
                        </h1>
                    </div>
                    <div class="pass-details" >
                        <div class="pass-item">
                            <span class="pass-label">Name:</span>
                            <span class="pass-value">
                                <?php echo "$firstname $lastname"; ?>
                            </span>
                        </div>
                        <div class="pass-item">
                            <span class="pass-label">Mobile:</span>
                            <span class="pass-value">
                                <?php echo $mobile; ?>
                            </span>
                        </div>
                        <div class="pass-item">
                            <span class="pass-label">From City:</span>
                            <span class="pass-value">
                                <?php echo $from_city; ?>
                            </span>
                        </div>
                        <div class="pass-item">
                            <span class="pass-label">Start Date:</span>
                            <span class="pass-value">
                                <?php echo $pass_start_date; ?>
                            </span>
                        </div>
                        <div class="pass-item">
                            <span class="pass-label">End Date:</span>
                            <span class="pass-value">
                                <?php echo $pass_end_date; ?>
                            </span>
                        </div>
                        <div class="pass-item">
                            <span class="pass-label">DOB:</span>
                            <span class="pass-value">
                                <?php echo $dob; ?>
                            </span>
                        </div>
                        <div class="pass-item">
                            <span class="pass-label">Age:</span>
                            <span class="pass-value">
                                <?php echo $age; ?>
                            </span>
                        </div>
                        <div class="pass-item">
                            <span class="pass-label">Gender:</span>
                            <span class="pass-value">
                                <?php echo $gender; ?>
                            </span>
                        </div>
                        <div class="pass-item">
                            <span class="pass-label">Amount:</span>
                            <span class="pass-value">
                                <?php echo $rate; ?>
                            </span>
                        </div>
                        <div class="pass-item">
                            <span class="pass-label">Pass Type:</span>
                            <span class="pass-value">
                                <?php echo $pass_type; ?>
                            </span>
                            <hr  />
                            <button type="button" class="form-control" style="background-color: #000; color:#fff; margin-Top:10px;">
                            <a href='edit_pass.php?pass_id=<?php echo $row['pass_id']; ?>' style=" color:#fff"> Create New Pass</a>
                            </button>
                        </div>
                    </div>
                    <div class="mt-3" style="color: #000;">
                        <p><span style="color: red;">Note</span>: If you create a new pass, your existing pass will be
                            cancelled and there will be no
                            refund.</p>
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
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>