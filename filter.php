<?php
include "navbar.php";
//all variable
//กันไม่ให้ออกสินค้าซ้ำ
$id_array = [];
if (isset($_GET['filter_type'])) {
    $_SESSION["typeInput"] = $_GET['filter_type'];
    $_SESSION["priceInput"] = "None";
    $_SESSION["titleInput"] = "None";
}
if (isset($_POST['priceInput'])) {

    $_SESSION["priceInput"] = $_POST['priceInput'];
    if (strcmp($_POST['priceInput'], "Clean") == 0) {
        $_SESSION["priceInput"] = "None";
    }
}
if (isset($_POST['typeInput'])) {
    $_SESSION["typeInput"] = $_POST['typeInput'];


    if (strcmp($_POST['typeInput'], "Clean") == 0) {
        $_SESSION['typeInput'] = "None";
    }
}

if (isset($_POST['titleInput'])) {
    $_SESSION["titleInput"] = $_POST['titleInput'];
    if (strcmp($_POST['titleInput'], "Clean") == 0) {
        $_SESSION["titleInput"] = "None";
    }
}
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filter</title>
    <link rel="stylesheet" href="stylesfilter.css">
    <link rel="stylesheet" href="stylesnavfoot.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Chakra+Petch&display=swap" rel="stylesheet">
    <script>
        if (window.history.replaceState) {
            window.history.replaceState(null, null, window.location.href);
        }
    </script>
</head>

<body>
    <!-- navbar 
    <nav class="navbar sticky-top main-navbar shadow-sm border border-dark">

        <ul class="nav me-auto ms-5">
            <li class="nav-item ms-5 mt-1">
                <h3><a class="nav-link text-white" href="index.php">GoodGame</a></h3>
            </li>
            <li class="nav-item me-5">
                <a class='nav-link web-text-color fw-bold text-in-nav' href='filter.php?filter_type=Box Set'>Box Sets</a>
            </li>
            <li class="nav-item ms-5">
                <a class="nav-link web-text-color fw-bold text-in-nav" href="filter.php?filter_type=Merchandise">Merchandises</a>

            </li>
        </ul>
        <form class="d-flex text-in-nav search-nav" role="search" method="post" action="filter.php">
            <?php
            echo "<div class='input-group'>";
            echo "<input class='form-control me-2 text-white bg-dark fw-bold' type='text' placeholder='Product name' aria-label='Search' name='searchName' value='" . $_SESSION['searchName'] . "'>";
            echo "<input type='submit' name='submitName' class='btn btn-outline-secondary search-button-nav fw-bold' value='Submit'>";
            echo "</div>";
            ?>

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
-->
    <?php
    //set up database
    // class MyDBe extends SQLite3
    // {
    //     function __construct()
    //     {
    //         $this->open('merchandisedate.db');
    //     }
    // }
    // $dbe = new MyDBe();
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
                <form class="d-flex" role="search" method="post" action="filter.php">
                    <?php
                    echo "<div class='input-group'>";
                    echo "<input class='form-control' type='text' placeholder='Product name' aria-label='Search' name='searchName' value='" . $_SESSION['searchName'] . "'>";
                    echo "<input type='submit' name='submitName' class='btn bg-white search-button-filter' value='Search'>";
                    echo "</div>";
                    ?>

            </div>
            <p class="filter-tab fw-bold pe-2">Price</p>
            <div class="dropdown filter-tab">
                <button class="btn btn-link dropdown-toggle dropdown-text" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <span><?php echo $_SESSION["priceInput"]; ?></span>
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
                    <span><?php echo $_SESSION["typeInput"]; ?></span>
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
                    <span><?php echo $_SESSION['titleInput']; ?></span>
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
                if ((strcmp($_SESSION["priceInput"], "None") != 0)) {
                    if (strcmp($_SESSION["priceInput"], "Lowest to Highest") == 0) {
                        //low to high
                        sort($price_array);
                    }
                    if (strcmp($_SESSION["priceInput"], "Highest to Lowest") == 0) {
                        //high to low
                        rsort($price_array);
                    }
                    foreach ($price_array as $price_in_array) {
                        while ($row = $ret->fetchArray(SQLITE3_ASSOC)) {
                            if ($row['Price'] == $price_in_array) {
                                if (($row['Type'] == $_SESSION["typeInput"] or strcmp($_SESSION["typeInput"], "None") == 0) and ($row['Title'] == $_SESSION["titleInput"] or strcmp($_SESSION["titleInput"], "None") == 0)
                                    and !in_array($row['ID'], $id_array)
                                ) {
                                    if (strpos(strtolower($row['NameProduct']), strtolower($_SESSION['searchName'])) !== false or strcmp($_SESSION['searchName'], "") == 0) {
                                        echo "<div class='col-lg-3 col-md-4 col-sm-6 col-12 mb-3'>";
                                        $ID = $row['ID'];
                                        echo "<div class='card merchandises-card' onclick=\"location.href = 'Merchandise.php?idmer=$ID';\">";
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
                                        echo "<a href='addcart.php?addproid=" . $row['ID'] . "' class='btn border border-dark price fw-bold'><span>฿" . number_format($row['Price']) . "</span></a>";
                                        echo "</div></div></div></div>";
                                        $id_array[] = $row['ID'];
                                    }
                                }
                            }
                        }
                    }
                } else {
                    while ($row = $ret->fetchArray(SQLITE3_ASSOC)) {
                        if (($row['Type'] == $_SESSION["typeInput"] or strcmp($_SESSION["typeInput"], "None") == 0) and ($row['Title'] == $_SESSION["titleInput"] or strcmp($_SESSION["titleInput"], "None") == 0)) {
                            if (strpos(strtolower($row['NameProduct']), strtolower($_SESSION['searchName'])) !== false or strcmp($_SESSION['searchName'], "") == 0) {
                                echo "<div class='col-lg-3 col-md-4 col-sm-6 col-12 mb-3'>";
                                $ID = $row['ID'];
                                echo "<div class='card merchandises-card' onclick=\"location.href = 'Merchandise.php?idmer=$ID';\">";
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
                                echo "<a href='addcart.php?addproid=" . $row['ID'] . "' class='btn border border-dark price fw-bold' onclick='addtocartPopUp()'><span>฿" . number_format($row['Price']) . "</span></a>";
                                echo "</div></div></div></div></div>";
                            }
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
                    <a class="nav-link web-text-color pb-3" href="filter.php?filter_type=None">All Products</a>
                    <a class="nav-link web-text-color pb-3" href="filter.php?filter_type=Box Set">Box Set</a>
                    <a class="nav-link web-text-color pb-3" href="filter.php?filter_type=Merchandise">Merchandises</a>
                </div>
                <div class="col-2">
                    <p class="text-white">We sell a lot of game merchandise from many games around the world at very cheap prices and the best quality product.</p>
                </div>
            </div>
        </div>
    </footer>
    <script src="scriptmerchandise.js"></script>
</body>

</html>