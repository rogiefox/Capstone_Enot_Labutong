<!DOCTYPE html>
<html lang="en">
<head>
    @include("layout/AdminHead")
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            {{-- sidebar --}}
                 @include("layout/AdminNav")
            {{-- sidebar --}}
    
          {{-- page content --}}
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2 p-2">Welcome Admin</h1>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <a href="/users">
                                <h1 class="text-center icon"><i class="fa-solid fa-user"></i></h1>
                            </a> 
                            <h4 class="text-center fst-italic"><span class="admin-title">Users:</span> {{ $userCount }} </h4>
                        </div> 
                        <div class="col-md-3">
                            <a href="/products">
                                <h1 class="text-center icon"><i class="fa-solid fa-box-open"></i></h1>
                            </a> 
                            <h4 class="text-center fst-italic"><span class="admin-title">Product:</span> {{ $productCount }}</h4>
                        </div>
                        <div class="col-md-3">
                            <a href="/orders">
                                <h1 class="text-center icon"><i class="fa-solid fa-cart-shopping"></i></h1>
                            </a> 
                            <h4 class="text-center fst-italic"><span class="admin-title">Orders:</span> {{ $orderCount }}</h4>  
                        </div>
                        <div class="col-md-3">
                            <a href="/admincontact">
                                <h1 class="text-center icon"><i class="fa-solid fa-message"></i></h1>
                            </a> 
                            <h4 class="text-center fst-italic"><span class="admin-title">Messages:</span> {{ $contactCount }}</h4>
                        </div>
                    </div>
                </div>
            </main>
          {{-- page content --}}

        </div>
      </div>
</body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="js/AdminMain.js"></script>
</html>