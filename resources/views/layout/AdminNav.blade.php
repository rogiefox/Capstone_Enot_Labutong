{{-- sidebar --}}
<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block sidebar">
    <div class="position-sticky">
        <ul class="nav flex-column">
            <li class="nav-item">
                <div class="d-flex justify-content-center m-2">
                    <img src="/image/{{Session::get('UserImage')}}" class="img-fluid">
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark text-center active" aria-current="page" href="/welcome">
                    Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark admin" href="/adminprofile/{{Session::get('UserID')}}">
                    Administrator
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark" href="/users">
                    Users
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark" href="/products">
                    Products
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark" href="/orders">
                    Orders
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark" href="/admincontact">
                    Messages
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark" href="/logout">
                    Logout
                </a>
            </li>
        </ul>
    </div>
    <img src="../img/logo.png" alt="" class="w-100">
</nav>
{{-- sidebar --}}
