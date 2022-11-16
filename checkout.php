<?php
// session_start();
include "navbar.php";

if (!isset($_SESSION['email'])) {
    header("location: login.php");
}
// array_push($_SESSION['cart'], array("User" => "Customer"));
// print_r($_SESSION['cart']);
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Good Game Merchandise</title>
    <link href="stylescheckout.css" rel="stylesheet">
    <link rel="stylesheet" href="stylesnavfoot.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Chakra+Petch&display=swap" rel="stylesheet">
</head>

<body>
    <div class="container-fluid main-container">
        <div class="container">
            <h2 class="mt-3 mb-3 fw-bold"><img src="image/webelement/cashier.png" alt=""> Checkout</h2>
            <div class="card cart-card">
                <table class="table cart-table">
                    <thead>
                        <tr>
                            <th>
                                <h3 class="fw-bold">Product</h3>
                            </th>
                            <th>
                                <h3 class="fw-bold">Price</h3>
                            </th>
                            <th>
                                <h3 class="fw-bold">Unit</h3>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($_SESSION['cart'] as $user => $cart) {
                            if ($cart["User"] == $_SESSION["email"]) {
                                echo '<tr>
                                        <td><h5>' . $cart['Proname'] . '</h5></td>
                                        <td><h5>' . $cart['Price'] . '</h5></td>
                                        <td><h5>' . $cart['Amount'] . '</h5></td>
                                    </tr>';
                            }
                        }
                        ?>
                    </tbody>
                </table>
                <h3 class="text-center fw-bold">Total : 30000000000000000000</h3>
            </div>
            <div class="card cart-card mt-3 mb-3">
                <form action="">
                    <div class="row align-items-center mb-3 mt-3">
                        <div class="col-2">
                            <h5 class="fw-bold text-end"><label for="infofname" class="col-form-label">Firstname</label></h5>
                        </div>
                        <div class="col-9">
                            <input type="text" id="infofname" name="fname" class="form-control" value="">
                        </div>
                    </div>
                    <div class="row align-items-center mb-3">
                        <div class="col-2">
                            <h5 class="fw-bold text-end"><label for="infolname" class="col-form-label">Lastname</label></h5>
                        </div>
                        <div class="col-9">
                            <input type="text" id="infolname" name="lname" class="form-control" value="">
                        </div>
                    </div>
                    <div class="row align-items-center mb-3">
                        <div class="col-2">
                            <h5 class="fw-bold text-end"><label for="infoaddress" class="col-form-label">Address</label></h5>
                        </div>
                        <div class="col-9">
                            <input type="text" id="infoaddress" name="address" class="form-control" value="">
                        </div>
                    </div>
                    <div class="row align-items-center mb-3">
                        <div class="col-2">
                            <h5 class="fw-bold text-end"><label for="infocity" class="col-form-label">City</label></h5>
                        </div>
                        <div class="col-9">
                            <input type="text" id="infocity" name="city" class="form-control" value="">
                        </div>
                    </div>
                    <div class="row align-items-center mb-3">
                        <div class="col-2">
                            <h5 class="fw-bold text-end"><label for="infoprovince" class="col-form-label">Province</label></h5>
                        </div>
                        <div class="col-9">
                            <input type="text" id="infoprovince" name="province" class="form-control" value="">
                        </div>
                    </div>
                    <div class="row align-items-center mb-3">
                        <div class="col-2">
                            <h5 class="fw-bold text-end"><label for="infopostcode" class="col-form-label">Postcode</label></h5>
                        </div>
                        <div class="col-9">
                            <input type="text" id="infopostcode" name="postcode" class="form-control" value="">
                        </div>
                    </div>
                    <div class="row align-items-center">
                        <div class="col-2">
                            <h5 class="fw-bold text-end"><label for="infophone" class="col-form-label">Phone Number</label></h5>
                        </div>
                        <div class="col-9">
                            <input type="text" id="infophone" name="phone" class="form-control" value="">
                        </div>
                    </div>
                </form>

                <a href="#" name="order" class="btn btn-success m-3 pay-button">Pay with card</a>
                <!-- <form action="<?php //htmlspecialchars($_SERVER["PHP_SELF"]); 
                                    ?>" method="post">
                    <button type="submit" name="order" class="btn btn-success m-3 pay-button">Pay with card</button>
                </form> -->
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