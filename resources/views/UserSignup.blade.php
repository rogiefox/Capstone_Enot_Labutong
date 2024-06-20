<!DOCTYPE html>
<html lang="en">
<head>
    @include("layout/AdminHead")
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-body">
                <form action="/signup" method="POST">
                @csrf
                    <h2>Sign Up</h2>
                    <hr>
                    <label for="">FullName</label>
                    <input type="text" name="FullName" class="form-control">
                    <label for="">PhoneNumber</label>
                    <input type="text" name="PhoneNumber" class="form-control">
                    <label for="">Address</label>
                    <input type="text" name="Address" class="form-control">
                    <label for="">Email</label>
                    <input type="text" name="Email" class="form-control">
                    <label for="">Password</label>
                    <input type="text" name="Password" class="form-control">
                    <hr>
                    <input type="submit" class="btn btn-dark" value="Sign Up">
                </form>
            </div>
        </div>
    </div>
</body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="js/AdminMain.js"></script>
</html>