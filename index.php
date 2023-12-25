<?php
require_once 'db.php';
session_start();
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap css CDN link   -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- Bootstrap icon CDN link    -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
    <!-- Custom style css link    -->
    <link rel="stylesheet" href="css/style.css">

    <title>Date Reminder</title>
</head>

<body>
    <!-- Navbar start -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="showDetail.php">SHOW DETAILS</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Dropdown
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
    <!-- navbar end  -->
    <?php
    if (isset($_SESSION['status'])) {
        echo "<h4>" . $_SESSION['status'] . "</h4>";
        unset($_SESSION['status']);
    }
    ?>
    <form class="row g-3 px-3 mt-3" method="POST" action="addDetail.php">
        <div class="col-md-6">
            <label for="inputCompany" class="form-label">Company Name</label>
            <select id="inputCompany" name="companyName" class="form-select">
                <option selected>Choose Company Name ....</option>
                <option>HDFC Bank Ltd.</option>
                <option>Ujjivan Small Finance Bank Ltd.</option>
                <option>Utkarsh</option>
                <option>Crompton</option>
                <option>jai Kishan</option>
                <option>ECL</option>
                <option>Indo Star</option>
            </select>
        </div>
        <div class="col-md-6">
            <label for="inputSection" class="form-label">Section Type</label>
            <select id="inputSection" name="sectionType" class="form-select">
                <option selected>Choose Section Type ...</option>
                <option>138 N.I. Act</option>
                <option>25 P.S.S. Act</option>
                <option>420 I.P.C.</option>
            </select>
        </div>
        <div class="col-md-6">
            <label for="inputNotice" class="form-label">Notice Date</label>
            <!-- <div id="datepicker" class="input-group date" data-date-format="dd-mm-yyyy"> -->
            <input class="form-control" id="ndate" name="ndate" type="date" />
            <span class="input-group-addon">
                <!-- <i class="bi bi-calendar-check"></i> -->
            </span>
        </div>
        <!-- <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St"> -->
        </div>
        <div class="col-md-6">
            <label for="inputAddress2" class="form-label">Notice Post On</label>
            <!-- <div id="datepicker1" class="input-group date" data-date-format="dd-mm-yyyy"> -->
            <input class="form-control" id="npdate" name="npdate" type="date" />
            <span class="input-group-addon">
                <!-- <i class="bi bi-calendar-check"></i> -->
            </span>
        </div>
        </div>
        <div class="col-md-6">
            <button type="submit" name="save" class="btn btn-primary">Save</button>
        </div>
    </form>


    <!-- Bootstrap script CDN link   -->
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"
        integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js">

    </script>
    <script src="script.js"></script>

</body>

</html>