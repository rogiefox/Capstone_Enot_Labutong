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
                            <input type="file" name='Image' class="form-control fw-bold" required>
                            <label for="">Full Name</label>
                            <input type="text" name="FullName" class="form-control fw-bold" required>
                            <label for="">Phone Number</label>
                            <input type="text" name="PhoneNumber" class="form-control fw-bold" required>
                            <label for="">Address</label>
                            <input type="text" name="Address" class="form-control fw-bold" required>
                            <label for="">Email</label>
                            <input type="Email" name="Email" class="form-control fw-bold" required>
                            <label for="">Password</label>
                            <input type="text" name="Password" class="form-control fw-bold" required>
                            <label for="">User Level</label>
                            <input type="text" name="UserLevel" class="form-control fw-bold" required>
                            <hr>
                            <input type="submit" class="btn btn-outline-warning text-dark">
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
                                                <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#exampleModal{{$ut->UserID}}">
                                                    View
                                                </button>
                                            </td>
                                            <td>
                                                <input type="submit" class="btn btn-outline-warning" value="Update">
                                            </td>
                                        </form>
                                            <td>
                                            <form action="/users/{{$ut->UserID}}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                                <input type="submit" class="btn btn-outline-danger" value="Delete">
                                            </form>
                                            </td>
                                        </tr>
                                    </tbody>
                                  {{-- USER LIST --}}


                                <!-- MODAL VIEW -->
                                    <div class="modal fade" id="exampleModal{{$ut->UserID}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title" id="exampleModalLabel">User Information</h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="card shadow">
                                                        <div class="card-body">
                                                            <div class="d-flex justify-content-center align-items-center">
                                                                <img src="/image/{{$ut->UserImage}}" class="img-fluid">
                                                                <h4 class="ms-3 fw-bold">{{$ut->FullName}}</h4>
                                                            </div>
                                                            <hr>
                                                            <h4 class="form-control"><i>Phone Number:</i><br> <span class="fw-bold">{{$ut->PhoneNumber}}</span></h4>
                                                            <h4 class="form-control"><i>Address:</i><br> <span class="fw-bold">{{$ut->Address}}</span></h4>
                                                            <h4 class="form-control"><i>Email:</i><br> <span class="fw-bold">{{$ut->Email}}</span></h4>
                                                            <h4 class="form-control"><i>Password:</i><br> <span class="fw-bold">{{$ut->Password}}</span></h4>
                                                            <h4 class="form-control"><i>User Level:</i><br> <span class="fw-bold">{{$ut->UserLevel}}</span></h4>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer mx-auto border-0">
                                                    <button type="button" class="btn btn-outline-warning text-dark" data-bs-dismiss="modal">Close</button>
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