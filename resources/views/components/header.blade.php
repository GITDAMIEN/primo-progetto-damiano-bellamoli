
    <!-- Header -->
    <header id="headerContainerFluid" class="fixed-top container-fluid back-main">
        <div id="headerRow" class="row align-items-center">
            <div class="col-6 col-md-3">
                <a id="logoText" class="py-0 navbar-brand ms-4 customBlack ubuntuFont" href="{{route('welcome')}}"><span id="pSpan" class="secColor">P</span>resto<span id="dotSpan" class="secColor ubuntuFont">.</span>it</a>
            </div>
            <div class="d-none d-md-flex col-md-6">
                <form class="d-flex w-100">
                    <input id="searchBar" class="form-control me-0" type="search" placeholder="Search here" aria-label="Search">
                    <button id="searchBtn" class="btn ms-0 back-sec" type="submit"><span>Search</span></button>
                </form>
            </div>
            <div class="col-6 col-md-4 d-flex justify-content-evenly align-items-center d-md-none px-0">
                <div class="cartAndWishlist mx-1">
                    <div class="col-12 text-center">
                        <i class="fa-regular fa-heart" data-toggle="tooltip" data-placement="bottom" title="Your Wishlist"></i>
                        <p class="cartAndWishlistP">Your Wishlist</p>
                    </div>
                </div>
                <div class="cartAndWishlist mx-1">
                    <div class="col-12 text-center">
                        <i class="fa-solid fa-cart-shopping" data-toggle="tooltip" data-placement="bottom" title="Your Cart"></i>
                        <p class="cartAndWishlistP">Your Cart</p>
                    </div>
                </div>
                <div class="me-3">
                    <button id="navbarExpander" class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span><i id="arrowNavbar" class="fa-solid fa-circle-arrow-down noRotate"></i></span>
                    </button>
                </div>
            </div>
            <div class="col-12 col-md-3 d-flex justify-content-evenly d-none d-md-flex">
                <div class="cartAndWishlist mx-1">
                    <div class="col-12 text-center">
                        <i class="fa-regular fa-heart"></i>
                        <p class="cartAndWishlistP">Your Wishlist</p>
                    </div>
                </div>
                <div class="cartAndWishlist mx-1">
                    <div class="col-12 text-center">
                        <i class="fa-solid fa-cart-shopping"></i>
                        <p class="cartAndWishlistP">Your Cart</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-md-none col-md-4 d-flex align-items-center justify-content-center pb-2">
            <form class="d-flex mx-3 w-100">
                <input id="searchBar2" class="form-control me-0" type="search" placeholder="Search here" aria-label="Search">
                <button id="searchBtn" class="btn ms-0 back-sec" type="submit">Search</button>
            </form>
        </div>
    </header>