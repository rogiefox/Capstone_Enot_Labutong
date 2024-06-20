<nav class="navbar navbar-expand-lg p-0">
    <div class="container-fluid">
        <a href="/"><img src="../img/logo.png" alt="" style="width: 250px; height: 175px;"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link text-dark fw-bolder" aria-current="page" href="/" style="font-size: 20px;">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-dark fw-bolder" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="font-size: 20px;">
                      Occasions
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item text-dark fw-bolder" href="/Ocassion/UserWedding">Wedding Anniversary</a></li>
                      <li><a class="dropdown-item text-dark fw-bolder" href="/Ocassion/UserValentine">Valentine's Day</a></li>
                      <li><a class="dropdown-item text-dark fw-bolder" href="/Ocassion/UserBirthday">Happy Birthday</a></li>
                      <li><a class="dropdown-item text-dark fw-bolder" href="/Ocassion/UserMothers">Mother's Day</a></li>
                      <li><a class="dropdown-item text-dark fw-bolder" href="/Ocassion/UserFathers">Father's Day</a></li>
                      <li><a class="dropdown-item text-dark fw-bolder" href="/Ocassion/UserBaby">Get Well & Baby</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-dark fw-bolder" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="font-size: 20px;">
                      Flowers
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item text-dark fw-bolder" href="/Flower/UserPeonies">Peonies</a></li>
                      <li><a class="dropdown-item text-dark fw-bolder" href="/Flower/UserCarnation">Carnation Bouquet</a></li>
                      <li><a class="dropdown-item text-dark fw-bolder" href="/Flower/UserGerberas">Gerberas Flowers</a></li>
                      <li><a class="dropdown-item text-dark fw-bolder" href="/Flower/UserLilies">Lilies Bouquet</a></li>
                      <li><a class="dropdown-item text-dark fw-bolder" href="/Flower/UserRose">Rose Bouquet</a></li>
                    </ul>
                </li>  
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-dark fw-bolder" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="font-size: 20px;">
                        Information
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item text-dark fw-bolder" href="/UserAbout">About Us</a></li>
                      <li><a class="dropdown-item text-dark fw-bolder" href="/UserContact">Contact Us</a></li>
                    </ul>
                </li>
            </ul>
            <div class="me-5">
              <button class="border-0 bg-transparent">    
                <a href="user_login.php" class="text-dark fw-bolder" style="font-size: 20PX;"><i class="fa-solid fa-user"></i></a>
              </button>
              <button class="border-0 bg-transparent">  
                <a href="cartpage.php" class="text-dark fw-bolder" style="font-size: 20PX;"><i class="fa-solid fa-cart-shopping"></i></a>
              </button>
              @if (Session::get('UserID'))
              <a href="/userlogout" class="text-dark" style="text-decoration: none;">Logout</a>
              @else
                <a href="/signup" class="text-dark" style="text-decoration: none;">Sign Up</a>
                <a href="/login" class="text-dark" style="text-decoration: none;">Log in</a>
              @endif
            </div>    
        </div>
    </div>
</nav>
  
  
  
  
  
  
  
  
  
 