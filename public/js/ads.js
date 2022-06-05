
//Query selectors
const arrowNavbar = document.querySelector('#arrowNavbar')
const navbarExpander = document.querySelector('#navbarExpander')
const navLink = document.querySelectorAll('.nav-link')
const searchBar = document.querySelector('#searchBar')
const searchBar2 = document.querySelector('#searchBar2')
const heartBtn = document.querySelectorAll('#heartBtn')
const cartBtn = document.querySelectorAll('#cartBtn')
const adsWrapper = document.querySelector('#adsWrapper');
const searchByTextInput = document.querySelector('#searchByTextInput');
const searchByCategoryInput = document.querySelector('#searchByCategoryInput');
const minInput = document.querySelector('#minInput');
const maxInput = document.querySelector('#maxInput');
const searchFilterBtn = document.querySelector('#searchFilterBtn');
const sortSelect = document.querySelector('#sortSelect')
const sortIconDiv = document.querySelector('#sortIconDiv')
let productCards = document.querySelectorAll('.productCards');
const filterBtns = document.querySelectorAll('.filterBtns');
let productTypeSelected = 'all';
const footerCategoriesListItems = document.querySelectorAll('#footerCategoriesListItem')
const footerCategoriesListIcons = document.querySelectorAll('#footerCategoriesListIcon')
const footerInfoListItems = document.querySelectorAll('#footerInfoListItem')
const footerInfoListIcons = document.querySelectorAll('#footerInfoListIcon')



fetch('./annunci.json')
.then(response=>response.json())
.then(ads=>{

    // creates all the products cards
    function createProducts(){

        ads.sort((a,b)=> b.id - a.id);

        ads.forEach((ad,i)=>{

            let adElement = document.createElement('div')
            adElement.classList.add('productCards','col-12','col-sm-6','col-md-4','col-lg-3', 'my-4', 'mx-md-4', 'mx-xl-0', 'd-flex', 'justify-content-center', 'px-0')

            adElement.setAttribute('product-id', ad.id);

            if(i<10){
                adElement.innerHTML=`
                    <div class="card d-flex align-items-center productCard" style="width: 18rem;">
                        <span class="badge typeBadge ${ad.type == 'sell' ? 'back-colorRed' : 'back-colorGreen'}">${ad.type == 'sell' ? 'Selling' : 'Searching'}</span>
                        <span class="badge newBadge">NEW</span>
                        <img class="card-img-top" src="https://technext.github.io/electro/img/shop01.png" alt="Immagine smartphone">
                        <div class="card-body py-1">
                            <p class="card-title productCategory text-center mt-3">${ad.category}</p>
                            <a href="#"><p class="card-text productName text-center">${ad.name}</p></a>
                            <p class="text-center secColor fw-bold fs-5 mt-2 mb-0">${ad.price} $</p>
                        </div>
                        <div class="row mb-2 py-2 w-100 justify-content-around">
                            <div class="col-3 p-0 d-flex justify-content-center align-items-center">
                                <button id="heartBtn" class="">
                                    <i class="fa-regular fa-heart"></i>
                                </button>
                            </div>
                            <div class="col-3 p-0 d-flex justify-content-center align-items-center">
                                <button id="cartBtn" class="">
                                    <i class="fa-solid fa-cart-shopping"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                `
            }else{
                adElement.innerHTML=`
                    <div class="card d-flex align-items-center productCard" style="width: 18rem;">
                        <span class="badge typeBadge ${ad.type == 'sell' ? 'back-colorRed' : 'back-colorGreen'}">${ad.type == 'sell' ? 'Selling' : 'Searching'}</span>
                        <img class="card-img-top" src="https://technext.github.io/electro/img/shop01.png" alt="Immagine smartphone">
                        <div class="card-body py-1">
                            <p class="card-title productCategory text-center mt-3">${ad.category}</p>
                            <a href="#"><p class="card-text productName text-center">${ad.name}</p></a>
                            <p class="text-center secColor fw-bold fs-5 mt-2 mb-0">${ad.price} $</p>
                        </div>
                        <div class="row mb-2 py-2 w-100 justify-content-around">
                            <div class="col-3 p-0 d-flex justify-content-center align-items-center">
                                <button id="heartBtn" class="">
                                    <i class="fa-regular fa-heart"></i>
                                </button>
                            </div>
                            <div class="col-3 p-0 d-flex justify-content-center align-items-center">
                                <button id="cartBtn" class="">
                                    <i class="fa-solid fa-cart-shopping"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                `
            }
            
            adsWrapper.appendChild(adElement)
        })
    }

    // creates the single categories in the category filter dropdown menu
    function createCategoriesFilter(){

        // new array with only categories
        let categories = ads.map(product =>{
            return product.category;
        })

        // new Set with not-repeated categories
        let singleCategories = new Set(categories.sort((a,b)=>{
            if(a.toLowerCase() < b.toLowerCase())
                return -1
            if(a.toLowerCase() < b.toLowerCase())
                return 1
            
            //if same name
            return 0;
        }))

        // creates an option for each category
        singleCategories.forEach(category =>{

            let categoryItem = document.createElement('option')
            categoryItem.setAttribute('value', category)
            categoryItem.innerHTML = category;
            searchByCategoryInput.appendChild(categoryItem)
        })
    }

    //filters ads
    function filterProducts(){
        let selectedCategory = searchByCategoryInput.value;
        let selectedText = searchByTextInput.value;
        let selectedMinPrice = Number(minInput.value);
        let selectedMaxPrice = Number(maxInput.value)== 0 ? Infinity : Number(maxInput.value);

        let filteredByType = ads.filter(product=>{
            return product.type.toLowerCase() == productTypeSelected.toLocaleLowerCase() || productTypeSelected == 'all';
        })

        let filteredByCategory = filteredByType.filter(product=>{
            return product.category==selectedCategory || selectedCategory == 'all';
        })

        let filteredByText = filteredByCategory.filter(product=>{
            return product.name.toLowerCase().includes(selectedText.toLowerCase());
        })
        
        let filteredByPriceIds = filteredByText.filter(product=>{
            return Number(product.price) >= selectedMinPrice && Number(product.price) <= selectedMaxPrice;
        }).map(el=> {return el.id})

        showHideFilteredAds(filteredByPriceIds);
    }

    //shows/hides ads based on filters
    function showHideFilteredAds(filteredAdsIds){

        productCards = document.querySelectorAll('.productCards');

        productCards.forEach(prod=>{

            let productId = Number(prod.getAttribute('product-id'));

            if(filteredAdsIds.includes(productId)){
                prod.classList.remove('d-none')
            }else{
                prod.classList.add('d-none')
            }

        })
    }

    function sortProducts(){

        //order the array with a switch case
        switch(sortSelect.value){
            case 'newToOld' :       ads.sort((a,b)=> Number(b.id)-Number(a.id));
                                    sortIconDiv.innerHTML = `
                                    <i class="mt-1 fa-solid fa-arrow-down-short-wide mx-2"></i>
                                    `
                                    break;
            case 'oldToNew' :       ads.sort((a,b)=> Number(a.id)-Number(b.id));
                                    sortIconDiv.innerHTML = `
                                    <i class="mt-1 fa-solid fa-arrow-down-wide-short mx-2"></i>
                                    `
                                    break;
            case 'aToZ' :           ads.sort((a,b)=>{
                                        if(a.name.toLowerCase() < b.name.toLowerCase())
                                            return -1
                                        if(a.name.toLowerCase() < b.name.toLowerCase())
                                            return 1
                                        
                                        //if same name
                                        return 0;
                                    });
                                    sortIconDiv.innerHTML = `
                                    <i class="mt-1 fa-solid fa-arrow-down-a-z mx-2"></i>
                                    `
                                    break;
            case 'zToA' :           ads.sort((b,a)=>{
                                        if(a.name.toLowerCase() < b.name.toLowerCase())
                                            return -1
                                        if(a.name.toLowerCase() < b.name.toLowerCase())
                                            return 1
                                        
                                        //if same name
                                        return 0;
                                    });
                                    sortIconDiv.innerHTML = `
                                    <i class="mt-1 fa-solid fa-arrow-down-z-a mx-2"></i>
                                    `
                                    break;
            case 'fromCheaper' :    ads.sort((a,b)=> Number(a.price)-Number(b.price));
                                    sortIconDiv.innerHTML = `
                                    <i class="mt-1 fa-solid fa-arrow-down-1-9 mx-2"></i>
                                    `
                                    break;
            case 'toCheaper' :      ads.sort((a,b)=> Number(b.price)-Number(a.price));
                                    sortIconDiv.innerHTML = `
                                    <i class="mt-1 fa-solid fa-arrow-down-9-1 mx-2"></i>
                                    `
                                    break;
            default :
                                    break;
        }

        orderCards();
    }

    function orderCards(){
    
        ads.forEach((ad,i)=>{
            let productCard = document.querySelector(`[product-id="${ad.id}"]`)

            productCard.style.order = i;
        })
    }

    // search button click event
    searchFilterBtn.addEventListener('click', filterProducts);

    // sort event
    sortSelect.addEventListener('input', sortProducts)

    //filter by all, searching or selling
    filterBtns.forEach(btn=>{

        btn.addEventListener('click', ()=>{
            btn.classList.add('selectedFilter')
            filterBtns.forEach(el=>{
                if(el!=btn)
                    el.classList.remove('selectedFilter')
            })

            productTypeSelected = btn.getAttribute('adType')

            filterProducts();
        })
    })

    //functions launches
    createProducts();
    createCategoriesFilter();

})


// Event listeners


navbarExpander.addEventListener('click', ()=>{
    arrowNavbar.classList.toggle('rotateArrow')
    arrowNavbar.classList.toggle('noRotate')
})

navLink.forEach(link => {
    link.addEventListener('click',()=>{
        link.classList.add('active')
        navLink.forEach(el=>{
            if(el!=link)
                el.classList.remove('active')
        })
    })
})

searchBar.addEventListener('click', ()=>{
    console.log('ciaoooo sono la searchBar 1'); ///ovviamente modificare
})

searchBar2.addEventListener('click', ()=>{
    console.log('ciaoooo sono la searchBar 2'); ///ovviamente modificare
})

heartBtn.forEach(btn=>{
    btn.addEventListener('click', ()=>{
        btn.classList.toggle('back-sec')
        btn.children[0].classList.toggle('colorWhite')
    })
})

footerCategoriesListItems.forEach((li,i)=>{
    li.addEventListener('mouseenter', ()=>{
        footerCategoriesListIcons[i].classList.remove('d-none')
        footerCategoriesListIcons[i].classList.add('d-block')
    })
})

footerCategoriesListItems.forEach((li,i)=>{
    li.addEventListener('mouseleave', ()=>{
        footerCategoriesListIcons[i].classList.add('d-none')
        footerCategoriesListIcons[i].classList.remove('d-block')
    })
})

footerInfoListItems.forEach((li,i)=>{
    li.addEventListener('mouseenter', ()=>{
        footerInfoListIcons[i].classList.remove('d-none')
        footerInfoListIcons[i].classList.add('d-block')
    })
})

footerInfoListItems.forEach((li,i)=>{
    li.addEventListener('mouseleave', ()=>{
        footerInfoListIcons[i].classList.add('d-none')
        footerInfoListIcons[i].classList.remove('d-block')
    })
})