<?php
// session_start();
include "navbar.php";
$have = false;
$total = 0;
//check ว่ามีสินต้าในตระกร้าหรือเปล่า
foreach ($_SESSION['cart'] as $user => $cart) {
    if ($cart["User"] == $_SESSION["email"]) {
        $have = true;
    }
}


if (!isset($_SESSION['email'])) {
    header("location: login.php");
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['deleted'])) {
        //
        // array_pop($_SESSION["cart"]);
        unset($_SESSION["cart"][$_POST['deleted']]);
        unset($_POST['deteled']);
        header("Location: cart.php");
    }
    if (isset($_POST['de_qtn'])) {
        $qtn = $_SESSION['cart'][$_POST['de_qtn']]['Amount'];
        // print_r($qtn);
        if ($qtn <= 1) {
            $_SESSION['cart'][$_POST['de_qtn']]['Amount'] = 1;
        } else {
            $_SESSION['cart'][$_POST['de_qtn']]['Amount'] = $qtn - 1;
        }
    }
    if (isset($_POST['add_qtn'])) {
        $qtn = $_SESSION['cart'][$_POST['add_qtn']]['Amount'];
        // print_r($qtn);
        $_SESSION['cart'][$_POST['add_qtn']]['Amount'] = $qtn + 1;
        // $qtn['Amount'] = $qtn['Amount']+1;
        // print_r($_SESSION['cart'][$_POST['add_qtn']]);
    }
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
    <link href="stylescart.css" rel="stylesheet">
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
    <div class="container-fluid main-container">
        <div class="container mb-3">
            <h2 class="mt-3 mb-3 fw-bold"><img src="image/webelement/cartpage.png" alt=""> Shopping Cart</h2>
            <div class="card cart-card">
                <table class="table cart-table">
                    <thead>
                        <tr>
                            <th class="cart-list-product">Product</th>
                            <th class="cart-list-price">Price</th>
                            <th class="cart-list-unit">Unit</th>
                            <th class="cart-list-delete"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($_SESSION['cart'] as $user => $cart) {
                            if ($cart["User"] == $_SESSION["email"]) {
                                echo '<tr>
                                        <td>' . $cart['Proname'] . '</td>
                                        <td>' . number_format($cart['Price']) . '</td>
                                        <td><form action="' . htmlspecialchars($_SERVER["PHP_SELF"]) . '" method="post">
                                            <button name="de_qtn" value="' . $user . '" class="btn">-</button>
                                            <input value="' . $cart['Amount'] . '" disabled>
                                            <button name="add_qtn" value="' . $user . '" class="btn">+</button></form></td>
                                        <td>

                                        <form action="' . htmlspecialchars($_SERVER["PHP_SELF"]) . '" method="post">
                                            <button type="submit" value="' . $user . '" name="deleted" class="btn btn-danger">X</button>
                                            </form>
                                        </td>
                                        
                                    </tr>';
                                $total += $cart['Price'] * $cart['Amount'];
                            }
                        }

                        ?>
                    </tbody>
                </table>
                <h2 class="text-center fw-bold">
                    Total :
                    <?php echo number_format($total); ?>
                    Baht
                </h2>
                <h2 class="text-center mt-2">Checkout</h2>
                <!-- <a href="checkout.php" id ="order"name="order" class="btn btn-success m-3 pay-button">Checkout</a> -->
                <?php
                if (!$have) {
                    echo '<a href="javascript:void(0)" id ="order"name="order" class="btn btn-success m-3 pay-button">Checkout</a>';
                } else {
                    echo '<a href="checkout.php" id ="order"name="order" class="btn btn-success m-3 pay-button">Checkout</a>';
                }
                ?>
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