<?php
include "navbar.php";
$sql = "SELECT * FROM Customer WHERE CustomerID =" . $_SESSION["ID"] . "";
$result = $db->query($sql);
if (!$result) {
    // echo "bruh";
    header("location: login.php");
}
if (isset($_POST["submit"])) {
    $sql2 = 'UPDATE Customer
    SET FirstName = "' . $_POST['fname'] . '", LastName = "' . $_POST['lname'] . '", Address= "' . $_POST['address'] . '", City= "' . $_POST['city'] . '",Province="' . $_POST['province'] . '",Postcode="' . $_POST['postcode'] . '",phonenumber="' . $_POST['phone'] . '"
    WHERE CustomerID = "' . $_SESSION["ID"] . '"';
    $result2 = $db->query($sql2);
    if (!$result2) {
        // 
    }
}

?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User</title>
    <link rel="stylesheet" href="stylesuser.css">
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
    <?php
    while ($info = $result->fetchArray(SQLITE3_ASSOC)) {
        echo '<div class="container-fluid main-container">
        <div class="container">
            <h2 class="mt-3 mb-3 fw-bold">Account Information</h2>
            <div class="container account-div p-5 mb-5 rounded">
            <form action="' . htmlspecialchars($_SERVER["PHP_SELF"]) . '" method="post">
                <div class="row align-items-center mb-3">
                    <div class="col-2">
                        <h5 class="fw-bold text-end"><label for="infoemail" class="col-form-label">Email Address</label></h5>
                    </div>
                    <div class="col-9">
                        <input type="email" id="infoemail" class="form-control" value="' . $info["Email"] . '" disabled>
                    </div>
                </div>
                <div class="row align-items-center mb-3">
                    <div class="col-2">
                        <h5 class="fw-bold text-end"><label for="infofname" class="col-form-label">Firstname</label></h5>
                    </div>
                    <div class="col-9">
                        <input type="text" id="infofname" name="fname" class="form-control" value="' . $info["FirstName"] . '" disabled>
                    </div>
                </div>
                <div class="row align-items-center mb-3">
                    <div class="col-2">
                        <h5 class="fw-bold text-end"><label for="infolname" class="col-form-label">Lastname</label></h5>
                    </div>
                    <div class="col-9">
                        <input type="text" id="infolname" name="lname" class="form-control" value="' . $info["LastName"] . '" disabled>
                    </div>
                </div>
                <div class="row align-items-center mb-3">
                    <div class="col-2">
                        <h5 class="fw-bold text-end"><label for="infoaddress" class="col-form-label">Address</label></h5>
                    </div>
                    <div class="col-9">
                        <input type="text" id="infoaddress" name="address" class="form-control" value="' . $info["Address"] . '" disabled>
                    </div>
                </div>
                <div class="row align-items-center mb-3">
                    <div class="col-2">
                        <h5 class="fw-bold text-end"><label for="infocity" class="col-form-label">City</label></h5>
                    </div>
                    <div class="col-9">
                        <input type="text" id="infocity" name="city" class="form-control" value="' . $info["City"] . '" disabled>
                    </div>
                </div>
                <div class="row align-items-center mb-3">
                    <div class="col-2">
                        <h5 class="fw-bold text-end"><label for="infoprovince" class="col-form-label">Province</label></h5>
                    </div>
                    <div class="col-9">
                        <input type="text" id="infoprovince" name="province" class="form-control" value="' . $info["Province"] . '" disabled>
                    </div>
                </div>
                <div class="row align-items-center mb-3">
                    <div class="col-2">
                        <h5 class="fw-bold text-end"><label for="infopostcode" class="col-form-label">Postcode</label></h5>
                    </div>
                    <div class="col-9">
                        <input type="text" id="infopostcode" name="postcode" class="form-control" value="' . $info["Postcode"] . '" disabled>
                    </div>
                </div>
                <div class="row align-items-center mb-4">
                    <div class="col-2">
                        <h5 class="fw-bold text-end"><label for="infophone" class="col-form-label">Phone Number</label></h5>
                    </div>
                    <div class="col-9">
                        <input type="text" id="infophone" name="phone" class="form-control" value="' . $info["phonenumber"] . '" disabled>
                    </div>
                </div>
    
    <div class="d-flex justify-content-end">
        <button onclick="edit_info()" id="edit" class="btn btn-primary change-button me-3">Edit</button>
        
            <button type="submit" class="btn btn-primary change-button" id="submit" disabled>Update</button>
        </form>
        </div>
        </div>
        </div>
        </div>';
    } ?>


    <!-- footer -->
    <footer class="main-navbar">
        <div class="container-fluid p-5">
            <div class="row">
                <div class="col-3">
                    <h3><a class="nav-link text-white" href="index.php">GoodGame</a></h3>
                </div>
                <div class="col-7">
                    <a class="nav-link web-text-color pb-3" href="filter.php">All Products</a>
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
<script>
    // get value from input เผื่อจะมีกดยกเลิกแก้ไขก็เอาจับยัดเข้าที่
    // let name = document.getElementById("").value;
    // let lname = document.getElementById("").value;
    // let addr = document.getElementById("").value;
    // let city = document.getElementById("").value;
    // let province = document.getElementById("").value;
    // let postcode = document.getElementById("").value;
    // let number = document.getElementById("").value;


    function edit_info() {
        document.getElementById("submit").disabled = false;
        document.getElementById("edit").disabled = true;
        document.getElementById("infofname").disabled = false;
        document.getElementById("infolname").disabled = false;
        document.getElementById("infoaddress").disabled = false;
        document.getElementById("infocity").disabled = false;
        document.getElementById("infoprovince").disabled = false;
        document.getElementById("infopostcode").disabled = false;
        document.getElementById("infophone").disabled = false;
    }
</script>

</html>