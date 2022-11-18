<?php
session_start();
include "db_connect.php";

if (!isset($_SESSION["priceInput"])) {
    $_SESSION["priceInput"] = "None";
}
if (!isset($_SESSION["typeInput"])) {
    $_SESSION["typeInput"] = "None";
}
if (!isset($_SESSION["titleInput"])) {
    $_SESSION["titleInput"] = "None";
}
if (!isset($_SESSION["searchName"])) {
    $_SESSION["searchName"] = "";
}
if (!isset($_SESSION["idmer"])) {
    $_SESSION["idmer"] = "1";
}
if (!isset($_SESSION["cart"])) {
    $_SESSION["cart"] = array();
}
if (!isset($_SESSION["ID"])) {
    $_SESSION["ID"] = 'null';
}

if (isset($_SESSION["email"])) {
}

if (isset($_POST['submitName'])) {
    $_SESSION['searchName'] = $_POST['searchName'];
}

//ถ้ากดปุ่มLogout
if (isset($_POST['logout'])) {
    unset($_SESSION["email"]); //unsetตัวแปรSession
    unset($_SESSION["ID"]);
    // header("location: index.php");
}
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <title>Navbar</title> -->
    <link href="stylesnavfoot.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</head>

<body>
    <!-- use sticky-top it's better but it's not support some version of web browser -->
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
            echo "<input type='submit' name='submitName' class='btn btn-outline-secondary search-button-nav fw-bold' value='Search'>";
            echo "</div>";
            ?>
        </form>

        <?php
        if (!isset($_SESSION["email"])) {
            //if not set session variable 
            echo '<ul class="nav me-5">
                        <li class="nav-item">
                            <a class="nav-link web-text-color fw-bold" href="signup.php">Sign Up</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link web-text-color fw-bold" href="login.php">Log In</a>
                        </li>
                    </ul>';
        } else {
            //if set will show username or email just like you want
            $sent = htmlspecialchars($_SERVER["PHP_SELF"]);
            // echo '<a class="nav-link web-text-color fw-bold" href="user.php">Welcome, ' . $_SESSION["email"] . '</a>';
            // echo '<form action="' . $sent . '" method="post">
            //         <button type="submit" name="logout">logout</button>
            //         </form>';
            echo '<a href="cart.php"><img src="image/webelement/cart.png" alt="" class="me-4"></a>';
            echo '<div class="dropdown me-5">
            <a class="btn btn-secondary dropdown-toggle user-dropdown" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="image/webelement/user.png" alt="">
            </a>
            <ul class="dropdown-menu dropdown-menu-end user-dropdown-list shadow-sm">
                <li><a class="dropdown-item text-white user-dropdown-list-item mt-2" href="user.php">Account</a></li>
                <li><a class="dropdown-item text-white user-dropdown-list-item" href="orders.php">Purchases</a></li>
                <li><a class="dropdown-item text-white user-dropdown-list-item" href="wishlist.php">Wish List</a></li>
                <li>
                    <form action="' . $sent . '" method="post">
                        <input type="hidden" name="logout">
                        <a class="dropdown-item text-white user-dropdown-list-item" onclick="this.parentNode.submit();">Log Out</a>
                    </form>
                </li>
            </ul>
        </div>';
        }
        ?>
    </nav>

    <div id="overlay"></div>
    <div id="popupaddcart">
        <div class="popupcontent">
            <h2>An item has been added to your cart.</h2>
        </div>
    </div>
    <div id="popupaddwishlist">
        <div class="popupcontent">
            <h2>An item has been added to your wishlist.</h2>
        </div>
    </div>

    <!-- <footer class="card-footer">
            <div class="container-fluid">
                <h1>test</h1>
            </div>
        </footer> -->


</body>

</html>