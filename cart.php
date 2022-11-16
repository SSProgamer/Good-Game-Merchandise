<?php
    // session_start();
    include "navbar.php";
    
    if(!isset($_SESSION['email'])){
        header("location: login.php");
    }
    // array_push($_SESSION['cart'], array("User" => "Customer"));
    // print_r($_SESSION['cart']);
?>

<html lang="en">

<body>
    <table>
        <tr>
            <th>Product</th>
            <th>Price</th>
            <th>Unit</th>
            <th></th>
        </tr>
        <?php
            foreach ($_SESSION['cart'] as $user=> $cart){
                if($cart["User"] == $_SESSION["email"]){
                    echo '<tr>
                        <td>'.$cart['Proname'].'</td>
                        <td>'.$cart['Price'].'</td>
                        <td>'.$cart['Amount'].'</td>
                        <td>'.$user.'</td>
                    </tr>';
                }
            }
        ?>
        <tr>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Good Game Merchandise</title>
    <link href="stylescard.css" rel="stylesheet">
    <link rel="stylesheet" href="stylesnavfoot.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Chakra+Petch&display=swap" rel="stylesheet">
</head>

<body>
    <div class="container-fluid main-container">
        <div class="container">
            <h2 class="mt-3 mb-3 fw-bold"><img src="image/webelement/cartpage.png" alt=""> Shopping Cart</h2>
            <div class="card">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item cart-card-list">
                        <div class="row">
                            <p class="col-6">AZUR LANE | ETERNAL OATH COUPLES' RINGS | SUMMER SUPPLY 2022</p>
                            <p class="col-3"></p>
                            <button type="button" class="btn btn-danger col-1">Delete</button>
                        </div>
                    </li>
                    <li class=" list-group-item cart-card-list">
                        <div class="row">
                            <p class="col-6">AZUR LANE | ETERNAL OATH COUPLES' RINGS | SUMMER SUPPLY 2022</p>
                            <button type="button" class="btn btn-danger col-1">Delete</button>
                        </div>
                    </li>
                    <li class="list-group-item cart-card-list">
                        <div class="row">
                            <p class="col-6">AZUR LANE | ETERNAL OATH COUPLES' RINGS | SUMMER SUPPLY 2022</p>
                            <button type="button" class="btn btn-danger col-1">Delete</button>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

        <!-- <table>
            <tr>
                <th>Product</th>
                <th>Price</th>
                <th>Unit</th>
                <th></th>
            </tr>
            <?php
            // foreach ($_SESSION['cart'] as $user => $car) {
            //     if ($cart["User"] == $_SESSION["email"]) {
            //         echo '<tr>
            //             <td>' . $cart['ProductName'] . '</td>
            //             <td>' . $cart['Price'] . '</td>
            //             <td>' . $cart['Amount'] . '</td>
            //             <td></td>
            //         </tr>';
            //     }
            // }
            ?>
            <tr>

            </tr>
        </table> -->
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