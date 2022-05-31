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
    
    <!-- Swiper -->
    <link
    rel="stylesheet"
    href="https://unpkg.com/swiper@8/swiper-bundle.min.css"
    />
    
    <!-- My CSS -->
    <link rel="stylesheet" href="/css/presto.css">
    <title>Presto.it | Home</title>
    <link rel="shortcut icon" href="/media/pLogoNewNew.png" type="image/x-icon">
</head>
<body>
    
    <!-- Sito template -->
    <!-- https://technext.github.io/electro/ -->
    
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
    
    <!-- Navbar -->
    <nav id="navbarContainerFluid" class="navbar navbar-expand-md navbar-light container-fluid back-main pb-3 pt-0">
        <div class="container">
            <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                <ul class="navbar-nav mb-2 mb-md-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{route('welcome')}}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('allAds')}}">All Ads</a>
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
    <div id="postYourAdBanner" class="d-none align-items-center">
        <button id="postYourAdWords" class="back-sec px-3">
            Post your ad on Presto.it
        </button>
        <button id="postYourAdBtn">
            <img id="postYourAdIcon" src="/media/circle-plus-solid.svg" alt="Plus icon">
        </button>
        <button id="closePostYourAdBannerBtn">
            <i class="fa-solid fa-xmark"></i>
        </button>
    </div>
    
    <!-- Presentation section (experiments) -->
    <!--     
    <section id="presentationSection" class="container-fluid m-0 p-0">
                
        <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
            <source src="/media/swing.mp4" type="video/mp4">
        </video>
        
        <div class="container h-100">
            <div class="d-flex h-100 text-center align-items-center">
                <div class="w-100 text-white">
                    <h1 class="display-3">Video Header</h1>
                    <p class="lead mb-0">Using HTML5 Video and Bootstrap</p>
                </div>
            </div>
        </div>
    </section> -->

    <!-- Categories section -->
    <section id="categoriesSectionContainerFluid" class="container-fluid pb-3">
        <div class="container mb-5 pt-5">
            <div class="row justify-content-center">
                <div class="col-12 mt-4 mb-5">
                    <h2 class="customBlack ubuntuFont fw-bold text-center"><span id="categoriesText">CATEGORIES</span></h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-12 col-sm-6 col-lg-3 mx-0 px-0 d-flex justify-content-center">
                    <div class="categoriesCards categoriesCardsBox">
                        <div class="categoriesCard1">
                            <div class="bgCategories">
                            </div>
                            <div class="p-3 textCategories">
                                <h3 class="customBlack">Laptop collection</h3>
                                <button class="shopBtn customBlack">SHOP NOW <i class="fa-solid fa-circle-arrow-right"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-3 mx-0 px-0 d-flex justify-content-center">
                    <div class="categoriesCards categoriesCardsBox">
                        <div class="categoriesCard2">
                            <div class="bgCategories">
                            </div>
                            <div class="p-3 textCategories">
                                <h3 class="customBlack">Accessories collection</h3>
                                <button class="shopBtn customBlack">SHOP NOW <i class="fa-solid fa-circle-arrow-right"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-3 mx-0 px-0 d-flex justify-content-center">
                    <div class="categoriesCards categoriesCardsBox">
                        <div class="categoriesCard3">
                            <div class="bgCategories">
                            </div>
                            <div class="p-3 textCategories">
                                <h3 class="customBlack">Cameras collection</h3>
                                <button class="shopBtn customBlack">SHOP NOW <i class="fa-solid fa-circle-arrow-right"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-3 mx-0 px-0 d-flex justify-content-center">
                    <div class="categoriesCards categoriesCardsBox">
                        <div class="categoriesCard4">
                            <div class="bgCategories">
                            </div>
                            <div class="p-3 textCategories">
                                <h3 class="customBlack">Smartphones collection</h3>
                                <button class="shopBtn customBlack">SHOP NOW <i class="fa-solid fa-circle-arrow-right"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- New ads -->
    <section id="newAdsSectionContainerFluid" class="container-fluid back-main text-center py-3">
        <div class="container-fluid container-lg">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 mb-4 mt-5">
                        <h2 class="customBlack ubuntuFont fw-bold"><span id="newAdsText">NEW ADS</span></h2>
                    </div>
                </div>
                <!-- <div class="row mt-3 justify-content-center">
                    <div class="col-3 card d-flex align-items-center productCard m-3" style="width: 18rem;">
                        <img class="card-img-top" src="https://technext.github.io/electro/img/shop01.png" alt="Immagine smartphone">
                        <div class="card-body py-1">
                            <p class="card-title productCategory text-center mt-3">CATEGORY</p>
                            <a href="#"><p class="card-text productName text-center">PRODUCT NAME</p></a>
                            <p class="text-center secColor fw-bold fs-5 mt-2 mb-0">150 $</p>
                        </div>
                        <div class="row mb-2 py-2 w-100 justify-content-around">
                            <div class="col-3 p-0 d-flex justify-content-center align-items-center">
                                <button id="heartBtn" class="productBtns">
                                    <i class="fa-regular fa-heart"></i>
                                </button>
                            </div>
                            <div class="col-3 p-0 d-flex justify-content-center align-items-center">
                                <button id="cartBtn" class="productBtns">
                                    <i class="fa-solid fa-cart-shopping"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div> -->
                <div id="swiperRow" class="row mb-3 w-100">
                    <div class="col-12 p-0">
                        <div class="swiper px-3 pb-3">
                            <div id="newAdsWrapper" class="swiper-wrapper">
                            </div>
                            <div class="swiper-pagination"></div>
                            <div class="swiper-button-prev d-none d-lg-flex"></div>
                            <div class="swiper-button-next d-none d-lg-flex"></div>
                        </div>
                    </div>
                </div>
            </div>       
        </div>
    </section>

    <!-- Work with us -->

    <section id="workWithUsContainerFluid" class="container-fluid d-flex justify-content-center px-0">
        <div class="container my-5 mx-md-0 px-md-0">
            <div id="contactUsRow" class="row mx-4 mx-md-0">
                <div id="contactUsLeftPart" class="col-12 col-md-5 customBlack ubuntuFont mx-5 mx-md-3 mt-md-4 mt-lg-5">
                    <div id="contactUsWords">
                        <p id="wannaWorkWithUs" class="">Wanna work with us?</p>
                        <h5 class="bounce_button fw-bold">JOIN OUR TEAM<i class="fa-solid fa-circle-arrow-down ms-2"></i></h5>
                    </div>
                    <img src="/media/contactUsOrange.svg" alt="Contact us image" class="w-100 mb-3 mb-md-0">
                </div>
                <form id="contactUsFormCard" class="card col-12 col-md-6 customBlack ubuntuFont text-center d-flex align-items-center mx-3 ms-md-0 me-md-4 needs-validation" action="" method="post" novalidate>
                    <h5 id="contactUsH5"><i id="formArrows" class="fa-solid fa-circle-arrow-right me-3 secColor"></i>Fill the application form<i id="formArrows" class="fa-solid fa-circle-arrow-left ms-3 secColor"></i></h5>
                    <div class="form-floating mb-2">
                        <input type="text" class="form-control" id="floatingPassword" placeholder="Password" required>
                        <label for="floatingPassword">Full name</label>
                        <small class="invalid-feedback ps-3">This field is required</small>
                    </div>
                    <div class="form-floating mb-2">
                        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" required>
                        <label for="floatingInput">Email address</label>
                        <small class="invalid-feedback ps-3">Please enter a valid email address</small>
                    </div>
                    <div class="form-floating">
                        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea" required></textarea>
                        <label for="floatingTextarea">Message</label>
                        <small class="invalid-feedback ps-3">This field is required</small>
                    </div>
                    <div class="text-center">
                        <button id="uploadCVBtn">Upload your CV</button>
                        <button type="submit" id="sendApplicationBtn" class="btn btn-main">Send application</button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <!-- Weekly offers countdown -->

    <!-- To be made responsive -->
    <aside class="container-fluid my-5">
        <div class="container d-flex justify-content-center">
            <div id="countdownRow" class="row justify-content-center">
                <div class="col-2 text-center countdownElements">
                    <div id="countdownDays" class="countdownNumbers">02</div>
                    <div>days</div>
                </div>
                <span class="text-center">:</span>
                <div class="col-2 text-center countdownElements">
                    <div id="countdownHours" class="countdownNumbers">03</div>
                    <div>hours</div>
                </div>
                <span class="text-center">:</span>
                <div class="col-2 text-center countdownElements">
                    <div id="countdownMinutes" class="countdownNumbers">20</div>
                    <div>minutes</div>
                </div>
                <span class="text-center">:</span>
                <div class="col-2 text-center countdownElements">
                    <div id="countdownSeconds" class="countdownNumbers">20</div>
                    <div>seconds</div>
                </div>
            </div>
        </div>
    </aside>

    <!-- Newsletter -->
    <section class="container-fluid">
        <hr id="newsletterHr" class="w-100 secColor my-0">
        <div class="container">
            <div class="row py-5">
                <div id="newsletterDiv" class="col-12 text-center my-4">
                    <h5 id="newsletterH5" class="customBlack mb-4">Sign up for our <span id="newsletterSpan">NEWSLETTER</span></h5>
                    <div id="inputEmailDiv" class="d-flex justify-content-center">
                        <input id="newsletterInput" type="email" placeholder="  Enter your email">
                        <button id="newsletterBtn"><i class="fa-regular fa-envelope pe-2"></i>Subscribe</button>
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
                        <a id="footerLogoText" class="py-0 mt-3 customBlack ubuntuFont" href="{{route('welcome')}}"><span id="footerPSpan" class="secColor">P</span>resto<span id="footerDotSpan" class="secColor ubuntuFont">.</span>it</a>
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
                            <a id="footerCategoriesListAnchor" href="{{route('allAds')}}">All Ads</a>
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
    <div id="easterEggToastMessage" class="toast align-items-center text-white back-sec border-0" role="alert" aria-live="assertive" aria-atomic="true">
    </div>
    
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

    
    <!-- Swiper Js -->
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    
     
    <!-- My Js -->
    <script src="/js/presto.js"></script>

</body>
</html>