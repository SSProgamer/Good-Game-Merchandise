<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User</title>
    <link rel="stylesheet" href="stylesuser.css">
    <link rel="stylesheet" href="stylesnavfoot.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Chakra+Petch&display=swap" rel="stylesheet">
</head>

<body>
    <!-- navbar -->
    <nav class="navbar sticky-top main-navbar shadow-sm border border-dark">
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

        <div class="justify-content-end me-5">
            <div class="dropdown">
                <a class="btn btn-secondary dropdown-toggle user-dropdown" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="image/webelement/user.png" alt="">
                </a>
                <ul class="dropdown-menu dropdown-menu-end user-dropdown-list shadow-sm">
                    <li><a class="dropdown-item text-white user-dropdown-list-item" href="user.php">Account</a></li>
                    <li><a class="dropdown-item text-white user-dropdown-list-item" href="#">Purchases</a></li>
                    <li><a class="dropdown-item text-white user-dropdown-list-item" href="#">Wish List</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container-fluid main-container">
        <div class="container">
            <h2 class="mt-3 mb-3 fw-bold">Account Information</h2>
            <div class="container account-div p-5">
                <div class="row align-items-center">
                    <div class="col-auto">
                        <h5 class="fw-bold"><label for="infoemail" class="col-form-label">Email Address</label></h5>
                    </div>
                    <div class="col">
                        <input type="email" id="infoemail" class="form-control">
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
                    <a class="nav-link web-text-color pb-3" href="filter.php">Box Set</a>
                    <a class="nav-link web-text-color pb-3" href="filter.php">Merchandises</a>
                    <a class="nav-link web-text-color pb-3" href="filter.php">All Products</a>
                    <a class="nav-link web-text-color" href="filter.php">Products Popular</a>
                </div>
                <div class="col-2">
                    <p class="text-white">We sell many goody</p>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>