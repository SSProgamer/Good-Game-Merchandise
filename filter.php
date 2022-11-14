<html lang="en">
<?php

session_start();
if ($_SESSION == NULL) {
    $_SESSION['priceInput'] = "None";
    $_SESSION['typeInput'] = "None";
    $_SESSION['titleInput'] = "None";
}
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filter</title>
    <link rel="stylesheet" href="stylesfilter.css">
    <link rel="stylesheet" href="stylesnavfoot.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Chakra+Petch&display=swap" rel="stylesheet">
</head>

<body>
    <!-- navbar -->
    <nav class="navbar sticky-top main-navbar shadow-sm border border-dark">
        <ul class="nav me-auto ms-5">
            <li class="nav-item ms-5 mt-1">
                <h3><a class="nav-link text-white" href="index.php">GoodGame</a></h3>
            </li>
            <li class="nav-item me-5">
                <a class="nav-link web-text-color fw-bold text-in-nav" href="filter.php">Box Sets</a>
            </li>
            <li class="nav-item ms-5">
                <a class="nav-link web-text-color fw-bold text-in-nav" href="filter.php">Merchandises</a>
            </li>
        </ul>
        <form class="d-flex text-in-nav search-nav" role="search">
            <input class="form-control me-2 text-white bg-dark fw-bold" type="search" placeholder="Search" aria-label="Search">
        </form>
        <img src="image/webelement/cart.png" alt="" class="me-3">
        <div class="justify-content-end me-5">
            <div class="dropdown">
                <a class="btn btn-secondary dropdown-toggle user-dropdown" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="image/webelement/user.png" alt="">
                </a>
                <ul class="dropdown-menu dropdown-menu-end user-dropdown-list shadow-sm" aria-labelledby="dropdownMenuLink">
                    <li><a class="dropdown-item text-white user-dropdown-list-item" href="user.php">Account</a></li>
                    <li><a class="dropdown-item text-white user-dropdown-list-item" href="purchases.php">Purchases</a></li>
                    <li><a class="dropdown-item text-white user-dropdown-list-item" href="wishlist.php">Wish List</a></li>
                    <li><a class="dropdown-item text-white user-dropdown-list-item" href="#">Log Out</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <?php
    //all variable

    $filter_price = "None";
    $filter_type = "None";
    $filter_title = "None";
        //กันไม่ให้ออกสินค้าซ้ำ
    $id_array = [];
    ?>
    <?php
    if (isset($_POST['priceInput'])) {

        $_SESSION["priceInput"] = $_POST['priceInput'];
        $filter_price = $_POST['priceInput'];
        $filter_type = $_SESSION["typeInput"];
        $filter_title =  $_SESSION["titleInput"];
        if (strcmp($_POST['priceInput'], "Clean") == 0) {
            $filter_price = "None";
            $_SESSION["priceInput"] = "None";
        }
    }
    if (isset($_POST['typeInput'])) {
        $_SESSION["typeInput"] = $_POST['typeInput'];
        $filter_type = $_POST['typeInput'];
        $filter_price = $_SESSION["priceInput"];
        $filter_title = $_SESSION['titleInput'];


        if (strcmp($_POST['typeInput'], "Clean") == 0) {
            $filter_type = "None";
            $_SESSION['typeInput'] = "None";
        }
    }

    if (isset($_POST['titleInput'])) {
        $_SESSION["titleInput"] = $_POST['titleInput'];
        $filter_title = $_POST['titleInput'];
        $filter_price = $_SESSION["priceInput"];
        $filter_type = $_SESSION['typeInput'];
        if (strcmp($_POST['titleInput'], "Clean") == 0) {
            $filter_title = "None";
            $_SESSION["titleInput"] = "None";
        }
    }
    ?>
    <?php
    //set up database
    class MyDB extends SQLite3
    {
        function __construct()
        {
            $this->open('merchandisedate.db');
        }
    }
    $db = new MyDB();
    $sql = "SELECT * from Merchandise";
    $ret = $db->query($sql);
    //set up json
    $jsonString = file_get_contents('merchandise.json');
    $datajson = json_decode($jsonString, true);
    //set price array
    while ($row = $ret->fetchArray(SQLITE3_ASSOC)) {
        $price_array[] = $row["Price"];
    }

    ?>
    <!-- main content -->
    <div class="container-fluid main-container">
        <div class="container">
            <h3 class="result pt-5 pb-3">Results</h3>
            <div class="dropdown filter-tab">
                <form class="d-flex" role="search" method="post">
                    <input class="form-control" type="text" placeholder="Search" aria-label="Search">
                    <input type="submit" name="submitName">
            </div>
            <p class="filter-tab fw-bold pe-2">Price</p>
            <div class="dropdown filter-tab">
                <button class="btn btn-link dropdown-toggle dropdown-text" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <span><?php echo $filter_price; ?></span>
                </button>
                <ul class="dropdown-menu custom-droplist">
                    <li><input class="dropdown-item custom-droplist-text" type="submit" name="priceInput" value="Lowest to Highest" /></li>
                    <li><input class="dropdown-item custom-droplist-text" type="submit" name="priceInput" value="Highest to Lowest" /></li>
                    <li><input class="dropdown-item custom-droplist-text" type="submit" name="priceInput" value="Clean" /></li>
                </ul>
            </div>
            <p class="filter-tab fw-bold pe-2">Type</p>
            <div class="dropdown filter-tab list" name="location">
                <button class="btn btn-link dropdown-toggle dropdown-text" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <span><?php echo $filter_type; ?></span>
                </button>
                <ul class="dropdown-menu custom-droplist">
                    <li><input class="dropdown-item custom-droplist-text" type="submit" name="typeInput" value="Box Set" /></li>
                    <li><input class="dropdown-item custom-droplist-text" type="submit" name="typeInput" value="Merchandise" /></li>
                    <li><input class="dropdown-item custom-droplist-text" type="submit" name="typeInput" value="Clean" /></li>
                </ul>
            </div>
            <p class="filter-tab fw-bold pe-2">Title</p>
            <div class="dropdown filter-tab">
                <button class="btn btn-link dropdown-toggle dropdown-text" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <span><?php echo $filter_title; ?></span>
                </button>
                <ul class="dropdown-menu custom-droplist">
                    <li><input class="dropdown-item custom-droplist-text" type="submit" name="titleInput" value="Game" /></li>
                    <li><input class="dropdown-item custom-droplist-text" type="submit" name="titleInput" value="Doll" /></li>
                    <li><input class="dropdown-item custom-droplist-text" type="submit" name="titleInput" value="Glass" /></li>
                    <li><input class="dropdown-item custom-droplist-text" type="submit" name="titleInput" value="Figure" /></li>
                    <li><input class="dropdown-item custom-droplist-text" type="submit" name="titleInput" value="Etc." /></li>
                    <li><input class="dropdown-item custom-droplist-text" type="submit" name="titleInput" value="Clean" /></li>
                </ul>
            </div>
            </form>
            <div class="row mt-5">
                <?php
                if ((strcmp($filter_price, "None") != 0)) {
                    if (strcmp($filter_price, "Lowest to Highest") == 0) {
                        //low to high
                        sort($price_array);
                    }
                    if (strcmp($filter_price, "Highest to Lowest") == 0) {
                        //high to low
                        rsort($price_array);
                    }
                    foreach ($price_array as $price_in_array) {
                        while ($row = $ret->fetchArray(SQLITE3_ASSOC)) {
                            if ($row['Price'] == $price_in_array) {
                                if (($row['Type'] == $filter_type or strcmp($filter_type, "None") == 0) and ($row['Title'] == $filter_title or strcmp($filter_title, "None") == 0)
                                and !in_array($row['ID'], $id_array)) {
                                    echo "<div class='col-lg-3 col-md-4 col-sm-6 col-12 mb-3'>";
                                    echo "<div class='card style-card'>";
                                    foreach ($datajson as $good => $entry) {
                                        if ($datajson[$good]['id'] == $row['ID']) {
                                            $strimage = $datajson[$good]['image'][0];
                                            echo "<img src='$strimage' alt='' class='card-img-top'>";
                                        }
                                    }
                                    //echo "<img src='image/1/preview.webp' class='card-img-top'>";
                                    echo "<div class='card-body'>";
                                    echo "<h5 class='card-title custom-height info fw-bold'>" . $row['NameProduct'] . "</h5>";
                                    echo "<hr>";
                                    echo "<div class='d-flex justify-content-end'>";
                                    echo "<a href='' class='btn border border-dark price fw-bold'><span>฿" . number_format($row['Price']) . "</span></a>";
                                    echo "</div></div></div></div>";
                                    $id_array[] = $row['ID'];
                                }
                            }
                        }
                    }
                } else {
                    while ($row = $ret->fetchArray(SQLITE3_ASSOC)) {
                        if (($row['Type'] == $filter_type or strcmp($filter_type, "None") == 0) and ($row['Title'] == $filter_title or strcmp($filter_title, "None") == 0)) {
                            //if(strcmp($filter_price,"Lowest to Highest") == 0 and $row['Price'] == )
                            echo "<div class='col-lg-3 col-md-4 col-sm-6 col-12 mb-3'>";
                            echo "<div class='card style-card'>";
                            foreach ($datajson as $good => $entry) {
                                if ($datajson[$good]['id'] == $row['ID']) {
                                    $strimage = $datajson[$good]['image'][0];
                                    echo "<img src='$strimage' alt='' class='card-img-top'>";
                                }
                            }
                            //echo "<img src='image/1/preview.webp' class='card-img-top'>";
                            echo "<div class='card-body'>";
                            echo "<h5 class='card-title custom-height info fw-bold'>" . $row['NameProduct'] . "</h5>";
                            echo "<hr>";
                            echo "<div class='row'>";
                            echo "<div class='col d-grid'>";
                            echo "<a href='' class='btn border border-dark price fw-bold'><span>฿" . number_format($row['Price']) . "</span></a>";
                            echo "</div></div></div></div></div>";
                        }
                    }
                }
                ?>
            </div>
        </div>
    </div>

    <!-- footer -->
    <footer class="main-navbar">
        <div class="container-fluid p-5">
            <div class="row">
                <div class="col-3">
                    <h3><a class="nav-link text-white" href="index.php">GoodGame</a></h3>
                </div>
                <div class="col-7">
                    <a class="nav-link web-text-color pb-3" href="filter.php">Box Set</a>
                    <a class="nav-link web-text-color pb-3" href="filter.php">Merchandises</a>
                    <a class="nav-link web-text-color pb-3" href="filter.php">All Products</a>
                    <a class="nav-link web-text-color" href="filter.php">Products Popular</a>
                </div>
                <div class="col-2">
                    <p class="text-white">We sell many goody</p>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>