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
            <a class="nav-link active" aria-current="page" href="/">
            Home
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
</nav>
{{-- sidebar --}}
