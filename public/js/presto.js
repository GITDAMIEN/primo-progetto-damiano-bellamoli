
//Problems to be solved / things to implement
// 1- hearts not working (fetch creates them and gets executed after the querySelectorAll)
// 2- add an initial section with a quick website description and words appearing / disappearing (set interval)
// 3- change PostYouAdBanner IntersectionObserver ? + add a nice effect
// 4- fix rotation to icons in list items (footer)
// 5- merge the searchbars if possible
// 6- set the weekly offers countdown to a certain date + make them sinc

//Query selectors
const arrowNavbar = document.querySelector('#arrowNavbar')
const navbarExpander = document.querySelector('#navbarExpander')
const navLink = document.querySelectorAll('.nav-link')
const searchBar = document.querySelector('#searchBar')
const searchBar2 = document.querySelector('#searchBar2')
const heartBtn = document.querySelectorAll('#heartBtn')
const cartBtn = document.querySelectorAll('#cartBtn')
const categoriesText = document.querySelector('#categoriesText')
const easterEggToastMessage = document.querySelector('#easterEggToastMessage')
const newAdsWrapper = document.querySelector('#newAdsWrapper')
const newAdsRow = document.querySelector('#newAdsRow')
const postYourAdBanner = document.querySelector('#postYourAdBanner')
const countdownDays = document.querySelector('#countdownDays')
const countdownHours = document.querySelector('#countdownHours')
const countdownMinutes = document.querySelector('#countdownMinutes')
const countdownSeconds = document.querySelector('#countdownSeconds')
const footerCategoriesListItems = document.querySelectorAll('#footerCategoriesListItem')
const footerCategoriesListIcons = document.querySelectorAll('#footerCategoriesListIcon')
const footerInfoListItems = document.querySelectorAll('#footerInfoListItem')
const footerInfoListIcons = document.querySelectorAll('#footerInfoListIcon')
const closePostYourAdBannerBtn = document.querySelector('#closePostYourAdBannerBtn')

// Variables
var easterEggCounter = 0;

//Intersection observer for Post Your Ad
let observer = new IntersectionObserver(
    (elements)=>{
        elements.forEach((element)=>{
            if(element.isIntersecting){
                postYourAdBanner.classList.remove('d-none')
                postYourAdBanner.classList.add('d-flex')
                postYourAdBanner.classList.add('show')
            }
        })
    }
)

observer.observe(swiperRow)

//Fetch
fetch('./annunci.json')
.then(response=>response.json())
.then(data=>{

    let newAds = [];

    data.forEach((obj,i)=>{
        if(i>=(data.length-10))
            newAds.push(obj)
    })

    // console.log(newAds);

    // newAdsWrapper.innerHTML=''        // RIATTIVARE !!(??)

    newAds.forEach(newAd=>{

        let slide = document.createElement('div')
        slide.classList.add('swiper-slide')
        slide.innerHTML=`
            <div class="card d-flex align-items-center productCard" style="width: 18rem;">
                <span class="badge typeBadge ${newAd.type == 'sell' ? 'back-colorRed' : 'back-colorGreen'}">${newAd.type == 'sell' ? 'Selling' : 'Searching'}</span>
                <span class="badge newBadge">NEW</span>
                <img class="card-img-top" src="https://technext.github.io/electro/img/shop01.png" alt="Immagine smartphone">
                <div class="card-body py-1">
                    <p class="card-title productCategory text-center mt-3">${newAd.category}</p>
                    <a href="#"><p class="card-text productName text-center">${newAd.name}</p></a>
                    <p class="text-center secColor fw-bold fs-5 mt-2 mb-0">${newAd.price} $</p>
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
        
        newAdsWrapper.appendChild(slide)
    })


})

//Swiper
const swiper = new Swiper('.swiper', {
    slidesPerView: 1,
    spaceBetween: 0,
    
    pagination: {
        el: '.swiper-pagination',
    },
    
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },

    breakpoints: {
        700: {
            slidesPerView: 2,
            // spaceBetween: 20,
        },
        900: {
            slidesPerView: 3,
            // spaceBetween: 30,
        },
        1200: {
            slidesPerView: 4,
            // spaceBetween: 50,
        },
    }
    
});

//Event listeners

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

closePostYourAdBannerBtn.addEventListener('click', ()=>{
    postYourAdBanner.classList.add('d-none')
    postYourAdBanner.classList.remove('d-block')
})

//Functions
function displayToastMessage(message){
    let toast = document.createElement('div')
    toast.classList.add('d-flex')
    toast.innerHTML=`
        <div class="toast-body">
            ${message}
        </div>
        <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close">
        </button>
      `
    easterEggToastMessage.innerHTML=''
    easterEggToastMessage.appendChild(toast);
}

//setIntervals

//fixed countdown, correctly synced
let days = 1;
let hours = 2;
let minutes = 19;
let seconds = 19;


setTimeout(()=>{

    countdownDays.innerHTML=days;
    days--;

    let daysInterval = setInterval(function(){
        
        if(days>=0){
            if(days<10){
                countdownDays.innerHTML='0'+days;
            }else{
                countdownDays.innerHTML=days;
            }
            days--;
        }else{
            countdownDays.innerHTML='00';
            clearInterval(daysInterval);
        }

    }, 86400000);

}, 4821000);


setTimeout(()=>{

    countdownHours.innerHTML=hours;
    hours--;

    let hoursInterval = setInterval(function(){
        
        if(hours>=0){
            if(hours<10){
                countdownHours.innerHTML='0'+hours;
            }else{
                countdownHours.innerHTML=hours;
            }

            if(hours>0){
                hours--;
            }else if(days>0){
                hours=23;
            }
        }else if(days>0){
            hours=23;
        }else
            clearInterval(hoursInterval);

    }, 3600000);

}, 1221000);


setTimeout(()=>{

    countdownMinutes.innerHTML=minutes;
    minutes--;

    let minutesInterval = setInterval(function(){
        
        if(minutes>=0){
            if(minutes<10){
                countdownMinutes.innerHTML='0'+minutes;
            }else{
                countdownMinutes.innerHTML=minutes;
            }

            if(minutes>0){
                minutes--;
            }else if(hours>0||days>0){
                minutes=59;
            }
        }else if(hours>0||days>0){
            minutes=59;
        }else
            clearInterval(minutesInterval);

    }, 60000);

}, 21000);

let secondsInterval = setInterval(function(){
    
    if(seconds>=0){
        if(seconds<10){
            countdownSeconds.innerHTML='0'+seconds;
        }else{
            countdownSeconds.innerHTML=seconds;
        }
        
        if(seconds>0){
            seconds--;
        }else if(minutes>0||hours>0||days>0){
            seconds=59;
        }
    }else if(minutes>0||hours>0||days>0){
        seconds=59;
    }else
        clearInterval(secondsInterval);

}, 1000);


let offerteScadute = setInterval(function(){
    if(!days&&!hours&&!minutes&&!seconds){
        setTimeout(()=>{
            countdownRow.innerHTML='<h3 class="my-4 ubuntuFont customBlack text-center">OFFERTE SCADUTE</h3>';
            clearInterval(offerteScadute);
        },1000);
    }
},1000);

//Easter Egg

categoriesText.addEventListener('click', ()=>{
    easterEggCounter++;
    console.log('toast');
    console.log(easterEggToastMessage);
    if(easterEggCounter>=10){
        displayToastMessage('Stop pushing that button! :)')
        easterEggToastMessage.classList.add('fade','show')
    }else if(easterEggCounter==5){
        displayToastMessage('Hey! You just found an easter egg! :)')
        easterEggToastMessage.classList.add('fade','show')
    }
});

//Bootstrap validation
// Example starter JavaScript for disabling form submissions if there are invalid fields
(() => {
    'use strict'
  
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    const forms = document.querySelectorAll('.needs-validation')
  
    // Loop over them and prevent submission
    Array.from(forms).forEach(form => {
      form.addEventListener('submit', event => {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }
  
        form.classList.add('was-validated')
      }, false)
    })
  })()