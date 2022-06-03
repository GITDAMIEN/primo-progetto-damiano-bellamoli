<x-layout>
    
    <x-slot name="title">Homepage</x-slot>
    <!-- Sito template -->
    <!-- https://technext.github.io/electro/ -->
    
    
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

    
    <!-- Weekly offers countdown -->

    <aside id="weeklyOffersContainerFluid" class="container-fluid py-5 back-main">
        <div class="container weeklyOffersContainers pt-4 d-flex justify-content-center text-center">
            <h3 id="weeklyOffersH3" class="mb-0 ubuntuFont customBlack">!! WEEKLY OFFERS COUNTDOWN !!</h3>
        </div>
        <div class="container weeklyOffersContainers d-flex justify-content-center">
            <h4 id="timeLeftH4" class="ubuntuFont customBlack text-center">Time left</h4>
        </div>
        <div class="container weeklyOffersContainers d-flex justify-content-center">
            <div id="countdownRow" class="row justify-content-center">
                <div class="col-5 col-md-2 text-center countdownElements">
                    <div id="countdownDays" class="countdownNumbers">02</div>
                    <div>days</div>
                </div>
                <span id="countdownSideDots" class="text-center">:</span>
                <div class="col-5 col-md-2 text-center countdownElements">
                    <div id="countdownHours" class="countdownNumbers">03</div>
                    <div>hours</div>
                </div>
                <span id="countdownMiddleDots" class="text-center">:</span>
                <div class="col-5 col-md-2 text-center countdownElements">
                    <div id="countdownMinutes" class="countdownNumbers">20</div>
                    <div>minutes</div>
                </div>
                <span id="countdownSideDots" class="text-center">:</span>
                <div class="col-5 col-md-2 text-center countdownElements">
                    <div id="countdownSeconds" class="countdownNumbers">20</div>
                    <div>seconds</div>
                </div>
            </div>
        </div>
    </aside>

    
    <!-- New ads -->
    <section id="newAdsSectionContainerFluid" class="container-fluid text-center pb-3 pt-5">
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


</x-layout>