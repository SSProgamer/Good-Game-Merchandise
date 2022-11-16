<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Good Game Merchandise</title>
    <link href="css_merchandise.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
    
    /*slider*/
.slider {
    width: 100%;
    text-align: center;
    overflow: hidden;
  }
  .slides {
    display: flex;
    overflow-x: auto;
    scroll-snap-type: x mandatory;
    scroll-behavior: smooth;
    -webkit-overflow-scrolling: touch;
  }
  .slides::-webkit-scrollbar {
    width: 10px;
    height: 10px;
  }
  .slides::-webkit-scrollbar-thumb {
    background: #666;
    border-radius: 10px;
  }
  .slides::-webkit-scrollbar-track {
    background: transparent;
  }
  .slides > div {
    scroll-snap-align: start;
    flex-shrink: 0;
    width: 450px;
    height: 300px;
    margin-right: 50px;
    border-radius: 10px;
    background: #eee;
    transform-origin: center center;
    transform: scale(1);
    transition: transform 0.5s;
    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
    font-size: 100px;
  }
  .slider > a {
    display: inline-flex;
    width: 1.5rem;
    height: 1.5rem;
    background: white;
    text-decoration: none;
    align-items: center;
    justify-content: center;
    border-radius: 50%;
    margin: 0 0 0.5rem 0;
    position: relative;
  }
  .slider > a:active {
    top: 1px;
    color: #1c87c9;
  }
  .slider > a:focus {
    background: #eee;
  }
  /* Don't need button navigation */
  @supports (scroll-snap-type) {
    .slider > a {
      display: none;
    }
  }
</style>

<body>
     <div id="overlay"></div>
        <div id="popup" >
            <nav class ="popupnav">
            <div>
                    <span class="popupclose" onclick="closepopup()">X</span>
                    <div class="navhead"><i style="font-size:36px" class="fa">&#xf07a;</i>Now i'm gay<div>
                </div>
            </nav>
            <div class ="popupcontent overflow-auto">
                <table class="table border-secondary " id="cart">
                    <tbody>
                        <tr>
                            <td class = "cartitem">Mark</td>
                            <td class ="cartprice">$69</td>
                        </tr>
                
                </tbody>
              </table>  
            </div>
            <table class="totalborder">
                <tbody>
                    <tr>
                        <td id ="cartitemtotal">Total:</td>
                        <td id ="cartpricetotal">$idk lol</td>
                    </tr>
                </tbody>
            </table>
            <br>
            <br>
            <nav class ="popupnav">
                <div>
                        <div class="navhead">Checkout<div>
                    </div>
                    <button type="button" class="customsmallpopupbut" onclick="">confirm</button>
                </nav>
        </div>
        <div id="popupaddcart">
            <div class="popupcontrols">
                <span class="popupclose" onclick="closepopup()">X</span>
            </div>
            <div class="popupcontentaddcart">
                <h2>Item had been added to your cart! c:</h2>
            </div>
        </div>
    <div class="container-fluid main-container">
        <nav class="navbar fixed-top main-navbar shadow-sm border border-dark">
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
        </nav>
       
        <div class="container-flex">
            <div class="row">
            </div>
            <div class="row m-5 p-5">
                <div class ="col-lg-5 p-3">
                    <div class="merchaimagebig">
                        <img class="merchaimage" src="https://cdn.discordapp.com/attachments/1012021672590721096/1032585147343708220/unknown.png" style="width: 100%; height: 100%; object-fit: scale-down;">
                    </div>
                </div>
                <div class ="col-lg-2 m-5 p-5">
                    <h1 class="text-white">PENIS|PENIS</h1><br>
                    <div class="bigpricetag"><h1 class="text-white">1678</h1></div>
                    <br>
                    <button type="button" class="custombigbut" onclick="addtocartPopUp()">Add to cart</button>
                    <button type="button" class="custombigbut" onclick="purchasePopUp()">Purchase</button>
                    <button type="button" class="customsmallbut" onclick="">Add to wishlist</button>
                </div>
            </div>
            <h1>Image Merchandise</h1>
            <div class ="row">

                <div class="container text-center my-3">
                <div class="slider">
                    <div class="slides">
                    
                        <div id="slide-1">
                            <img src="https://cdn.discordapp.com/attachments/1012021672590721096/1032585379095793714/unknown.png" alt="" style="width: 450px; height: 300px; object-fit: cover; object-position: 50% 0;">
                        </div>
                        <div id="slide-2">2</div>
                        <div id="slide-3">3</div>
                        <div id="slide-4">4</div>
                        <div id="slide-5">5</div>
                        <div id="slide-6">6</div>
                        <div id="slide-7">7</div>
                        <div id="slide-8">8</div>
                        <div id="slide-9">9</div>
                    </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div id="merchaninfo">
                    <div><h1>Info</h1>
                        <ul>
                            <li>jadifsjiasdopoipjadsjioadsoijadsoijdasjasdfjkoasdadsioasdojkadsoadskjdasdakjpsadskjpajkds;lasdkl;aslpkaskl</li>
                        </ul>
                    </div>
                    <div><h1>Details</h1>
                        <ul>
                            <li>jadifsjiasdopoipjadsjioadsoijadsoijdasjasdfjkoasdadsioasdojkadsoadskjdasdakjpsadskjpajkds;lasdkl;aslpkaskl</li>
                            <li>jadifsjiasdopoipjadsjioadsoijadsoijdasjasdfjkoasdadsioasdojkadsoadskjdasdakjpsadskjpajkds;lasdkl;aslpkaskl</li>
                            <li>jadifsjiasdopoipjadsjioadsoijadsoijdasjasdfjkoasdadsioasdojkadsoadskjdasdakjpsadskjpajkds;lasdkl;aslpkaskl</li>
                            <li>jadifsjiasdopoipjadsjioadsoijadsoijdasjasdfjkoasdadsioasdojkadsoadskjdasdakjpsadskjpajkds;lasdkl;aslpkaskl</li>
                            
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <h1>Recommended Merchandise</h1>
        <div class ="row">
            <div class="container text-center my-3">
            
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
    <script src="js_merchandise.js"></script>
</body>

</html>