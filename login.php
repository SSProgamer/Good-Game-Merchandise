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
            <div class="card mx-auto mt-5 mb-3 main-card col-12">
                <div class="card-body">
                    <h5 class="card-title fw-bold text-center mb-3 mt-3">Log In</h5>
                    <form action="">
                        <div class="mb-3">
                            <input class="form-control" type="email" placeholder="Email">
                        </div>
                        <div class="mb-3">
                            <input type="password" class="form-control" placeholder="Password">
                        </div>
                        <button type="submit" class="btn fw-bold p-3 container-fluid our-card-button text-white">LOG IN</button>
                    </form>
                </div>
            </div>
            <h5 class="fw-bold text-center mb-3">Don't have an account?</h5>
            <button type="button" class="btn btn-dark mb-5" onClick="location.href='signup.php'">CREATE ACCOUNT</button>
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
                    <a class="nav-link web-text-color pb-3" href="https://www.youtube.com/watch?v=cErgMJSgpv0">Merchandises</a>
                    <a class="nav-link web-text-color pb-3" href="https://www.youtube.com/watch?v=cErgMJSgpv0">All Products</a>
                    <a class="nav-link web-text-color" href="https://www.youtube.com/watch?v=cErgMJSgpv0">Products Popular</a>
                </div>
                <div class="col-2">
                    <p class="text-white">We sell many goody</p>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>