<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
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
                        <input type="text" class="form-control shadow" value="{{Session::get('FullName')}}" style="height: 50px;">
                        <label>Email Address:</label>
                        <input type="text" class="form-control shadow" value="{{Session::get('Email')}}" style="height: 50px;">
                        <label>Full Address:</label>
                        <input type="text" class="form-control shadow" value="{{Session::get('Address')}}"  style="height: 50px;">
                        <label>Phone Number:</label>
                        <input type="text" class="form-control shadow" value="{{Session::get('PhoneNumber')}}" style="height: 50px;">
                        <label>Payment Method:</label>
                        <select name="PaymentMethod" class="form-control fw-bold">
                            <option value="CashOnDelivery">CashOnDelivery(Only Availabel For Now)</option>
                        </select>
                        <label>Total Amount:</label>
                        <h5>Total Price: &#8369;<span id="order-total-price"></span></h5>  
                    </div>
                    <div>
                    <form action="">
                        <button class="btn btn-outline-warning text-dark" onclick="submitOrder()">Submit Order</button>
                    </form>
                    </div>
                </div>
                <div class="w-100 ms-3 mt-5">
                    <h2>Order Summary</h2>
                    <hr>
                    <div id="carouselExample" class="carousel slide">
                        <div class="carousel-inner" id="carousel-inner">
                            <!-- Carousel items will be inserted here dynamically -->
                            
                        </div>
                        <hr> 
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

   <script>
    document.addEventListener('DOMContentLoaded', function() {
            // Fetch cart items from local storage
            var cart = JSON.parse(localStorage.getItem('cart')) || [];
            var carouselInner = document.getElementById('carousel-inner');
            var grandTotal = 0;
            var userId = '{{ session()->get('UserID') }}'; // Retrieve user ID from session

            // Function to update the carousel display
            function updateCarouselDisplay() {
                carouselInner.innerHTML = ''; // Clear current carousel display
                grandTotal = 0; // Reset grand total

                cart.forEach(function(product, index) {
                    var productTotal = product.price * (product.quantity || 1); // Assuming quantity is 1 if not specified
                    grandTotal += productTotal;

                    var carouselItem = document.createElement('div');
                    carouselItem.className = `carousel-item ${index === 0 ? 'active' : ''}`;
                    carouselItem.innerHTML = `
                        <img src="../image/${product.image}" alt="${product.name}" class="h-50 w-75 rounded">
                        <div>
                            <h3>${product.name}</h3>
                            <h6>Price: &#8369;${product.price}</h6>
                            <h6>Quantity: ${product.quantity || 1}</h6>
                            <h6>Message: ${product.message}</h6>
                        </div>
                    `;
                    carouselInner.appendChild(carouselItem);
                });

                // Display the grand total
                document.getElementById('order-total-price').textContent = grandTotal.toFixed(2);
            }

            // Function to remove item from cart
            window.removeFromCart = function(index) {
                cart.splice(index, 1); // Remove the item at the specified index
                localStorage.setItem('cart', JSON.stringify(cart)); // Update local storage
                updateCarouselDisplay(); // Update the carousel display
            }

            // Function to gather cart data for SQL insertion
            function gatherCartData() {
                return cart.map(function(product) {
                    return {
                        id: product.id,
                        name: product.name,
                        price: product.price,
                        quantity: product.quantity || 1,
                        message: product.message
                    };
                });
            }

            // Function to handle order submission
            window.submitOrder = function() {
                var orderData = gatherCartData();

                //  AJAX request to send data to server
                fetch('/submit-order', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                    },
                    body: JSON.stringify({ 
                        userId: userId, 
                        order: orderData 
                    })
                })
                .then(response => response.json())
                .then(data => {
                    console.log('Order submitted:', data);
                    alert('Product order success');
                })
                .catch(error => {
                    console.error('Error submitting order:', error);
                });
            }

            // Initial display update
            updateCarouselDisplay();
        });
    </script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>    