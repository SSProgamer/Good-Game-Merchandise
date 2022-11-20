<?php
include "navbar.php";
// $sql = "INSERT INTO 'Receipt' (ID, CustomerID, Ord_id, Re_amount, Re_image, Re_date, Re_account)
// VALUES (NULL, $_SESSION['ID'], $_POST['order'], $_POST['amount'], image,$_POST['date'], $_POST['accouunt'])";
if (!isset($_SESSION['email'])) {
    header("location: login.php");
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //Directory ที่จะใส่รูป
    $target_dir = "admin/receipt/";
    //ตัวแปรcheckว่ามีรูปซ้ำมั้ย
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    $uploadOk = 1;
    //ตัวแปรดดึงนามสกุลไฟล์
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    if (isset($_POST["submit"])) {
        $check = getimagesize($_FILES["image"]["tmp_name"]);
        if ($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }
    }
    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }
    if (
        $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"

    ) {
        echo "Sorry, only JPG, JPEG, PNG files are allowed.";
        $uploadOk = 0;
    }
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
            // upload สำเร็จ ทำSQL
            echo "The file " . htmlspecialchars(basename($_FILES["image"]["name"])) . " has been uploaded.";
            $sqlinsert = "INSERT INTO 'Receipt' (ID, CustomerID, Ord_id, Re_amount, Re_image, Re_date, Re_account)
            VALUES (NULL, " . $_SESSION['ID'] . ", " . $_POST['order'] . ", " . $_POST['amount'] . ", '" . basename($_FILES['image']['name']) . "', '" . $_POST['date'] . "', '" . $_POST['account'] . "')";
            $result3 = $db->query($sqlinsert);
            if (!$result3) {
                echo $db->lastErrorMsg();
                echo "error";
            } else {
                $update = "UPDATE 'Order'
                SET Order_Status = 'Pending'
                WHERE Order_ID = " . $_POST['order'] . "";
                $result2 = $db->query($update);
                if (!$result2) {
                    echo $db->lastErrorMsg();
                } else {
                    //เตือนว่าได้ส่งแล้ว
                    header("location: orders.php");
                }
            }
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
}
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Send Reciept</title>
    <link href="stylessendreceipt.css" rel="stylesheet">
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
        <div class="container">
            <div class="row">
                <div class="col-3"></div>
                <div class="card mt-3 mb-3 col-6">
                    <div class="card-body">
                        <h2 class="card-title text-center fw-bold mt-3 mb-4">Confirm Transaction</h2>
                        <img src="image/webelement/qrcode.png" alt="" class="rounded mx-auto d-block">
                        <label for="order" class="form-label mt-3">
                            <h5>Order</h5>
                        </label>
                        <select name="order" id="order" form="receipt" required class="form-select">
                            <option value="">=====Select Order you want to pay=====</option>
                            <?php
                            $order = "SELECT * FROM 'Order' WHERE CustomerID =" . $_SESSION["ID"] . " AND Order_status = 'wait_payment'";
                            $result = $db->query($order);
                            if (!$result) {
                                echo $db->lastErrorMsg();
                            } else {
                                while ($n_payorder = $result->fetchArray(SQLITE3_ASSOC)) {
                                    echo '<option value="' . $n_payorder["Order_ID"] . '">OrderID: ' . $n_payorder["Order_ID"] . '  at ' . $n_payorder["Ord_date"] . '  Total: ' . number_format($n_payorder["Ord_total"]) . '</option>';
                                }
                            }
                            ?>
                        </select>
                        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" id="receipt" enctype="multipart/form-data">
                            <label for="image" class="form-label mt-3">
                                <h5>Slip</h5>
                            </label>
                            <input type="file" name="image" id="image" class="form-control">
                            <label for="account" class="form-label mt-3">
                                <h5>Account Name</h5>
                            </label>
                            <input type="text" name="account" id="account" class="form-control">
                            <label for="amount" class="form-label mt-3">
                                <h5>Amount</h5>
                            </label>
                            <input type="text" name="amount" id="amount" class="form-control">
                            <label for="date" class="form-label mt-3">
                                <h5>Day of Transaction </h5>
                            </label>
                            <input type="datetime-local" name="date" id="date" class="form-control"><br>
                            <div class="d-flex justify-content-end">
                                <button type="submit" name="submit" class="btn reciept-button">Submit your reciept</button><br>
                            </div>
                        </form>
                    </div>
                </div>
                <div class=" col-3">
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