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
    
          {{-- User profile --}}
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2 p-2">Admin Profile</h1>
                </div>
                <div class="container">
                    <div class="row">
                        {{-- User profile --}}
                        <div class="col-md-6">
                            <div class="card h-100">
                                <div class="card-body shadow">
                                    <h2 class="card-title">Profile Information</h2>
                                    <hr>
                                    <img src="/image/{{Session::get('UserImage')}}" class="img-fluid w-25 h-25 mx-auto d-block">
                                    <h5 class="mt-5 form-control"><i>Full Name:</i> <span class="fw-bold">{{Session::get('FullName')}}</span></h5>
                                    <h5 class="form-control"><i>Phone Number:</i> <span class="fw-bold">{{Session::get('PhoneNumber')}}</span></h5>
                                    <h5 class="form-control"><i>Address:</i> <span class="fw-bold">{{Session::get('Address')}}</span></h5>
                                    <h5 class="form-control"><i>Email:</i> <span class="fw-bold">{{Session::get('Email')}}</span></h5>  
                                    <h5 class="form-control"><i>User Level:</i> <span class=" fw-bold">{{Session::get('UserLevel')}}</span></h5>  
                                </div>
                            </div>
                        </div>
                        {{-- EDIT PROFILE --}}
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-body h-100 shadow">
                                    <form action="/adminprofile/{{Session::get('UserID')}}" method="POST">
                                    @csrf
                                    @method('PUT')
                                        <h2>Update Profile Information</h2>
                                        <hr>
                                        <label for="">Full Name</label>
                                        <input type="text" name="FullName" value="{{Session::get('FullName')}}" class="form-control fw-bold">
                                        <label for="">Phone Number</label>
                                        <input type="text" name="PhoneNumber" value="{{Session::get('PhoneNumber')}}" class="form-control fw-bold">
                                        <label for="">Address</label>
                                        <input type="text" name="Address" value="{{Session::get('Address')}}" class="form-control fw-bold">
                                        <label for="">Email</label>
                                        <input type="Email" name="Email" value="{{Session::get('Email')}}" class="form-control fw-bold">
                                        <label for="">User Level</label>
                                        <input type="text" name="UserLevel" value="{{Session::get('UserLevel')}}" class="form-control fw-bold">
                                        <label for="">Password</label>
                                        <input type="text" name="Password" class="form-control" placeholder="Enter new password">
                                        <hr>
                                        <input type="submit" class="btn btn-outline-warning text-dark" value="Save Changes">
                                    </form>
                                </div>
                            </div>
                        </div>
                        {{-- EDIT PROFILE --}}
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