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
    <title>About Us</title>
</head>
<body>
    {{-- Navigation Bar --}}
    @include('layout/UserProdNav')
    {{-- End of Navigation Bar --}}
    <div class="header-about position-relative d-flex justify-content-center align-items-center">
        <img src="../img/about-header.jpg" alt="">
        <h1 class="position-absolute top-25 z-3">About Us</h1>
    </div> 
    <div class="container">
        <div class="row shadow">
            <div class="col-md-6 d-flex justify-content-center align-items-center">
                <img src="../img/about-img.jpg" alt="" class="w-75 h-75 rounded">
            </div>
            <div class="col-md-6 d-flex justify-content-center align-items-center about-us">
                <p class="fw-bold">
                    Welcome to Blossom Bliss Flower Shop, where every bloom tells a story! Nestled in the heart of our community, Blossom Bliss is more than just a flower shop—we are a haven for floral artistry and heartfelt expressions. Our passion for flowers is matched only by our commitment to bringing joy and beauty into the lives of our customers.

                    Founded with love and a deep appreciation for nature’s beauty, Blossom Bliss has been the go-to destination for all things floral. Whether you’re celebrating a special occasion, expressing sympathy, or simply brightening someone’s day, we are here to help you find the perfect arrangement. Our talented team of florists combines creativity and expertise to craft stunning bouquets that speak to the heart.
                    
                    At Blossom Bliss, we believe in the power of flowers to convey emotions and create unforgettable moments. We source the freshest, most exquisite blooms from local and international growers to ensure every arrangement is of the highest quality. Our dedication to excellence is reflected in our personalized service, attention to detail, and the joy we bring to our customers.
                    
                    Thank you for choosing Blossom Bliss Flower Shop. We look forward to being a part of your life’s special moments and making every day a little more beautiful.
                </p>
            </div>
            <div class="col-md-12 d-flex justify-content-center align-items-center">
                <img src="../img/about-vision.jpg" alt="" class="w-100 h-75">
            </div>
            <div class="col-md-12 mission-vision">
                <div>
                    <h6 class="fw-bold">Our Mission</h6>
                    <p>
                        To wow our customers every time with our premium products and lowest prices, with value-for-money all driven by innovation, technology, and a people-first approach. With the lowest prices of delivery in the market as well. 
                    </p>
                </div>
                <div>
                    <h6 class="fw-bold">Our Vision</h6>
                    <p>
                        To create a globally trusted gifting brand that helps the customers celebrate the joy of giving with the benefit of the lowest prices in the market.
                    </p>
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