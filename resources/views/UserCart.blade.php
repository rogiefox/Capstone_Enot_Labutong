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
    <div class="container shadow p-3 mt-5 mb-5">
        <div class="row">
            <div class="header-cart">
                <h3>My Cart</h3>
            </div>
            <div class="col-md-12">
                <table class="table table-hover table-bordered">
                    <tr class="text-center">
                        <th>Product Image</th>
                        <th>Product Name</th>
                        <th>Product Price</th>
                        <th>Card Message</th>
                        <th>Action</th>
                    </tr>
                    <tr>
                        <td class="d-flex justify-content-center align-items-center"><img src="flower-img/Azure Blossoms.jpg" alt="" style="height: 100px; width: 100px;"></td>
                        <td class="text-center"><h5>Azure Blossoms</h5></td>
                        <td class="text-center"><h5>&#8369; 3,500</h5></td>
                        <td class="text-center"><h5>Sample Message</h5></td>
                        <td class="text-center"><input type="submit" name="" id="" value="Remove" class="btn btn-outline-warning text-dark"></td>
                    </tr>
                </table>  
            </div>
            <div class="col-md-12">
                <table class="table table-hover table-bordered">
                    <tr class="text-center">
                        <th>Product Image</th>
                        <th>Product Name</th>
                        <th>Product Price</th>
                        <th>Card Message</th>
                        <th>Action</th>
                    </tr>
                    <tr>
                        <td class="d-flex justify-content-center align-items-center"><img src="flower-img/Azure Blossoms.jpg" alt="" style="height: 100px; width: 100px;"></td>
                        <td class="text-center"><h5>Azure Blossoms</h5></td>
                        <td class="text-center"><h5>&#8369; 3,500</h5></td>
                        <td class="text-center"><h5>Sample Message</h5></td>
                        <td class="text-center"><input type="submit" name="" id="" value="Remove" class="btn btn-outline-warning text-dark"></td>
                    </tr>
                </table>  
            </div>
            <div class="col-md-12">
                <table class="table table-hover table-bordered">
                    <tr class="text-center">
                        <th>Product Image</th>
                        <th>Product Name</th>
                        <th>Product Price</th>
                        <th>Card Message</th>
                        <th>Action</th>
                    </tr>
                    <tr>
                        <td class="d-flex justify-content-center align-items-center"><img src="flower-img/Azure Blossoms.jpg" alt="" style="height: 100px; width: 100px;"></td>
                        <td class="text-center"><h5>Azure Blossoms</h5></td>
                        <td class="text-center"><h5>&#8369; 3,500</h5></td>
                        <td class="text-center"><h5>Sample Message</h5></td>
                        <td class="text-center"><input type="submit" name="" id="" value="Remove" class="btn btn-outline-warning text-dark"></td>
                    </tr>
                </table>  
            </div>
            <div class="col-md-12">
                <table class="table table-hover table-bordered">
                    <tr class="text-center">
                        <th>Product Image</th>
                        <th>Product Name</th>
                        <th>Product Price</th>
                        <th>Card Message</th>
                        <th>Action</th>
                    </tr>
                    <tr>
                        <td class="d-flex justify-content-center align-items-center"><img src="flower-img/Azure Blossoms.jpg" alt="" style="height: 100px; width: 100px;"></td>
                        <td class="text-center"><h5>Azure Blossoms</h5></td>
                        <td class="text-center"><h5>&#8369; 3,500</h5></td>
                        <td class="text-center"><h5>Sample Message</h5></td>
                        <td class="text-center"><input type="submit" name="" id="" value="Remove" class="btn btn-outline-warning text-dark"></td>
                    </tr>
                </table>
                <h5 class="text-end">Total Amount: &#8369; 3,500</h5>  
            </div>
            <div class="col-md-12 d-flex justify-content-center align-items-center">
                <a href="/UserCheckout" class="w-100 d-flex justify-content-center align-items-center" style="text-decoration: none;"><input type="submit" name="" id="" value="Check Out" class="btn btn-outline-warning text-dark w-50"></a>
            </div>
        </div>
    </div>
    {{-- Footer --}}
    @include('layout/UserFooter')
    {{-- End of Footer --}}
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>    