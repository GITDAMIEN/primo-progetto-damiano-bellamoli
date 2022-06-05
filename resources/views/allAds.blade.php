<x-layout>

    <x-slot name="title">All ads</x-slot>

    <!-- Explore ads title -->
    <div class="container-fluid text-center my-5">
        <h1 class="ubuntuFont customBlack"><span id="exploreAllAdsSpan">Explore all ads</span></h1>
    </div>
    
    <!-- Search filters -->
    <section class="container-fluid px-4">
        <div id="searchFiltersContainer" class="container back-sec">
            <div class="row align-items-center justify-content-center">
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="form-floating my-2 mx-auto">
                        <input type="text" class="form-control" id="searchByTextInput" placeholder="Search by name">
                        <label for="searchByTextInput" class="">Search by name</label>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="form-floating my-2 mx-auto">
                        <select class="form-select" id="searchByCategoryInput" aria-label="Floating label select example">
                          <option selected value="all">All categories</option>
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
                    <div id="sortIconDiv">
                        <i class="mt-1 fa-solid fa-arrow-down-short-wide mx-2"></i>
                    </div>
                    <select id="sortSelect" class="form-select" aria-label="Default select example">
                        <option class="sortOptions" value="newToOld" selected>New to old</option>
                        <option class="sortOptions" value="oldToNew">Old to new</option>
                        <option class="sortOptions" value="aToZ">Name A-Z</option>
                        <option class="sortOptions" value="zToA">Name Z-A</option>
                        <option class="sortOptions" value="fromCheaper">Price low to high</option>
                        <option class="sortOptions" value="toCheaper">Price high to low</option>
                    </select>
                </div>
            </div>
        </div>
    </section>

    <!-- Ads section -->
    <section class="container-fluid mt-2 mb-5">
        <div class="container">
            <div id="adsWrapper" class="row justify-content-center">
            </div>
        </div>
    </section>


</x-layout>