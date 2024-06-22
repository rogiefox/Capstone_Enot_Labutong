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
    @include('layout/UserProdNav')
    {{-- End of Navigation Bar --}}
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-2 ms-5 d-flex justify-cotent-center align-items-center">
                <div class="w-100 header-check">
                    <h3>Shipping Information</h3>
                    <div class="d-flex flex-column mb-2">
                        <label>Full Name:</label>
                        <input type="text" class="form-control shadow" style="height: 50px;">
                        <label>Email Address:</label>
                        <input type="text" class="form-control shadow" style="height: 50px;">
                        <label>Full Address:</label>
                        <input type="text" class="form-control shadow" style="height: 50px;">
                        <label>Phone Number:</label>
                        <input type="text" class="form-control shadow" style="height: 50px;">
                        <label>Payment Method:</label>
                        <input type="text" class="form-control shadow" style="height: 50px;">
                        <label>Total Amount:</label>
                        <input type="text" class="form-control shadow" style="height: 50px;">
                    </div>
                    <div>
                        <input type="button" class="btn btn-outline-warning text-dark w-50 mt-2" value="Pay">
                    </div>
                </div>
                <div class="w-100 ms-3 mt-5">
                    <div id="carouselExample" class="carousel slide">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="flower-img/Azure Blossoms.jpg" alt="" class="h-50 w-75 rounded">
                                <div>
                                    <h3>Azure Blossoms</h3>
                                    <h6>&#8369; 3,500</h6>
                                    <h6>Sample Message</h6>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="flower-img/Azure Blossoms.jpg" alt="" class="h-50 w-75 rounded">
                                <div>
                                    <h3>Azure Blossoms</h3>
                                    <h6>&#8369; 3,500</h6>
                                    <h6>Sample Message</h6>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="flower-img/Azure Blossoms.jpg" alt="" class="h-50 w-75 rounded">
                                <div>
                                    <h3>Azure Blossoms</h3>
                                    <h6>&#8369; 3,500</h6>
                                    <h6>Sample Message</h6>
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>                
            </div>    
        </div>
    </div>
    {{-- Footer --}}
    @include('layout/UserFooter')
    {{-- End of Footer --}}
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>    