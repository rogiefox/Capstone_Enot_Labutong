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
    
          {{-- Product Form --}}
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Products</h1>
                </div>
                <div class="container">
                    <div class="card">
                        <div class="card-body">
                            <form action="/products" method="POST" enctype="multipart/form-data">
                            @csrf
                                <h2>Add Products</h2>
                                <hr>
                                <label for="">ProductImage</label>
                                <input type="file" name="ProductImage" class="form-control">
                                <label for="">ProductName</label>
                                <input type="text" name="ProductName" class="form-control">
                                <label for="">ProductDescription</label>
                                <textarea name="ProductDescription" cols="30" class="form-control"></textarea>
                                <label for="">ProductPrice</label>
                                <input type="text" name="ProductPrice" class="form-control">
                                <label for="">ProductCategory</label>
                                <select name="ProductCategory" class="form-control">
                                    <option value="WeddingAnniversary">WeddingAnniversary</option>
                                    <option value="ValentinesDay">ValentinesDay</option>
                                    <option value="HappyBirthday">HappyBirthday</option>
                                    <option value="MothersDay">MothersDay</option>
                                    <option value="FathersDay">FathersDay</option>
                                    <option value="Baby">Baby</option>
                                    <option value="FeaturedProduct">FeaturedProduct</option>
                                    <option value="BestSellerProduct">BestSellerProduct</option>
                                </select>
                                <label for="">ProductType</label>
                                <select name="ProductType" class="form-control">
                                    <option value="Peonies">Peonies</option>
                                    <option value="Carnation">Carnation</option>
                                    <option value="Gerberas">Gerberas</option>
                                    <option value="Lilies">Lilies</option>
                                    <option value="Rose">Rose</option>
                                </select>
                                <label for="">ProductCare</label>
                                <br>
                                <textarea name="ProductCare" cols="30" class="form-control"></textarea>
                                <hr>
                                <input type="submit" class="btn btn-dark">
                            </form>
                        </div>
                    </div>
             {{-- Product Form --}}

             {{-- Product List --}}
                    <div class="card mt-5">
                        <div class="card-body">
                            <h2>Product List</h2>
                            <table class="table table-hover table-bordered">
                                <thead>
                                    <tr>
                                        <th>ProductImage</th>
                                        <th>ProductName</th>
                                        <th>ProductDescription</th>
                                        <th>ProductPrice</th>
                                        <th>ProductCategory</th>
                                        <th>ProductType</th>
                                        <th>ProductCare</th>
                                        <th>View</th>
                                        <th>Update</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                @foreach ($ProductTable as $pt)
                                    <tbody>
                                        <tr>
                                        <form action="/products/{{$pt->ProductID}}" method="POST">
                                        @csrf
                                        @method('PUT')
                                            <td>
                                                <img src="/image/{{$pt->ProductImage}}" class="img-fluid">
                                            </td>
                                            <td>
                                                <input type="text" name="ProductName" value="{{$pt->ProductName}}" class="form-control">
                                            </td>
                                            <td>
                                                <textarea name="ProductDescription" cols="30" class="form-control">{{$pt->ProductDescription}}</textarea>
                                            </td>
                                            <td>
                                                <input type="text" name='ProductPrice' value="{{$pt->ProductPrice}}" class="form-control">
                                            </td>
                                            <td>
                                                <select name="ProductCategory" class="form-control">
                                                    <option value="{{$pt->ProductCategory}}">Recent: {{$pt->ProductCategory}}</option>
                                                    <option value="Category1">Category1</option>
                                                    <option value="Category2">Category2</option>
                                                    <option value="Category3">Category3</option>
                                                </select>
                                            </td>
                                            <td>
                                                <select name="ProductType" class="form-control">
                                                    <option value="{{$pt->ProductType}}">Recent: {{$pt->ProductType}}</option>
                                                    <option value="Type1">Type1</option>
                                                    <option value="Type2">Type2</option>
                                                    <option value="Type3">Type3</option>
                                                </select>
                                            </td>
                                            <td>
                                                <textarea name="ProductCare" cols="30" class="form-control">{{$pt->ProductCare}}</textarea>
                                            </td>
                                            <td>
                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal{{$pt->ProductID}}">
                                                    View
                                                </button>
                                            </td>
                                            <td>
                                                <input type="submit" class="btn btn-warning" value="Update">
                                            </td>
                                        </form>
                                            <td>
                                                <form action="/products/{{$pt->ProductID}}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                    <input type="submit" class="btn btn-danger" value="Delete">
                                                </form>
                                            </td>                         
                                        </tr>
                                    </tbody>
                         {{-- Product List --}}

                                        <!-- Modal for product detail -->
                                        <div class="modal fade" id="exampleModal{{$pt->ProductID}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel">Product Detail</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <img src="/image/{{$pt->ProductImage}}" class="img-fluid">
                                                            <h4>ProductName: {{$pt->ProductName}}</h4>
                                                            <h4>ProductDescription: {{$pt->ProductDescription}}</h4>
                                                            <h4>ProductPrice: {{$pt->ProductPrice}}</h4>
                                                            <h4>ProductCategory: {{$pt->ProductCategory}}</h4>
                                                            <h4>ProductType: {{$pt->ProductType}}</h4>
                                                            <h4>ProductCare: {{$pt->ProductCare}}</h4>
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
                                    <!-- Modal for product detail -->
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