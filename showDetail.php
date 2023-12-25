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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- Bootstrap icon CDN link    -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <!-- Custom style css link    -->
    <link rel="stylesheet" href="css/style.css">

    <title>Show Details</title>
</head>

<body>
    <div class="container">

        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card mt-5">
                    <div class="card-header">
                        <h4>data </h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>companyName</th>
                                    <th>sectionType</th>
                                    <th>noticeDate</th>
                                    <th>noticePost</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $conn = db_connect();

                                $sql = "SELECT * FROM remindertable";
                                $sqlResult = mysqli_query($conn, $sql);
                                // $rows = mysqli_num_rows($sqlResult);

                                while ($rows = mysqli_fetch_assoc($sqlResult)) {
                                    echo '<tr><td>' . $rows['id'] . '</td><td>' . $rows['companyName'] . '</td><td>' . $rows['sectionType'] . '</td><td>' . date('d-m-y', strtotime(trim($rows['noticeDate']))) . '</td><td>' . date('d-m-y', strtotime(trim($rows['noticePost']))) . '</td></tr>';
                                }
                                db_close($conn);
                                ?>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap script CDN link   -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>