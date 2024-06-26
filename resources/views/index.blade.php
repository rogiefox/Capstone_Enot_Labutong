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
    <link rel="icon" type="image/x-icon" href="../img/icon.png">
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
                Elevate Each Occasion with Blossom Bliss Elegant Arrangements.<br>
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
            @foreach ($FeaturedProduct as $fp)
                <div class="col-md-4">
                    <div class="card border-0 rounded shadow">
                        <img src="image/{{$fp->ProductImage}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="text-center">{{$fp->ProductName}} </h5>
                            <h5 class="text-center">&#8369; {{$fp->ProductPrice}} </h5>
                        </div>
                        <div class="layer">
                            <h6>{{$fp->ProductDescription}} </h6>
                            <br>
                            <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#exampleModal{{$fp->ProductID}}">
                                View detail
                            </button>
                        </div>
                    </div> 
                </div>   
                <!-- Modal for product detail -->
                <div class="modal fade" id="exampleModal{{$fp->ProductID}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-xl">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title" id="exampleModalLabel">Product Detail</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="card">
                                    <div class="card-body shadow">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <img src="image/{{$fp->ProductImage}}" alt="" class="w-100 h-100">
                                            </div>
                                            <div class="col-md-6">
                                                <h3>{{$fp->ProductName}}</h3>
                                                <h5>&#8369; {{$fp->ProductPrice}}</h5>
                                                <hr>
                                                <p>Message On the Card</p>
                                                <textarea id="message-{{$fp->ProductID}}" cols="30" rows="10" placeholder="Message" class="form-control"></textarea>
                                                 <input type="button" id="add-to-cart-{{$fp->ProductID}}" class="btn btn-outline-warning w-50 mt-3 rounded-pill text-dark" value="ADD TO CART">
                                                <h5 class="mt-3 single-care">Description</h5>
                                                <p>
                                                    {{$fp->ProductDescription}}
                                                </p>
                                                <h5 class="mt-3 single-care">Care Instruction</h5>
                                                <p>
                                                    {{$fp->ProductCare}}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer mx-auto border-0">
                                <button type="button" class="btn btn-outline-dark text-dark" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                <script>
                    document.getElementById('add-to-cart-{{$fp->ProductID}}').addEventListener('click', function() {
                        var product = {
                            id: "{{$fp->ProductID}}",
                            name: "{{$fp->ProductName}}",
                            price: "{{$fp->ProductPrice}}",
                            image: "{{$fp->ProductImage}}",
                            description: "{{$fp->ProductDescription}}",
                            care: "{{$fp->ProductCare}}",
                            message: document.getElementById('message-{{$fp->ProductID}}').value
                           
                        };
                
                        // Get the current cart items from local storage
                        var cart = JSON.parse(localStorage.getItem('cart')) || [];
                
                        // Add the new product to the cart
                        cart.push(product);
                
                        // Save the updated cart to local storage
                        localStorage.setItem('cart', JSON.stringify(cart));
                
                        // Optionally, give some feedback to the user
                        alert('Product added to cart!');
                    });
                </script>
           @endforeach
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
            @foreach ($BestSellerProduct as $bsp)
           <div class="col-md-4">
                <div class="card border-0 rounded shadow">
                    <img src="image/{{$bsp->ProductImage}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="text-center">{{$bsp->ProductName}}</h5>
                        <h5 class="text-center">&#8369; {{$bsp->ProductPrice}}</h5>
                    </div>
                    <div class="layer">
                        <h6>{{$bsp->ProductDescription}}</h6>
                        <br>
                        <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#exampleModal{{$bsp->ProductID}}">
                            View detail
                        </button>
                    </div>
                </div>
           </div>
                <!-- Modal for product detail -->
                <div class="modal fade" id="exampleModal{{$bsp->ProductID}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title" id="exampleModalLabel">Product Detail</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="card">
                                <div class="card-body shadow">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <img src="image/{{$bsp->ProductImage}}" alt="" class="w-100 h-100">
                                        </div>
                                        <div class="col-md-6">
                                            <h3>{{$bsp->ProductName}}</h3>
                                            <h5>&#8369;{{$bsp->ProductPrice}}</h5>
                                            <hr>
                                            <p>Message On the Card</p>
                                            <textarea id="message-{{$bsp->ProductID}}" cols="30" rows="10" placeholder="Message" class="form-control"></textarea>
                                                <input type="button" id="add-to-cart-{{$bsp->ProductID}}" class="btn btn-outline-warning w-50 mt-3 rounded-pill text-dark" value="ADD TO CART">
                                            <a href=""></a>
                                            <h5 class="mt-3 single-care">Description</h5>
                                            <p>
                                                {{$bsp->ProductDescription}}
                                            </p>
                                            <h5 class="mt-3 single-care">Care Instruction</h5>
                                            <p>
                                                {{$bsp->ProductCare}}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer mx-auto border-0">
                            <button type="button" class="btn btn-outline-dark text-dark" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <script>
                document.getElementById('add-to-cart-{{$bsp->ProductID}}').addEventListener('click', function() {
                    var product = {
                        id: "{{$bsp->ProductID}}",
                        name: "{{$bsp->ProductName}}",
                        price: "{{$bsp->ProductPrice}}",
                        image: "{{$bsp->ProductImage}}",
                        description: "{{$bsp->ProductDescription}}",
                        care: "{{$bsp->ProductCare}}",
                        message: document.getElementById('message-{{$bsp->ProductID}}').value
                       
                    };
            
                    // Get the current cart items from local storage
                    var cart = JSON.parse(localStorage.getItem('cart')) || [];
            
                    // Add the new product to the cart
                    cart.push(product);
            
                    // Save the updated cart to local storage
                    localStorage.setItem('cart', JSON.stringify(cart));
            
                    // Optionally, give some feedback to the user
                    alert('Product added to cart!');
                });
            </script>
           @endforeach
        </div>
    </div>
    {{-- End of 4th Content of the Body Best Seller Products --}}

    {{-- Footer --}}
    @include('layout/UserFooter')
    {{-- End of Footer --}}

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>