<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Font Google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
    
    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <!-- Swiper -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>
    
    <!-- CSS (mine + bootstrap) -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Presto.it | {{$title ?? ''}}</title>
    <link rel="shortcut icon" href="/media/pLogoNewNew.png" type="image/x-icon">
</head>
<body>

    <x-header/>
    <x-navbar/>

    <div class="min-vh-100">
        {{$slot}}
    </div>


    <!-- Newsletter -->
    <x-newsletter/>

    <!-- Footer  -->
    <x-footer/>

    <!-- Easter Egg Toast Message -->
    <div id="easterEggToastMessage" class="toast align-items-center text-white back-sec border-0" role="alert" aria-live="assertive" aria-atomic="true">
    </div>

    <!-- Swiper Js -->
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    
    <!-- My JS + Bootstrap's -->

        <!-- Nel building con npm run dev, mi crea problemi se faccio il join dei miei 2 js -->
        @if(Route::currentRouteName()=='welcome')
            <script src="/js/presto.js"></script>
        @elseif(Route::currentRouteName()=='allAds')
            <script src="/js/ads.js"></script>
        @endif        


</body>
</html>