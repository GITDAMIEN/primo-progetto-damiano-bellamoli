    
    <!-- Navbar -->
    <nav id="navbarContainerFluid" class="navbar navbar-expand-md navbar-light container-fluid back-main pb-3 pt-0">
        <div class="container">
            <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                <ul class="navbar-nav mb-2 mb-md-0">
                    <li class="nav-item">
                        <a class="nav-link {{Route::currentRouteName()=='welcome' ? ' active' : ''}}" aria-current="page" href="{{route('welcome')}}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{Route::currentRouteName()=='allAds' ? ' active' : ''}}" href="{{route('allAds')}}">All Ads</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Categories</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Laptops</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Smartphones</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Cameras</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Accessories</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>