<nav class="main-menu d-flex navbar navbar-expand-lg p-2 py-3 p-lg-4 py-lg-4 ">
    <div class="container-fluid">
        <div class="main-logo d-lg-none">
            <a href="/">
                <img src="{{asset('/images/logo.png')}}" alt="logo" class="img-fluid" width="100px">
            </a>
        </div>
        <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header mt-3">
                <button type="button" class="btn-close shadow-none" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body justify-content-between">
                <div class="main-logo">
                    <a href="/">
                        <img src="{{asset('/images/logo.png')}}" alt="logo" class="img-fluid">
                    </a>
                </div>
                <ul class="navbar-nav menu-list list-unstyled align-items-lg-center d-flex gap-md-3 mb-0">
                    <li class="nav-item">
                        <a href="/" class="nav-link mx-2 {{ request()->is('/') ? 'active' : '' }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="/babyname/boy" class="nav-link mx-2 {{ request()->is('babyname/boy*') ? 'active' : '' }}">Boy Name</a>
                    </li>
                    <li class="nav-item">
                        <a href="/babyname/girl" class="nav-link mx-2 {{ request()->is('babyname/girl*') ? 'active' : '' }}">Girl Name</a>
                    </li>
                    <li class="nav-item">
                        <a href="/contactus" class="nav-link mx-2 {{ request()->is('contactus') ? 'active' : '' }}">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- <div class="container-fluid d-lg-none">
        <div class="d-flex  align-items-end mt-3">
            <ul class="d-flex  align-items-center list-unstyled m-0">
                <li>
                    <a href="account.html" class="me-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22px" height="22px">
                            <use href="#user-circle" />
                        </svg> </a>
                </li>
                <li>
                    <a href="wishlist.html" class="me-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22px" height="22px">
                            <use href="#heart" />
                        </svg> </a>
                    </a>
                </li>
                <li class="">
                    <a href="#" class="me-3" data-bs-toggle="offcanvas" data-bs-target="#offcanvasCart" aria-controls="offcanvasCart">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22px" height="22px">
                            <use href="#shopping-bag" />
                        </svg> </a>
                    </a>
                </li>
                <li>
                    <a href="#" class="me-3" data-bs-toggle="offcanvas" data-bs-target="#offcanvasSearch" aria-controls="offcanvasSearch">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22px" height="22px">
                            <use href="#search" />
                        </svg> </a>
                    </a>
                </li>
            </ul>
        </div>
    </div> -->
</nav>
