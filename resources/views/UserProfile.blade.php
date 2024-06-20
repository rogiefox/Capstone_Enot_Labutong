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
                <div class="container">
                    <div class="card">
                        <div class="card-body">
                            <h2>Admin Profile</h2>
                            <img src="/image/{{Session::get('UserImage')}}" class="img-fluid">
                            <h5>FullName: {{Session::get('FullName')}}</h5>
                            <h5>PhoneNumber: {{Session::get('PhoneNumber')}}</h5>
                            <h5>Address: {{Session::get('Address')}}</h5>
                            <h5>Email: {{Session::get('Email')}}</h5>  
                            <h5>UserLevel: {{Session::get('UserLevel')}}</h5>  
                        </div>
                    </div>
                </div>
            {{-- Admin profile --}}

            {{-- EDIT PROFILE --}}
                <div class="card mt-5">
                    <div class="card-body">
                        <form action="/userprofile/{{Session::get('UserID')}}" method="POST">
                        @csrf
                        @method('PUT')
                            <h2>Edit Profile Information</h2>
                            <label for="">FullName</label>
                            <input type="text" name="FullName" value="{{Session::get('FullName')}}" class="form-control">
                            <label for="">PhoneNumber</label>
                            <input type="text" name="PhoneNumber" value="{{Session::get('PhoneNumber')}}" class="form-control">
                            <label for="">Address</label>
                            <input type="text" name="Address" value="{{Session::get('Address')}}" class="form-control">
                            <label for="">Email</label>
                            <input type="Email" name="Email" value="{{Session::get('Email')}}" class="form-control">
                            <label for="">Password</label>
                            <input type="text" name="Password" class="form-control" placeholder="Enter new password">
                            <hr>
                            <input type="submit" class="btn btn-dark" value="Save Changes ">
                        </form>
                    </div>
                </div>
              {{-- EDIT PROFILE --}}
            </div>
        </main>
      {{-- page content --}}
          {{-- page content --}}

        </div>
      </div>
</body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="js/AdminMain.js"></script>
</html>