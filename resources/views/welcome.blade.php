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
                    <h1 class="h2">Dashboard</h1>
                </div>
                <div class="container">
                    <div class="row">

                        <div class="col-md-4">
                            <h1 >User</h1>
                            <a href="/users"> 
                            <h2>Total Users: {{ $userCount }}</h2>
                             </a>
                        </div>    
                        
                    
                        <div class="col-md-4">
                            <h1 >Product</h1>
                            <a href="/products"> 
                            <h2>Total Product: {{ $productCount }}</h2>
                             </a>
                        </div>  
                       
                        

                        <div class="col-md-4">
                            <h1 >Order</h1>
                            <a href="/orders"> 
                            <h2>Total Orders: {{ $orderCount }}</h2>
                             </a>
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