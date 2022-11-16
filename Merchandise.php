<?php
include "navbar.php";
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Good Game Merchandise</title>
    <link href="stylesmerchandise.css" rel="stylesheet">
    <link rel="stylesheet" href="stylesnavfoot.css">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script> -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Chakra+Petch&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        /*slider*/
        .slider {
            width: 100%;
            text-align: center;
            overflow: hidden;
        }

        .slides {
            display: flex;
            overflow-x: auto;
            scroll-snap-type: x mandatory;
            scroll-behavior: smooth;
            -webkit-overflow-scrolling: touch;
        }

        .slides::-webkit-scrollbar {
            width: 10px;
            height: 10px;
        }

        .slides::-webkit-scrollbar-thumb {
            background: #1c87c9;
            border-radius: 10px;
        }

        .slides::-webkit-scrollbar-track {
            background: transparent;
        }

        .slides>div {
            scroll-snap-align: start;
            flex-shrink: 0;
            width: 450px;
            height: auto;
            margin-right: 50px;
            border-radius: 10px;
            background: #eee;
            transform-origin: center center;
            transform: scale(1);
            transition: transform 0.5s;
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 100px;
        }

        .slider>a {
            display: inline-flex;
            width: 1.5rem;
            height: 1.5rem;
            background: white;
            text-decoration: none;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            margin: 0 0 0.5rem 0;
            position: relative;
        }

        .slider>a:active {
            top: 1px;
            color: #1c87c9;
        }

        .slider>a:focus {
            background: #eee;
        }

        /* Don't need button navigation */
        @supports (scroll-snap-type) {
            .slider>a {
                display: none;
            }
        }

        .mincol {
            min-height: 100%;
        }
    </style>
</head>

<?php
$sql = "SELECT * from Merchandise";
$ret = $db->query($sql);
//set up json
$jsonString = file_get_contents('merchandise.json');
$datajson = json_decode($jsonString, true);
?>

<body>
    <div id="overlay"></div>
    <div id="popup">
        <nav class="popupnav">
            <div>
                <span class="popupclose" onclick="closepopup()">X</span>
                <div class="navhead"><i style="font-size:36px" class="fa">&#xf07a;</i>Now i'm gay<div>
                    </div>
        </nav>
        <div class="popupcontent overflow-auto">
            <table class="table border-secondary " id="cart">
                <tbody>
                    <tr>
                        <td class="cartitem">Mark</td>
                        <td class="cartprice">$69</td>
                    </tr>

                </tbody>
            </table>
        </div>
        <table class="totalborder">
            <tbody>
                <tr>
                    <td id="cartitemtotal">Total:</td>
                    <td id="cartpricetotal">$idk lol</td>
                </tr>
            </tbody>
        </table>
        <br>
        <br>
        <nav class="popupnav">
            <div>
                <div class="navhead">Checkout<div>
                    </div>
                    <button type="button" class="customsmallpopupbut" onclick="">confirm</button>
        </nav>
    </div>
    <div id="popupaddcart">
        <div class="popupcontrols">
            <span class="popupclose" onclick="closepopup()">X</span>
        </div>
        <div class="popupcontentaddcart">
            <h2>Item had been added to your cart! c:</h2>
        </div>
    </div>





    <div class="container-fluid main-container">
        <div class="container mt-5">
            <div class="row">
                <?php
                while ($row = $ret->fetchArray(SQLITE3_ASSOC)) {
                    if ($row['ID'] == "1") {
                        foreach ($datajson as $good => $entry) {
                            if ($datajson[$good]['id'] == 1) {
                                $strimage = $datajson[$good]['image'][1];
                                echo "<div class='col-6'>";
                                echo " <img class='merchaimage' src='$strimage' style='width: 100%; height: 100%; object-fit: scale-down;'>";
                                echo "</div>";
                            }
                        }
                        echo "<div class='col-6'>";
                        echo "<h1 class='text-white'>" . $row['NameProduct'] . "</h1><br>";
                        echo "<div class='bigpricetag'><h1 class='text-white'>฿" . number_format($row['Price']) . "</h1></div><br>";
                        //add to cart
                        echo "<button type='button' class='custombigbut' onclick='addtocartPopUp()'>Add to cart</button>";
                        echo "<button type='button' class='custombigbut' onclick='purchasePopUp()'>Add to wishlist</button>";
                        echo "</div>";
                ?>
            </div>
            <div class="container text-center my-3">
                <div class="slider">
                    <div class="slides">
                        <?php
                        foreach ($datajson as $good => $entry) {
                            if ($datajson[$good]['id'] == 1) {
                                for ($x = 1; $x < sizeof($datajson[$good]['image']); $x++) {
                                    $strimage = $datajson[$good]["image"][$x];
                                    echo "<div id='slide-1'>";
                                    echo "<img src='$strimage' alt='' style='width: 450px; height: auto; object-fit: cover; object-position: 50% 0;'>";
                                    echo "</div>";
                                }
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
            <div class="row">
                <div id="merchaninfo">
                    <div>
                        <h1>
                            <li>Info</li>
                        </h1>
                        <ul>
                            <li>
                                <?php
                                echo $row['Description']
                                ?>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h1>
                            <li>
                                <?php
                                echo $row['Details1']
                                ?>
                            </li>
                        </h1>
                        <ul>
                    <?php
                        $numDetails = 1;
                        $strDetails = 'Details' . $numDetails;
                        while ($row[$strDetails] != NULL) {

                            echo "<li>$row[$strDetails]</li>";
                            $numDetails += 1;
                            $strDetails = 'Details' . $numDetails;
                        }
                    }
                }
                    ?>
                        </ul>
                    </div>
                </div>
            </div>
            <h1>Recommended Merchandise</h1>
            <div class="row mt-5">
                <?php
                for ($x = 1; $x < 5; $x++) {
                    $randomnum = rand(1, 65);
                    while ($row = $ret->fetchArray(SQLITE3_ASSOC)) {
                        if ($row['ID'] == $randomnum) {
                            echo "<div class='col-lg-3 col-md-4 col-sm-6 col-12 mb-5 mincol'>";
                            echo "<div class='card style-card'>";
                            foreach ($datajson as $good => $entry) {
                                if ($datajson[$good]['id'] == $randomnum) {
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
                            echo "<a href='addcart.php?addproid=" . $row['ID'] . "' class='btn border border-dark price fw-bold'><span>฿" . number_format($row['Price']) . "</span></a>";
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