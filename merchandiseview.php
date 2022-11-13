<?php
session_start();
include "navbar.php";
include "db_connect.php";
$sql = "SELECT * FROM Merchandise WHERE ID =" . $_POST[""] . "";
$result = $db->query($sql);
// while($detail = $result->fetchArray(SQLITE3_ASSOC)){

// }
if (isset($_POST["addcart"])) {
}
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Good Game Merchandise</title>
    <link href="productview.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
</head>

<body>

    <div class="container-fluid main-container">
        <!-- <nav class="navbar fixed-top main-navbar shadow-sm border border-dark">
            <ul class="nav me-auto ms-5">
                <li class="nav-item ms-5">
                    <h1><a class="nav-link text-white" href="https://www.youtube.com/watch?v=cErgMJSgpv0">GoodGame</a></h1>
                </li>
                <li class="nav-item me-5">
                    <a class="nav-link web-text-color fw-bold text-in-nav" href="https://www.youtube.com/watch?v=cErgMJSgpv0">Box Sets</a>
                </li>
                <li class="nav-item ms-5">
                    <a class="nav-link web-text-color fw-bold text-in-nav" href="https://www.youtube.com/watch?v=cErgMJSgpv0">Merchandises</a>
                </li>
            </ul>
            <form class="d-flex text-in-nav search-nav" role="search">
                <input class="form-control me-2 text-white bg-dark fw-bold" type="search" placeholder="Search" aria-label="Search">
            </form>
            <ul class="nav me-5">
                <li class="nav-item">
                    <a class="nav-link web-text-color fw-bold" href="https://www.youtube.com/watch?v=cErgMJSgpv0">Sign Up</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link web-text-color fw-bold" href="https://www.youtube.com/watch?v=cErgMJSgpv0">Log In</a>
                </li>
            </ul>
        </nav> -->
        <div class="container-flex">
            <div class="row">
            </div>
            <div class="row m-5 p-5">
                <div class="col-lg-5 p-3">
                    <div class="merchaimagebig">
                        <img class="merchaimage" src="https://media.discordapp.net/attachments/1015671875583623209/1015913475702259772/unknown.png">
                        <label class="merchaimagecard">lol</label>
                    </div>
                </div>
                <div class="col-lg-2 m-5 p-5">
                    <h1 class="text-white">PENIS|PENIS</h1><br>
                    <div class="bigpricetag">
                        <h1 class="text-white">1678</h1>
                    </div>
                    <br>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <button class="custombigbut" type="submit" name="addcart">Add to cart</button>
                    </form>

                    <button class="custombigbut">Purchase</button>
                </div>
            </div>
            <!-- gallery -->
            <div class="row">
                <div class="container text-center my-3">
                    <div class="mx-auto my-auto justify-content-center">
                        <div id="recipeCarousel" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner" role="listbox">
                                <div class="carousel-item active">
                                    <div class="col-md-2 m-4">
                                        <div class="card">
                                            <div class="card-img">
                                                <img src="//via.placeholder.com/500x400/31f?text=1" class="img-fluid">
                                            </div>
                                            <div class="card-img-overlay">Slide 1</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="col-md-2 m-4">
                                        <div class="card">
                                            <div class="card-img">
                                                <img src="//via.placeholder.com/500x400/e66?text=2" class="img-fluid">
                                            </div>
                                            <div class="card-img-overlay">Slide 2</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="col-md-2 m-4">
                                        <div class="card">
                                            <div class="card-img">
                                                <img src="//via.placeholder.com/500x400/7d2?text=3" class="img-fluid">
                                            </div>
                                            <div class="card-img-overlay">Slide 3</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="col-md-2 m-4">
                                        <div class="card">
                                            <div class="card-img">
                                                <img src="//via.placeholder.com/500x400?text=4" class="img-fluid">
                                            </div>
                                            <div class="card-img-overlay">Slide 4</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="col-md-2 m-4">
                                        <div class="card">
                                            <div class="card-img">
                                                <img src="//via.placeholder.com/500x400/aba?text=5" class="img-fluid">
                                            </div>
                                            <div class="card-img-overlay">Slide 5</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="col-md-2 m-4">
                                        <div class="card">
                                            <div class="card-img">
                                                <img src="//via.placeholder.com/500x400/fc0?text=6" class="img-fluid">
                                            </div>
                                            <div class="card-img-overlay">Slide 6</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a class="carousel-control-prev bg-transparent w-aut" href="#recipeCarousel" role="button" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            </a>
                            <a class="carousel-control-next bg-transparent w-aut" href="#recipeCarousel" role="button" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div id="merchaninfo">
                    <p>jhiasoiSD<br>KOASP<br>DSLKA<br>dhujdjdioo<br>ijajoijiasdkjoadsjkldslkjsdajsdajlkasjdkaskdlajdajsodlajdokajodajsoidkjaodjsaoidjhaoidjhoqowjhdoiqjhdoisajldksja<br>jaosidjoiaskoasjdok<br>asjdsoka</p>
                </div>
            </div>
        </div>

        <!-- Recommend other product -->
        <h1>Recommended Merchandise</h1>
        <div class="row">
            <div class="container text-center my-3">
                <div class="mx-auto my-auto justify-content-center">
                    <div id="recipeCarousel" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item active">
                                <div class="col-md-2 m-4">
                                    <div class="card">
                                        <div class="card-img">
                                            <img src="//via.placeholder.com/500x400/31f?text=1" class="img-fluid">
                                        </div>
                                        <div class="card-img-overlay">Slide 1</div>
                                    </div>
                                </div>
                                <!-- </div> -->
                                <!-- <div class="carousel-item"> -->
                                <div class="col-md-2 m-4">
                                    <div class="card">
                                        <div class="card-img">
                                            <img src="//via.placeholder.com/500x400/e66?text=2" class="img-fluid">
                                        </div>
                                        <div class="card-img-overlay">Slide 2</div>
                                    </div>
                                </div>
                                <!-- </div> -->
                                <!-- <div class="carousel-item"> -->
                                <div class="col-md-2 m-4">
                                    <div class="card">
                                        <div class="card-img">
                                            <img src="//via.placeholder.com/500x400/7d2?text=3" class="img-fluid">
                                        </div>
                                        <div class="card-img-overlay">Slide 3</div>
                                    </div>
                                </div>
                                <!-- </div> -->
                                <!-- <div class="carousel-item"> -->
                                <div class="col-md-2 m-4">
                                    <div class="card">
                                        <div class="card-img">
                                            <img src="//via.placeholder.com/500x400?text=4" class="img-fluid">
                                        </div>
                                        <div class="card-img-overlay">Slide 4</div>
                                    </div>
                                </div>
                                <!-- </div> -->
                                <!-- <div class="carousel-item"> -->
                                <div class="col-md-2 m-4">
                                    <div class="card">
                                        <div class="card-img">
                                            <img src="//via.placeholder.com/500x400/aba?text=5" class="img-fluid">
                                        </div>
                                        <div class="card-img-overlay">Slide 5</div>
                                    </div>
                                </div>
                                <!-- </div> -->
                                <!-- <div class="carousel-item"> -->
                                <div class="col-md-2 m-4">
                                    <div class="card">
                                        <div class="card-img">
                                            <img src="//via.placeholder.com/500x400/fc0?text=6" class="img-fluid">
                                        </div>
                                        <div class="card-img-overlay">Slide 6</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <a class="carousel-control-prev bg-transparent w-aut" href="#recipeCarousel" role="button" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        </a>
                        <a class="carousel-control-next bg-transparent w-aut" href="#recipeCarousel" role="button" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        </a> -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="main-navbar">
        <div class="container-flex p-5">
            <div class="row">
                <div class="col-lg-3">
                    <h1><a class="nav-link text-white" href="https://www.youtube.com/watch?v=cErgMJSgpv0">GoodGame</a></h1>
                </div>
                <div class="col-lg-7">
                    <a class="nav-link web-text-color pb-3" href="https://www.youtube.com/watch?v=cErgMJSgpv0">Box Set</a>
                    <a class="nav-link web-text-color pb-3" href="https://www.youtube.com/watch?v=cErgMJSgpv0">Merchandises</a>
                    <a class="nav-link web-text-color pb-3" href="https://www.youtube.com/watch?v=cErgMJSgpv0">All Products</a>
                    <a class="nav-link web-text-color" href="https://www.youtube.com/watch?v=cErgMJSgpv0">Products Popular</a>
                </div>
                <div class="col-lg-2">
                    <p class="text-white">We sell many goody</p>
                </div>
            </div>
        </div>
    </footer>
    <script src="script.js"></script>
</body>

</html>
<!--             
    <div class ="row">
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
                    <div class="carousel-indicators">
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <div class ="col-sm-1 p-5"><img src="https://media.discordapp.net/attachments/1015671875583623209/1015914229745848320/unknown.png" class="merchaimage" alt="...">
                            <label class ="merchaimagecard">lol</label></div>
                      </div>
                      <div class="carousel-item">
                        <img src="https://pbs.twimg.com/media/FdbC7Z0aUAExotZ?format=png&name=small" class="merchaimage" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="https://pbs.twimg.com/media/FcGGastacAIRsie?format=png&name=4096x4096" class="merchaimage" alt="...">
                      </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>
                -->