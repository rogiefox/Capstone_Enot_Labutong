{{-- sidebar --}}
<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block sidebar">
    <div class="position-sticky">
        <div class="d-flex justify-content-center m-2">
            <img src="/image/{{Session::get('UserImage')}}" class="img-fluid object-fit-cover w-50 h-50">
        </div>
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link text-dark text-center active" aria-current="page" href="/welcome">
                    Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark admin" href="/adminprofile/{{Session::get('UserID')}}">
                    <i class="fa-solid fa-user-tie"></i> Administrator
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark" href="/users">
                    <i class="fa-regular fa-user"></i> Users
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark" href="/products">
                    <i class="fa-solid fa-box-open"></i> Products
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark" href="/orders">
                    <i class="fa-solid fa-cart-shopping"></i> Orders
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark" href="/admincontact">
                    <i class="fa-solid fa-message"></i> Messages
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark" href="/logout">
                    <i class="fa-solid fa-right-from-bracket"></i> Logout
                </a>
            </li>
        </ul>
    </div>
    <img src="../img/logo.png" alt="" class="w-100">
</nav>
{{-- sidebar --}}
