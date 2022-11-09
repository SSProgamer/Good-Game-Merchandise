<?php
    include "db_connect.php";
    include "navbar.php";
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Good Game Merchandise</title>
    <link href="stylesmainpage.css" rel="stylesheet">
    <link rel="stylesheet" href="stylesnavfoot.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <!-- navbar -->
    <!-- <nav class="navbar sticky-top main-navbar shadow-sm border border-dark">
        <ul class="nav me-auto ms-5">
            <li class="nav-item ms-5 mt-1">
                <h3><a class="nav-link text-white" href="index.php">GoodGame</a></h3>
            </li>
            <li class="nav-item me-5">
                <a class="nav-link web-text-color fw-bold text-in-nav" href="merchandises.php">Box Sets</a>
            </li>
            <li class="nav-item ms-5">
                <a class="nav-link web-text-color fw-bold text-in-nav" href="https://www.youtube.com/watch?v=cErgMJSgpv0">Merchandises</a>
            </li>
        </ul>
        <form class="d-flex text-in-nav search-nav" role="search">
            <input class="form-control me-2 text-white bg-dark fw-bold" type="search" placeholder="Search" aria-label="Search">
        </form>
        <ul class="nav me-5">
            <li class="nav-item">
                <a class="nav-link web-text-color fw-bold" href="signup.php">Sign Up</a>
            </li>
            <li class="nav-item">
                <a class="nav-link web-text-color fw-bold" href="login.php">Log In</a>
            </li>
        </ul>
    </nav> -->

    <!-- main content -->
    <div class="container-fluid main-container">
        <div class="container">
            <h5 class="fw-bold text-white mt-5">Box Sets</h5>
            <?php
            //set up database
            // class MyDB extends SQLite3
            // {
            //     function __construct()
            //     {
            //         $this->open('merchandisedate.db');
            //     }
            // }
            // $db = new MyDB();
            $sql = "SELECT * from Merchandise";
            $ret = $db->query($sql);
            //set up json
            $jsonString = file_get_contents('merchandise.json');
            $datajson = json_decode($jsonString, true);
            //set number for make row
            $gamesetcou = 0;
            //row gameset
            echo "<div class='row'>";
            while ($row = $ret->fetchArray(SQLITE3_ASSOC)) {
                if ($row['Type'] == "Box Set") {
                    echo "<div class='col-lg-4 col-md-6 col-sm-12 mb-3'>";
                    echo "<div class='card merchandises-card'>";
                    foreach ($datajson as $good => $entry) {
                        if ($datajson[$good]['id'] == $row['ID']) {
                            $strimage = $datajson[$good]['image'][0];
                            echo "<img src='$strimage' alt='' class='card-img-top merchandises-pic'>";
                        }
                    }
                    echo "<div class='card-body'>";
                    echo "<div class='row'>";
                    echo "<div class='col-sm-12 col-md-7 col-lg-8 col-xl-9'>";
                    echo "<p class='card-text info'>" . $row['NameProduct'] . "</p>";

                    echo "</div>";
                    echo "<div class='col-sm-12 col-md-5 col-lg-4 col-xl-3 mt-2'>";
                    echo "<p class='card-text price p-1 text-center'>฿" . number_format($row['Price']) . "</p>";
                    echo "</div></div></div></div></div>";
                    $gamesetcou += 1;
                }
            }
            echo "</div>";
            ?>

            <h5 class="fw-bold text-white mt-5">Merchandises</h5>
            <?php
            //set number for make row Merchandises
            $merchandisescou = 0;
            //row Merchandises
            echo "<div class='row'>";
            while ($row = $ret->fetchArray(SQLITE3_ASSOC)) {
                if ($row['Type'] == "Merchandise") {
                    echo "<div class='col-lg-4 col-md-6 col-sm-12 mb-3'>";
                    echo "<div class='card merchandises-card'>";
                    foreach ($datajson as $good => $entry) {
                        if ($datajson[$good]['id'] == $row['ID']) {
                            $strimage = $datajson[$good]['image'][0];
                            echo "<img src='$strimage' alt='' class='card-img-top merchandises-pic'>";
                        }
                    }
                    echo "<div class='card-body'>";
                    echo "<div class='row'>";
                    echo "<div class='col-sm-12 col-md-7 col-lg-8 col-xl-9'>";
                    echo "<p class='card-text info'>" . $row['NameProduct'] . "</p>";

                    echo "</div>";
                    echo "<div class='col-sm-12 col-md-5 col-lg-4 col-xl-3 mt-2'>";
                    echo "<p class='card-text price p-1 text-center'>฿" .number_format($row['Price']) . "</p>";
                    echo "</div></div></div></div></div>";
                    $merchandisescou += 1;
                }
            }
            echo "</div>";
            ?>


            <div class="row mt-5 mb-5">

            </div>
            <div class="row mt-5 mb-5">

            </div>
        </div>
    </div>

    <!-- footer -->
    <footer class="main-navbar">
        <div class="container-fluid p-5">
            <div class="row">
                <div class="col-6 col-md-3 col-lg-3">
                    <h3><a class="nav-link text-white" href="index.php">GoodGame</a></h3>
                </div>
                <div class="col-6 col-md-5 col-lg-6">
                    <a class="nav-link web-text-color pb-3" href="merchandises.php">Box Set</a>
                    <a class="nav-link web-text-color pb-3" href="https://www.youtube.com/watch?v=cErgMJSgpv0">Merchandises</a>
                    <a class="nav-link web-text-color pb-3" href="https://www.youtube.com/watch?v=cErgMJSgpv0">All Products</a>
                    <a class="nav-link web-text-color pb-3" href="https://www.youtube.com/watch?v=cErgMJSgpv0">Products Popular</a>
                </div>
                <div class="col-12 col-md-4 col-lg-3">
                    <p class="text-white">We sell many goody</p>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>