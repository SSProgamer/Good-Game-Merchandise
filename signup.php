<?php
include 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $upcase = preg_match('@[A-Z]@', $password);
    $lowcase = preg_match('@[a-z]@', $password);
    $number = preg_match('@[0-9]@', $password);
    //check condition before create new user
    //used by php (optional)
    if (strlen($email) < 8) {
        //if username < 8
        echo "<script>";
        echo "alert(\"nlength < 8\")";
        echo "</script>";
    } else if (strlen($password) < 8) {
        //if password < 8
        echo "<script>";
        echo "alert(\"plength < 9\")";
        echo "</script>";
    } else if (!$upcase || !$lowcase || !$number) {
        echo "<script>";
        echo "window.alert(\" Password should atleast 1 lower&highercase character and number\");";
        echo "</script>";
    }
    // else if(){

    // }
    // else if($password){

    // }
    else if ($password != $_POST['c_pass']) {
        //if confirm != password
        echo "<script>";
        echo "alert(\"password not match\")";
        echo "</script>";
    } else {
        // echo $username, $password;
        $sql = "INSERT INTO Customer (CustomerID, Email, Password)
            VALUES (NULL,'" . $email . "', '" . $password . "')";
        $result = $db->query($sql);
        if (!$result) {
            echo $db->lastErrorMsg();
        } else {
            header("Location: Login.php");
        }
    }
}
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="stylesnavfoot.css">
    <link rel="stylesheet" href="styleslogin.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <!-- navbar -->
    <nav class="navbar sticky-top main-navbar shadow-sm border border-dark">
        <div class="container d-flex justify-content-center mt-2 mb-2">
            <h3><a class="nav-link text-white" href="index.php">GoodGame</a></h3>
        </div>
    </nav>

    <!-- main content -->
    <div class="container-fluid main-container d-flex justify-content-center">
        <div class="row">
            <div class="row col-12">
                <div class="col"></div>
                <div class="card mx-auto mt-5 mb-3 main-card col-12">
                    <div class="card-body">
                        <h5 class="card-title fw-bold text-center mb-3 mt-3">Create an account</h5>
                        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                            <div class="mb-3">
                                <input class="form-control" type="email" placeholder="Email" name="email">
                            </div>
                            <div class="mb-3">
                                <input type="password" class="form-control" placeholder="Password" name="password">
                            </div>
                            <div class="mb-3">
                                <input type="password" class="form-control" placeholder="Confirm Password" name="c_pass">
                            </div>
                            <button type="submit" class="btn fw-bold p-3 container-fluid our-card-button text-white">SIGN UP</button>
                        </form>
                    </div>
                </div>
                <div class="col"></div>
            </div>
            <div class="row col-12">
                <div class="col">
                    <h5 class="fw-bold text-center mb-3">Already have an account?</h5>
                    <button type="button" class="btn btn-dark mb-5 page-change" onClick="location.href='login.php'">LOG IN</button>
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
                    <a class="nav-link web-text-color pb-3" href="merchandises.php">Box Set</a>
                    <a class="nav-link web-text-color pb-3" href="merchandises.php">Merchandises</a>
                    <a class="nav-link web-text-color pb-3" href="merchandises.php">All Products</a>
                    <a class="nav-link web-text-color" href="merchandises.php">Products Popular</a>
                </div>
                <div class="col-2">
                    <p class="text-white">We sell many goody</p>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>