<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User</title>
    <link rel="icon" type="image/x-icon" href="../img/icon.png">
    <link rel="stylesheet" href="../css/AdminStyle.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
                    <h1 class="h2 m-2 p-2">User Profile</h1>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card h-100">
                                <div class="card-body shadow">
                                    <h2 class="card-title">Profile Information</h2>
                                    <hr>
                                    <img src="/image/{{Session::get('UserImage')}}" class="img-fluid w-25 h-25 mx-auto d-block">
                                    <h5 class="mt-2 form-control"><i>Full Name:</i><br> <span class="fw-bold">{{Session::get('FullName')}}</span></h5>
                                    <h5 class="form-control"><i>Phone Number:</i><br> <span class="fw-bold">{{Session::get('PhoneNumber')}}</span></h5>
                                    <h5 class="form-control"><i>Address:</i><br> <span class="fw-bold">{{Session::get('Address')}}</span></h5>
                                    <h5 class="form-control"><i>Email:</i><br> <span class="fw-bold">{{Session::get('Email')}}</span></h5>   
                                </div>
                            </div>
                        </div>
                        {{-- Admin profile --}}
                    
                        {{-- EDIT PROFILE --}}
                        <div class="col-md-6">
                            <div class="card h-100">
                                <div class="card-body h-100 shadow">
                                    <form action="/userprofile/{{Session::get('UserID')}}" method="POST">
                                    @csrf
                                    @method('PUT')
                                        <h2>Update Profile Information</h2>
                                        <hr>
                                        <label for="" class="mt-5">Full Name</label>
                                        <input type="text" name="FullName" value="{{Session::get('FullName')}}" class="form-control fw-bold">
                                        <label for="">Phone Number</label>
                                        <input type="text" name="PhoneNumber" value="{{Session::get('PhoneNumber')}}" class="form-control fw-bold">
                                        <label for="">Address</label>
                                        <input type="text" name="Address" value="{{Session::get('Address')}}" class="form-control fw-bold">
                                        <label for="">Email</label>
                                        <input type="Email" name="Email" value="{{Session::get('Email')}}" class="form-control fw-bold">
                                        <label for="">Password</label>
                                        <input type="text" name="Password" class="form-control" placeholder="Enter new password" required>
                                        <hr>
                                        <input type="submit" class="btn btn-outline-warning text-dark" value="Save Changes ">
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