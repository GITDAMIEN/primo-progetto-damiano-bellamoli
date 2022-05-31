<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <!-- Font Google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
    
    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <!-- My CSS -->
    <link rel="stylesheet" href="/css/presto.css">
    <title>Presto.it | All Ads</title>
    <link rel="shortcut icon" href="/media/pLogoNewNew.png" type="image/x-icon">
</head>
<body>
    
    <!-- Sito template -->
    <!-- https://technext.github.io/electro/ -->
    
    <!-- Header -->
    <header id="headerContainerFluid" class="fixed-top container-fluid back-main">
        <div id="headerRow" class="row align-items-center">
            <div class="col-6 col-md-3">
                <a id="logoText" class="py-0 navbar-brand ms-4 customBlack ubuntuFont" href="/"><span id="pSpan" class="secColor">P</span>resto<span id="dotSpan" class="secColor ubuntuFont">.</span>it</a>
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
    
    <!-- Navbar -->
    <nav id="navbarContainerFluid" class="navbar navbar-expand-md navbar-light container-fluid back-main pb-3 pt-0">
        <div class="container">
            <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                <ul class="navbar-nav mb-2 mb-md-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="/ads">All Ads</a>
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

    <!-- Post your ad -->
    <!-- <div id="postYourAdBanner" class="d-none align-items-center">
        <button id="postYourAdWords" class="back-sec px-3">
            Post your ad on Presto.it
        </button>
        <button id="postYourAdBtn">
            <img id="postYourAdIcon" src="/media/circle-plus-solid.svg" alt="Plus icon">
        </button>
        <button id="closePostYourAdBannerBtn">
            <i class="fa-solid fa-xmark"></i>
        </button>
    </div> -->


    <!-- Explore ads header -->
    <header class="container-fluid text-center my-5">
        <h1 class="ubuntuFont customBlack"><span id="exploreAllAdsSpan">Explore all ads</span></h1>
    </header>
    
    <!-- Search filters -->
    <section class="container-fluid px-4">
        <div id="searchFiltersContainer" class="container back-sec">
            <div class="row align-items-center justify-content-center">
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="form-floating my-2 mx-auto">
                        <input type="text" class="form-control" id="searchByNameInput" placeholder="Search by name">
                        <label for="searchByNameInput" class="">Search by name</label>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="form-floating my-2 mx-auto">
                        <select class="form-select" id="searchByCategoryInput" aria-label="Floating label select example">
                          <option selected>All categories</option>
                          <option value="1">Laptops</option>
                          <option value="2">Smartphones</option>
                          <option value="3">Cameras</option>
                          <option value="3">Accessories</option>
                        </select>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 row justify-content-center">
                    <div id="priceSearchRow" class="row mx-auto">
                        <div id="minPriceInputDiv" class="form-floating my-2 pe-1 ps-0 w-50">
                            <input type="number" class="form-control" id="minInput" placeholder="Min price">
                            <label id="priceLabels" for="minInput">Min price</label>
                        </div>
                        <div id="maxPriceInputDiv" class="form-floating my-2 ps-1 pe-0 w-50">
                            <input type="number" class="form-control" id="maxInput" placeholder="Max price">
                            <label id="priceLabels" for="maxInput">Max price</label>
                        </div>
                    </div>
                </div>
                <div id="searchFilterBtnCol" class="col-12 col-sm-6 col-md-2 d-flex justify-content-center align-items-center">
                    <button id="searchFilterBtn" class="col-6 col-md-12 mx-1 px-1 ubuntuFont customBlack">Search</button>
                </div>
            </div>
        </div>
    </section>

    <!-- Sort filters -->
    <section class="container-fluid">
        <div id="sortFiltersContainer" class="container">
            <div class="row justify-content-between">
                <div id="sortDisplayDiv" class="col-6 col-lg-4 d-flex align-items-center">
                    <p class="my-auto mx-1">Display:</p>
                    <i class="mx-1 mt-1 fa-solid fa-table-cells-large"></i>
                    <i class="mx-1 mt-1 fa-solid fa-table-list"></i>
                </div>
                <div id="sortFiltersDiv" class="col-6 col-lg-3 d-flex align-items-center">
                    <ul id="ulSortFilters" class="d-flex">
                        <li class="px-1">Filter:</li>
                        <li class="px-1 selectedFilter">All</li>
                        <li class="px-1">Searching</li>
                        <li class="px-1">Selling</li>
                    </ul>
                </div>
                <div id="sortByOrderDiv" class="col-12 col-lg-5 d-flex align-items-center px-2 pt-lg-0">
                    <p class="my-auto">Sort:</p>
                    <i class="mt-1 fa-solid fa-arrow-down-short-wide mx-2"></i>
                    <select id="sortSelect" class="form-select" aria-label="Default select example">
                        <option class="sortOptions" selected>New to old</option>
                        <option class="sortOptions" value="3">Old to new</option>
                        <option class="sortOptions" value="1">A-Z</option>
                        <option class="sortOptions" value="2">Z-A</option>
                    </select>
                </div>
            </div>
        </div>
    </section>

    <!-- Ads section -->
    <section class="container-fluid">
        <div class="container">
            <div id="adsWrapper" class="row justify-content-center">
            </div>
        </div>
    </section>


    <!-- Newsletter -->
    <section id="newsletterContainerFluid" class="container-fluid">
        <hr id="newsletterHr" class="mt-0 secColor w-100">
        <div class="container">
            <div class="row text-center pt-3 justify-content-center">
                <div id="newsletterDiv" class="col-12">
                    <h5 id="newsletterH5" class="customBlack mb-4">Sign up for our <span id="newsletterSpan">NEWSLETTER</span></h5>
                    <div id="inputEmailDiv" class="d-flex justify-content-center mb-5">
                        <input id="newsletterInput" type="email" placeholder="  Enter your email">
                        <button id="newsletterBtn" ><i class="fa-regular fa-envelope pe-2"></i>Subscribe</button>
                    </div>
                    <i id="bgEnvelope" class="fa-regular fa-envelope secColor"></i>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer  -->
    <footer id="footerContainer" class="container-fluid back-main">
        <div class="container">
            <div class="row py-4">
                <div class="col-6 col-md-4">
                    <div class="row ps-3">
                        <a id="footerLogoText" class="py-0 mt-3 customBlack ubuntuFont" href="/"><span id="footerPSpan" class="secColor">P</span>resto<span id="footerDotSpan" class="secColor ubuntuFont">.</span>it</a>
                    </div>
                    <div id="mottoPDiv" class="row">
                        <p class="ubuntuFont customBlack fw-bold ps-3">The best place to sell and search</p>
                    </div>
                    <div class="row ps-3 mt-2">
                        <div class="col-1">
                            <i class="contactsIcons secColor fa-solid fa-location-dot"></i>
                        </div>
                        <a href="https://goo.gl/maps/HFwYjZ7umQAwZfKz5" target="_blank" class="col-10">
                            <p class="mb-2 customBlack ubuntuFont">37100 Verona, Italy</p>
                        </a>
                    </div>
                    <div class="row ps-3">
                        <div class="col-1">
                            <i class="contactsIcons secColor fa-solid fa-envelope"></i>
                        </div>
                        <a href="mailto:info@presto.it" class="col-10">
                            <p class="mb-2 customBlack ubuntuFont">info@presto.it</p>
                        </a>
                    </div>
                    <div class="row ps-3">
                        <div class="col-1">
                            <i class="contactsIcons secColor fa-solid fa-phone"></i>
                        </div>
                        <a href="tel: +39 045123456" class="col-10">    
                            <p class="mb-2 customBlack ubuntuFont">+39 045123456</p>
                        </a>
                    </div>
                </div>
                <div class="col-6 col-md-3 mt-3">
                    <ul id="footerCategoriesList" class="secColor ubuntuFont">
                        <h6 id="footerCategoriesTitle" class="fw-bold fs-5 pt-4 pb-2">CATEGORIES</h6>
                        <li id="footerCategoriesListItem" class="d-flex align-items-center py-1">
                            <a id="footerCategoriesListAnchor" href="/ads">All Ads</a>
                            <i id="footerCategoriesListIcon" class="fa-solid fa-circle-arrow-right ms-2 d-none secColor"></i>
                        </li>
                        <li id="footerCategoriesListItem" class="d-flex align-items-center py-1">
                            <a id="footerCategoriesListAnchor" href="#">Laptops</a>
                            <i id="footerCategoriesListIcon" class="fa-solid fa-circle-arrow-right ms-2 d-none secColor"></i>
                        </li>
                        <li id="footerCategoriesListItem" class="d-flex align-items-center py-1">
                            <a id="footerCategoriesListAnchor" href="#">Smartphones</a>
                            <i id="footerCategoriesListIcon" class="fa-solid fa-circle-arrow-right ms-2 d-none secColor"></i>
                        </li>
                        <li id="footerCategoriesListItem" class="d-flex align-items-center py-1">
                            <a id="footerCategoriesListAnchor" href="#">Cameras</a>
                            <i id="footerCategoriesListIcon" class="fa-solid fa-circle-arrow-right ms-2 d-none secColor"></i>
                        </li>
                        <li id="footerCategoriesListItem" class="d-flex align-items-center py-1">
                            <a id="footerCategoriesListAnchor" href="#">Accessories</a>
                            <i id="footerCategoriesListIcon" class="fa-solid fa-circle-arrow-right ms-2 d-none secColor"></i>
                        </li>
                    </ul>
                </div>
                <div class="col-6 col-md-3">
                    <ul id="footerInfoList" class="secColor ubuntuFont mt-3">
                        <h6 id="footerInfoTitle" class="fw-bold fs-5 pt-4 pb-2">INFO</h6>
                        <li id="footerInfoListItem" class="d-flex align-items-center py-1">
                            <a id="footerInfoListAnchor" href="#">About us</a>
                            <i id="footerInfoListIcon" class="fa-solid fa-circle-arrow-right ms-2 d-none secColor"></i>
                        </li>
                        <li id="footerInfoListItem" class="d-flex align-items-center py-1">
                            <a id="footerInfoListAnchor" href="#">Contact us</a>
                            <i id="footerInfoListIcon" class="fa-solid fa-circle-arrow-right ms-2 d-none secColor"></i>
                        </li>
                        <li id="footerInfoListItem" class="d-flex align-items-center py-1">
                            <a id="footerInfoListAnchor" href="#">Privacy policy</a>
                            <i id="footerInfoListIcon" class="fa-solid fa-circle-arrow-right ms-2 d-none secColor"></i>
                        </li>
                        <li id="footerInfoListItem" class="d-flex align-items-center py-1">
                            <a id="footerInfoListAnchor" href="#">Orders and Returns</a>
                            <i id="footerInfoListIcon" class="fa-solid fa-circle-arrow-right ms-2 d-none secColor"></i>
                        </li>
                        <li id="footerInfoListItem" class="d-flex align-items-center py-1">
                            <a id="footerInfoListAnchor" href="#">Terms & Conditions</a>
                            <i id="footerInfoListIcon" class="fa-solid fa-circle-arrow-right ms-2 d-none secColor"></i>
                        </li>
                    </ul>
                </div>
                <div class="col-6 col-md-2 pe-md-0">
                    <div id="footerAppsSection" class="row mx-0 px-md-0">
                        <ul id="footerAppsLinks" class="secColor ubuntuFont px-md-0 mt-3 ps-0">
                            <h6 id="footerAppsLinksTitle" class="fw-bold fs-5 pt-4 pb-2">APPS</h6>
                            <li id="footerAppsLinksItem" class="d-flex align-items-center py-1">
                                <a id="footerAppsLinksAnchor" href="https://play.google.com/store/apps/details?id=com.jointag.agsm&hl=it&gl=US" target="_blank">Google Play
                                <i id="footerAppsLinksIcon" class="fa-brands fa-google-play ms-2"></i></a>
                            </li>
                            <li id="footerAppsLinksItem" class="d-flex align-items-center py-1">
                                <a id="footerAppsLinksAnchor" href="https://apps.apple.com/it/app/verona-smartapp/id1178091059?l=en" target="_blank">App Store
                                <i id="footerAppsLinksIcon" class="fa-brands fa-app-store ms-2"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div id="footerSocialsSection" class="row px-md-0 mt-3 mx-0">
                        <h6 id="footerSocialsTitle" class="fw-bold fs-5 pb-2 mb-0 px-0 ubuntuFont secColor">SOCIAL</h6>
                        <div class="col-1 ps-2 pe-3 pe-md-2 pe-lg-3 d-flex justify-content-center">
                            <a href="https://www.facebook.com/" target="_blank" class="socialsAnchors customBlack">
                                <i class="fa-brands fa-facebook ps-0"></i>
                            </a>
                        </div>
                        <div class="col-1 pe-3 pe-md-2 pe-lg-3 d-flex justify-content-center">
                            <a href="https://www.instagram.com/" target="_blank" class="socialsAnchors customBlack">
                                <i class="fa-brands fa-instagram"></i>
                            </a>
                        </div>
                        <div class="col-1 pe-3 pe-md-2 pe-lg-3 d-flex justify-content-center">
                            <a href="https://twitter.com/" target="_blank" class="socialsAnchors customBlack">
                                <i class="fa-brands fa-twitter"></i>
                            </a>
                        </div>
                        <div class="col-1 pe-3 pe-md-2 pe-lg-3 d-flex justify-content-center">
                            <a href="https://it.linkedin.com/" target="_blank" class="socialsAnchors customBlack">
                                <i class="fa-brands fa-linkedin"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>


    <!-- Easter Egg Toast Message -->
    <!-- <div id="easterEggToastMessage" class="toast align-items-center text-white back-sec border-0" role="alert" aria-live="assertive" aria-atomic="true">
    </div> -->
    
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
     
    <!-- My Js -->
    <script src="/js/ads.js"></script>

</body>
</html>