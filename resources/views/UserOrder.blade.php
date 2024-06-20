<!DOCTYPE html>
<html lang="en">
<head>
    @include("layout/AdminHead")
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
                <h1 class="h2">Admin Profile</h1>
            </div>
            <div class="container">
                <div class="card">
                    <div class="card-body">
                        <table class="table table-hover table-bordered">
                            <thead>
                                <tr>
                                    <th>ProductImage</th>
                                    <th>ProductName</th>
                                    <th>Notes</th>
                                    <th>Shipping Address</th>
                                    <th>Amount</th>
                                    <th>OrderStatus</th>
                                    <th>View</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><img src="/image/{{$OrderTable->ProductImage}}" class="img-fluid"></td>
                                    <td>{{$OrderTable->ProductName}}</td>
                                    <td>{{$OrderTable->Notes}}</td>
                                    <td>{{$OrderTable->Address}}</td>
                                    <td>{{$OrderTable->TotalAmount}}</td>
                                    <td>{{$OrderTable->OrderStatus}}</td>
                                    <td><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal{{$OrderTable->OrderID}}">
                                        View
                                    </button>
                                    </td>
                                </tr>
                            </tbody>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal{{$OrderTable->OrderID}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">OrderDetail</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="card">
                                        <div class="card-body">
                                            <img src="/image/{{$OrderTable->ProductImage}}" class="img-fluid">
                                            <h4>ProductName: {{$OrderTable->ProductImage}}</h4>
                                            <h4>Notes: {{$OrderTable->Notes}}</h4>
                                            <h4>Shipping Address: {{$OrderTable->Address}}</h4>
                                            <h4>Amount: {{$OrderTable->TotalAmount}}</h4>
                                            <h4>OrderStatus: {{$OrderTable->OrderStatus}}</h4>
                                       
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                            </div>
                            </div>
                        </div>
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