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
    <title>User</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            {{-- sidebar --}}
                 @include("layout/UserProfileNav")
            {{-- sidebar --}}
    
          {{-- page content --}}
          <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2 p-2">Order Information</h1>
            </div>
            <div class="container">
                <div class="card">
                    <div class="card-body">
                        <table class="table table-hover table-bordered">
                            <thead>
                                <tr>
                                    <th class="text-center">Image</th>
                                    <th class="text-center">Product Name</th>
                                    <th class="text-center">Notes</th>
                                    <th class="text-center">Shipping Address</th>
                                    <th class="text-center">Amount</th>
                                    <th class="text-center">Status</th>
                                    <th class="text-center">View</th>
                                </tr>
                            </thead>
                        @foreach ($OrderTable as $ot)
                            <tbody>
                                <tr>
                                    <td><img src="/image/{{$ot->ProductImage}}" class="img-fluid object-fit w-25 h-25 mx-auto d-block"></td>
                                    <td>{{$ot->ProductName}}</td>
                                    <td>{{$ot->Notes}}</td>
                                    <td>{{$ot->Address}}</td>
                                    <td>{{$ot->TotalAmount}}</td>
                                    <td>{{$ot->OrderStatus}}</td>
                                    <td><button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#exampleModal{{$ot->OrderID}}">
                                        View
                                    </button>
                                    </td>
                                </tr>
                            </tbody>
                              <!-- Modal -->
                        <div class="modal fade" id="exampleModal{{$ot->OrderID}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                    <h1 class="modal-title" id="exampleModalLabel" class="p-2">Order Detail</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="card">
                                            <div class="card-body">
                                                <img src="/image/{{$ot->ProductImage}}" class="m-0 mx-auto d-block">
                                                <hr>
                                                <h4 class="form-control"><i>ProductName:</i><br> <span class="fw-bold">{{$ot->ProductName}}</span></h4>
                                                <h4 class="form-control"><i>Notes:</i><br> <span class="fw-bold">{{$ot->Notes}}</span></h4>
                                                <h4 class="form-control"><i>Shipping Address:</i><br> <span class="fw-bold">{{$ot->Address}}</span></h4>
                                                <h4 class="form-control"><i>Amount:</i><br> <span class="fw-bold">{{$ot->TotalAmount}}</span></h4>
                                                <h4 class="form-control"><i>OrderStatus:</i><br> <span class="fw-bold">{{$ot->OrderStatus}}</span></h4>
                                        
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                    <button type="button" class="btn btn-outline-warning text-dark mx-auto d-block" data-bs-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        </table>
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