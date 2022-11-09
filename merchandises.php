<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
    <link rel="stylesheet" href="stylesmerchandises.css">
    <link rel="stylesheet" href="stylesnavfoot.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <!-- navbar -->
    <nav class="navbar sticky-top main-navbar shadow-sm border border-dark">
        <ul class="nav me-auto ms-5">
            <li class="nav-item ms-5 mt-1">
                <h3><a class="nav-link text-white" href="index.php">GoodGame</a></h3>
            </li>
            <li class="nav-item me-5">
                <a class="nav-link web-text-color fw-bold text-in-nav" href="merchandises.php">Box Sets</a>
            </li>
            <li class="nav-item ms-5">
                <a class="nav-link web-text-color fw-bold text-in-nav" href="merchandises.php">Merchandises</a>
            </li>
        </ul>
        <form class="d-flex text-in-nav search-nav" role="search">
            <input class="form-control me-2 text-white bg-dark fw-bold" type="search" placeholder="Search" aria-label="Search">
        </form>
        <ul class="nav me-5">
            <li class="nav-item">
                <a class="nav-link web-text-color fw-bold" href="signup.php">Sign Up</a>
            </li>
            <li class="nav-item">
                <a class="nav-link web-text-color fw-bold" href="login.php">Log In</a>
            </li>
        </ul>
    </nav>

    <!-- main content -->
    <div class="container-fluid main-container">
        <div class="container">
            <h3 class="result pt-5 pb-3">Results</h3>
            <p class="filter-tab fw-bold pe-2">FILTER</p>
            <div class="dropdown filter-tab">
                <button class="btn btn-link dropdown-toggle dropdown-text" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Dropdown button
                </button>
                <ul class="dropdown-menu custom-droplist">
                    <li><a class="dropdown-item custom-droplist-text" href="#">Action</a></li>
                    <li><a class="dropdown-item custom-droplist-text" href="#">Another action</a></li>
                    <li><a class="dropdown-item custom-droplist-text" href="#">Something else here</a></li>
                </ul>
            </div>
            <p class="filter-tab fw-bold pe-2">FILTER</p>
            <div class="dropdown filter-tab">
                <button class="btn btn-link dropdown-toggle dropdown-text" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Dropdown button
                </button>
                <ul class="dropdown-menu custom-droplist">
                    <li><a class="dropdown-item custom-droplist-text" href="#">Action</a></li>
                    <li><a class="dropdown-item custom-droplist-text" href="#">Another action</a></li>
                    <li><a class="dropdown-item custom-droplist-text" href="#">Something else here</a></li>
                </ul>
            </div>
            <p class="filter-tab fw-bold pe-2">FILTER</p>
            <div class="dropdown filter-tab">
                <button class="btn btn-link dropdown-toggle dropdown-text" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Dropdown button
                </button>
                <ul class="dropdown-menu custom-droplist">
                    <li><a class="dropdown-item custom-droplist-text" href="#">Action</a></li>
                    <li><a class="dropdown-item custom-droplist-text" href="#">Another action</a></li>
                    <li><a class="dropdown-item custom-droplist-text" href="#">Something else here</a></li>
                </ul>
            </div>
            <div class="row mt-5">
                <div class="col-lg-3 col-md-4 col-sm-6 col-12 mb-3">
                    <div class="card style-card">
                        <img src="image/1/preview.webp" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-12 mb-3">
                    <div class="card style-card">
                        <img src="image/1/preview.webp" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-12 mb-3">
                    <div class="card style-card">
                        <img src="image/1/preview.webp" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-12 mb-3">
                    <div class="card style-card">
                        <img src="image/1/preview.webp" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
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