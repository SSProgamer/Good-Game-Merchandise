<?php
include "navbar.php";
$sql = "SELECT * FROM Customer WHERE CustomerID =" . $_SESSION["ID"] . "";
$result = $db->query($sql);
if (!$result) {
    // echo "bruh";
    header("location: login.php");
}
//delete wishlist
if (isset($_GET['delwishlist'])){
    $jsonString = file_get_contents('wishlist.json');
    $datajson = json_decode($jsonString, true);
    foreach ($datajson as $mywishlist => $entry) {
        if ($datajson[$mywishlist]['customerID'] == $_SESSION["ID"]) {
            $array_del = $datajson[$mywishlist]['wishlist'];
            if (($key = array_search($_GET['delwishlist'], $array_del)) !== false) {
                unset($array_del[$key]);
            }
            sort($array_del);
            $datajson[$mywishlist]['wishlist'] = $array_del;
            
        }
    }
    $newJsonString = json_encode($datajson);
    file_put_contents('wishlist.json', $newJsonString);
}
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wish List</title>
    <link rel="stylesheet" href="styleswishlist.css">
    <link rel="stylesheet" href="stylesnavfoot.css">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script> -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Chakra+Petch&display=swap" rel="stylesheet">
</head>

<body>
    <!-- navbar -->
    <!-- <nav class="navbar sticky-top main-navbar shadow-sm border border-dark">
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
                <ul class="dropdown-menu dropdown-menu-end user-dropdown-list shadow-sm">
                    <li><a class="dropdown-item text-white user-dropdown-list-item" href="user.php">Account</a></li>
                    <li><a class="dropdown-item text-white user-dropdown-list-item" href="purchases.php">Purchases</a></li>
                    <li><a class="dropdown-item text-white user-dropdown-list-item" href="wishlist.php">Wish List</a></li>
                    <li><a class="dropdown-item text-white user-dropdown-list-item" href="#">Log Out</a></li>
                </ul>
            </div>
        </div>
    </nav> -->

    <div class="container-fluid main-container">
        <div class="container mt-5 mb-5">
            <h3>My Wish List</h3>
            <div class="row mt-5">
                <?php
                $sqlm = "SELECT * from Merchandise";
                $ret = $db->query($sqlm);
                //set up json
                $jsonString = file_get_contents('wishlist.json');
                $datajson = json_decode($jsonString, true);

                $jsonString = file_get_contents('merchandise.json');
                $dataMerchandise = json_decode($jsonString, true);
                while ($row = $ret->fetchArray(SQLITE3_ASSOC)) {
                    foreach ($datajson as $mywishlist => $entry) {
                        if ($datajson[$mywishlist]['customerID'] == $_SESSION["ID"]) {
                            for ($x = 0; $x < sizeof($datajson[$mywishlist]['wishlist']); $x++) {
                                $wishlistID = $datajson[$mywishlist]["wishlist"][$x];
                           
                                if ($row['ID'] == $wishlistID){
                            echo "<div class='col-lg-3 col-md-4 col-sm-6 col-12 mb-3'>";
                            $ID = $row['ID'];
                            echo "<div class='card merchandises-card' onclick=\"location.href = 'Merchandise.php?idmer=$ID';\">";
                            foreach ($dataMerchandise as $good => $entry) {
                                if ($dataMerchandise[$good]['id'] == $row['ID']) {
                                    $strimage = $dataMerchandise[$good]['image'][0];
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
                            echo "<div class='col d-grid'><a href='wishlist.php?delwishlist=" . $row['ID'] . "' class='btn border border-dark delete-wish fw-bold'><span>Delete</span></a></div>";
                            echo "</div></div></div></div></div>";
                    }
                }
                }
            }
        }
                    
                
                /*
                foreach ($datajson as $mywishlist => $entry) {
                    if ($datajson[$mywishlist]['customerID'] == 8) {
                        for ($x = 0; $x < sizeof($datajson[$mywishlist]['wishlist']); $x++) {
                            echo "<div class='col-lg-3 col-md-4 col-sm-6 col-12 mb-3'>";
                            
                            $wishlistID = $datajson[$mywishlist]["wishlist"][$x];
                            echo "$wishlistID";
                            foreach ($dataMerchandise as $good => $entry) {
                                if ($dataMerchandise[$good]['id'] == $wishlistID) {
                                    $strimage = $dataMerchandise[$good]['image'][1];
                                    
                            echo "<div class='card style-card'><img src='$strimage' alt=''>";
                                }
                            }
                        echo "<div class='card-body'>";
                            echo "<h5 class='card-title custom-height info fw-bold'>Elder ring [Collector's Edition]</h5>";
                            echo "<hr>";
                            echo "<div class='row'>";
                                echo "<div class='col d-grid'><a href='' class='btn border border-dark price fw-bold'><span>฿18,000</span></a></div>";
                                echo "<div class='col d-grid'><a href='' class='btn border border-dark delete-wish fw-bold'><span>Delete</span></a></div>";
                            echo "</div></div></div></div>";
                        
                    }
                }
            }*/
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
</body>

</html>