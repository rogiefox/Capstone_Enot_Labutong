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
    
          {{-- User Form --}}
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Users</h1>
                </div>
                <div class="container">
                    <div class="card">
                        <div class="card-body">
                            <form action="/users" method="POST" enctype="multipart/form-data">
                            @csrf
                            <h2>Add Users</h2>
                            <hr>
                            <label for="">Upload Profile</label>
                            <input type="file" name='Image' class="form-control">
                            <label for="">FullName</label>
                            <input type="text" name="FullName" class="form-control">
                            <label for="">PhoneNumber</label>
                            <input type="text" name="PhoneNumber" class="form-control">
                            <label for="">Address</label>
                            <input type="text" name="Address" class="form-control">
                            <label for="">Email</label>
                            <input type="Email" name="Email" class="form-control">
                            <label for="">Password</label>
                            <input type="text" name="Password" class="form-control">
                            <label for="">UserLevel</label>
                            <input type="text" name="UserLevel" class="form-control">
                            <hr>
                            <input type="submit" class="btn btn-dark">
                            </form>
                        </div>
                    </div>
                {{-- User Form --}}

                    {{-- USER LIST --}}
                    <div class="card mt-5">
                        <div class="card-body">
                            <h2>Users List</h2>
                            <table class="table table-hover table-bordered">
                                <thead>
                                    <tr>
                                        <th>Image</th>
                                        <th>FullName</th>
                                        <th>PhoneNumber</th>
                                        <th>Address</th>
                                        <th>Email</th>
                                        <th>Password</th>
                                        <th>UserLevel</th> 
                                        <th>View</th>
                                        <th>Update</th>
                                        <th>Delete</th> 
                                    </tr>    
                                </thead>
                                @foreach ($UserTable as $ut)
                                    <tbody>
                                        <tr>
                                        <form action="/users/{{$ut->UserID}}" method="POST">
                                        @csrf
                                        @method('PUT')
                                            <td>    
                                                <img src="/image/{{$ut->UserImage}}" class="img-fluid">
                                            </td>
                                            <td>
                                                <input type="text" name="FullName" value="{{$ut->FullName}}" class="form-control">
                                            </td>
                                            <td>
                                                <input type="text" name="PhoneNumber" value="{{$ut->PhoneNumber}}" class="form-control">
                                            </td>
                                            <td>
                                                <input type="text" name="Address" value="{{$ut->Address}}" class="form-control">
                                            </td>
                                            <td>
                                                <input type="text" name="Email" value="{{$ut->Email}}" class="form-control">
                                            </td>
                                            <td>
                                                <input type="text" name="Password" value="{{$ut->Password}}" class="form-control">
                                            </td>
                                            <td>
                                                <input type="text" name="UserLevel" value="{{$ut->UserLevel}}" class="form-control">
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal{{$ut->UserID}}">
                                                    View
                                                </button>
                                            </td>
                                            <td>
                                                <input type="submit" class="btn btn-warning" value="Update">
                                            </td>
                                        </form>
                                            <td>
                                            <form action="/users/{{$ut->UserID}}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                                <input type="submit" class="btn btn-danger" value="Delete">
                                            </form>
                                            </td>
                                        </tr>
                                    </tbody>
                                  {{-- USER LIST --}}


                                <!-- MODAL VIEW -->
                                    <div class="modal fade" id="exampleModal{{$ut->UserID}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">User Details</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <img src="/image/{{$ut->UserImage}}" class="img-fluid">
                                                        <h4>FullName: {{$ut->FullName}}</h4>
                                                        <h4>PhoneNumber: {{$ut->PhoneNumber}}</h4>
                                                        <h4>Address: {{$ut->Address}}</h4>
                                                        <h4>Email: {{$ut->Email}}</h4>
                                                        <h4>Password: {{$ut->Password}}</h4>
                                                        <h4>UserLevel: {{$ut->UserLevel}}</h4>
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
                                <!-- MODAL VIEW -->
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