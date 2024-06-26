{{-- sidebar --}}
<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block sidebar">
    <div class="position-sticky">
        <div class="d-flex justify-content-center m-2">
            <img src="/image/{{Session::get('UserImage')}}" class="img-fluid object-fit-cover w-50 h-50">
        </div>
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link active text-center mt-3" aria-current="page" href="/">
                Homepage
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/userprofile/{{Session::get('UserID')}}">
                Profile
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/userorders/{{Session::get('UserID')}}">
                Orders
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/logout">
                    Logout
                </a>
            </li>
        </ul>
    </div>
    <img src="../img/logo.png" alt="" class="w-100">
</nav>
{{-- sidebar --}}
