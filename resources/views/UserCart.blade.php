
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
    <div class="container mt-5">
        <h1>Your Shopping Cart</h1>

        <table class="table table-hover table-bordered">
            <thead>
                <tr>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Message</th>
                    <th>Price</th>
                    <th>Remove</th>
                </tr>
            </thead>
            <tbody id="cart-body">
                <!-- Cart items will be inserted here -->
            </tbody>
        </table>
        <a href="/UserCheckout/{{Session::get('UserID')}}" class="btn btn-outline-warning">Check Out</a>
        <h2 class="mt-4">Total: <span id="grand-total"></span></h2>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Fetch cart items from local storage
            var cart = JSON.parse(localStorage.getItem('cart')) || [];
            var cartBody = document.getElementById('cart-body');
            var grandTotal = 0;
            var userId = '{{ session()->get('UserID') }}'; // Retrieve user ID from session
    
            // Function to update the cart display
            function updateCartDisplay() {
                cartBody.innerHTML = ''; // Clear current cart display
                grandTotal = 0; // Reset grand total
    
                cart.forEach(function(product, index) {
                    var productTotal = product.price * (product.quantity || 1); // Assuming quantity is 1 if not specified
                    grandTotal += productTotal;
    
                    var row = document.createElement('tr');
                    row.innerHTML = `
                    
                        <td><img src="../image/${product.image}" alt="${product.name}" class="img-fluid" width="50"></td>
                        <td>${product.name}</td>
                        <td>&#8369;${product.price}</td>
                        <td>${product.quantity || 1}</td>
                        <td>${product.message}</td>
                        <td>&#8369;${productTotal.toFixed(2)}</td>
                        <td><button class="btn btn-danger btn-sm" onclick="removeFromCart(${index})">Remove</button></td>
                    `;
                    cartBody.appendChild(row);
                });
    
                // Display the grand total
                document.getElementById('grand-total').textContent = ` ${grandTotal.toFixed(2)}`;
            }
    
            // Function to remove item from cart
            window.removeFromCart = function(index) {
                cart.splice(index, 1); // Remove the item at the specified index
                localStorage.setItem('cart', JSON.stringify(cart)); // Update local storage
                updateCartDisplay(); // Update the cart display
            }
    
            // Initial display update
            updateCartDisplay();
        });
    </script>
  
    @include('layout/UserFooter')
    {{-- End of Footer --}}
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="js/main.js"></script>
</html>    