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
                    <h1 class="h2">Orders</h1>
                </div>
                <div class="container">
                    <div class="card">
                        <div class="card-body">
                            <h2>Add Orders (Customer Service)</h2>
                            <form action="/orders" method="POST">
                            @csrf
                                <label for="">OrderUserID</label>
                                <select name="OrderUserID" class="form-control fw-bold">
                                    @foreach ($UserTable as $ut)
                                        <option value="{{$ut->UserID}}">{{$ut->FullName}}</option>
                                    @endforeach
                                </select>
                                <label for="">OrderProductID</label>
                                <select name="OrderProductID" class="form-control fw-bold">
                                    @foreach ($ProductTable as $pt)
                                        <option value="{{$pt->ProductID}}">{{$pt->ProductName}}</option>
                                    @endforeach
                                </select>
                                <label for="">Notes</label>
                                <textarea name="Notes" col="30" class="form-control fw-bold"></textarea>
                                <label for="">Address</label>
                                <input type="Address" name="Address" name="Address" class="form-control fw-bold">
                                <label for="">PaymentMethod</label>
                                <select name="PaymentMethod" class="form-control fw-bold">
                                    <option value="CashOnDelivery">CashOnDelivery(Only Availabel For Now)</option>
                                </select>
                                <label for="">TotalAmount</label>
                                <input type="text" name="TotalAmount" class="form-control fw-bold">
                                <label for="">OrderStatus</label>
                                <select name="OrderStatus" class="form-control fw-bold">
                                    <option value="Pending">Pending</option>
                                    <option value="Ship">Ship</option>
                                    <option value="Completed">Completed</option>
                                </select>
                                <hr>
                                <input type="submit" class="btn btn-outline-warning text-dark">
                            </form>
                        </div>
                    </div>
                    {{-- order form --}}

                    {{-- orders list--}}
                    <div class="card mt-5">
                        <div class="card-body">
                            <h2>OrderList</h2>
                            <table class="table table-hover table-bordered">
                                <thead>
                                    <tr>
                                        <th>OrderUserID</th>
                                        <th>OrderProductID</th>
                                        <th>Notes</th>
                                        <th>Address</th>
                                        <th>PaymentMethod</th>
                                        <th>TotalAmount</th>
                                        <th>OrderStatus</th>
                                        <th>View</th>
                                        <th>Update</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                @foreach ($OrderTable as $ot)
                                    <tbody>
                                        <tr>
                                        <form action="/orders/{{$ot->OrderID}}" method="POST">
                                        @csrf
                                        @method('PUT')
                                            <td>
                                                <select name="OrderUserID" class="form-control">
                                                    <option value="{{$ot->OrderUserID}}">User: {{$ot->FullName}}</option>
                                                    @foreach ($UserTable as $ut)
                                                    <option value="{{$ut->UserID}}">{{$ut->FullName}}</option>
                                                    @endforeach
                                                </select>
                                            </td>
                                            <td>
                                                <select name="OrderProductID" class="form-control">
                                                    <option value="{{$ot->OrderProductID}}">Product: {{$ot->ProductName}}</option>
                                                    @foreach ($ProductTable as $pt)
                                                    <option value="{{$pt->ProductID}}">{{$pt->ProductName}}</option>
                                                @endforeach
                                                </select>
                                            </td>
                                            <td>    
                                                <textarea name="Notes" cols="30" class="form-control">
                                                    {{$ot->Notes}}
                                                </textarea>
                                            </td>
                                            <td>
                                                <input type="text" name="Address" value="{{$ot->Address}}" class="form-control">
                                            </td>
                                            <td>
                                                <select name="PaymentMethod" class="form-control">
                                                    <option value="CashOnDelivery">CashOnDelivery(Only Available For Now)</option>
                                                </select>
                                            </td>
                                            <td>
                                                <input type="text" name="TotalAmount" value="{{$ot->TotalAmount}}" class="form-control">
                                            </td>
                                            <td>
                                                <select name="OrderStatus" class="form-control">
                                                    <option value="{{$ot->OrderStatus}}">Status:{{$ot->OrderStatus}}</option>
                                                    <option value="Pending">Pending</option>
                                                    <option value="Ship">Ship</option>
                                                    <option value="Complete">Complete</option>
                                                </select>
                                            </td>
                                            <td>
                                               <!-- Button trigger modal -->
                                            <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#exampleModal{{$ot->OrderID}}">
                                                View
                                            </button>
                                     
                                            </td>
                                            <td>
                                                <input type="submit" class="btn btn-outline-warning" value="Update">
                                            </td>
                                        </form>
                                            <td>
                                                <form action="/orders/{{$ot->OrderID}}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                    <input type="submit" class="btn btn-outline-danger" value="Delete">
                                                </form>
                                            </td>
                                        </tr>
                                    </tbody>
                     {{-- orders list --}}
                     
                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal{{$ot->OrderID}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                            <h1 class="modal-title" id="exampleModalLabel">OrderDetail</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="card">
                                                    <div class="card-body shadow">
                                                        <img src="/image/{{$ot->ProductImage}}" class="m-0 mx-auto d-block">
                                                        <hr>
                                                        <h4 class="form-control"><i>Product:</i><br> <span class="fw-bold">{{$ot->ProductName}}</span></h4>
                                                        <h4 class="form-control"><i>User:</i><br> <span class="fw-bold">{{$ot->FullName}}</span></h4>
                                                        <h4 class="form-control"><i>Phone:</i><br> <span class="fw-bold">{{$ot->PhoneNumber}}</span></h4>
                                                        <h4 class="form-control"><i>Email:</i><br> <span class="fw-bold">{{$ot->Email}}</span></h4>
                                                        <h4 class="form-control"><i>Notes:</i><br> <span class="fw-bold">{{$ot->Notes}}</span></h4>
                                                        <h4 class="form-control"><i>Shipping Address:</i><br> <span class="fw-bold">{{$ot->Address}}</span></h4>
                                                        <h4 class="form-control"><i>PaymentMethod:</i><br> <span class="fw-bold">{{$ot->PaymentMethod}}</span></h4>
                                                        <h4 class="form-control"><i>TotalAmount:</i><br> <span class="fw-bold">{{$ot->TotalAmount}}</span></h4>
                                                        <h4 class="form-control"><i>OrderStatus:</i><br> <span class="fw-bold">{{$ot->OrderStatus}}</span></h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer mx-auto border-0">
                                                <button type="button" class="btn btn-outline-warning text-dark" data-bs-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                <!-- Modal -->
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