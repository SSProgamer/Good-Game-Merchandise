<?php
include "navbar.php";
$sql2 = "SELECT * FROM 'OrderDetail' WHERE Order_ID =" . $_GET['id'] . "";
$result2 = $db->query($sql2);
if (!$result2) {
    echo "bruh";
    echo $db->lastErrorMsg();
    // header("location: login.php");
}
if (!isset($_SESSION["email"])) {
    header("location: login.php");
}
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orders Details</title>
    <link href="stylesorderdetail.css" rel="stylesheet">
    <link rel="stylesheet" href="stylesnavfoot.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Chakra+Petch&display=swap" rel="stylesheet">
</head>

<body>
    <div class="container-fluid main-container">
        <div class="container mt-3 mb-3">
            <div class="row">
                <div class="col-5">
                    <div class="card">
                        <div class="card-body">
                            <h2 class="card-title fw-bold">Customer Details</h2>
                            <!-- <div>
                                <label for="customername" class="form-label">Name</label>
                                <input type="text" class="form-control" id="customername" disabled value="">
                            </div> -->
                            <?php
                            $sql = "SELECT * FROM 'Order' WHERE Order_ID = " . $_GET['id'] . "";
                            $result = $db->query($sql);
                            if (!$result) {
                                // echo "bruh 2";
                                echo $db->lastErrorMsg();
                            } else {
                                while ($ord = $result->fetchArray(SQLITE3_ASSOC)) {
                                    echo "<h4 class='mt-4 text-center'>Order Number : " . $ord['Order_ID'] . "</h4>";
                                    echo "<div class='mb-3'><label for='customername' class='form-label'><h4>Name</h4></label>";
                                    echo "<input type='text' class='form-control' id='customername' disabled value='" . $ord['Ord_name'] . " " . $ord['Ord_lname'] . "'></div>";
                                    echo "<div class='mb-3'><label for='customeraddresses' class='form-label'><h4>Addresses</h4></label><textarea class='form-control' id='customeraddresses' disabled>" . $ord['Ord_address'] . " ";
                                    echo $ord['Ord_city'] . " ";
                                    echo $ord['Ord_province'] . " ";
                                    echo $ord['Ord_post'] . " ";
                                    echo "</textarea></div>";
                                    echo "<div class='mb-3'><label for='customerphonenumber' class='form-label'><h4>Phone Number</h4></label>";
                                    echo "<input type='text' class='form-control' id='customerphonenumber' disabled value='" . $ord['Ord_phone'] . "'></div>";
                                    echo "<div><label for='customerdate' class='form-label'><h4>Date</h4></label>";
                                    echo "<input type='text' class='form-control' id='customerdate' disabled value='" . $ord['Ord_date'] . "'></div>";
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col-7">
                    <div class="card">
                        <div class="card-body">
                            <h2 class="card-title fw-bold">Merchandises Details</h2>
                            <table class="table cart-table">
                                <thead>
                                    <tr>
                                        <th class="orderdetail-list-product">Product</th>
                                        <th class="orderdetail-list-price">Price</th>
                                        <th class="orderdetail-list-unit">Unit</th>
                                        <th class="cart-list-delete"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    while ($item = $result2->fetchArray(SQLITE3_ASSOC)) {
                                        //get productid from orderdetail and fetch on merchandise table
                                        $sql3 = "SELECT * FROM 'Merchandise' WHERE ID = " . $item['P_id'] . "";
                                        $result3 = $db->query($sql3);
                                        if (!$result3) {
                                            // echo "bruh 2";
                                            echo $db->lastErrorMsg();
                                        } else {
                                            while ($product = $result3->fetchArray(SQLITE3_ASSOC)) {
                                                //อาจมีการดึงรูปด้วยนะ
                                                echo "<tr>";
                                                echo "<td>" . $product['NameProduct'] . "</td>";
                                                echo "<td>" . number_format($product['Price']) . "</td>";
                                                echo "<td>" . $item['Order_qtn'] . "</td>";
                                                echo "</tr>";
                                                // echo $product['NameProduct']+"<br>";
                                            }
                                        }
                                    }
                                    ?>
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
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