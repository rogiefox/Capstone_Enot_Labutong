<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../css/style.css">
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
    <title>Product</title>
</head>
<body>
    {{-- Navigation Bar --}}
    @include('layout/UserProdNav')
    {{-- End of Navigation Bar --}}

    {{-- 1st Content Header Wedding Anniversary Page --}}
    <div class="header-prod position-relative d-flex justify-content-center align-items-center">
        <img src="../img/header-peonies.jpg" alt="">
        <h1 class="position-absolute top-25 z-3 p-2">Peonies Flower</h1>
    </div>
    {{-- End of 1st Content Header Wedding Anniversary --}}

    {{-- 2nd Content Body of Wedding Anniversary Page --}}
    <div class="container mt-3">
        <div class="row">
            <div class="col-md-12">
                <form class="d-flex justify-content-end align-items-center" role="search" onsubmit="return false;">
                    <input id="search-input" class="form-control text-start w-25 me-2" type="search" aria-label="Search" placeholder="Search">
                    <button class="btn btn-outline-warning text-dark" type="button" onclick="searchCards()">Search</button>
                </form>
            </div>
            @foreach ($Peonies as $p)
            <div class="col-md-4 mt-3 card-container">
                <div class="card border-0 rounded shadow">
                    <img src="../image/{{$p->ProductImage}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="text-center product-name">{{$p->ProductName}}</h5>
                        <h5 class="text-center product-price">&#8369; {{$p->ProductPrice}}</h5>
                    </div>
                    <div class="layer">
                        <h6 class="product-description">{{$p->ProductDescription}}</h6>
                        <br>
                        <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#exampleModal{{$p->ProductID}}">
                            View detail
                        </button>
                    </div>
                </div>
            </div>
            <!-- Modal for product detail -->
            <div class="modal fade" id="exampleModal{{$p->ProductID}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                            <img src="../image/{{$p->ProductImage}}" alt="" class="w-100 h-100">
                                        </div>
                                        <div class="col-md-6">
                                            <h3>{{$p->ProductName}}</h3>
                                            <h5>&#8369;{{$p->ProductPrice}}</h5>
                                            <hr>
                                            <p>Message On the Card</p>
                                            <textarea id="message-{{$p->ProductID}}" cols="30" rows="10" placeholder="Message" class="form-control"></textarea>
                                            <input type="button" id="add-to-cart-{{$p->ProductID}}" class="btn btn-outline-warning w-50 mt-3 rounded-pill text-dark" value="ADD TO CART">
                                            <h5 class="mt-3 single-care">Description</h5>
                                            <p>
                                                {{$p->ProductDescription}}
                                            </p>
                                            <h5 class="mt-3 single-care">Care Instruction</h5>
                                            <p>
                                                {{$p->ProductCare}}
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
                document.getElementById('add-to-cart-{{$p->ProductID}}').addEventListener('click', function() {
                    var product = {
                        id: "{{$p->ProductID}}",
                        name: "{{$p->ProductName}}",
                        price: "{{$p->ProductPrice}}",
                        image: "{{$p->ProductImage}}",
                        description: "{{$p->ProductDescription}}",
                        care: "{{$p->ProductCare}}",
                        message: document.getElementById('message-{{$p->ProductID}}').value
                       
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

    {{-- End of 2nd Content Body of Wedding Anniversary Page --}}

    {{-- Footer --}}
    @include('layout/UserFooter')
    {{-- End of Footer --}}

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="../js/main.js"></script>
</html>