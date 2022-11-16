<?php
include "navbar.php";
$sql = "SELECT * FROM Customer WHERE CustomerID =" . $_SESSION["ID"] . "";
$result = $db->query($sql);
if (!$result) {
    // echo "bruh";
    header("location: login.php");
}
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Purchases</title>
    <link rel="stylesheet" href="stylespurchases.css">
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
        <div class="container mt-5 mb-5 purchases-contain rounded">
            <h2 class="mt-4 mb-4 ms-3">Purchased Products</h2>
            <div class="card ms-3 me-3 mb-4">
                <div class="card-header head-list">
                    <div class="row mt-3">
                        <div class="col-8">
                            <p class="fw-bold text-white">PRODUCT</p>
                        </div>
                        <div class="col-2">
                            <p class="fw-bold text-white">DATE</p>
                        </div>
                        <div class="col-2">
                            <p class="fw-bold text-white">TOTAL</p>
                        </div>
                    </div>
                </div>
                <ul class="list-group list-group-flush">
                    <!-- List Example -->
                    <li class="list-group-item">
                        <div class="row mt-3">
                            <div class="col-8">
                                <!-- Product Name -->
                                <p class="">Elder ring [Collector's Edition]</p>
                            </div>
                            <div class="col-2">
                                <!-- Purchased Date -->
                                <p class="">18/1/1944</p>
                            </div>
                            <div class="col-2">
                                <!-- Price -->
                                <p class="">$18,000</p>
                            </div>
                        </div>
                    </li>
                    <!-- Example End -->
                    <li class="list-group-item">
                        <div class="row mt-3">
                            <div class="col-8">
                                <p class="">Sekiro Shadows Die Twice Collector's Edition</p>
                            </div>
                            <div class="col-2">
                                <p class="">22/10/1911</p>
                            </div>
                            <div class="col-2">
                                <p class="">$15,099</p>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="row mt-3">
                            <div class="col-8">
                                <p class="">Monster Hunter: World [Collector's Edition]</p>
                            </div>
                            <div class="col-2">
                                <p class="">2/7/1776</p>
                            </div>
                            <div class="col-2">
                                <p class="">$11,690</p>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="row mt-3">
                            <div class="col-8">
                                <p class="">Monster Hunter: World [Collector's Edition]</p>
                            </div>
                            <div class="col-2">
                                <p class="">2/7/1776</p>
                            </div>
                            <div class="col-2">
                                <p class="">$11,690</p>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="row mt-3">
                            <div class="col-8">
                                <p class="">Monster Hunter: World [Collector's Edition]</p>
                            </div>
                            <div class="col-2">
                                <p class="">2/7/1776</p>
                            </div>
                            <div class="col-2">
                                <p class="">$11,690</p>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="row mt-3">
                            <div class="col-8">
                                <p class="">Monster Hunter: World [Collector's Edition]</p>
                            </div>
                            <div class="col-2">
                                <p class="">2/7/1776</p>
                            </div>
                            <div class="col-2">
                                <p class="">$11,690</p>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="row mt-3">
                            <div class="col-8">
                                <p class="">Monster Hunter: World [Collector's Edition]</p>
                            </div>
                            <div class="col-2">
                                <p class="">2/7/1776</p>
                            </div>
                            <div class="col-2">
                                <p class="">$11,690</p>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="row mt-3">
                            <div class="col-8">
                                <p class="">Monster Hunter: World [Collector's Edition]</p>
                            </div>
                            <div class="col-2">
                                <p class="">2/7/1776</p>
                            </div>
                            <div class="col-2">
                                <p class="">$11,690</p>
                            </div>
                        </div>
                    </li>
                    <!-- Insert New List Here -->
                </ul>
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