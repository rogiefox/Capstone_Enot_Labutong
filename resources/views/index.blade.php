<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Contrail+One&family=Great+Vibes&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>Blossom Bliss</title>
</head>
<body>
    {{-- Navigation Bar --}}
    @include('layout/UserNav')
    {{-- End of Navigation Bar --}}

    {{-- Header Carousel --}}
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner carousel-img-size h-100">
            <div class="carousel-item active">
                <img src="img/carousel-1.jpg" class="d-block w-100 h-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="img/carousel-2.jpg" class="d-block w-100 h-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="img/carousel-3.jpg" class="d-block w-100 h-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
    </div>
    {{-- End of Header Carousel --}}

    {{-- 1st Content of the Body --}}
    <div class="container mt-2">
        <div class="text-center welcome-text">
            <img src="img/footer-img.png">
            <h1 class="d-flex justify-content-center align-items-center">Blossom Bliss</h1>
            <img src="img/footer-img2.png">
            <p class="mt-3">Blossom Bliss Flower Shop, the leading flower shop in the Philippines.<br>
                Elevate Each Occasion with La Rosa's Elegant Arrangements.<br>
                Crafting Memories with Every Bouquet. 
            </p>
            <h6><u>ORDER NOW!</u></h6> 
        </div>
    </div>
    {{-- End of 1st Content --}}

    {{-- 2nd Content of the Body Featured Products --}}
    <div class="container header-text mt-5">
        <h1 class="text-center">Featured Products</h1>
        <div class="row g-4">
           <div class="col-md-4">
                <a href="/UserSingle" style="text-decoration: none;">
                    <div class="card border-0 rounded shadow">
                        <img src="flower-img/Azure Blossoms.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="text-center">Azure Blossom</h5>
                            <h5 class="text-center">&#8369; 3,500</h5>
                        </div>
                        <div class="layer">
                            <h6>A dozen of imported roses bouquet.</h6>
                            <input type="submit" value="ADD TO CART" class="btn btn-outline-warning">
                        </div>
                    </div>
                </a>    
           </div>
           <div class="col-md-4">
                <div class="card border-0 rounded shadow">
                    <img src="flower-img/Blooming Bliss.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="text-center">Blooming Bliss</h5>
                        <h5 class="text-center">&#8369; 3,500</h5>
                    </div>
                    <div class="layer">
                        <h6>A dozen of imported roses bouquet.</h6>
                        <input type="submit" value="ADD TO CART" class="btn btn-outline-warning">
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card border-0 rounded shadow">
                    <img src="flower-img/Carnation Cascade.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="text-center">Carnation Cascade</h5>
                        <h5 class="text-center">&#8369; 3,500</h5>
                    </div>
                    <div class="layer">
                        <h6>A dozen of imported roses bouquet.</h6>
                        <input type="submit" value="ADD TO CART" class="btn btn-outline-warning">
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card border-0 rounded shadow">
                    <img src="flower-img/Crimson Kiss.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="text-center">Crimson Kiss</h5>
                        <h5 class="text-center">&#8369; 3,500</h5>
                    </div>
                    <div class="layer">
                        <h6>A dozen of imported roses bouquet.</h6>
                        <input type="submit" value="ADD TO CART" class="btn btn-outline-warning">
                    </div>
                </div>
           </div>
           <div class="col-md-4">
                <div class="card border-0 rounded shadow">
                    <img src="flower-img/Petal Poetry.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="text-center">Petal Poetry</h5>
                        <h5 class="text-center">&#8369; 3,500</h5>
                    </div>
                    <div class="layer">
                        <h6>A dozen of imported roses bouquet.</h6>
                        <input type="submit" value="ADD TO CART" class="btn btn-outline-warning">
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card border-0 rounded shadow">
                    <img src="flower-img/Purple Passion.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="text-center">Purple Passion</h5>
                        <h5 class="text-center">&#8369; 3,500</h5>
                    </div>
                    <div class="layer">
                        <h6>A dozen of imported roses bouquet.</h6>
                        <input type="submit" value="ADD TO CART" class="btn btn-outline-warning">
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- End of 2nd Content of the Body Featured Products --}}

    {{-- 3rd Content of the Body Introduction Sentence --}}
    <div class="container-fluid mt-4" style="background-color: #F7F4EF;">
        <div class="container">
            <div class="row">
                <div class="col-md-6 d-flex justify-content-center align-items-center">
                    <img src="img/logo.png" class="h-75 w-75" alt="">
                </div>
                <div class="col-md-6 d-flex justify-content-center align-items-center engaging-text">
                    <p class="fw-bold">At Blossom Bliss, we believe in the magic of flowers to transform any moment into a cherished memory. Whether you're celebrating a special occasion, expressing heartfelt emotions, or simply brightening someone's day, our stunning floral arrangements are designed to convey your sentiments perfectly.</p>
                </div>
            </div>
        </div>
    </div>
    {{-- End of 3rd Content of the Body Introduction Sentence --}}

    {{-- 4th Content of the Body Best Seller Products --}}
    <div class="container header-text mt-4">
        <h1 class="text-center">Best Seller Products</h1>
        <div class="row g-4">
           <div class="col-md-4">
                <div class="card border-0 rounded shadow">
                    <img src="flower-img/Best-seller/Benoite.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="text-center">Benoite</h5>
                        <h5 class="text-center">&#8369; 3,500</h5>
                    </div>
                    <div class="layer">
                        <h6>A dozen of imported roses bouquet.</h6>
                        <input type="submit" value="ADD TO CART" class="btn btn-outline-warning">
                    </div>
                </div>
           </div>
           <div class="col-md-4">
                <div class="card border-0 rounded shadow">
                    <img src="flower-img/Best-seller/Darcie.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="text-center">Darcie</h5>
                        <h5 class="text-center">&#8369; 3,500</h5>
                    </div>
                    <div class="layer">
                        <h6>A dozen of imported roses bouquet.</h6>
                        <input type="submit" value="ADD TO CART" class="btn btn-outline-warning">
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card border-0 rounded shadow">
                    <img src="flower-img/Best-seller/Frédérique.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="text-center">Frédérique</h5>
                        <h5 class="text-center">&#8369; 3,500</h5>
                    </div>
                    <div class="layer">
                        <h6>A dozen of imported roses bouquet.</h6>
                        <input type="submit" value="ADD TO CART" class="btn btn-outline-warning">
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card border-0 rounded shadow">
                    <img src="flower-img/Best-seller/Liu Qing.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="text-center">Liu Qing</h5>
                        <h5 class="text-center">&#8369; 3,500</h5>
                    </div>
                    <div class="layer">
                        <h6>A dozen of imported roses bouquet.</h6>
                        <input type="submit" value="ADD TO CART" class="btn btn-outline-warning">
                    </div>
                </div>
           </div>
           <div class="col-md-4">
                <div class="card border-0 rounded shadow">
                    <img src="flower-img/Best-seller/Stella.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="text-center">Stella</h5>
                        <h5 class="text-center">&#8369; 3,500</h5>
                    </div>
                    <div class="layer">
                        <h6>A dozen of imported roses bouquet.</h6>
                        <input type="submit" value="ADD TO CART" class="btn btn-outline-warning">
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card border-0 rounded shadow">
                    <img src="flower-img/Best-seller/Vincenza.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="text-center">Vincenza</h5>
                        <h5 class="text-center">&#8369; 3,500</h5>
                    </div>
                    <div class="layer">
                        <h6>A dozen of imported roses bouquet.</h6>
                        <input type="submit" value="ADD TO CART" class="btn btn-outline-warning">
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- End of 4th Content of the Body Best Seller Products --}}

    {{-- Footer --}}
    @include('layout/UserFooter')
    {{-- End of Footer --}}

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>