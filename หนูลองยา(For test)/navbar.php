<?php
session_start();
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Good Game Merchandise</title>
    <link href="stylesmainpage.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</head>

<body>
    <!-- use sticky-top it's better but it's not support some version of web browser -->
    <nav class="navbar navbar-expand-lg sticky-top bg-dark shadow-sm border border-dark">
        <div class="container-fluid">
            <h1 class="text-light">GoodGame</h1>
            <button class="navbar-toggler collapsed bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent" style="">
                <ul class="navbar-nav me-auto mb-2">
                    <li class="nav-item">
                        <a class="nav-link web-text-color fw-bold" href="">Box Sets</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link web-text-color fw-bold" href="">Merchandises</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
                <div class="d-flex ">
                    <?php
                    if (!isset($_SESSION["username"])) {
                        echo '<ul class="nav me-5">
                        <li class="nav-item">
                            <a class="nav-link web-text-color fw-bold" href="https://www.youtube.com/watch?v=cErgMJSgpv0">Sign Up</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link web-text-color fw-bold" href="https://www.youtube.com/watch?v=cErgMJSgpv0">Log In</a>
                        </li>
                    </ul>';
                    } else {
                        $sent = htmlspecialchars($_SERVER["PHP_SELF"]);
                        echo '<a class="nav-link web-text-color fw-bold" href="#">Welcome, ' . $_SESSION["username"] . '</a>';
                        echo'<form action="'.$sent.'" method="post">
                        <button type="submit" name="logout">logout</button>
                        </form>';
                    }
                    ?>
                </div>
            </div>
        </div>
    </nav>

    <!-- <footer class="card-footer">
            <div class="container-fluid">
                <h1>test</h1>
            </div>
        </footer> -->


</body>

</html>