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
    <title>Login</title>
</head>
<body class="d-flex justify-content-center align-items-center" >
    <div class="container mt-5 pt-5">
        <div class="row g-0">
            <div class="col-md-6 log-in">
                <div class="card shadow" style="background-color: #F7F4EF;">
                    <div class="card-body d-flex flex-column align-items-center justify-content-center">
                        <form action="/login" method="POST" class="w-75 m-0">
                            @csrf
                            <div class="d-flex justify-content-center">
                                <img src="../img/logo-login.png" alt="" class="w-50 h-50">
                                <h4 class="text-center d-flex align-items-center justify-content-center px-2">Welcome!</h4>
                            </div>
                            <div class="form-group d-flex align-items-center justify-content-center pt-2">
                                <input type="text" class="form-control w-100 shadow" name="Email" placeholder="Email">
                            </div>
                            <div class="form-group d-flex align-items-center justify-content-center pt-2">
                                <input type="password" class="form-control w-100 shadow" name="Password" placeholder="Password">
                            </div>
                            <div class="form-group d-flex align-items-center justify-content-center pt-3">
                                <input type="submit" value="LOGIN" class="form-control w-50 btn btn-outline-warning text-dark">
                            </div>
                                <p class="text-center mt-2" style="font-size: x-small;">Forgot Password?<a href="#">Click Here</a></p>
                                <hr>
                        </form> 
                        <a href="/signup"><button style="background-color: #F2709C; width: 200px; height: 35px; text-decoration: none; border: none;" class="text-white">Register</button></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 log-in">
                <div class="card shadow">
                    <div class="card-body p-0 side-img">
                        <img src="../img/Login-img.jpg" alt="" class="w-100 h-100">  
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="js/AdminMain.js"></script>
</html>